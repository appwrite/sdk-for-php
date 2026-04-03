<?php

namespace Appwrite\Models;

/**
 * Topic list
 */
readonly class TopicList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'topics' => Topic::class
    ];

    /**
     * TopicList constructor.
     *
     * @param int $total total number of topics that matched your query.
     * @param list<Topic> $topics list of topics.
     */
    public function __construct(
        public int $total,
        public array $topics
    ) {
    }
}
