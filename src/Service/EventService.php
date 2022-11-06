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

            if (empty($event['eventType'])) {
                throw new InvalidValueException('eventType is missing');
            }

            if (empty($event['data'])) {
                throw new InvalidValueException('data is missing');
            }

            $data = json_encode($event['data'], JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            throw new InvalidValueException('data is malformed');
        }

        if (Event::EVENT_TYPE_FORM === $event['eventType']) {
            $data = $this->deserialize($data, FormPublicModel::class);
        } elseif (Event::EVENT_TYPE_ORDER === $event['eventType']) {
            $data = $this->deserialize($data, OrderDetail::class);
        } elseif (Event::EVENT_TYPE_PAYMENT === $event['eventType']) {
            $data = $this->deserialize($data, PaymentDetail::class);
        } else {
            throw new InvalidValueException('eventType "'.$event['eventType'].'" not supported');
        }

        return (new Event())
            ->setMetadata($event['metadata'])
            ->setData($data)
            ->setEventType($event['eventType'])
        ;
    }
}