<?php

declare(strict_types=1);

namespace Helloasso;

use Helloasso\Http\ApiCaller;
use Helloasso\Http\ResponseHandler;
use Helloasso\Http\TokenManager;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HelloassoClientFactory
{
    public static function create(
        string $clientId,
        string $clientSecret,
        string $organizationSlug,
        bool $sandbox = false,
        ?HttpClientInterface $httpClient = null,
    ): HelloassoClient {
        $httpClient = $httpClient ?? HttpClient::createForBaseUri($sandbox ? 'https://api.helloasso-sandbox.com' : 'https://api.helloasso.com', [
            'headers' => [
                'accept' => 'application/json',
                'Content-type: application/json',
            ],
        ]);
        $serializer = self::createSerializer();
        $responseHandler = new ResponseHandler($serializer);
        $tokenManager = new TokenManager($httpClient, $responseHandler, $clientId, $clientSecret);

        return new HelloassoClient(
            $serializer,
            new ApiCaller($httpClient, $tokenManager, $responseHandler, $serializer),
            $organizationSlug,
        );
    }

    private static function createSerializer(): Serializer
    {
        $encoder = [new JsonEncoder()];
        $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);
        $normalizer = [
            new DateTimeNormalizer(),
            new BackedEnumNormalizer(),
            new ArrayDenormalizer(),
            new ObjectNormalizer(null, null, null, $extractor),
        ];

        return new Serializer($normalizer, $encoder);
    }
}
