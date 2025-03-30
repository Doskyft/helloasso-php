<?php

declare(strict_types=1);

namespace Helloasso\Models\Carts;

use Helloasso\Models\HelloassoObject;

class CheckoutTerm implements HelloassoObject
{
    /**
     * Montant de l’échéance (TTC) en centimes.
     *
     * @example 1000 (pour : 10.00€)
     */
    private int $amount;

    /**
     * Date de l’échéance.
     */
    private \DateTimeInterface $date;

    public function __construct(
        ?int $amount = null,
        ?\DateTimeInterface $date = null,
    ) {
        if (null !== $amount) {
            $this->amount = $amount;
        }
        if (null !== $date) {
            $this->date = $date;
        }
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

    public function getDate(): \DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
