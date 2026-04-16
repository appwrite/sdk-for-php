<?php

namespace Appwrite\Models;

/**
 * Locale codes list
 */
readonly class LocaleCodeList
{
    use ArraySerializable;

    /**
     * LocaleCodeList constructor.
     *
     * @param int $total total number of localecodes that matched your query.
     * @param list<LocaleCode> $localeCodes list of localecodes.
     */
    public function __construct(
        public int $total,
        public array $localeCodes
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
        if (!array_key_exists('localeCodes', $data)) {
            throw new \InvalidArgumentException('Missing required field "localeCodes" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            localeCodes: is_array($data['localeCodes'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(LocaleCode::class, $item),
                    $data['localeCodes']
                )
                : $data['localeCodes']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'localeCodes' => static::serializeValue($this->localeCodes)
        ];

        return $result;
    }
}
