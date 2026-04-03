<?php

namespace Appwrite\Models;

/**
 * Collection
 */
readonly class Collection
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
        'indexes' => Index::class
    ];

    /**
     * Collection constructor.
     *
     * @param string $id collection id.
     * @param string $createdAt collection creation date in iso 8601 format.
     * @param string $updatedAt collection update date in iso 8601 format.
     * @param array $permissions collection permissions. [learn more about permissions](https://appwrite.io/docs/permissions).
     * @param string $databaseId database id.
     * @param string $name collection name.
     * @param bool $enabled collection enabled. can be 'enabled' or 'disabled'. when disabled, the collection is inaccessible to users, but remains accessible to server sdks using api keys.
     * @param bool $documentSecurity whether document-level permissions are enabled. [learn more about permissions](https://appwrite.io/docs/permissions).
     * @param array $attributes collection attributes.
     * @param list<Index> $indexes collection indexes.
     * @param int $bytesMax maximum document size in bytes. returns 0 when no limit applies.
     * @param int $bytesUsed currently used document size in bytes based on defined attributes.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public array $permissions,
        public string $databaseId,
        public string $name,
        public bool $enabled,
        public bool $documentSecurity,
        public array $attributes,
        public array $indexes,
        public int $bytesMax,
        public int $bytesUsed
    ) {
    }
}
