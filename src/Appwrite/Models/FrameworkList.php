<?php

namespace Appwrite\Models;

/**
 * Frameworks List
 */
readonly class FrameworkList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'frameworks' => Framework::class
    ];

    /**
     * FrameworkList constructor.
     *
     * @param int $total total number of frameworks that matched your query.
     * @param list<Framework> $frameworks list of frameworks.
     */
    public function __construct(
        public int $total,
        public array $frameworks
    ) {
    }
}
