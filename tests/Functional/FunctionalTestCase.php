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
        $organisationSlug = getenv('HELLOASSO_ORGANISATION') ? getenv('HELLOASSO_ORGANISATION_SLUG') : 'helloasso-php-sdk';

        if (empty($clientId) || empty($clientSecret)) {
            throw new \RuntimeException('Some mandatory environment variables ("HELLOASSO_CLIENT_ID", "HELLOASSO_CLIENT_SECRET") have not been set (or incorrectly set). Please consider creating an account on https://www.helloasso-sandbox.com/ and run tests using HELLOASSO_CLIENT_ID=[YourClientId] HELLOASSO_CLIENT_SECRET=[YourClientSecret] HELLOASSO_ORGANISATION_SLUG=[YourOrganisation] vendor/bin/phpunit');
        }

        return HelloassoClientFactory::create($clientId, $clientSecret, $organisationSlug, true);
    }
}
