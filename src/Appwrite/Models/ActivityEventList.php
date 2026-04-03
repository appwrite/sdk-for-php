<?php

namespace Appwrite\Models;

/**
 * Activity event list
 */
readonly class ActivityEventList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'events' => ActivityEvent::class
    ];

    /**
     * ActivityEventList constructor.
     *
     * @param int $total total number of events that matched your query.
     * @param list<ActivityEvent> $events list of events.
     */
    public function __construct(
        public int $total,
        public array $events
    ) {
    }
}
