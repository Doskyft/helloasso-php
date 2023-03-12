<?php

declare(strict_types=1);

namespace Helloasso\Service;

use Helloasso\Exception\InvalidValueException;
use Helloasso\Models\Event;
use Helloasso\Models\Forms\FormPublicModel;
use Helloasso\Models\Statistics\OrderDetail;
use Helloasso\Models\Statistics\PaymentDetail;

class EventService extends ApiRequest
{
    /**
     * @throws InvalidValueException
     */
    public function decode(string $eventData): Event
    {
        try {
            $event = json_decode($eventData, true, 512, JSON_THROW_ON_ERROR);
            $eventType = $event['eventType'] ?? null;
            $data = $event['data'] ?? null;

            if (!$eventType) {
                throw new InvalidValueException('eventType is missing');
            }

            if (!$eventData) {
                throw new InvalidValueException('data is missing');
            }

            /** @var string $dataDecoded */
            $dataDecoded = json_encode($data, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            throw new InvalidValueException('data is malformed');
        }

        if (Event::EVENT_TYPE_FORM === $eventType) {
            /** @var FormPublicModel $dataObject */
            $dataObject = $this->deserialize($dataDecoded, FormPublicModel::class);
        } elseif (Event::EVENT_TYPE_ORDER === $eventType) {
            /** @var OrderDetail $dataObject */
            $dataObject = $this->deserialize($dataDecoded, OrderDetail::class);
        } elseif (Event::EVENT_TYPE_PAYMENT === $eventType) {
            /** @var PaymentDetail $dataObject */
            $dataObject = $this->deserialize($dataDecoded, PaymentDetail::class);
        } else {
            throw new InvalidValueException('eventType "'.$eventType.'" not supported');
        }

        return (new Event())
            ->setMetadata($event['metadata'] ?? [])
            ->setData($dataObject)
            ->setEventType($eventType)
        ;
    }
}