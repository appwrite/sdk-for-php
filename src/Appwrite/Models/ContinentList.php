<?php

namespace Appwrite\Models;

/**
 * Continents List
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
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('continents', $data)) {
            throw new \InvalidArgumentException('Missing required field "continents" for ' . static::class . '.');
        }

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
        $result = [
            'total' => static::serializeValue($this->total),
            'continents' => static::serializeValue($this->continents)
        ];

        return $result;
    }
}
