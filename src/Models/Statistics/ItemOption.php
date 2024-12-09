<?php

declare(strict_types=1);

namespace Helloasso\Models\Statistics;

use Helloasso\Enums\PriceCategory;
use Helloasso\Models\HelloassoObject;

class ItemOption implements HelloassoObject
{
    private string $name;
    private int $amount;
    private PriceCategory $priceCategory;
    private bool $isRequired;

    /**
     * @var array<ItemCustomField>
     */
    private array $customFields;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getPriceCategory(): PriceCategory
    {
        return $this->priceCategory;
    }

    public function setPriceCategory(PriceCategory $priceCategory): self
    {
        $this->priceCategory = $priceCategory;

        return $this;
    }

    public function isRequired(): bool
    {
        return $this->isRequired;
    }

    public function setIsRequired(bool $isRequired): self
    {
        $this->isRequired = $isRequired;

        return $this;
    }

    /**
     * @return ItemCustomField[]
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * @param ItemCustomField[] $customFields
     */
    public function setCustomFields(array $customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }
}
