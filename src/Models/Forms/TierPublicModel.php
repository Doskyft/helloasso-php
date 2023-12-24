<?php

declare(strict_types=1);

namespace Helloasso\Models\Forms;

use Helloasso\Enums\PaymentFrequencyType;
use Helloasso\Enums\TierType;
use Helloasso\Models\Common\DocumentModel;
use Helloasso\Models\Common\MetaModel;
use Helloasso\Models\HelloassoObject;

class TierPublicModel implements HelloassoObject
{
    private int $id;
    private string $label;
    private string $description;
    private TierType $tierType;
    private int $price;
    private float $vatRate;
    private int $minAmount;
    private PaymentFrequencyType $paymentFrequency;
    private int $maxPerUser;
    private MetaModel $meta;
    private \DateTime $saleStartDate;
    private \DateTime $saleEndDate;
    private bool $isEligibleTaxReceipt;

    /**
     * @var array<TermModel>
     */
    private array $terms;

    private DocumentModel $picture;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTierType(): TierType
    {
        return $this->tierType;
    }

    public function setTierType(TierType $tierType): self
    {
        $this->tierType = $tierType;

        return $this;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getVatRate(): float
    {
        return $this->vatRate;
    }

    public function setVatRate(float $vatRate): self
    {
        $this->vatRate = $vatRate;

        return $this;
    }

    public function getMinAmount(): int
    {
        return $this->minAmount;
    }

    public function setMinAmount(int $minAmount): self
    {
        $this->minAmount = $minAmount;

        return $this;
    }

    public function getPaymentFrequency(): PaymentFrequencyType
    {
        return $this->paymentFrequency;
    }

    public function setPaymentFrequency(PaymentFrequencyType $paymentFrequency): self
    {
        $this->paymentFrequency = $paymentFrequency;

        return $this;
    }

    public function getMaxPerUser(): int
    {
        return $this->maxPerUser;
    }

    public function setMaxPerUser(int $maxPerUser): self
    {
        $this->maxPerUser = $maxPerUser;

        return $this;
    }

    public function getMeta(): MetaModel
    {
        return $this->meta;
    }

    public function setMeta(MetaModel $meta): self
    {
        $this->meta = $meta;

        return $this;
    }

    public function getSaleStartDate(): \DateTime
    {
        return $this->saleStartDate;
    }

    public function setSaleStartDate(\DateTime $saleStartDate): self
    {
        $this->saleStartDate = $saleStartDate;

        return $this;
    }

    public function getSaleEndDate(): \DateTime
    {
        return $this->saleEndDate;
    }

    public function setSaleEndDate(\DateTime $saleEndDate): self
    {
        $this->saleEndDate = $saleEndDate;

        return $this;
    }

    public function isEligibleTaxReceipt(): bool
    {
        return $this->isEligibleTaxReceipt;
    }

    public function setIsEligibleTaxReceipt(bool $isEligibleTaxReceipt): self
    {
        $this->isEligibleTaxReceipt = $isEligibleTaxReceipt;

        return $this;
    }

    public function getTerms(): array
    {
        return $this->terms;
    }

    public function setTerms(array $terms): self
    {
        $this->terms = $terms;

        return $this;
    }

    public function getPicture(): DocumentModel
    {
        return $this->picture;
    }

    public function setPicture(DocumentModel $picture): self
    {
        $this->picture = $picture;

        return $this;
    }
}
