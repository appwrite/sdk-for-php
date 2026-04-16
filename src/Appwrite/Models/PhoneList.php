<?php

namespace Appwrite\Models;

/**
 * Phones List
 */
readonly class PhoneList
{
    use ArraySerializable;

    /**
     * PhoneList constructor.
     *
     * @param int $total total number of phones that matched your query.
     * @param list<Phone> $phones list of phones.
     */
    public function __construct(
        public int $total,
        public array $phones
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
        if (!array_key_exists('phones', $data)) {
            throw new \InvalidArgumentException('Missing required field "phones" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            phones: is_array($data['phones'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Phone::class, $item),
                    $data['phones']
                )
                : $data['phones']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'phones' => static::serializeValue($this->phones)
        ];

        return $result;
    }
}
