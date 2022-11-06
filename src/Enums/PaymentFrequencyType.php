<?php

declare(strict_types=1);

namespace Helloasso\Enums;

enum PaymentFrequencyType: string
{
    // A one time payment
    case Single = 'Single';

    // A multiple tume payment with predefined due dates
    case Installment = 'Installment';

    // A monthly payment until a date
    case Monthly = 'Monthly';
}
