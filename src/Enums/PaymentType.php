<?php

declare(strict_types=1);

namespace Helloasso\Enums;

enum PaymentType: string
{
    // A payment made outside the website
    case Offline = 'Offline';

    // Payment to be made to the organization
    case Credit = 'Credit';

    // Payment for balance adjustment
    case Debit = 'Debit';
}
