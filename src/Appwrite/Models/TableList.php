<?php

namespace Appwrite\Models;

/**
 * Tables List
 */
readonly class TableList
{
    use ArraySerializable;

    /**
     * TableList constructor.
     *
     * @param int $total total number of tables that matched your query.
     * @param list<Table> $tables list of tables.
     */
    public function __construct(
        public int $total,
        public array $tables
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
        if (!array_key_exists('tables', $data)) {
            throw new \InvalidArgumentException('Missing required field "tables" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            tables: is_array($data['tables'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Table::class, $item),
                    $data['tables']
                )
                : $data['tables']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'tables' => static::serializeValue($this->tables)
        ];

        return $result;
    }
}
