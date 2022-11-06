<?php

declare(strict_types=1);

namespace Helloasso\Enums;

enum MembershipValidityType: string
{
    // Moving Year : valid until the same day next year.
    case MovingYear = 'MovingYear';

    // Custom : use start and end dates specified on the form
    case Custom = 'Custom';

    // Illimited : no end to validity
    case Illimited = 'Illimited';
}
