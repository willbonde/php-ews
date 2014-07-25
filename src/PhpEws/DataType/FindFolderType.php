<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the FindFolderType type
 */
class FindFolderType extends DataType
{
    /**
     * FolderShape property
     *
     * @var EWSType_FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * IndexedPageFolderView property
     *
     * @var EWSType_IndexedPageViewType
     */
    public $IndexedPageFolderView;

    /**
     * FractionalPageFolderView property
     *
     * @var EWSType_FractionalPageViewType
     */
    public $FractionalPageFolderView;

    /**
     * Restriction property
     *
     * @var EWSType_RestrictionType
     */
    public $Restriction;

    /**
     * ParentFolderIds property
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $ParentFolderIds;

    /**
     * Traversal property
     *
     * @var EWSType_FolderQueryTraversalType
     */
    public $Traversal;
}
