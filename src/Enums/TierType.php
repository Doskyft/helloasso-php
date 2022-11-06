<?php

declare(strict_types=1);

namespace Helloasso\Enums;

enum TierType: string
{
    case Donation = 'Donation';
    case Payment = 'Payment';
    case Registration = 'Registration';
    case Membership = 'Membership';
    case MonthlyDonation = 'MonthlyDonation';
    case MonthlyPayment = 'MonthlyPayment';
    case OfflineDonation = 'OfflineDonation';
    case Contribution = 'Contribution';
    case Bonus = 'Bonus';
    case Product = 'Product';
}
