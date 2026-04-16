<?php

namespace Appwrite\Models;

/**
 * Databases List
 */
readonly class DatabaseList
{
    use ArraySerializable;

    /**
     * DatabaseList constructor.
     *
     * @param int $total total number of databases that matched your query.
     * @param list<Database> $databases list of databases.
     */
    public function __construct(
        public int $total,
        public array $databases
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
        if (!array_key_exists('databases', $data)) {
            throw new \InvalidArgumentException('Missing required field "databases" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            databases: is_array($data['databases'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Database::class, $item),
                    $data['databases']
                )
                : $data['databases']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'databases' => static::serializeValue($this->databases)
        ];

        return $result;
    }
}
