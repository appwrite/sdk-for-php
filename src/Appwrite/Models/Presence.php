<?php

namespace Appwrite\Models;

/**
 * Presence
 */
readonly class Presence
{
    use ArraySerializable;

    private const ADDITIONAL_PROPERTIES = true;

    /**
     * Presence constructor.
     *
     * @param string $id presence id.
     * @param string $sequence presence sequence id.
     * @param string $createdAt presence creation date in iso 8601 format.
     * @param string $updatedAt presence update date in iso 8601 format.
     * @param array $permissions presence permissions. [learn more about permissions](https://appwrite.io/docs/permissions).
     * @param string $userInternalId user internal id.
     * @param string $userId user id.
     * @param string $source presence source.
     * @param string|null $status presence status.
     * @param string|null $expiresAt presence expiry date in iso 8601 format.
     * @param array<string, mixed> $data Additional properties.
     */
    public function __construct(
        public string $id,
        public string $sequence,
        public string $createdAt,
        public string $updatedAt,
        public array $permissions,
        public string $userInternalId,
        public string $userId,
        public string $source,
        public ?string $status = null,
        public ?string $expiresAt = null,
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
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$permissions', $data)) {
            throw new \InvalidArgumentException('Missing required field "$permissions" for ' . static::class . '.');
        }
        if (!array_key_exists('userInternalId', $data)) {
            throw new \InvalidArgumentException('Missing required field "userInternalId" for ' . static::class . '.');
        }
        if (!array_key_exists('userId', $data)) {
            throw new \InvalidArgumentException('Missing required field "userId" for ' . static::class . '.');
        }
        if (!array_key_exists('source', $data)) {
            throw new \InvalidArgumentException('Missing required field "source" for ' . static::class . '.');
        }

        $additionalProperties = static::extractAdditionalPropertiesFromFields(
            $data,
            [
                '$id',
                '$sequence',
                '$createdAt',
                '$updatedAt',
                '$permissions',
                'userInternalId',
                'userId',
                'status',
                'source',
                'expiresAt'
            ]
        );

        return new static(
            id: $data['$id'],
            sequence: $data['$sequence'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            permissions: $data['$permissions'],
            userInternalId: $data['userInternalId'],
            userId: $data['userId'],
            source: $data['source'],
            status: array_key_exists('status', $data) ? $data['status'] : null,
            expiresAt: array_key_exists('expiresAt', $data) ? $data['expiresAt'] : null,
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
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            '$permissions' => static::serializeValue($this->permissions),
            'userInternalId' => static::serializeValue($this->userInternalId),
            'userId' => static::serializeValue($this->userId),
            'status' => static::serializeValue($this->status),
            'source' => static::serializeValue($this->source),
            'expiresAt' => static::serializeValue($this->expiresAt)
        ];

        foreach (static::serializeAdditionalProperties($this->data) as $field => $value) {
            $result[$field] = $value;
        }

        return $result;
    }
}
