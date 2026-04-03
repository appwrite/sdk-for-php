<?php

namespace Appwrite\Models;

/**
 * Subscriber
 */
readonly class Subscriber
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
     * Subscriber constructor.
     *
     * @param string $id subscriber id.
     * @param string $createdAt subscriber creation time in iso 8601 format.
     * @param string $updatedAt subscriber update date in iso 8601 format.
     * @param string $targetId target id.
     * @param Target $target target.
     * @param string $userId topic id.
     * @param string $userName user name.
     * @param string $topicId topic id.
     * @param string $providerType the target provider type. can be one of the following: `email`, `sms` or `push`.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $targetId,
        public Target $target,
        public string $userId,
        public string $userName,
        public string $topicId,
        public string $providerType
    ) {
    }
}
