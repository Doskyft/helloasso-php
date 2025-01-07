<?php

declare(strict_types=1);

namespace Helloasso\Models\Accounts\ApiClients;

use Helloasso\Models\HelloassoObject;

class ApiClientModel implements HelloassoObject
{
    private string $id;
    private string $secret;
    private string $partnerName;

    /**
     * @var array<string>
     */
    private array $privileges;

    private string $domain;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }

    public function setSecret(string $secret): self
    {
        $this->secret = $secret;

        return $this;
    }

    public function getPartnerName(): string
    {
        return $this->partnerName;
    }

    public function setPartnerName(string $partnerName): self
    {
        $this->partnerName = $partnerName;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getPrivileges(): array
    {
        return $this->privileges;
    }

    /**
     * @param string[] $privileges
     */
    public function setPrivileges(array $privileges): self
    {
        $this->privileges = $privileges;

        return $this;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }
}
