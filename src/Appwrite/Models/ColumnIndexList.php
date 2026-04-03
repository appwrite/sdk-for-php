<?php

namespace Appwrite\Models;

/**
 * Column Indexes List
 */
readonly class ColumnIndexList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'indexes' => ColumnIndex::class
    ];

    /**
     * ColumnIndexList constructor.
     *
     * @param int $total total number of indexes that matched your query.
     * @param list<ColumnIndex> $indexes list of indexes.
     */
    public function __construct(
        public int $total,
        public array $indexes
    ) {
    }
}
