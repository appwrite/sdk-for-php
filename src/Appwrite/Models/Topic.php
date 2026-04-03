<?php

namespace Appwrite\Models;

/**
 * Topic
 */
readonly class Topic
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
     * Topic constructor.
     *
     * @param string $id topic id.
     * @param string $createdAt topic creation time in iso 8601 format.
     * @param string $updatedAt topic update date in iso 8601 format.
     * @param string $name the name of the topic.
     * @param int $emailTotal total count of email subscribers subscribed to the topic.
     * @param int $smsTotal total count of sms subscribers subscribed to the topic.
     * @param int $pushTotal total count of push subscribers subscribed to the topic.
     * @param array $subscribe subscribe permissions.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public int $emailTotal,
        public int $smsTotal,
        public int $pushTotal,
        public array $subscribe
    ) {
    }
}
