<?php

declare(strict_types=1);

namespace Helloasso\Models\Statistics;

use Helloasso\Models\Common\Collection;

/**
 * @extends Collection<Payment>
 */
class PaymentCollection extends Collection
{
    /**
     * Overriding the property with an @var annotation is needed for the
     * serializer component until generics are not supported.
     *
     * @var Payment[]
     */
    protected array $data = [];
}
