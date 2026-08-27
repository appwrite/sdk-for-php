<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Replica
 *
 * @phpstan-consistent-constructor
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
     * @param bool|null $replicating whether the engine reports this member's replication stream as up. null when no reading was taken: a primary has no stream to report, and a member that is not healthy, or whose probe did not answer, has none yet. `healthy` is a reachability probe of the member itself and says nothing about replication, so a healthy member may still not be replicating.
     * @param float|null $lagSeconds replication lag in seconds (null for primary). also null against `replicating: true`, for a member that is streaming but whose engine printed no numeric lag.
     */
    public function __construct(
        public int $index,
        public string $role,
        public bool $healthy,
        public ?bool $replicating = null,
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
            replicating: $data['replicating'] ?? null,
            lagSeconds: $data['lagSeconds'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'index' => static::serializeValue($this->index),
            'role' => static::serializeValue($this->role),
            'healthy' => static::serializeValue($this->healthy),
            'replicating' => static::serializeValue($this->replicating),
            'lagSeconds' => static::serializeValue($this->lagSeconds)
        ];
    }
}
