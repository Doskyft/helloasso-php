<?php

declare(strict_types=1);

namespace Helloasso\Service;

use Helloasso\Exception\HelloassoApiException;
use Helloasso\Http\ApiCaller;
use Helloasso\Models\Carts\CheckoutIntentResponse;
use Helloasso\Models\Carts\InitCheckoutBody;
use Helloasso\Models\Carts\InitCheckoutResponse;

class CheckoutIntentService
{
    public function __construct(
        private readonly ApiCaller $apiCaller,
        private readonly string $organizationSlug,
    ) {
    }

    /**
     * @throws HelloassoApiException
     */
    public function create(InitCheckoutBody $checkoutIntent): InitCheckoutResponse
    {
        $url = sprintf('/v5/organizations/%s/checkout-intents', $this->organizationSlug);

        return $this->apiCaller->post($url, $checkoutIntent, InitCheckoutResponse::class);
    }

    /**
     * @throws HelloassoApiException
     */
    public function retrieve(int $checkoutIntentId): CheckoutIntentResponse
    {
        $url = sprintf('/v5/organizations/%s/checkout-intents/%d', $this->organizationSlug, $checkoutIntentId);

        return $this->apiCaller->get($url, CheckoutIntentResponse::class);
    }
}
