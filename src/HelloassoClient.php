<?php

declare(strict_types=1);

namespace Helloasso;

use Helloasso\Exception\InvalidValueException;
use Helloasso\Http\ApiCaller;
use Helloasso\Models\Event;
use Helloasso\Models\Forms\FormPublicModel;
use Helloasso\Models\Statistics\OrderDetail;
use Helloasso\Models\Statistics\PaymentDetail;
use Helloasso\Service\CheckoutIntentService;
use Helloasso\Service\DirectoryService;
use Helloasso\Service\PaymentService;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class HelloassoClient
{
    public CheckoutIntentService $checkout;
    public PaymentService $payment;
    public DirectoryService $directory;

    public function __construct(
        private readonly DenormalizerInterface $serializer,
        ApiCaller $apiCaller,
        string $organizationSlug,
    ) {
        $this->checkout = new CheckoutIntentService($apiCaller, $organizationSlug);
        $this->directory = new DirectoryService();
        $this->payment = new PaymentService($apiCaller, $organizationSlug);
    }

    /**
     * Decode an Helloasso event content (webhook).
     *
     * @throws InvalidValueException
     */
    public function decodeEvent(string $eventData): Event
    {
        try {
            /** @var array{eventType?: string, data?: array<string, mixed>, metadata?: array<string, mixed>} */
            $event = json_decode($eventData, true, 512, \JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            throw new InvalidValueException('Unable to json_decode given event.');
        }

        $eventType = $event['eventType'] ?? null;
        if (null === $eventType) {
            throw new InvalidValueException('No eventType key found in given event.');
        }

        $data = $event['data'] ?? null;
        if (null === $data) {
            throw new InvalidValueException('No data key found in given event.');
        }

        $expectedModel = match ($eventType) {
            Event::EVENT_TYPE_FORM => FormPublicModel::class,
            Event::EVENT_TYPE_ORDER => OrderDetail::class,
            Event::EVENT_TYPE_PAYMENT => PaymentDetail::class,
            default => throw new InvalidValueException('eventType "'.$eventType.'" not supported')
        };

        return (new Event())
            ->setMetadata($event['metadata'] ?? [])
            ->setData($this->serializer->denormalize($data, $expectedModel))
            ->setEventType($eventType)
        ;
    }
}
