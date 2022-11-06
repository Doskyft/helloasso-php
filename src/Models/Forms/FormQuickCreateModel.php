<?php

declare(strict_types=1);

namespace Helloasso\Models\Forms;

use Helloasso\Models\HelloassoObject;

class FormQuickCreateModel implements HelloassoObject
{
    private string $formSlug;
    private string $organizationSlug;
    private string $publicUrl;

    public function getFormSlug(): string
    {
        return $this->formSlug;
    }

    public function setFormSlug(string $formSlug): self
    {
        $this->formSlug = $formSlug;

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

    public function getPublicUrl(): string
    {
        return $this->publicUrl;
    }

    public function setPublicUrl(string $publicUrl): self
    {
        $this->publicUrl = $publicUrl;

        return $this;
    }
}