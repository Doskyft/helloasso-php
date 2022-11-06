<?php

declare(strict_types=1);

namespace Helloasso\Enums;

enum PaymentMeans: string
{
    case None = 'None';
    case Card = 'Card';
    case Sepa = 'Sepa';
    case Check = 'Check';
}
