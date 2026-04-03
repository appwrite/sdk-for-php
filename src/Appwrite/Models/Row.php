<?php

namespace Appwrite\Models;

/**
 * Row
 */
readonly class Row
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'sequence' => '$sequence',
        'tableId' => '$tableId',
        'databaseId' => '$databaseId',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt',
        'permissions' => '$permissions'
    ];

    private const ADDITIONAL_PROPERTIES = true;

    /**
     * Row constructor.
     *
     * @param string $id row id.
     * @param string $sequence row sequence id.
     * @param string $tableId table id.
     * @param string $databaseId database id.
     * @param string $createdAt row creation date in iso 8601 format.
     * @param string $updatedAt row update date in iso 8601 format.
     * @param array $permissions row permissions. [learn more about permissions](https://appwrite.io/docs/permissions).
     * @param array<string, mixed> $data Additional properties.
     */
    public function __construct(
        public string $id,
        public string $sequence,
        public string $tableId,
        public string $databaseId,
        public string $createdAt,
        public string $updatedAt,
        public array $permissions,
        public array $data = []
    ) {
    }
}
