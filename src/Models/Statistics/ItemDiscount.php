<?php

declare(strict_types=1);

namespace Helloasso\Models\Statistics;

use Helloasso\Models\HelloassoObject;

class ItemDiscount implements HelloassoObject
{
    private string $code;
    private int $amount;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }
}