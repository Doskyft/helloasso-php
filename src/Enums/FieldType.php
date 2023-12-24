<?php

declare(strict_types=1);

namespace Helloasso\Enums;

enum FieldType: string
{
    // This field represent a date matching ISO 8601 DateTimeOffset
    case Date = 'Date';

    // This fields in limited text 250 char
    case TextInput = 'TextInput';

    // Same as TextInput
    case FreeText = 'FreeText';

    // A multi choice list, with values specified int the field definition
    case ChoiceList = 'ChoiceList';

    // A file to be uploaded
    case File = 'File';

    // A simple checkbox
    case YesNo = 'YesNo';

    // The field should be a phone number
    case Phone = 'Phone';

    // The field should be a valid phone number
    case Zipcode = 'Zipcode';

    // The field should be a number
    case Number = 'Number';
}
