<?php

declare(strict_types=1);

namespace Helloasso\Models\Common;

use Helloasso\Models\HelloassoObject;

class ContactModel implements HelloassoObject
{
    private string $email;
    private string $phoneNumber;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}
