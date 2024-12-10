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
        $organisationSlug = false !== getenv('HELLOASSO_ORGANISATION') ? getenv('HELLOASSO_ORGANISATION') : 'helloasso-php-sdk';

        if (empty($clientId) || empty($clientSecret)) {
            $this->markTestSkipped();
        }

        return HelloassoClientFactory::create($clientId, $clientSecret, $organisationSlug, true);
    }
}
