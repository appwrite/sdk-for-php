<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Columns List
 *
 * @phpstan-consistent-constructor
 */
readonly class ColumnList
{
    use ArraySerializable;

    /**
     * ColumnList constructor.
     *
     * @param int $total total number of columns in the given table.
     * @param array $columns list of columns.
     */
    public function __construct(
        public int $total,
        public array $columns
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'columns' => [],
        ];

        return new static(
            total: $data['total'],
            columns: $data['columns']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'columns' => static::serializeValue($this->columns)
        ];
    }
}
