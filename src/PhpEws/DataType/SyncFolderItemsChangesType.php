<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SyncFolderItemsChangesType type
 */
class SyncFolderItemsChangesType extends DataType
{
    /**
     * Create property
     *
     * @var EWSType_SyncFolderItemsCreateOrUpdateType
     */
    public $Create;

    /**
     * Update property
     *
     * @var EWSType_SyncFolderItemsCreateOrUpdateType
     */
    public $Update;

    /**
     * Delete property
     *
     * @var EWSType_SyncFolderItemsDeleteType
     */
    public $Delete;

    /**
     * ReadFlagChange property
     *
     * @var EWSType_SyncFolderItemsReadFlagType
     */
    public $ReadFlagChange;
}
