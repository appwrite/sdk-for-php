<?php

namespace Appwrite\Models;

/**
 * Collections List
 */
readonly class CollectionList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'collections' => Collection::class
    ];

    /**
     * CollectionList constructor.
     *
     * @param int $total total number of collections that matched your query.
     * @param list<Collection> $collections list of collections.
     */
    public function __construct(
        public int $total,
        public array $collections
    ) {
    }
}
