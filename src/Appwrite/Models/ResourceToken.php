<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * ResourceToken
 *
 * @phpstan-consistent-constructor
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
        $data += [
            '$id' => "",
            '$createdAt' => "",
            'resourceId' => "",
            'resourceType' => "",
            'expire' => "",
            'secret' => "",
            'accessedAt' => "",
        ];

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
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            'resourceId' => static::serializeValue($this->resourceId),
            'resourceType' => static::serializeValue($this->resourceType),
            'expire' => static::serializeValue($this->expire),
            'secret' => static::serializeValue($this->secret),
            'accessedAt' => static::serializeValue($this->accessedAt)
        ];
    }
}
