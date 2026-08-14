<?php

namespace Appwrite\Models;

/**
 * Replica
 */
readonly class DatabaseStatusReplica
{
    use ArraySerializable;

    /**
     * DatabaseStatusReplica constructor.
     *
     * @param int $index member index within the database. read `role` for which member accepts writes: a failover moves the primary without renumbering the indexes.
     * @param string $role member role. possible values: primary (accepts reads and writes), replica (read-only follower), unknown (placement not established; reported while a transition is moving or restarting the topology, so no member can be named the write target).
     * @param bool $healthy whether the replica is healthy.
     * @param float|null $lagSeconds replication lag in seconds (null for primary).
     */
    public function __construct(
        public int $index,
        public string $role,
        public bool $healthy,
        public ?float $lagSeconds = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('index', $data)) {
            throw new \InvalidArgumentException('Missing required field "index" for ' . static::class . '.');
        }
        if (!array_key_exists('role', $data)) {
            throw new \InvalidArgumentException('Missing required field "role" for ' . static::class . '.');
        }
        if (!array_key_exists('healthy', $data)) {
            throw new \InvalidArgumentException('Missing required field "healthy" for ' . static::class . '.');
        }

        return new static(
            index: $data['index'],
            role: $data['role'],
            healthy: $data['healthy'],
            lagSeconds: array_key_exists('lagSeconds', $data) ? $data['lagSeconds'] : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'index' => static::serializeValue($this->index),
            'role' => static::serializeValue($this->role),
            'healthy' => static::serializeValue($this->healthy),
            'lagSeconds' => static::serializeValue($this->lagSeconds)
        ];

        return $result;
    }
}
