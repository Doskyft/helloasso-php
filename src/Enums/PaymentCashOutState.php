<?php

declare(strict_types=1);

namespace Helloasso\Enums;

enum PaymentCashOutState: string
{
    case MoneyIn = 'MoneyIn';
    case CantTransferReceiverFull = 'CantTransferReceiverFull';
    case Transfered = 'Transfered';
    case Refunded = 'Refunded';
    case Refunding = 'Refunding';
    case WaitingForCashOutConfirmation = 'WaitingForCashOutConfirmation';
    case CashedOut = 'CashedOut';
    case Unknown = 'Unknown';
    case Contested = 'Contested';
    case TransferInProgress = 'TransferInProgress';
}
