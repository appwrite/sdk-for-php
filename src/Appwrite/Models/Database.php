<?php

namespace Appwrite\Models;

use Appwrite\Enums\DatabaseType;
use Appwrite\Enums\DatabaseStatus;

/**
 * Database
 */
readonly class Database
{
    use ArraySerializable;

    /**
     * Database constructor.
     *
     * @param string $id database id.
     * @param string $name database name.
     * @param string $createdAt database creation date in iso 8601 format.
     * @param string $updatedAt database update date in iso 8601 format.
     * @param bool $enabled if database is enabled. can be 'enabled' or 'disabled'. when disabled, the database is inaccessible to users, but remains accessible to server sdks using api keys.
     * @param DatabaseType $type database type.
     * @param DatabaseStatus|null $status dedicated database lifecycle status. null when the database has no valid dedicated backing.
     * @param string|null $engine underlying engine of the dedicated backing: postgresql, mysql, or mongodb. a managed product (tablesdb, documentsdb, vectorsdb) reports the engine it runs on, so its type and engine can differ. null when the database has no dedicated backing.
     * @param string|null $specification compute specification identifier of the dedicated backing, e.g. s-2vcpu-2gb. null when the database has no dedicated backing.
     * @param int|null $replicas number of secondary high availability replicas, excluding the primary. null when backing configuration is unavailable.
     * @param list<BackupPolicy>|null $policies database backup policies.
     * @param list<BackupArchive>|null $archives database backup archives.
     */
    public function __construct(
        public string $id,
        public string $name,
        public string $createdAt,
        public string $updatedAt,
        public bool $enabled,
        public DatabaseType $type,
        public ?DatabaseStatus $status = null,
        public ?string $engine = null,
        public ?string $specification = null,
        public ?int $replicas = null,
        public ?array $policies = null,
        public ?array $archives = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            name: $data['name'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            enabled: $data['enabled'],
            type: static::hydrateTypedValue(DatabaseType::class, $data['type']),
            status: array_key_exists('status', $data) ? static::hydrateTypedValue(DatabaseStatus::class, $data['status'], true) : null,
            engine: array_key_exists('engine', $data) ? $data['engine'] : null,
            specification: array_key_exists('specification', $data) ? $data['specification'] : null,
            replicas: array_key_exists('replicas', $data) ? $data['replicas'] : null,
            policies: array_key_exists('policies', $data)
                ? (
                    is_array($data['policies'])
                        ? array_map(
                            static fn (mixed $item): mixed => static::hydrateTypedValue(BackupPolicy::class, $item),
                            $data['policies']
                        )
                        : $data['policies']
                )
                : null,
            archives: array_key_exists('archives', $data)
                ? (
                    is_array($data['archives'])
                        ? array_map(
                            static fn (mixed $item): mixed => static::hydrateTypedValue(BackupArchive::class, $item),
                            $data['archives']
                        )
                        : $data['archives']
                )
                : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            'name' => static::serializeValue($this->name),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'enabled' => static::serializeValue($this->enabled),
            'type' => static::serializeValue($this->type),
            'status' => static::serializeValue($this->status),
            'engine' => static::serializeValue($this->engine),
            'specification' => static::serializeValue($this->specification),
            'replicas' => static::serializeValue($this->replicas),
            'policies' => static::serializeValue($this->policies),
            'archives' => static::serializeValue($this->archives)
        ];

        return $result;
    }
}
