<?php

namespace Appwrite\Models;

/**
 * Collection
 */
readonly class Collection
{
    use ArraySerializable;

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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$permissions', $data)) {
            throw new \InvalidArgumentException('Missing required field "$permissions" for ' . static::class . '.');
        }
        if (!array_key_exists('databaseId', $data)) {
            throw new \InvalidArgumentException('Missing required field "databaseId" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }
        if (!array_key_exists('documentSecurity', $data)) {
            throw new \InvalidArgumentException('Missing required field "documentSecurity" for ' . static::class . '.');
        }
        if (!array_key_exists('attributes', $data)) {
            throw new \InvalidArgumentException('Missing required field "attributes" for ' . static::class . '.');
        }
        if (!array_key_exists('indexes', $data)) {
            throw new \InvalidArgumentException('Missing required field "indexes" for ' . static::class . '.');
        }
        if (!array_key_exists('bytesMax', $data)) {
            throw new \InvalidArgumentException('Missing required field "bytesMax" for ' . static::class . '.');
        }
        if (!array_key_exists('bytesUsed', $data)) {
            throw new \InvalidArgumentException('Missing required field "bytesUsed" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            permissions: $data['$permissions'],
            databaseId: $data['databaseId'],
            name: $data['name'],
            enabled: $data['enabled'],
            documentSecurity: $data['documentSecurity'],
            attributes: $data['attributes'],
            indexes: is_array($data['indexes'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Index::class, $item),
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
        $result = [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            '$permissions' => static::serializeValue($this->permissions),
            'databaseId' => static::serializeValue($this->databaseId),
            'name' => static::serializeValue($this->name),
            'enabled' => static::serializeValue($this->enabled),
            'documentSecurity' => static::serializeValue($this->documentSecurity),
            'attributes' => static::serializeValue($this->attributes),
            'indexes' => static::serializeValue($this->indexes),
            'bytesMax' => static::serializeValue($this->bytesMax),
            'bytesUsed' => static::serializeValue($this->bytesUsed)
        ];

        return $result;
    }
}
