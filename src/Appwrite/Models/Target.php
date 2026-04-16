<?php

namespace Appwrite\Models;

/**
 * Target
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
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('userId', $data)) {
            throw new \InvalidArgumentException('Missing required field "userId" for ' . static::class . '.');
        }
        if (!array_key_exists('providerType', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerType" for ' . static::class . '.');
        }
        if (!array_key_exists('identifier', $data)) {
            throw new \InvalidArgumentException('Missing required field "identifier" for ' . static::class . '.');
        }
        if (!array_key_exists('expired', $data)) {
            throw new \InvalidArgumentException('Missing required field "expired" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            userId: $data['userId'],
            providerType: $data['providerType'],
            identifier: $data['identifier'],
            expired: $data['expired'],
            providerId: array_key_exists('providerId', $data) ? $data['providerId'] : null
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
            'name' => static::serializeValue($this->name),
            'userId' => static::serializeValue($this->userId),
            'providerId' => static::serializeValue($this->providerId),
            'providerType' => static::serializeValue($this->providerType),
            'identifier' => static::serializeValue($this->identifier),
            'expired' => static::serializeValue($this->expired)
        ];

        return $result;
    }
}
