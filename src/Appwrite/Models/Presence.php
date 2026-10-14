<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Presence
 *
 * @phpstan-consistent-constructor
 */
readonly class Presence
{
    use ArraySerializable;

    /**
     * Presence constructor.
     *
     * @param string $id presence id.
     * @param string $createdAt presence creation date in iso 8601 format.
     * @param string $updatedAt presence update date in iso 8601 format.
     * @param array $permissions presence permissions. [learn more about permissions](https://appwrite.io/docs/permissions).
     * @param string $userId user id.
     * @param string $source presence source.
     * @param string|null $status presence status.
     * @param string|null $expiresAt presence expiry date in iso 8601 format.
     * @param array|null $metadata presence metadata.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public array $permissions,
        public string $userId,
        public string $source,
        public ?string $status = null,
        public ?string $expiresAt = null,
        public ?array $metadata = null
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
            'userId' => "",
            'source' => "",
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            permissions: $data['$permissions'],
            userId: $data['userId'],
            source: $data['source'],
            status: $data['status'] ?? null,
            expiresAt: $data['expiresAt'] ?? null,
            metadata: $data['metadata'] ?? null
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
            'userId' => static::serializeValue($this->userId),
            'status' => static::serializeValue($this->status),
            'source' => static::serializeValue($this->source),
            'expiresAt' => static::serializeValue($this->expiresAt),
            'metadata' => static::serializeValue($this->metadata)
        ];
    }
}
