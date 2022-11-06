<?php

declare(strict_types=1);

namespace Helloasso\Enums;

enum ItemState: string
{
    // The item is paid and is valid
    case Processed = 'Processed';

    // The item has been registered manually by the organization and is valid
    case Registered = 'Registered';

    case Unknown = 'Unknown';

    // The item has been canceled, and is no longer valid
    case Canceled = 'Canceled';
}
