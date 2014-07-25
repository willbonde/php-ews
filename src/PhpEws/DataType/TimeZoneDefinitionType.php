<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the TimeZoneDefinitionType type.
 */
class TimeZoneDefinitionType extends DataType
{
    /**
     * Unique identifier of the time zone definition.
     *
     * @var string
     */
    public $Id;

    /**
     * Descriptive name of the time zone definition.
     *
     * @var string
     */
    public $Name;

    /**
     * Array of Period elements that define the time offset at different stages
     * of the time zone.
     *
     * @var EWSType_NonEmptyArrayOfPeriodsType
     */
    public $Periods;

    /**
     * Array of TransitionsGroup elements that specify time zone transitions.
     *
     * @var EWSType_ArrayOfTransitionsGroupsType
     */
    public $TransitionsGroups;

    /**
     * Array of time zone transitions.
     *
     * @var EWSType_ArrayOfTransitionsType
     */
    public $Transitions;
}
