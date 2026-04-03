<?php

namespace Appwrite\Models;

/**
 * Databases List
 */
readonly class DatabaseList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'databases' => Database::class
    ];

    /**
     * DatabaseList constructor.
     *
     * @param int $total total number of databases that matched your query.
     * @param list<Database> $databases list of databases.
     */
    public function __construct(
        public int $total,
        public array $databases
    ) {
    }
}
