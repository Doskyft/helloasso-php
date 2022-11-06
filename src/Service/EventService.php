<?php

declare(strict_types=1);

namespace Helloasso\Service;

use Helloasso\Models\Event;

class EventService extends ApiRequest
{
    public function decode(string $event): Event
    {
        /** @var Event $content */
        $content = $this->deserialize($event, Event::class);

        return $content;
    }
}