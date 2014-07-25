<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the MeetingMessageType type
 */
class MeetingMessageType extends DataType
{
    /**
     * AssociatedCalendarItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $AssociatedCalendarItemId;

    /**
     * IsDelegated property
     *
     * @var boolean
     */
    public $IsDelegated;

    /**
     * IsOutOfDate property
     *
     * @var boolean
     */
    public $IsOutOfDate;

    /**
     * HasBeenProcessed property
     *
     * @var boolean
     */
    public $HasBeenProcessed;

    /**
     * ResponseType property
     *
     * @var EWSType_ResponseTypeType
     */
    public $ResponseType;

    /**
     * UID property
     *
     * @var string
     */
    public $UID;

    /**
     * RecurrenceId property
     *
     * @var EWSType_dateTime
     */
    public $RecurrenceId;

    /**
     * DateTimeStamp property
     *
     * @var EWSType_dateTime
     */
    public $DateTimeStamp;
}
