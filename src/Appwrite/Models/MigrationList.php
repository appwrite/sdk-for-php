<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Migrations List
 *
 * @phpstan-consistent-constructor
 */
readonly class MigrationList
{
    use ArraySerializable;

    /**
     * MigrationList constructor.
     *
     * @param int $total total number of migrations that matched your query.
     * @param list<Migration> $migrations list of migrations.
     */
    public function __construct(
        public int $total,
        public array $migrations
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'migrations' => [],
        ];

        return new static(
            total: $data['total'],
            migrations: is_array($data['migrations'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Migration::class, $item),
                    $data['migrations']
                )
                : $data['migrations']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'migrations' => static::serializeValue($this->migrations)
        ];
    }
}
