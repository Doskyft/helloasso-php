<?php

declare(strict_types=1);

namespace Helloasso\Models\Forms;

use Helloasso\Models\HelloassoObject;

class TermModel implements HelloassoObject
{
    private \DateTime $date;
    private int $amount;

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): self
    {
        $this->date = $date;

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
