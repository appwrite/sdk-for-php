<?php

namespace Appwrite\Models;

/**
 * Table
 */
readonly class Table
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt',
        'permissions' => '$permissions'
    ];

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'indexes' => ColumnIndex::class
    ];

    /**
     * Table constructor.
     *
     * @param string $id table id.
     * @param string $createdAt table creation date in iso 8601 format.
     * @param string $updatedAt table update date in iso 8601 format.
     * @param array $permissions table permissions. [learn more about permissions](https://appwrite.io/docs/permissions).
     * @param string $databaseId database id.
     * @param string $name table name.
     * @param bool $enabled table enabled. can be 'enabled' or 'disabled'. when disabled, the table is inaccessible to users, but remains accessible to server sdks using api keys.
     * @param bool $rowSecurity whether row-level permissions are enabled. [learn more about permissions](https://appwrite.io/docs/permissions).
     * @param array $columns table columns.
     * @param list<ColumnIndex> $indexes table indexes.
     * @param int $bytesMax maximum row size in bytes. returns 0 when no limit applies.
     * @param int $bytesUsed currently used row size in bytes based on defined columns.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public array $permissions,
        public string $databaseId,
        public string $name,
        public bool $enabled,
        public bool $rowSecurity,
        public array $columns,
        public array $indexes,
        public int $bytesMax,
        public int $bytesUsed
    ) {
    }
}
