<?php

declare(strict_types=1);

namespace Helloasso\Models\Forms;

use Helloasso\Enums\FormType;
use Helloasso\Models\HelloassoObject;

class FormBasicModel implements HelloassoObject
{
    private string $formSlug;
    private FormType $formType;
    private string $url;
    private string $organizationSlug;

    public function getFormSlug(): string
    {
        return $this->formSlug;
    }

    public function setFormSlug(string $formSlug): self
    {
        $this->formSlug = $formSlug;

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