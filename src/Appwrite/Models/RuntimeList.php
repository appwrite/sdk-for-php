<?php

namespace Appwrite\Models;

/**
 * Runtimes List
 */
readonly class RuntimeList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'runtimes' => Runtime::class
    ];

    /**
     * RuntimeList constructor.
     *
     * @param int $total total number of runtimes that matched your query.
     * @param list<Runtime> $runtimes list of runtimes.
     */
    public function __construct(
        public int $total,
        public array $runtimes
    ) {
    }
}
