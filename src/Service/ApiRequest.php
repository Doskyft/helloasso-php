<?php

declare(strict_types=1);

namespace Helloasso\Service;

use Helloasso\Exception\HelloassoApiException;
use Helloasso\Models\ClientCredentials;
use Helloasso\Models\HelloassoObject;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\HttpClient\Exception\HttpExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class ApiRequest
{
    public const OAUTH_ENDPOINT = '/oauth2';

    protected Serializer $serializer;

    public function __construct(
        private readonly string $clientId,
        private readonly string $clientSecret,
        protected readonly string $organizationSlug,
        private readonly bool $sandbox = false,
    ) {
        $encoder = [new JsonEncoder()];
        $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);
        $normalizer = [
            new BackedEnumNormalizer(),
            new ArrayDenormalizer(),
            new ObjectNormalizer(null, null, null, $extractor),
        ];

        $this->serializer = new Serializer($normalizer, $encoder);
    }

    protected function getBaseUrl(): string
    {
        if ($this->sandbox) {
            return 'https://api.helloasso-sandbox.com';
        }

        return 'https://api.helloasso.com';
    }

    protected function deserialize(string $content, string $type): HelloassoObject
    {
        return $this->serializer->deserialize($content, $type, 'json');
    }

    protected function serialize(HelloassoObject $content): string
    {
        return $this->serializer->serialize($content, 'json');
    }

    /**
     * @throws HelloassoApiException
     */
    protected function request(string $method, string $url, array $params = []): ResponseInterface
    {
        try {
            return HttpClient::create()->request($method, $url, $params);
        } catch (TransportExceptionInterface $e) {
            throw new HelloassoApiException($e->getMessage());
        }
    }

    /**
     * @throws HelloassoApiException
     */
    protected function getContent(ResponseInterface $response): string
    {
        try {
            return $response->getContent();
        } catch (HttpExceptionInterface|TransportExceptionInterface $e) {
            try {
                $content = $response->getContent(false);
            } catch (HttpExceptionInterface|TransportExceptionInterface $e) {
                $content = 'unknown error';
            }

            throw new HelloassoApiException($e->getMessage().' : '.$content);
        }
    }

    /**
     * @throws HelloassoApiException
     */
    protected function oauth(): ClientCredentials
    {
        $params = [
            'body' => [
                'grant_type' => 'client_credentials',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
            ],
            'headers' => [
                'Content-Type: application/x-www-form-urlencoded'
            ]
        ];

        $request = $this->request(Request::METHOD_POST, $this->getBaseUrl().self::OAUTH_ENDPOINT.'/token', $params);

        /** @var ClientCredentials $content */
        $content = $this->deserialize($this->getContent($request), ClientCredentials::class);

        return $content;
    }
}