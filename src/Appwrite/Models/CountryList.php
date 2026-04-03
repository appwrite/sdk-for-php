<?php

namespace Appwrite\Models;

/**
 * Countries List
 */
readonly class CountryList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'countries' => Country::class
    ];

    /**
     * CountryList constructor.
     *
     * @param int $total total number of countries that matched your query.
     * @param list<Country> $countries list of countries.
     */
    public function __construct(
        public int $total,
        public array $countries
    ) {
    }
}
