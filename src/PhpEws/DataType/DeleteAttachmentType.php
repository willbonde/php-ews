<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the DeleteAttachmentType type
 */
class DeleteAttachmentType extends DataType
{
    /**
     * AttachmentIds property
     *
     * @var EWSType_NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
}
