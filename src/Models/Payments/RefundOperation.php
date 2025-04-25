<?php

declare(strict_types=1);

namespace Helloasso\Models\Payments;

use Helloasso\Models\Common\MetaModel;
use Helloasso\Models\HelloassoObject;

final readonly class RefundOperation implements HelloassoObject
{
    public function __construct(
        public int $id,
        public int $amount,
        public int $amountTip,
        public RefundState $status,
        public MetaModel $meta,
    ) {
    }
}
