<?php

declare(strict_types=1);

namespace Helloasso\Tests\Functional\Service;

use Helloasso\Service\ApiRequest;
use PHPUnit\Framework\TestCase;

abstract class ServiceTestCase extends TestCase
{
    /**
     * @template T of ApiRequest
     *
     * @param class-string<T> $className
     *
     * @return T
     */
    protected function createService(string $className): ApiRequest
    {
        $clientId = getenv('HELLOASSO_CLIENT_ID');
        $clientSecret = getenv('HELLOASSO_CLIENT_SECRET');
        $organisationSlug = getenv('HELLOASSO_ORGANISATION') ? getenv('HELLOASSO_ORGANISATION_SLUG') : 'helloasso-php-sdk';

        if (false === $clientId || false === $clientSecret) {
            throw new \RuntimeException('Some mandatory environment variables ("HELLOASSO_CLIENT_ID", "HELLOASSO_CLIENT_SECRET") have not been set. Please consider creating an account on https://www.helloasso-sandbox.com/ and run tests using HELLOASSO_CLIENT_ID=[YourClientId] HELLOASSO_CLIENT_SECRET=[YourClientSecret] HELLOASSO_ORGANISATION_SLUG=[YourOrganisation] vendor/bin/phpunit');
        }

        return new $className($clientId, $clientSecret, $organisationSlug, true);
    }
}
