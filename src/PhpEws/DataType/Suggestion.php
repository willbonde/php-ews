<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the Suggestion type
 */
class Suggestion extends DataType
{
    /**
     * MeetingTime property
     *
     * @var EWSType_dateTime
     */
    public $MeetingTime;

    /**
     * IsWorkTime property
     *
     * @var boolean
     */
    public $IsWorkTime;

    /**
     * SuggestionQuality property
     *
     * @var EWSType_SuggestionQuality
     */
    public $SuggestionQuality;

    /**
     * AttendeeConflictDataArray property
     *
     * @var EWSType_ArrayOfAttendeeConflictData
     */
    public $AttendeeConflictDataArray;
}
