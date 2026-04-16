<?php

namespace Appwrite\Models;

/**
 * ResourceToken
 */
readonly class ResourceToken
{
    use ArraySerializable;

    /**
     * ResourceToken constructor.
     *
     * @param string $id token id.
     * @param string $createdAt token creation date in iso 8601 format.
     * @param string $resourceId resource id.
     * @param string $resourceType resource type.
     * @param string $expire token expiration date in iso 8601 format.
     * @param string $secret jwt encoded string.
     * @param string $accessedAt most recent access date in iso 8601 format. this attribute is only updated again after 24 hours.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $resourceId,
        public string $resourceType,
        public string $expire,
        public string $secret,
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
        if (!array_key_exists('resourceId', $data)) {
            throw new \InvalidArgumentException('Missing required field "resourceId" for ' . static::class . '.');
        }
        if (!array_key_exists('resourceType', $data)) {
            throw new \InvalidArgumentException('Missing required field "resourceType" for ' . static::class . '.');
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

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            resourceId: $data['resourceId'],
            resourceType: $data['resourceType'],
            expire: $data['expire'],
            secret: $data['secret'],
            accessedAt: $data['accessedAt']
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
            'resourceId' => static::serializeValue($this->resourceId),
            'resourceType' => static::serializeValue($this->resourceType),
            'expire' => static::serializeValue($this->expire),
            'secret' => static::serializeValue($this->secret),
            'accessedAt' => static::serializeValue($this->accessedAt)
        ];

        return $result;
    }
}
