<?php

declare(strict_types=1);

namespace Helloasso\Models\Statistics;

use Helloasso\Enums\ItemState;
use Helloasso\Enums\TierType;
use Helloasso\Models\HelloassoObject;

class PaymentItem implements HelloassoObject
{
    private int $id;
    private int $shareAmount;
    private int $shareItemAmount;
    private int $shareOptionsAmount;
    private int $amount;
    private int $initialAmount;

    private TierType $type;
    private ItemState $state;

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

    public function getShareItemAmount(): int
    {
        return $this->shareItemAmount;
    }

    public function setShareItemAmount(int $shareItemAmount): self
    {
        $this->shareItemAmount = $shareItemAmount;

        return $this;
    }

    public function getShareOptionsAmount(): int
    {
        return $this->shareOptionsAmount;
    }

    public function setShareOptionsAmount(int $shareOptionsAmount): self
    {
        $this->shareOptionsAmount = $shareOptionsAmount;

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

    public function getType(): TierType
    {
        return $this->type;
    }

    public function setType(TierType $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getInitialAmount(): int
    {
        return $this->initialAmount;
    }

    public function setInitialAmount(int $initialAmount): self
    {
        $this->initialAmount = $initialAmount;

        return $this;
    }

    public function getState(): ItemState
    {
        return $this->state;
    }

    public function setState(ItemState $state): self
    {
        $this->state = $state;

        return $this;
    }
}