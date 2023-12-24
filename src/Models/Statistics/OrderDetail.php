<?php

declare(strict_types=1);

namespace Helloasso\Models\Statistics;

use Helloasso\Models\Common\MetaModel;
use Helloasso\Models\HelloassoObject;

class OrderDetail implements HelloassoObject
{
    private int $id;
    private Payer $payer;

    /**
     * @var array<OrderItem>
     */
    private array $items;

    /**
     * @var array<OrderPayment>
     */
    private array $payments;

    private OrderAmountModel $amount;

    private \DateTime $date;
    private string $formSlug;
    private string $organizationName;
    private string $organizationSlug;

    private string $formType;
    private MetaModel $meta;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getPayer(): Payer
    {
        return $this->payer;
    }

    public function setPayer(Payer $payer): self
    {
        $this->payer = $payer;

        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): self
    {
        $this->items = $items;

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

    public function getAmount(): OrderAmountModel
    {
        return $this->amount;
    }

    public function setAmount(OrderAmountModel $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getFormSlug(): string
    {
        return $this->formSlug;
    }

    public function setFormSlug(string $formSlug): self
    {
        $this->formSlug = $formSlug;

        return $this;
    }

    public function getFormType(): string
    {
        return $this->formType;
    }

    public function setFormType(string $formType): self
    {
        $this->formType = $formType;

        return $this;
    }

    public function getOrganizationName(): string
    {
        return $this->organizationName;
    }

    public function setOrganizationName(string $organizationName): self
    {
        $this->organizationName = $organizationName;

        return $this;
    }

    public function getOrganizationSlug(): string
    {
        return $this->organizationSlug;
    }

    public function setOrganizationSlug(string $organizationSlug): self
    {
        $this->organizationSlug = $organizationSlug;

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
}
