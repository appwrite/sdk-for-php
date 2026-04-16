<?php

namespace Appwrite\Models;

/**
 * Rows List
 */
readonly class RowList
{
    use ArraySerializable;

    /**
     * RowList constructor.
     *
     * @param int $total total number of rows that matched your query.
     * @param list<Row> $rows list of rows.
     */
    public function __construct(
        public int $total,
        public array $rows
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
        if (!array_key_exists('rows', $data)) {
            throw new \InvalidArgumentException('Missing required field "rows" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            rows: is_array($data['rows'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Row::class, $item),
                    $data['rows']
                )
                : $data['rows']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'rows' => static::serializeValue($this->rows)
        ];

        return $result;
    }
}
