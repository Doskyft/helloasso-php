<?php

declare(strict_types=1);

namespace Helloasso\Models\Organization;

use Helloasso\Models\HelloassoObject;

class OrganizationBasicModel implements HelloassoObject
{
    private string $url;
    private string $organizationSlug;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getOrganizationSlug(): string
    {
        return $this->organizationSlug;
    }

    public function setOrganizationSlug(string $organizationSlug): self
    {
        $this->organizationSlug = $organizationSlug;

        return $this;
    }
}