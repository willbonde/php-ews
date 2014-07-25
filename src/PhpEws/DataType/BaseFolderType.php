<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the BaseFolderType type
 */
class BaseFolderType extends DataType
{
    /**
     * FolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $FolderId;

    /**
     * ParentFolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $ParentFolderId;

    /**
     * FolderClass property
     *
     * @var string
     */
    public $FolderClass;

    /**
     * DisplayName property
     *
     * @var string
     */
    public $DisplayName;

    /**
     * TotalCount property
     *
     * @var integer
     */
    public $TotalCount;

    /**
     * ChildFolderCount property
     *
     * @var integer
     */
    public $ChildFolderCount;

    /**
     * ExtendedProperty property
     *
     * @var EWSType_ExtendedPropertyType
     */
    public $ExtendedProperty;

    /**
     * ManagedFolderInformation property
     *
     * @var EWSType_ManagedFolderInformationType
     */
    public $ManagedFolderInformation;

    /**
     * EffectiveRights property
     *
     * @var EWSType_EffectiveRightsType
     */
    public $EffectiveRights;
}
