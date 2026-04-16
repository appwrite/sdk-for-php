<?php

namespace Appwrite\Models;

/**
 * Currencies List
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
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('currencies', $data)) {
            throw new \InvalidArgumentException('Missing required field "currencies" for ' . static::class . '.');
        }

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
        $result = [
            'total' => static::serializeValue($this->total),
            'currencies' => static::serializeValue($this->currencies)
        ];

        return $result;
    }
}
