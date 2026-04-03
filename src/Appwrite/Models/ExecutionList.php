<?php

namespace Appwrite\Models;

/**
 * Executions List
 */
readonly class ExecutionList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'executions' => Execution::class
    ];

    /**
     * ExecutionList constructor.
     *
     * @param int $total total number of executions that matched your query.
     * @param list<Execution> $executions list of executions.
     */
    public function __construct(
        public int $total,
        public array $executions
    ) {
    }
}
