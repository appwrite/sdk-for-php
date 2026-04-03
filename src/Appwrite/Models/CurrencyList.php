<?php

namespace Appwrite\Models;

/**
 * Currencies List
 */
readonly class CurrencyList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'currencies' => Currency::class
    ];

    /**
     * CurrencyList constructor.
     *
     * @param int $total total number of currencies that matched your query.
     * @param list<Currency> $currencies list of currencies.
     */
    public function __construct(
        public int $total,
        public array $currencies
    ) {
    }
}
