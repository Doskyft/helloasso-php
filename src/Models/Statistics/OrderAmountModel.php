<?php

declare(strict_types=1);

namespace Helloasso\Models\Statistics;

use Helloasso\Models\HelloassoObject;

class OrderAmountModel implements HelloassoObject
{
    private int $total;
    private int $vat;
    private int $discount;

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getVat(): int
    {
        return $this->vat;
    }

    public function setVat(int $vat): self
    {
        $this->vat = $vat;

        return $this;
    }

    public function getDiscount(): int
    {
        return $this->discount;
    }

    public function setDiscount(int $discount): self
    {
        $this->discount = $discount;

        return $this;
    }
}
