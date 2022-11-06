<?php

declare(strict_types=1);

namespace Helloasso\Models\Directory;

use Helloasso\Models\HelloassoObject;

class ListOrganizationsRequest implements HelloassoObject
{
    private string $name;
    private string $description;
    private bool $fiscalReceiptEligibility;

    /**
     * @var array<string>
     */
    private array $categories;

    /**
     * @var array<string>
     */
    private array $types;

    /**
     * @var array<string>
     */
    private array $zipCodes;

    /**
     * @var array<string>
     */
    private array $cities;

    /**
     * @var array<string>
     */
    private array $regions;

    /**
     * @var array<string>
     */
    private array $departments;

    /**
     * @var array<string>
     */
    private array $internalTags;

    /**
     * @var array<string>
     */
    private array $tags;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function isFiscalReceiptEligibility(): bool
    {
        return $this->fiscalReceiptEligibility;
    }

    public function setFiscalReceiptEligibility(bool $fiscalReceiptEligibility): self
    {
        $this->fiscalReceiptEligibility = $fiscalReceiptEligibility;

        return $this;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function setCategories(array $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getTypes(): array
    {
        return $this->types;
    }

    public function setTypes(array $types): self
    {
        $this->types = $types;

        return $this;
    }

    public function getZipCodes(): array
    {
        return $this->zipCodes;
    }

    public function setZipCodes(array $zipCodes): self
    {
        $this->zipCodes = $zipCodes;

        return $this;
    }

    public function getCities(): array
    {
        return $this->cities;
    }

    public function setCities(array $cities): self
    {
        $this->cities = $cities;

        return $this;
    }

    public function getRegions(): array
    {
        return $this->regions;
    }

    public function setRegions(array $regions): self
    {
        $this->regions = $regions;

        return $this;
    }

    public function getDepartments(): array
    {
        return $this->departments;
    }

    public function setDepartments(array $departments): self
    {
        $this->departments = $departments;

        return $this;
    }

    public function getInternalTags(): array
    {
        return $this->internalTags;
    }

    public function setInternalTags(array $internalTags): self
    {
        $this->internalTags = $internalTags;

        return $this;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }
}