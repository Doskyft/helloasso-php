<?php

declare(strict_types=1);

namespace Helloasso\Models\Statistics;

use Helloasso\Enums\PaymentCashOutState;
use Helloasso\Enums\PaymentMeans;
use Helloasso\Enums\PaymentOffLineMeansModel;
use Helloasso\Enums\PaymentState;
use Helloasso\Enums\PaymentType;
use Helloasso\Models\Common\MetaModel;
use Helloasso\Models\HelloassoObject;

class Payment implements HelloassoObject
{
    private OrderLight $order;
    private PayerLight $payer;

    /**
     * @var array<PaymentItem>
     */
    private array $items;

    private \DateTime $cashOutDate;
    private PaymentCashOutState $cashOutState;
    private string $paymentReceiptUrl;
    private string $fiscalReceiptUrl;
    private int $id;
    private int $amount;
    private int $amountTip;
    private \DateTime $date;
    private PaymentMeans $paymentMeans;
    private PaymentState $state;
    private PaymentType $type;
    private MetaModel $meta;
    private PaymentOffLineMeansModel $paymentOffLineMean;

    public function getOrder(): OrderLight
    {
        return $this->order;
    }

    public function setOrder(OrderLight $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getPayer(): PayerLight
    {
        return $this->payer;
    }

    public function setPayer(PayerLight $payer): self
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

    public function getCashOutDate(): \DateTime
    {
        return $this->cashOutDate;
    }

    public function setCashOutDate(\DateTime $cashOutDate): self
    {
        $this->cashOutDate = $cashOutDate;

        return $this;
    }

    public function getCashOutState(): PaymentCashOutState
    {
        return $this->cashOutState;
    }

    public function setCashOutState(PaymentCashOutState $cashOutState): self
    {
        $this->cashOutState = $cashOutState;

        return $this;
    }

    public function getPaymentReceiptUrl(): string
    {
        return $this->paymentReceiptUrl;
    }

    public function setPaymentReceiptUrl(string $paymentReceiptUrl): self
    {
        $this->paymentReceiptUrl = $paymentReceiptUrl;

        return $this;
    }

    public function getFiscalReceiptUrl(): string
    {
        return $this->fiscalReceiptUrl;
    }

    public function setFiscalReceiptUrl(string $fiscalReceiptUrl): self
    {
        $this->fiscalReceiptUrl = $fiscalReceiptUrl;

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

    public function getAmountTip(): int
    {
        return $this->amountTip;
    }

    public function setAmountTip(int $amountTip): self
    {
        $this->amountTip = $amountTip;

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

    public function getPaymentMeans(): PaymentMeans
    {
        return $this->paymentMeans;
    }

    public function setPaymentMeans(PaymentMeans $paymentMeans): self
    {
        $this->paymentMeans = $paymentMeans;

        return $this;
    }

    public function getState(): PaymentState
    {
        return $this->state;
    }

    public function setState(PaymentState $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getType(): PaymentType
    {
        return $this->type;
    }

    public function setType(PaymentType $type): self
    {
        $this->type = $type;

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

    public function getPaymentOffLineMean(): PaymentOffLineMeansModel
    {
        return $this->paymentOffLineMean;
    }

    public function setPaymentOffLineMean(PaymentOffLineMeansModel $paymentOffLineMean): self
    {
        $this->paymentOffLineMean = $paymentOffLineMean;

        return $this;
    }
}