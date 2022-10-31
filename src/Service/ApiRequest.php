<?php

declare(strict_types=1);

namespace Helloasso\Service;

use Helloasso\Exception\HelloassoApiException;
use Helloasso\Object\ClientCredentials;
use Helloasso\Object\HelloassoObject;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\HttpClient\Exception\HttpExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class ApiRequest
{
    public const BASE_URL = 'https://api.helloasso.com';
    public const OAUTH_ENDPOINT = self::BASE_URL.'/oauth2';

    protected Serializer $serializer;

    public function __construct(
        private readonly string $clientId,
        private readonly string $clientSecret,
        protected readonly string $organizationSlug,
    ) {
        $this->serializer = (new Serializer([new ObjectNormalizer()], [new JsonEncoder()]));
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

        $request = $this->request(Request::METHOD_POST, self::OAUTH_ENDPOINT.'/token', $params);

        /** @var ClientCredentials $content */
        $content = $this->deserialize($this->getContent($request), ClientCredentials::class);

        return $content;
    }
}