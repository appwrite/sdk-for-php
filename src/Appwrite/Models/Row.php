<?php

namespace Appwrite\Models;

/**
 * Row
 */
readonly class Row
{
    use ArraySerializable;

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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('$sequence', $data)) {
            throw new \InvalidArgumentException('Missing required field "$sequence" for ' . static::class . '.');
        }
        if (!array_key_exists('$tableId', $data)) {
            throw new \InvalidArgumentException('Missing required field "$tableId" for ' . static::class . '.');
        }
        if (!array_key_exists('$databaseId', $data)) {
            throw new \InvalidArgumentException('Missing required field "$databaseId" for ' . static::class . '.');
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

        $additionalProperties = static::extractAdditionalPropertiesFromFields(
            $data,
            [
                '$id',
                '$sequence',
                '$tableId',
                '$databaseId',
                '$createdAt',
                '$updatedAt',
                '$permissions'
            ]
        );

        return new static(
            id: $data['$id'],
            sequence: $data['$sequence'],
            tableId: $data['$tableId'],
            databaseId: $data['$databaseId'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            permissions: $data['$permissions'],
            data: $additionalProperties
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            '$sequence' => static::serializeValue($this->sequence),
            '$tableId' => static::serializeValue($this->tableId),
            '$databaseId' => static::serializeValue($this->databaseId),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            '$permissions' => static::serializeValue($this->permissions)
        ];

        foreach (static::serializeAdditionalProperties($this->data) as $field => $value) {
            $result[$field] = $value;
        }

        return $result;
    }
}
