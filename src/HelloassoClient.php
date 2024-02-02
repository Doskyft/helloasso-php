<?php

declare(strict_types=1);

namespace Helloasso;

use Helloasso\Service\CheckoutIntentService;
use Helloasso\Service\DirectoryService;
use Helloasso\Service\EventService;

class HelloassoClient
{
    public CheckoutIntentService $checkout;

    public DirectoryService $directory;

    public EventService $event;

    public function __construct(
        readonly string $clientId,
        readonly string $clientSecret,
        readonly string $organizationSlug,
        readonly bool $sandbox = false,
    ) {
        $this->checkout = new CheckoutIntentService($clientId, $clientSecret, $organizationSlug, $sandbox);
        $this->directory = new DirectoryService($clientId, $clientSecret, $organizationSlug, $sandbox);
        $this->event = new EventService($clientId, $clientSecret, $organizationSlug, $sandbox);
    }
}
