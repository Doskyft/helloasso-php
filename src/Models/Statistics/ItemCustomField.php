<?php

declare(strict_types=1);

namespace Helloasso\Models\Statistics;

use Helloasso\Enums\FieldType;
use Helloasso\Models\HelloassoObject;

class ItemCustomField implements HelloassoObject
{
    private string $name;
    private FieldType $type;
    private string $answer;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): FieldType
    {
        return $this->type;
    }

    public function setType(FieldType $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getAnswer(): string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }
}
