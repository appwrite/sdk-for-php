<?php

namespace Appwrite\Models;

use Appwrite\Enums\DatabaseType;

/**
 * Database
 */
readonly class Database
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt'
    ];

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'policies' => Index::class,
        'archives' => Collection::class
    ];

    /**
     * Database constructor.
     *
     * @param string $id database id.
     * @param string $name database name.
     * @param string $createdAt database creation date in iso 8601 format.
     * @param string $updatedAt database update date in iso 8601 format.
     * @param bool $enabled if database is enabled. can be 'enabled' or 'disabled'. when disabled, the database is inaccessible to users, but remains accessible to server sdks using api keys.
     * @param DatabaseType $type database type.
     * @param list<Index> $policies database backup policies.
     * @param list<Collection> $archives database backup archives.
     */
    public function __construct(
        public string $id,
        public string $name,
        public string $createdAt,
        public string $updatedAt,
        public bool $enabled,
        public DatabaseType $type,
        public array $policies,
        public array $archives
    ) {
    }
}
