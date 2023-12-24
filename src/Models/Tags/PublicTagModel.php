<?php

declare(strict_types=1);

namespace Helloasso\Models\Tags;

use Helloasso\Models\HelloassoObject;

class PublicTagModel implements HelloassoObject
{
    private string $name;
    private float $score;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getScore(): float
    {
        return $this->score;
    }

    public function setScore(float $score): self
    {
        $this->score = $score;

        return $this;
    }
}
