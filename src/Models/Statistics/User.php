<?php

declare(strict_types=1);

namespace Helloasso\Models\Statistics;

use Helloasso\Models\HelloassoObject;

class User implements HelloassoObject
{
    private string $firstName;
    private string $lastName;

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }
}
