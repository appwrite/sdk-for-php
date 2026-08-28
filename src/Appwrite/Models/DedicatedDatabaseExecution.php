<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Execution
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseExecution
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseExecution constructor.
     *
     * @param array $rows result rows as a list of column-name => value maps. empty for non-returning statements.
     * @param int $rowCount number of rows returned (for select) or affected (for insert/update/delete).
     * @param list<DedicatedDatabaseExecutionColumn> $columns column metadata in result-set order.
     * @param int $durationMs server-side execution time in milliseconds.
     * @param bool $truncated true when the configured row or byte cap was hit and the result was truncated.
     * @param int $bytes serialised payload size in bytes.
     */
    public function __construct(
        public array $rows,
        public int $rowCount,
        public array $columns,
        public int $durationMs,
        public bool $truncated,
        public int $bytes
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('rows', $data)) {
            throw new \InvalidArgumentException('Missing required field "rows" for ' . static::class . '.');
        }
        if (!array_key_exists('rowCount', $data)) {
            throw new \InvalidArgumentException('Missing required field "rowCount" for ' . static::class . '.');
        }
        if (!array_key_exists('columns', $data)) {
            throw new \InvalidArgumentException('Missing required field "columns" for ' . static::class . '.');
        }
        if (!array_key_exists('durationMs', $data)) {
            throw new \InvalidArgumentException('Missing required field "durationMs" for ' . static::class . '.');
        }
        if (!array_key_exists('truncated', $data)) {
            throw new \InvalidArgumentException('Missing required field "truncated" for ' . static::class . '.');
        }
        if (!array_key_exists('bytes', $data)) {
            throw new \InvalidArgumentException('Missing required field "bytes" for ' . static::class . '.');
        }

        return new static(
            rows: $data['rows'],
            rowCount: $data['rowCount'],
            columns: is_array($data['columns'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DedicatedDatabaseExecutionColumn::class, $item),
                    $data['columns']
                )
                : $data['columns'],
            durationMs: $data['durationMs'],
            truncated: $data['truncated'],
            bytes: $data['bytes']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'rows' => static::serializeValue($this->rows),
            'rowCount' => static::serializeValue($this->rowCount),
            'columns' => static::serializeValue($this->columns),
            'durationMs' => static::serializeValue($this->durationMs),
            'truncated' => static::serializeValue($this->truncated),
            'bytes' => static::serializeValue($this->bytes)
        ];
    }
}
