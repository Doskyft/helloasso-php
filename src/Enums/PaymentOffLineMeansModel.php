<?php

declare(strict_types=1);

namespace Helloasso\Enums;

enum PaymentOffLineMeansModel: string
{
    case Cash = 'Cash';
    case Check = 'Check';
    case BankTransfer = 'BankTransfer';
}
