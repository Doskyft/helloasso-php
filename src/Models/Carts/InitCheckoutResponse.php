<?php

declare(strict_types=1);

namespace Helloasso\Models\Carts;

use Helloasso\Models\HelloassoObject;

class InitCheckoutResponse implements HelloassoObject
{
    /**
     * ID of the checkout intent.
     */
    private int $id;

    /**
     * Url where the contributor must be redirected to.
     */
    private string $redirectUrl;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }

    public function setRedirectUrl(string $redirectUrl): self
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }
}