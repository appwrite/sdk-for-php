<?php

namespace Appwrite\Models;

/**
 * Document
 */
readonly class Document
{
    use ArraySerializable;

    private const ADDITIONAL_PROPERTIES = true;

    /**
     * Document constructor.
     *
     * @param string $id document id.
     * @param string $sequence document sequence id.
     * @param string $collectionId collection id.
     * @param string $databaseId database id.
     * @param string $createdAt document creation date in iso 8601 format.
     * @param string $updatedAt document update date in iso 8601 format.
     * @param array $permissions document permissions. [learn more about permissions](https://appwrite.io/docs/permissions).
     * @param array<string, mixed> $data Additional properties.
     */
    public function __construct(
        public string $id,
        public string $sequence,
        public string $collectionId,
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
        if (!array_key_exists('$collectionId', $data)) {
            throw new \InvalidArgumentException('Missing required field "$collectionId" for ' . static::class . '.');
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
                '$collectionId',
                '$databaseId',
                '$createdAt',
                '$updatedAt',
                '$permissions'
            ]
        );

        return new static(
            id: $data['$id'],
            sequence: $data['$sequence'],
            collectionId: $data['$collectionId'],
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
            '$collectionId' => static::serializeValue($this->collectionId),
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
