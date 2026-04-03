<?php

namespace Appwrite\Models;

/**
 * Subscriber list
 */
readonly class SubscriberList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'subscribers' => Subscriber::class
    ];

    /**
     * SubscriberList constructor.
     *
     * @param int $total total number of subscribers that matched your query.
     * @param list<Subscriber> $subscribers list of subscribers.
     */
    public function __construct(
        public int $total,
        public array $subscribers
    ) {
    }
}
