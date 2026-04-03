<?php

namespace Appwrite\Models;

/**
 * Target list
 */
readonly class TargetList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'targets' => Target::class
    ];

    /**
     * TargetList constructor.
     *
     * @param int $total total number of targets that matched your query.
     * @param list<Target> $targets list of targets.
     */
    public function __construct(
        public int $total,
        public array $targets
    ) {
    }
}
