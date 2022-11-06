<?php

declare(strict_types=1);

namespace Helloasso\Enums;

enum RecordActionType: string
{
    case Insert = 'Insert';
    case Delete = 'Delete';
}
