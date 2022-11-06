<?php

declare(strict_types=1);

namespace Helloasso\Enums;

enum GlobalRole: string
{
    case OrganizationAdmin = 'OrganizationAdmin';
    case FormAdmin = 'FormAdmin';
    case GroupAdmin = 'GroupAdmin';
}
