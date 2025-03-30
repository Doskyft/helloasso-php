<?php

declare(strict_types=1);

namespace Helloasso\Service;

use Helloasso\Exception\HelloassoApiException;
use Helloasso\Http\ApiCaller;

class OrderService
{
    public function __construct(
        private readonly ApiCaller $apiCaller,
    ) {
    }

    /**
     * @throws HelloassoApiException
     */
    public function cancel(int $id): void
    {
        $this->apiCaller->post("/v5/orders/$id/cancel");
    }
}
