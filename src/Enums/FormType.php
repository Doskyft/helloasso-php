<?php

declare(strict_types=1);

namespace Helloasso\Enums;

enum FormType: string
{
    case CrowdFunding = 'CrowdFunding';
    case Membership = 'Membership';
    case Event = 'Event';
    case Donation = 'Donation';
    case PaymentForm = 'PaymentForm';
    case Checkout = 'Checkout';
    case Shop = 'Shop';
}
