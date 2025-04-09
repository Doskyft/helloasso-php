<?php

declare(strict_types=1);

namespace Helloasso\Tests\Functional;

use Helloasso\HelloassoClient;
use Helloasso\HelloassoClientFactory;
use PHPUnit\Framework\TestCase;

abstract class FunctionalTestCase extends TestCase
{
    protected function getClient(): HelloassoClient
    {
        $clientId = getenv('HELLOASSO_CLIENT_ID');
        $clientSecret = getenv('HELLOASSO_CLIENT_SECRET');

        if (empty($clientId) || empty($clientSecret)) {
            $this->markTestSkipped();
        }

        return HelloassoClientFactory::create($clientId, $clientSecret, $this->getOrganisationSlug(), true);
    }

    protected function getOrganisationSlug(): string
    {
        return false !== getenv('HELLOASSO_ORGANISATION') ? getenv('HELLOASSO_ORGANISATION') : 'helloasso-php-sdk';
    }
}
