<?php

namespace Appwrite\Models;

/**
 * Continents List
 */
readonly class ContinentList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'continents' => Continent::class
    ];

    /**
     * ContinentList constructor.
     *
     * @param int $total total number of continents that matched your query.
     * @param list<Continent> $continents list of continents.
     */
    public function __construct(
        public int $total,
        public array $continents
    ) {
    }
}
