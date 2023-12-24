<?php

declare(strict_types=1);

namespace Helloasso\Models\ApiNotifications;

use Helloasso\Models\HelloassoObject;

class PostApiUrlNotificationBody implements HelloassoObject
{
    private string $url;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }
}
