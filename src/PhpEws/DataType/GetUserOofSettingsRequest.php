<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the GetUserOofSettingsRequest type
 */
class GetUserOofSettingsRequest extends DataType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddress
     */
    public $Mailbox;
}
