<?php

declare(strict_types=1);

namespace Helloasso\Models\Statistics;

use Helloasso\Models\HelloassoObject;

class SharePayment implements HelloassoObject
{
    private int $id;
    private int $shareAmount;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getShareAmount(): int
    {
        return $this->shareAmount;
    }

    public function setShareAmount(int $shareAmount): self
    {
        $this->shareAmount = $shareAmount;

        return $this;
    }
}
