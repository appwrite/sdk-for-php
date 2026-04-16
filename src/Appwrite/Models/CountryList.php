<?php

namespace Appwrite\Models;

/**
 * Countries List
 */
readonly class CountryList
{
    use ArraySerializable;

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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('countries', $data)) {
            throw new \InvalidArgumentException('Missing required field "countries" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            countries: is_array($data['countries'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Country::class, $item),
                    $data['countries']
                )
                : $data['countries']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'countries' => static::serializeValue($this->countries)
        ];

        return $result;
    }
}
