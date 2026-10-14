<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Continents List
 *
 * @phpstan-consistent-constructor
 */
readonly class ContinentList
{
    use ArraySerializable;

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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'continents' => [],
        ];

        return new static(
            total: $data['total'],
            continents: is_array($data['continents'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Continent::class, $item),
                    $data['continents']
                )
                : $data['continents']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'continents' => static::serializeValue($this->continents)
        ];
    }
}
