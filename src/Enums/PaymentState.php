<?php

declare(strict_types=1);

namespace Helloasso\Enums;

enum PaymentState: string
{
    // A payment scheduled at a later date, not yet processed.
    case Pending = 'Pending';

    // The payment has been authorized, validated, processed.
    case Authorized = 'Authorized';

    // The payment has been refused by the bank.
    case Refused = 'Refused';

    case Unknown = 'Unknown';

    // Represents a payment made offline. Probably for an item of type
    case Registered = 'Registered';

    // The payment has been refunded.
    case Refunded = 'Refunded';

    // The payment is being refunded.
    case Refunding = 'Refunding';

    // Payment has been contested by the contributor
    case Contested = 'Contested';
}

