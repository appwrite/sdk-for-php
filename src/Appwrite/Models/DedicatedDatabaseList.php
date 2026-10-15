<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Dedicated databases list
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseList
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseList constructor.
     *
     * @param int $total total number of databases that matched your query.
     * @param list<DedicatedDatabase> $databases list of databases.
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
        $data += [
            'total' => 0,
            'databases' => [],
        ];

        return new static(
            total: $data['total'],
            databases: is_array($data['databases'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DedicatedDatabase::class, $item),
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
        return [
            'total' => static::serializeValue($this->total),
            'databases' => static::serializeValue($this->databases)
        ];
    }
}
