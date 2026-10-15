<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * API Keys List
 *
 * @phpstan-consistent-constructor
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
        $data += [
            'total' => 0,
            'keys' => [],
        ];

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
        return [
            'total' => static::serializeValue($this->total),
            'keys' => static::serializeValue($this->keys)
        ];
    }
}
