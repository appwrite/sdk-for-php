<?php

namespace Appwrite\Models;

/**
 * Indexes List
 */
readonly class IndexList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'indexes' => Index::class
    ];

    /**
     * IndexList constructor.
     *
     * @param int $total total number of indexes that matched your query.
     * @param list<Index> $indexes list of indexes.
     */
    public function __construct(
        public int $total,
        public array $indexes
    ) {
    }
}
