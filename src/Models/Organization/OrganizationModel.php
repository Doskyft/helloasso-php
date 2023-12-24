<?php

declare(strict_types=1);

namespace Helloasso\Models\Organization;

use Helloasso\Enums\GlobalRole;
use Helloasso\Enums\OrganizationType;
use Helloasso\Models\HelloassoObject;
use Helloasso\Models\Shared\GeoLocation;

class OrganizationModel implements HelloassoObject
{
    private bool $isAuthenticated;
    private string $banner;
    private bool $fiscalReceiptEligibility;
    private bool $fiscalReceiptIssuanceEnabled;
    private OrganizationType $type;
    private string $category;
    private string $address;
    private GeoLocation $geolocation;
    private string $logo;
    private string $name;
    private GlobalRole $role;
    private string $city;
    private string $zipCode;
    private string $description;
    private string $url;
    private string $organizationSlug;

    public function isAuthenticated(): bool
    {
        return $this->isAuthenticated;
    }

    public function setIsAuthenticated(bool $isAuthenticated): self
    {
        $this->isAuthenticated = $isAuthenticated;

        return $this;
    }

    public function getBanner(): string
    {
        return $this->banner;
    }

    public function setBanner(string $banner): self
    {
        $this->banner = $banner;

        return $this;
    }

    public function isFiscalReceiptEligibility(): bool
    {
        return $this->fiscalReceiptEligibility;
    }

    public function setFiscalReceiptEligibility(bool $fiscalReceiptEligibility): self
    {
        $this->fiscalReceiptEligibility = $fiscalReceiptEligibility;

        return $this;
    }

    public function isFiscalReceiptIssuanceEnabled(): bool
    {
        return $this->fiscalReceiptIssuanceEnabled;
    }

    public function setFiscalReceiptIssuanceEnabled(bool $fiscalReceiptIssuanceEnabled): self
    {
        $this->fiscalReceiptIssuanceEnabled = $fiscalReceiptIssuanceEnabled;

        return $this;
    }

    public function getType(): OrganizationType
    {
        return $this->type;
    }

    public function setType(OrganizationType $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getGeolocation(): GeoLocation
    {
        return $this->geolocation;
    }

    public function setGeolocation(GeoLocation $geolocation): self
    {
        $this->geolocation = $geolocation;

        return $this;
    }

    public function getLogo(): string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getRole(): GlobalRole
    {
        return $this->role;
    }

    public function setRole(GlobalRole $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

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
