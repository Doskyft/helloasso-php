<?php

declare(strict_types=1);

namespace Helloasso\Models\Payments;

use Helloasso\Models\HelloassoObject;

/**
 * @see https://dev.helloasso.com/reference/post_payments-paymentid-refund
 */
final readonly class Refund implements HelloassoObject
{
    public function __construct(
        public int $id,
        public int $amount,
        public bool $cancelOrder,
        public \DateTimeImmutable $creationDate,
        public RefundState $state,
        public bool $sendRefundMail,
        public int $paymentId,
    ) {
    }
}
