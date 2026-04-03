<?php

namespace Appwrite\Models;

/**
 * Rows List
 */
readonly class RowList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'rows' => Row::class
    ];

    /**
     * RowList constructor.
     *
     * @param int $total total number of rows that matched your query.
     * @param list<Row> $rows list of rows.
     */
    public function __construct(
        public int $total,
        public array $rows
    ) {
    }
}
