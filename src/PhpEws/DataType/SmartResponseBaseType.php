<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SmartResponseBaseType type
 */
class SmartResponseBaseType extends DataType
{
    /**
     * Subject property
     *
     * @var string
     */
    public $Subject;

    /**
     * Body property
     *
     * @var EWSType_BodyType
     */
    public $Body;

    /**
     * ToRecipients property
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $ToRecipients;

    /**
     * CcRecipients property
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $CcRecipients;

    /**
     * BccRecipients property
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $BccRecipients;

    /**
     * IsReadReceiptRequested property
     *
     * @var boolean
     */
    public $IsReadReceiptRequested;

    /**
     * IsDeliveryReceiptRequested property
     *
     * @var boolean
     */
    public $IsDeliveryReceiptRequested;

    /**
     * From property
     *
     * @var EWSType_SingleRecipientType
     */
    public $From;

    /**
     * ReferenceItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ReferenceItemId;

    /**
     * ObjectName property
     *
     * @var string
     */
    public $ObjectName;
}
