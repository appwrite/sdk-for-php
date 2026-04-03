<?php

namespace Appwrite\Models;

/**
 * Tables List
 */
readonly class TableList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'tables' => Table::class
    ];

    /**
     * TableList constructor.
     *
     * @param int $total total number of tables that matched your query.
     * @param list<Table> $tables list of tables.
     */
    public function __construct(
        public int $total,
        public array $tables
    ) {
    }
}
