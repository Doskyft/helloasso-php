<?php

namespace Helloasso\Object;

class Term implements HelloassoObject
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
    private \DateTime $date;

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
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
}
