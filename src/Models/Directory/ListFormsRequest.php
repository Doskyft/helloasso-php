<?php

declare(strict_types=1);

namespace Helloasso\Models\Directory;

use Helloasso\Models\HelloassoObject;

class ListFormsRequest implements HelloassoObject
{
    private string $formName;
    private string $formDescription;

    /**
     * @var array<string>
     */
    private array $formZipCodes;

    /**
     * @var array<string>
     */
    private array $formCities;

    /**
     * @var array<string>
     */
    private array $formRegions;

    /**
     * @var array<string>
     */
    private array $formDepartments;

    /**
     * @var array<string>
     */
    private array $formCountries;

    /**
     * @var array<string>
     */
    private array $formTypes;

    private \DateTime $formActivityType;
    private \DateTime $formPublicationStartDateMin;
    private \DateTime $formPublicationStartDateMax;
    private \DateTime $formStartDateMin;
    private \DateTime $formStartDateMax;
    private \DateTime $formEndDateMax;
    private \DateTime $formEndDateMin;

    private bool $formIsFree;
    private bool $formHasRemainingEntries;

    private string $organizationName;
    private string $organizationDescription;

    /**
     * @var array<string>
     */
    private array $organizationCategories;

    /**
     * @var array<string>
     */
    private array $organizationTypes;

    /**
     * @var array<string>
     */
    private array $organizationZipCodes;

    /**
     * @var array<string>
     */
    private array $organizationCities;

    /**
     * @var array<string>
     */
    private array $organizationRegions;

    /**
     * @var array<string>
     */
    private array $organizationDepartments;

    private bool $organizationFiscalReceiptEligibility;

    /**
     * @var array<string>
     */
    private array $internalTags;

    /**
     * @var array<string>
     */
    private array $tags;

    public function getFormName(): string
    {
        return $this->formName;
    }

    public function setFormName(string $formName): self
    {
        $this->formName = $formName;

        return $this;
    }

    public function getFormDescription(): string
    {
        return $this->formDescription;
    }

    public function setFormDescription(string $formDescription): self
    {
        $this->formDescription = $formDescription;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getFormZipCodes(): array
    {
        return $this->formZipCodes;
    }

    /**
     * @param string[] $formZipCodes
     */
    public function setFormZipCodes(array $formZipCodes): self
    {
        $this->formZipCodes = $formZipCodes;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getFormCities(): array
    {
        return $this->formCities;
    }

    /**
     * @param string[] $formCities
     */
    public function setFormCities(array $formCities): self
    {
        $this->formCities = $formCities;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getFormRegions(): array
    {
        return $this->formRegions;
    }

    /**
     * @param string[] $formRegions
     */
    public function setFormRegions(array $formRegions): self
    {
        $this->formRegions = $formRegions;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getFormDepartments(): array
    {
        return $this->formDepartments;
    }

    /**
     * @param string[] $formDepartments
     */
    public function setFormDepartments(array $formDepartments): self
    {
        $this->formDepartments = $formDepartments;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getFormCountries(): array
    {
        return $this->formCountries;
    }

    /**
     * @param string[] $formCountries
     */
    public function setFormCountries(array $formCountries): self
    {
        $this->formCountries = $formCountries;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getFormTypes(): array
    {
        return $this->formTypes;
    }

    /**
     * @param string[] $formTypes
     */
    public function setFormTypes(array $formTypes): self
    {
        $this->formTypes = $formTypes;

        return $this;
    }

    public function getFormActivityType(): \DateTime
    {
        return $this->formActivityType;
    }

    public function setFormActivityType(\DateTime $formActivityType): self
    {
        $this->formActivityType = $formActivityType;

        return $this;
    }

    public function getFormPublicationStartDateMin(): \DateTime
    {
        return $this->formPublicationStartDateMin;
    }

    public function setFormPublicationStartDateMin(\DateTime $formPublicationStartDateMin): self
    {
        $this->formPublicationStartDateMin = $formPublicationStartDateMin;

        return $this;
    }

    public function getFormPublicationStartDateMax(): \DateTime
    {
        return $this->formPublicationStartDateMax;
    }

    public function setFormPublicationStartDateMax(\DateTime $formPublicationStartDateMax): self
    {
        $this->formPublicationStartDateMax = $formPublicationStartDateMax;

        return $this;
    }

    public function getFormStartDateMin(): \DateTime
    {
        return $this->formStartDateMin;
    }

    public function setFormStartDateMin(\DateTime $formStartDateMin): self
    {
        $this->formStartDateMin = $formStartDateMin;

        return $this;
    }

    public function getFormStartDateMax(): \DateTime
    {
        return $this->formStartDateMax;
    }

    public function setFormStartDateMax(\DateTime $formStartDateMax): self
    {
        $this->formStartDateMax = $formStartDateMax;

        return $this;
    }

    public function getFormEndDateMax(): \DateTime
    {
        return $this->formEndDateMax;
    }

    public function setFormEndDateMax(\DateTime $formEndDateMax): self
    {
        $this->formEndDateMax = $formEndDateMax;

        return $this;
    }

    public function getFormEndDateMin(): \DateTime
    {
        return $this->formEndDateMin;
    }

    public function setFormEndDateMin(\DateTime $formEndDateMin): self
    {
        $this->formEndDateMin = $formEndDateMin;

        return $this;
    }

    public function isFormIsFree(): bool
    {
        return $this->formIsFree;
    }

    public function setFormIsFree(bool $formIsFree): self
    {
        $this->formIsFree = $formIsFree;

        return $this;
    }

    public function isFormHasRemainingEntries(): bool
    {
        return $this->formHasRemainingEntries;
    }

    public function setFormHasRemainingEntries(bool $formHasRemainingEntries): self
    {
        $this->formHasRemainingEntries = $formHasRemainingEntries;

        return $this;
    }

    public function getOrganizationName(): string
    {
        return $this->organizationName;
    }

    public function setOrganizationName(string $organizationName): self
    {
        $this->organizationName = $organizationName;

        return $this;
    }

    public function getOrganizationDescription(): string
    {
        return $this->organizationDescription;
    }

    public function setOrganizationDescription(string $organizationDescription): self
    {
        $this->organizationDescription = $organizationDescription;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOrganizationCategories(): array
    {
        return $this->organizationCategories;
    }

    /**
     * @param string[] $organizationCategories
     */
    public function setOrganizationCategories(array $organizationCategories): self
    {
        $this->organizationCategories = $organizationCategories;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOrganizationTypes(): array
    {
        return $this->organizationTypes;
    }

    /**
     * @param string[] $organizationTypes
     */
    public function setOrganizationTypes(array $organizationTypes): self
    {
        $this->organizationTypes = $organizationTypes;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOrganizationZipCodes(): array
    {
        return $this->organizationZipCodes;
    }

    /**
     * @param string[] $organizationZipCodes
     */
    public function setOrganizationZipCodes(array $organizationZipCodes): self
    {
        $this->organizationZipCodes = $organizationZipCodes;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOrganizationCities(): array
    {
        return $this->organizationCities;
    }

    /**
     * @param string[] $organizationCities
     */
    public function setOrganizationCities(array $organizationCities): self
    {
        $this->organizationCities = $organizationCities;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOrganizationRegions(): array
    {
        return $this->organizationRegions;
    }

    /**
     * @param string[] $organizationRegions
     */
    public function setOrganizationRegions(array $organizationRegions): self
    {
        $this->organizationRegions = $organizationRegions;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOrganizationDepartments(): array
    {
        return $this->organizationDepartments;
    }

    /**
     * @param string[] $organizationDepartments
     */
    public function setOrganizationDepartments(array $organizationDepartments): self
    {
        $this->organizationDepartments = $organizationDepartments;

        return $this;
    }

    public function isOrganizationFiscalReceiptEligibility(): bool
    {
        return $this->organizationFiscalReceiptEligibility;
    }

    public function setOrganizationFiscalReceiptEligibility(bool $organizationFiscalReceiptEligibility): self
    {
        $this->organizationFiscalReceiptEligibility = $organizationFiscalReceiptEligibility;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getInternalTags(): array
    {
        return $this->internalTags;
    }

    /**
     * @param string[] $internalTags
     */
    public function setInternalTags(array $internalTags): self
    {
        $this->internalTags = $internalTags;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     */
    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }
}
