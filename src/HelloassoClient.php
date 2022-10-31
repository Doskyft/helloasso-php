<?php

declare(strict_types=1);

namespace Helloasso;

use Helloasso\Service\CheckoutIntentService;
use Helloasso\Service\DirectoryService;

class HelloassoClient
{
    public CheckoutIntentService $checkout;
    public DirectoryService $directory;

    public function __construct(
        readonly string $clientId,
        readonly string $clientSecret,
        readonly string $organizationSlug,
    ) {
        $this->checkout = new CheckoutIntentService($clientId, $clientSecret, $organizationSlug);
        $this->directory = new DirectoryService($clientId, $clientSecret, $organizationSlug);
    }
}
