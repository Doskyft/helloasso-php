<?php

declare(strict_types=1);

namespace Helloasso\Models\Payments;

enum RefundState: string
{
    case Unknown = 'Unknown';
    case Init = 'Init';
    case Processing = 'Processing';
    case Processed = 'Processed';
    case Error = 'Error';
    case InternalError = 'InternalError';
    case Refused = 'Refused';
    case Aborted = 'Aborted';
    case Canceled = 'Canceled';
}
