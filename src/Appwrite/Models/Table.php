<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Table
 *
 * @phpstan-consistent-constructor
 */
readonly class Table
{
    use ArraySerializable;

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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            '$createdAt' => "",
            '$updatedAt' => "",
            '$permissions' => [],
            'databaseId' => "",
            'name' => "",
            'enabled' => true,
            'rowSecurity' => false,
            'columns' => [],
            'indexes' => [],
            'bytesMax' => 0,
            'bytesUsed' => 0,
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            permissions: $data['$permissions'],
            databaseId: $data['databaseId'],
            name: $data['name'],
            enabled: $data['enabled'],
            rowSecurity: $data['rowSecurity'],
            columns: $data['columns'],
            indexes: is_array($data['indexes'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(ColumnIndex::class, $item),
                    $data['indexes']
                )
                : $data['indexes'],
            bytesMax: $data['bytesMax'],
            bytesUsed: $data['bytesUsed']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            '$permissions' => static::serializeValue($this->permissions),
            'databaseId' => static::serializeValue($this->databaseId),
            'name' => static::serializeValue($this->name),
            'enabled' => static::serializeValue($this->enabled),
            'rowSecurity' => static::serializeValue($this->rowSecurity),
            'columns' => static::serializeValue($this->columns),
            'indexes' => static::serializeValue($this->indexes),
            'bytesMax' => static::serializeValue($this->bytesMax),
            'bytesUsed' => static::serializeValue($this->bytesUsed)
        ];
    }
}
