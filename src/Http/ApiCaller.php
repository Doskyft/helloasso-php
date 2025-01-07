<?php

declare(strict_types=1);

namespace Helloasso\Http;

use Helloasso\Models\HelloassoObject;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiCaller
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly TokenManager $tokenManager,
        private readonly ResponseHandler $responseHandler,
        private readonly Serializer $serializer,
    ) {
    }

    /**
     * @template T of HelloassoObject
     *
     * @param array<mixed>|HelloassoObject|null $body              The body of the request to make
     * @param class-string<T>                   $responseClassType
     * @param array<string, mixed>              $options           HttpClient request options
     *
     * @return T
     */
    public function post(string $url, array|HelloassoObject|null $body, string $responseClassType, ?array $options = []): HelloassoObject
    {
        if (null === $options) {
            @trigger_error(__METHOD__.'(): Passing null for $options is deprecated and will be removed in v2.0.0', \E_USER_DEPRECATED);

            $options = [];
        }

        $response = $this->httpClient->request(Request::METHOD_POST, $url, array_merge([
            'auth_bearer' => $this->tokenManager->getAccessToken(),
            'body' => $this->serializer->serialize($body, 'json'),
        ], $options));

        return $this->responseHandler->deserializeResponse($response, $responseClassType);
    }

    /**
     * @template T of HelloassoObject
     *
     * @param class-string<T>      $responseClassType
     * @param array<string, mixed> $options
     *
     * @return T
     */
    public function get(string $url, string $responseClassType, ?array $options = []): HelloassoObject
    {
        if (null === $options) {
            @trigger_error(__METHOD__.'(): Passing null for $options is deprecated and will be removed in v2.0.0', \E_USER_DEPRECATED);

            $options = [];
        }

        $response = $this->httpClient->request(Request::METHOD_GET, $url, array_merge([
            'auth_bearer' => $this->tokenManager->getAccessToken(),
        ], $options));

        return $this->responseHandler->deserializeResponse($response, $responseClassType);
    }
}
