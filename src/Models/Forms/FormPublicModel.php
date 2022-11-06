<?php

declare(strict_types=1);

namespace Helloasso\Models\Forms;

use Helloasso\Enums\FormState;
use Helloasso\Enums\string;
use Helloasso\Enums\MembershipValidityType;
use Helloasso\Models\Common\DocumentModel;
use Helloasso\Models\Common\MetaModel;
use Helloasso\Models\Common\PlaceModel;
use Helloasso\Models\HelloassoObject;

class FormPublicModel implements HelloassoObject
{
    private string $organizationLogo;
    private string $organizationName;

    /**
     * @var array<TierPublicModel>
     */
    private array $tiers;

    private string $activityType;
    private int $activityTypeId;
    private PlaceModel $place;
    private \DateTime $saleEndDate;
    private \DateTime $saleStartDate;
    private MembershipValidityType $validityType;
    private DocumentModel $banner;
    private string $currency;
    private string $description;
    private \DateTime $startDate;
    private \DateTime $endDate;
    private DocumentModel $logo;
    private MetaModel $meta;
    private FormState $state;
    private string $title;
    private string $privateTitle;
    private string $widgetButtonUrl;
    private string $widgetFullUrl;
    private string $widgetVignetteHorizontalUrl;
    private string $widgetVignetteVerticalUrl;
    private string $formSlug;
    private string $formType;
    private string $url;
    private string $organizationSlug;

    public function getOrganizationLogo(): string
    {
        return $this->organizationLogo;
    }

    public function setOrganizationLogo(string $organizationLogo): self
    {
        $this->organizationLogo = $organizationLogo;

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

    public function getTiers(): array
    {
        return $this->tiers;
    }

    public function setTiers(array $tiers): self
    {
        $this->tiers = $tiers;

        return $this;
    }

    public function getActivityType(): string
    {
        return $this->activityType;
    }

    public function setActivityType(string $activityType): self
    {
        $this->activityType = $activityType;

        return $this;
    }

    public function getActivityTypeId(): int
    {
        return $this->activityTypeId;
    }

    public function setActivityTypeId(int $activityTypeId): self
    {
        $this->activityTypeId = $activityTypeId;

        return $this;
    }

    public function getPlace(): PlaceModel
    {
        return $this->place;
    }

    public function setPlace(PlaceModel $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getSaleEndDate(): \DateTime
    {
        return $this->saleEndDate;
    }

    public function setSaleEndDate(\DateTime $saleEndDate): self
    {
        $this->saleEndDate = $saleEndDate;

        return $this;
    }

    public function getSaleStartDate(): \DateTime
    {
        return $this->saleStartDate;
    }

    public function setSaleStartDate(\DateTime $saleStartDate): self
    {
        $this->saleStartDate = $saleStartDate;

        return $this;
    }

    public function getValidityType(): MembershipValidityType
    {
        return $this->validityType;
    }

    public function setValidityType(MembershipValidityType $validityType): self
    {
        $this->validityType = $validityType;

        return $this;
    }

    public function getBanner(): DocumentModel
    {
        return $this->banner;
    }

    public function setBanner(DocumentModel $banner): self
    {
        $this->banner = $banner;

        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

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

    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTime $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTime $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getLogo(): DocumentModel
    {
        return $this->logo;
    }

    public function setLogo(DocumentModel $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getMeta(): MetaModel
    {
        return $this->meta;
    }

    public function setMeta(MetaModel $meta): self
    {
        $this->meta = $meta;

        return $this;
    }

    public function getState(): FormState
    {
        return $this->state;
    }

    public function setState(FormState $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPrivateTitle(): string
    {
        return $this->privateTitle;
    }

    public function setPrivateTitle(string $privateTitle): self
    {
        $this->privateTitle = $privateTitle;

        return $this;
    }

    public function getWidgetButtonUrl(): string
    {
        return $this->widgetButtonUrl;
    }

    public function setWidgetButtonUrl(string $widgetButtonUrl): self
    {
        $this->widgetButtonUrl = $widgetButtonUrl;

        return $this;
    }

    public function getWidgetFullUrl(): string
    {
        return $this->widgetFullUrl;
    }

    public function setWidgetFullUrl(string $widgetFullUrl): self
    {
        $this->widgetFullUrl = $widgetFullUrl;

        return $this;
    }

    public function getWidgetVignetteHorizontalUrl(): string
    {
        return $this->widgetVignetteHorizontalUrl;
    }

    public function setWidgetVignetteHorizontalUrl(string $widgetVignetteHorizontalUrl): self
    {
        $this->widgetVignetteHorizontalUrl = $widgetVignetteHorizontalUrl;

        return $this;
    }

    public function getWidgetVignetteVerticalUrl(): string
    {
        return $this->widgetVignetteVerticalUrl;
    }

    public function setWidgetVignetteVerticalUrl(string $widgetVignetteVerticalUrl): self
    {
        $this->widgetVignetteVerticalUrl = $widgetVignetteVerticalUrl;

        return $this;
    }

    public function getFormSlug(): string
    {
        return $this->formSlug;
    }

    public function setFormSlug(string $formSlug): self
    {
        $this->formSlug = $formSlug;

        return $this;
    }

    public function getFormType(): string
    {
        return $this->formType;
    }

    public function setFormType(string $formType): self
    {
        $this->formType = $formType;

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