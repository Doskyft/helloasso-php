<?php

declare(strict_types=1);

namespace Helloasso\Service;

use Helloasso\Exception\HelloassoApiException;
use Helloasso\Http\ApiCaller;
use Helloasso\Models\Statistics\Payment;
use Helloasso\Models\Statistics\PaymentCollection;

class PaymentService
{
    public function __construct(
        private readonly ApiCaller $apiCaller,
        private readonly string $organizationSlug,
    ) {
    }

    /**
     * @throws HelloassoApiException
     */
    public function retrieve(int $id): Payment
    {
        return $this->apiCaller->get("/v5/payments/$id", Payment::class);
    }

    /**
     * @throws HelloassoApiException
     */
    public function all(array $params = []): PaymentCollection
    {
        return $this->apiCaller->get("/v5/organizations/{$this->organizationSlug}/payments", PaymentCollection::class, [
            'query' => $params,
        ]);
    }

    /**
     * @throws HelloassoApiException
     */
    public function refund(int $id, array $params = []): Payment
    {
        return $this->apiCaller->post("/v5/payments/$id/refund", null, Payment::class, [
            'query' => $params,
        ]);
    }
}
