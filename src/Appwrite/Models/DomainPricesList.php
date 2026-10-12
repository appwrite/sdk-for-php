<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Domain prices list
 *
 * @phpstan-consistent-constructor
 */
readonly class DomainPricesList
{
    use ArraySerializable;

    /**
     * DomainPricesList constructor.
     *
     * @param int $total total number of prices that matched your query.
     * @param list<DomainPrice> $prices list of prices.
     */
    public function __construct(
        public int $total,
        public array $prices
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
        ];

        if (!array_key_exists('prices', $data)) {
            throw new \InvalidArgumentException('Missing required field "prices" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            prices: is_array($data['prices'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DomainPrice::class, $item),
                    $data['prices']
                )
                : $data['prices']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'prices' => static::serializeValue($this->prices)
        ];
    }
}
