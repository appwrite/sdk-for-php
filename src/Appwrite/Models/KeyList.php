<?php

namespace Appwrite\Models;

/**
 * API Keys List
 */
readonly class KeyList
{
    use ArraySerializable;

    /**
     * KeyList constructor.
     *
     * @param int $total total number of keys that matched your query.
     * @param list<Key> $keys list of keys.
     */
    public function __construct(
        public int $total,
        public array $keys
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
        if (!array_key_exists('keys', $data)) {
            throw new \InvalidArgumentException('Missing required field "keys" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            keys: is_array($data['keys'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Key::class, $item),
                    $data['keys']
                )
                : $data['keys']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'keys' => static::serializeValue($this->keys)
        ];

        return $result;
    }
}
