<?php

namespace Helloasso\Object;

class Event implements HelloassoObject
{
    /**
     * The notification can have 3 different types : Order, Payment or Form (for campaign creation).
     */
    private string $eventType;

    private HelloassoObject $data;

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
}
