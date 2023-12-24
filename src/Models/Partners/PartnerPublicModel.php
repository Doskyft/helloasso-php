<?php

declare(strict_types=1);

namespace Helloasso\Models\Partners;

use Helloasso\Models\Accounts\ApiClients\ApiClientModel;
use Helloasso\Models\ApiNotifications\ApiUrlNotificationModel;
use Helloasso\Models\HelloassoObject;

class PartnerPublicModel implements HelloassoObject
{
    private string $name;
    private string $description;
    private string $url;
    private string $logo;
    private ApiClientModel $client;

    /**
     * @var array<ApiUrlNotificationModel>
     */
    private array $urlNotificationList;

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

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

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

    public function getClient(): ApiClientModel
    {
        return $this->client;
    }

    public function setClient(ApiClientModel $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getUrlNotificationList(): array
    {
        return $this->urlNotificationList;
    }

    public function setUrlNotificationList(array $urlNotificationList): self
    {
        $this->urlNotificationList = $urlNotificationList;

        return $this;
    }
}
