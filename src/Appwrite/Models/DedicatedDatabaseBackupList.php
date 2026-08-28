<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * BackupList
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseBackupList
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseBackupList constructor.
     *
     * @param int $total total number of backups.
     * @param list<DedicatedDatabaseBackup> $backups list of backups.
     */
    public function __construct(
        public int $total,
        public array $backups
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
        if (!array_key_exists('backups', $data)) {
            throw new \InvalidArgumentException('Missing required field "backups" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            backups: is_array($data['backups'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DedicatedDatabaseBackup::class, $item),
                    $data['backups']
                )
                : $data['backups']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'backups' => static::serializeValue($this->backups)
        ];
    }
}
