<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Target
 *
 * @phpstan-consistent-constructor
 */
readonly class Target
{
    use ArraySerializable;

    /**
     * Target constructor.
     *
     * @param string $id target id.
     * @param string $createdAt target creation time in iso 8601 format.
     * @param string $updatedAt target update date in iso 8601 format.
     * @param string $name target name.
     * @param string $userId user id.
     * @param string $providerType the target provider type. can be one of the following: `email`, `sms` or `push`.
     * @param string $identifier the target identifier.
     * @param bool $expired is the target expired.
     * @param string|null $providerId provider id.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public string $userId,
        public string $providerType,
        public string $identifier,
        public bool $expired,
        public ?string $providerId = null
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
            'name' => "",
            'userId' => "",
            'providerType' => "",
            'identifier' => "",
            'expired' => false,
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            userId: $data['userId'],
            providerType: $data['providerType'],
            identifier: $data['identifier'],
            expired: $data['expired'],
            providerId: $data['providerId'] ?? null
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
            'name' => static::serializeValue($this->name),
            'userId' => static::serializeValue($this->userId),
            'providerId' => static::serializeValue($this->providerId),
            'providerType' => static::serializeValue($this->providerType),
            'identifier' => static::serializeValue($this->identifier),
            'expired' => static::serializeValue($this->expired)
        ];
    }
}
