<?php

declare(strict_types=1);

namespace Helloasso\Models\Forms;

use Helloasso\Models\HelloassoObject;

class TierLightModel implements HelloassoObject
{
    private string $label;
    private int $price;

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }
}
