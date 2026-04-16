<?php

namespace Appwrite\Models;

/**
 * Column Indexes List
 */
readonly class ColumnIndexList
{
    use ArraySerializable;

    /**
     * ColumnIndexList constructor.
     *
     * @param int $total total number of indexes that matched your query.
     * @param list<ColumnIndex> $indexes list of indexes.
     */
    public function __construct(
        public int $total,
        public array $indexes
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
        if (!array_key_exists('indexes', $data)) {
            throw new \InvalidArgumentException('Missing required field "indexes" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            indexes: is_array($data['indexes'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(ColumnIndex::class, $item),
                    $data['indexes']
                )
                : $data['indexes']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'indexes' => static::serializeValue($this->indexes)
        ];

        return $result;
    }
}
