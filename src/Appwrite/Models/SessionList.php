<?php

namespace Appwrite\Models;

/**
 * Sessions List
 */
readonly class SessionList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'sessions' => Session::class
    ];

    /**
     * SessionList constructor.
     *
     * @param int $total total number of sessions that matched your query.
     * @param list<Session> $sessions list of sessions.
     */
    public function __construct(
        public int $total,
        public array $sessions
    ) {
    }
}
