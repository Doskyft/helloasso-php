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
     * @param class-string<T> $responseClassType
     *
     * @return T
     */
    public function post(string $url, array|HelloassoObject|null $body, string $responseClassType): HelloassoObject
    {
        $response = $this->httpClient->request(Request::METHOD_POST, $url, [
            'auth_bearer' => $this->tokenManager->getAccessToken(),
            'body' => $this->serializer->serialize($body, 'json'),
        ]);

        return $this->responseHandler->deserializeResponse($response, $responseClassType);
    }

    /**
     * @template T of HelloassoObject
     *
     * @param class-string<T> $responseClassType
     *
     * @return T
     */
    public function get(string $url, string $responseClassType, array|HelloassoObject|null $request = null): HelloassoObject
    {
        $response = $this->httpClient->request(Request::METHOD_GET, $url, [
            'auth_bearer' => $this->tokenManager->getAccessToken(),
            'body' => $request,
        ]);

        return $this->responseHandler->deserializeResponse($response, $responseClassType);
    }
}
