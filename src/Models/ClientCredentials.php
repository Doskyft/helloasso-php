<?php

namespace Helloasso\Models;

class ClientCredentials implements HelloassoObject
{
    /**
     * The JWT token to use in future requests
     */
    private string $accessToken;

    /**
     * Token used to refresh the token and get a new JWT token after expiration
     */
    private string $refreshToken;

    /**
     * Token Type : always "bearer"
     */
    private string $tokenType;

    /**
     * The lifetime in seconds of the access token
     */
    private string $expiresIn;

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function setAccessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }

    public function setRefreshToken(string $refreshToken): self
    {
        $this->refreshToken = $refreshToken;

        return $this;
    }

    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    public function setTokenType(string $tokenType): self
    {
        $this->tokenType = $tokenType;

        return $this;
    }

    public function getExpiresIn(): string
    {
        return $this->expiresIn;
    }

    public function setExpiresIn(string $expiresIn): self
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }
}