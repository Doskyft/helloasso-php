<?php

declare(strict_types=1);

namespace Helloasso\Models\Statistics;

use Helloasso\Enums\FormType;
use Helloasso\Models\Common\MetaModel;
use Helloasso\Models\HelloassoObject;

class OrderLight implements HelloassoObject
{
    private int $id;
    private \DateTime $date;

    private string $formSlug;
    private string $organizationName;
    private string $organizationSlug;

    private FormType $formType;
    private MetaModel $meta;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): self
    {
        $this->date = $date;

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

    public function getOrganizationName(): string
    {
        return $this->organizationName;
    }

    public function setOrganizationName(string $organizationName): self
    {
        $this->organizationName = $organizationName;

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

    public function getFormType(): FormType
    {
        return $this->formType;
    }

    public function setFormType(FormType $formType): self
    {
        $this->formType = $formType;

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
}