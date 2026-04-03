<?php

namespace Appwrite\Models;

/**
 * Logs List
 */
readonly class LogList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'logs' => Log::class
    ];

    /**
     * LogList constructor.
     *
     * @param int $total total number of logs that matched your query.
     * @param list<Log> $logs list of logs.
     */
    public function __construct(
        public int $total,
        public array $logs
    ) {
    }
}
