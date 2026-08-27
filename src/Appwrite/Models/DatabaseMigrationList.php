<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Database Migrations List
 *
 * @phpstan-consistent-constructor
 */
readonly class DatabaseMigrationList
{
    use ArraySerializable;

    /**
     * DatabaseMigrationList constructor.
     *
     * @param int $total total number of migrations that matched your query.
     * @param list<DatabaseMigration> $migrations list of migrations.
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
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('migrations', $data)) {
            throw new \InvalidArgumentException('Missing required field "migrations" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            migrations: is_array($data['migrations'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DatabaseMigration::class, $item),
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
