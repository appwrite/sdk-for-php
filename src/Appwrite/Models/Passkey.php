<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Passkey
 *
 * @phpstan-consistent-constructor
 */
readonly class Passkey
{
    use ArraySerializable;

    /**
     * Passkey constructor.
     *
     * @param string $id passkey id.
     * @param string $createdAt passkey creation date in iso 8601 format.
     * @param string $updatedAt passkey update date in iso 8601 format.
     * @param string $name passkey name.
     * @param string $accessedAt most recent sign-in with this passkey in iso 8601 format. empty until the passkey is used to sign in.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public string $accessedAt
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
        if (!array_key_exists('accessedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "accessedAt" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            accessedAt: $data['accessedAt']
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
            'accessedAt' => static::serializeValue($this->accessedAt)
        ];
    }
}
