<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * VectorsDB Collections List
 *
 * @phpstan-consistent-constructor
 */
readonly class VectorsdbCollectionList
{
    use ArraySerializable;

    /**
     * VectorsdbCollectionList constructor.
     *
     * @param int $total total number of collections that matched your query.
     * @param list<VectorsdbCollection> $collections list of collections.
     */
    public function __construct(
        public int $total,
        public array $collections
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
        if (!array_key_exists('collections', $data)) {
            throw new \InvalidArgumentException('Missing required field "collections" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            collections: is_array($data['collections'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(VectorsdbCollection::class, $item),
                    $data['collections']
                )
                : $data['collections']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'collections' => static::serializeValue($this->collections)
        ];
    }
}
