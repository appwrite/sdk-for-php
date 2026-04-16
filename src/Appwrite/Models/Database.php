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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }
        if (!array_key_exists('policies', $data)) {
            throw new \InvalidArgumentException('Missing required field "policies" for ' . static::class . '.');
        }
        if (!array_key_exists('archives', $data)) {
            throw new \InvalidArgumentException('Missing required field "archives" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            name: $data['name'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            enabled: $data['enabled'],
            type: static::hydrateTypedValue(DatabaseType::class, $data['type']),
            policies: is_array($data['policies'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Index::class, $item),
                    $data['policies']
                )
                : $data['policies'],
            archives: is_array($data['archives'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Collection::class, $item),
                    $data['archives']
                )
                : $data['archives']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            'name' => static::serializeValue($this->name),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'enabled' => static::serializeValue($this->enabled),
            'type' => static::serializeValue($this->type),
            'policies' => static::serializeValue($this->policies),
            'archives' => static::serializeValue($this->archives)
        ];

        return $result;
    }
}
