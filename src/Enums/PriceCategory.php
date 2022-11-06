<?php

declare(strict_types=1);

namespace Helloasso\Enums;

enum PriceCategory: string
{
    case Fixed = 'Fixed';

    // Pay what you want (with or without a minimum amount)
    case Pwyw = 'Pwyw';

    case Free = 'Free';
}
