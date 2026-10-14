<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Block
 *
 * @phpstan-consistent-constructor
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
     * @param string $mode block mode. full blocks reads and writes; readonly blocks writes only.
     * @param string|null $expiredAt block expiration date in iso 8601 format. can be null if the block does not expire.
     */
    public function __construct(
        public string $createdAt,
        public string $resourceType,
        public string $resourceId,
        public string $mode,
        public ?string $expiredAt = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$createdAt' => "",
            'resourceType' => "",
            'resourceId' => "",
            'mode' => "full",
        ];

        return new static(
            createdAt: $data['$createdAt'],
            resourceType: $data['resourceType'],
            resourceId: $data['resourceId'],
            mode: $data['mode'],
            expiredAt: $data['expiredAt'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$createdAt' => static::serializeValue($this->createdAt),
            'resourceType' => static::serializeValue($this->resourceType),
            'resourceId' => static::serializeValue($this->resourceId),
            'mode' => static::serializeValue($this->mode),
            'expiredAt' => static::serializeValue($this->expiredAt)
        ];
    }
}
