<?php

declare(strict_types=1);

namespace Helloasso\Models\Statistics;

use Helloasso\Models\HelloassoObject;

class ShareItem implements HelloassoObject
{
    private int $id;
    private int $shareAmount;
    private int $shareItemAmount;
    private int $shareOptionsAmount;

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
}
