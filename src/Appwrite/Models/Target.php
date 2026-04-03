<?php

namespace Appwrite\Models;

/**
 * Target
 */
readonly class Target
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt'
    ];

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
}
