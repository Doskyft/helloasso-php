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

    private array $services = [
        'checkout' => CheckoutIntentService::class,
        'directory' => DirectoryService::class,
        'event' => EventService::class,
    ];

    public function __construct(
        readonly string $clientId,
        readonly string $clientSecret,
        readonly string $organizationSlug,
        readonly bool $sandbox = false,
    ) {
        foreach ($this->services as $key => $service) {
            $this->$key = new $service($clientId, $clientSecret, $organizationSlug, $sandbox);
        }
    }
}
