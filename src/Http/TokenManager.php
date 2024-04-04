<?php

declare(strict_types=1);

namespace Helloasso\Http;

use Helloasso\Models\ClientCredentials;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TokenManager
{
    private ?string $accessToken = null;

    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly ResponseHandler $responseHandler,
        private readonly string $clientId,
        private readonly string $clientSecret,
    ) {
    }

    public function getAccessToken(): string
    {
        if (null === $this->accessToken) {
            $this->retrieveAccessToken();
        }

        return $this->accessToken;
    }

    private function retrieveAccessToken(): void
    {
        $response = $this->httpClient->request(Request::METHOD_POST, '/oauth2/token', [
            'body' => [
                'grant_type' => 'client_credentials',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
            ],
            'headers' => [
                'Content-Type: application/x-www-form-urlencoded',
            ],
        ]);

        $credentials = $this->responseHandler->deserializeResponse($response, ClientCredentials::class);

        $this->accessToken = $credentials->getAccessToken();
    }
}
