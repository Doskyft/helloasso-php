<?php

declare(strict_types=1);

namespace Helloasso\Models\Statistics;

use Helloasso\Enums\ItemState;
use Helloasso\Enums\PriceCategory;
use Helloasso\Enums\TierType;
use Helloasso\Models\HelloassoObject;

class ItemDetail implements HelloassoObject
{
    private Payer $payer;
    private array $metadata;
    private OrderLight $order;

    /**
     * @var array<ItemPayment>
     */
    private array $payments;

    private string $name;
    private User $user;
    private PriceCategory $priceCategory;
    private int $minAmount;
    private ItemDiscount $discount;

    /**
     * @var array<ItemCustomField>
     */
    private array $customFields;

    /**
     * @var array<ItemOption>
     */
    private array $options;

    private string $ticketUrl;
    private string $qrCode;
    private string $membershipCardUrl;
    private int $dayOfLevy;
    private string $tierDescription;
    private int $id;
    private int $amount;
    private TierType $type;
    private int $initialAmount;
    private ItemState $state;

    public function getPayer(): Payer
    {
        return $this->payer;
    }

    public function setPayer(Payer $payer): self
    {
        $this->payer = $payer;

        return $this;
    }

    public function getMetadata(): array
    {
        return $this->metadata;
    }

    public function setMetadata(array $metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    public function getOrder(): OrderLight
    {
        return $this->order;
    }

    public function setOrder(OrderLight $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getPayments(): array
    {
        return $this->payments;
    }

    public function setPayments(array $payments): self
    {
        $this->payments = $payments;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

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

    public function getMinAmount(): int
    {
        return $this->minAmount;
    }

    public function setMinAmount(int $minAmount): self
    {
        $this->minAmount = $minAmount;

        return $this;
    }

    public function getDiscount(): ItemDiscount
    {
        return $this->discount;
    }

    public function setDiscount(ItemDiscount $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function setOptions(array $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getTicketUrl(): string
    {
        return $this->ticketUrl;
    }

    public function setTicketUrl(string $ticketUrl): self
    {
        $this->ticketUrl = $ticketUrl;

        return $this;
    }

    public function getQrCode(): string
    {
        return $this->qrCode;
    }

    public function setQrCode(string $qrCode): self
    {
        $this->qrCode = $qrCode;

        return $this;
    }

    public function getMembershipCardUrl(): string
    {
        return $this->membershipCardUrl;
    }

    public function setMembershipCardUrl(string $membershipCardUrl): self
    {
        $this->membershipCardUrl = $membershipCardUrl;

        return $this;
    }

    public function getDayOfLevy(): int
    {
        return $this->dayOfLevy;
    }

    public function setDayOfLevy(int $dayOfLevy): self
    {
        $this->dayOfLevy = $dayOfLevy;

        return $this;
    }

    public function getTierDescription(): string
    {
        return $this->tierDescription;
    }

    public function setTierDescription(string $tierDescription): self
    {
        $this->tierDescription = $tierDescription;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

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