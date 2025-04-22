<?php

declare(strict_types=1);

namespace Helloasso\Service;

use Helloasso\Exception\HelloassoApiException;
use Helloasso\Http\ApiCaller;
use Helloasso\Models\Statistics\Order;
use Helloasso\Models\Statistics\OrderCollection;

class OrderService
{
    public function __construct(
        private readonly ApiCaller $apiCaller,
        private readonly string $organizationSlug,
    ) {
    }

    /**
     * @throws HelloassoApiException
     */
    public function retrieve(int $id): Order
    {
        return $this->apiCaller->get("/v5/orders/$id", Order::class);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @throws HelloassoApiException
     */
    public function all(array $params = []): OrderCollection
    {
        return $this->apiCaller->get("/v5/organizations/{$this->organizationSlug}/orders", OrderCollection::class, [
            'query' => $params,
        ]);
    }

    /**
     * @throws HelloassoApiException
     */
    public function cancel(int $id): void
    {
        $this->apiCaller->post("/v5/orders/$id/cancel");
    }
}
