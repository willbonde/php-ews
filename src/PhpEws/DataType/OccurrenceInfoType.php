<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the OccurrenceInfoType type
 */
class OccurrenceInfoType extends DataType
{
    /**
     * ItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * Start property
     *
     * @var EWSType_dateTime
     */
    public $Start;

    /**
     * End property
     *
     * @var EWSType_dateTime
     */
    public $End;

    /**
     * OriginalStart property
     *
     * @var EWSType_dateTime
     */
    public $OriginalStart;
}
