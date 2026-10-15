<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Currencies List
 *
 * @phpstan-consistent-constructor
 */
readonly class CurrencyList
{
    use ArraySerializable;

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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'currencies' => [],
        ];

        return new static(
            total: $data['total'],
            currencies: is_array($data['currencies'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Currency::class, $item),
                    $data['currencies']
                )
                : $data['currencies']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'currencies' => static::serializeValue($this->currencies)
        ];
    }
}
