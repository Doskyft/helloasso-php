<?php

declare(strict_types=1);

namespace Helloasso\Enums;

enum FormState: string
{
    // The form is publicly visible and findable on search engines
    case Public = 'Public';

    // The form is visible only with the URL, you cannot find it on search engines
    case Private = 'Private';

    // The form is not yet published but visible if you have admin rights
    case Draft = 'Draft';

    // The form is disabled and can be reenabled by changing state to public or private
    case Disabled = 'Disabled';

}
