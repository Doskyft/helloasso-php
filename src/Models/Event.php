<?php

namespace Helloasso\Models;

use Helloasso\Models\Forms\FormPublicModel;
use Helloasso\Models\Statistics\OrderDetail;
use Helloasso\Models\Statistics\PaymentDetail;

class Event implements HelloassoObject
{
    /**
     * The notification can have 3 different types : Order, Payment or Form (for campaign creation).
     */
    private string $eventType;

    private PaymentDetail|OrderDetail|FormPublicModel $data;

    private array $metadata;

    public function getEventType(): string
    {
        return $this->eventType;
    }

    public function setEventType(string $eventType): self
    {
        $this->eventType = $eventType;

        return $this;
    }

    public function getData(): HelloassoObject
    {
        return $this->data;
    }

    public function setData(HelloassoObject $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getMetadata(): array
    {
        return $this->metadata;
    }

    public function setMetadata(array $metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }
}
