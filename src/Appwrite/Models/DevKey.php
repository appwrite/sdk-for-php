<?php

namespace Appwrite\Models;

/**
 * DevKey
 */
readonly class DevKey
{
    use ArraySerializable;

    /**
     * DevKey constructor.
     *
     * @param string $id key id.
     * @param string $createdAt key creation date in iso 8601 format.
     * @param string $updatedAt key update date in iso 8601 format.
     * @param string $name key name.
     * @param string $expire key expiration date in iso 8601 format.
     * @param string $secret secret key.
     * @param string $accessedAt most recent access date in iso 8601 format. this attribute is only updated again after 24 hours.
     * @param array $sdks list of sdk user agents that used this key.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public string $expire,
        public string $secret,
        public string $accessedAt,
        public array $sdks
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
        if (!array_key_exists('expire', $data)) {
            throw new \InvalidArgumentException('Missing required field "expire" for ' . static::class . '.');
        }
        if (!array_key_exists('secret', $data)) {
            throw new \InvalidArgumentException('Missing required field "secret" for ' . static::class . '.');
        }
        if (!array_key_exists('accessedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "accessedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('sdks', $data)) {
            throw new \InvalidArgumentException('Missing required field "sdks" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            expire: $data['expire'],
            secret: $data['secret'],
            accessedAt: $data['accessedAt'],
            sdks: $data['sdks']
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
            'expire' => static::serializeValue($this->expire),
            'secret' => static::serializeValue($this->secret),
            'accessedAt' => static::serializeValue($this->accessedAt),
            'sdks' => static::serializeValue($this->sdks)
        ];

        return $result;
    }
}
