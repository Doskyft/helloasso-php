<?php

declare(strict_types=1);

namespace Helloasso\Models\Accounts;

use Helloasso\Models\HelloassoObject;

class OrganismCategoryModel implements HelloassoObject
{
    private int $id;
    private string $label;
    private string $shortLabel;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getShortLabel(): string
    {
        return $this->shortLabel;
    }

    public function setShortLabel(string $shortLabel): self
    {
        $this->shortLabel = $shortLabel;

        return $this;
    }
}