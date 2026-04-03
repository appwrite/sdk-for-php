<?php

namespace Appwrite\Models;

/**
 * ResourceToken
 */
readonly class ResourceToken
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt'
    ];

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
}
