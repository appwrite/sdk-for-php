<?php

namespace Appwrite\Models;

/**
 * Block
 */
readonly class Block
{
    use ArraySerializable;

    /**
     * Block constructor.
     *
     * @param string $createdAt block creation date in iso 8601 format.
     * @param string $resourceType resource type that is blocked
     * @param string $resourceId resource identifier that is blocked
     * @param string|null $reason reason for the block. can be null if no reason was provided.
     * @param string|null $expiredAt block expiration date in iso 8601 format. can be null if the block does not expire.
     */
    public function __construct(
        public string $createdAt,
        public string $resourceType,
        public string $resourceId,
        public ?string $reason = null,
        public ?string $expiredAt = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('resourceType', $data)) {
            throw new \InvalidArgumentException('Missing required field "resourceType" for ' . static::class . '.');
        }
        if (!array_key_exists('resourceId', $data)) {
            throw new \InvalidArgumentException('Missing required field "resourceId" for ' . static::class . '.');
        }

        return new static(
            createdAt: $data['$createdAt'],
            resourceType: $data['resourceType'],
            resourceId: $data['resourceId'],
            reason: array_key_exists('reason', $data) ? $data['reason'] : null,
            expiredAt: array_key_exists('expiredAt', $data) ? $data['expiredAt'] : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$createdAt' => static::serializeValue($this->createdAt),
            'resourceType' => static::serializeValue($this->resourceType),
            'resourceId' => static::serializeValue($this->resourceId),
            'reason' => static::serializeValue($this->reason),
            'expiredAt' => static::serializeValue($this->expiredAt)
        ];

        return $result;
    }
}
