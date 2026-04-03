<?php

namespace Appwrite\Models;

/**
 * Columns List
 */
readonly class ColumnList
{
    use ArraySerializable;

    /**
     * ColumnList constructor.
     *
     * @param int $total total number of columns in the given table.
     * @param array $columns list of columns.
     */
    public function __construct(
        public int $total,
        public array $columns
    ) {
    }
}
