<?php

namespace Appwrite\Models;

/**
 * Columns List
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
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('columns', $data)) {
            throw new \InvalidArgumentException('Missing required field "columns" for ' . static::class . '.');
        }

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
        $result = [
            'total' => static::serializeValue($this->total),
            'columns' => static::serializeValue($this->columns)
        ];

        return $result;
    }
}
