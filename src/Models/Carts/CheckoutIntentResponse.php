<?php

declare(strict_types=1);

namespace Helloasso\Models\Carts;

use Helloasso\Models\HelloassoObject;
use Helloasso\Models\Statistics\OrderDetail;

class CheckoutIntentResponse implements HelloassoObject
{
    /**
     * ID of the checkout intent.
     */
    private int $id;

    /**
     * Url where the contributor must be redirected to.
     */
    private string $redirectUrl;

    private array $metadata;

    private ?OrderDetail $order = null;

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

    public function getMetadata(): array
    {
        return $this->metadata;
    }

    public function setMetadata(array $metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    public function getOrder(): ?OrderDetail
    {
        return $this->order;
    }

    public function setOrder(?OrderDetail $order): self
    {
        $this->order = $order;

        return $this;
    }
}
