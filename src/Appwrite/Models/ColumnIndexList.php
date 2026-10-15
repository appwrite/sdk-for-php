<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Column Indexes List
 *
 * @phpstan-consistent-constructor
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
        $data += [
            'total' => 0,
            'indexes' => [],
        ];

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
        return [
            'total' => static::serializeValue($this->total),
            'indexes' => static::serializeValue($this->indexes)
        ];
    }
}
