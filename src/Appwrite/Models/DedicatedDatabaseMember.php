<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Member
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseMember
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseMember constructor.
     *
     * @param string $id member identifier.
     * @param string $role member role. possible values: primary (accepts reads and writes), replica (read-only follower), unknown (placement not established; reported while a transition is moving or restarting the topology and this member has not been probed, so no member can be named the write target).
     * @param string $status member pod status. possible values: pending (configured but absent from the backend topology, so nothing is bringing it up), provisioning (pod missing or pending), starting (running but not ready), active (running and ready), failed (failed phase or crashloopbackoff container), or the lowercased pod phase reported by the cluster.
     * @param bool|null $replicating whether the engine reports this member's replication stream as up. null when no reading was taken: a primary has no stream to report, and a member that is not active, or whose probe did not answer, has none yet. false is a reading and null is the absence of one, so the two are not interchangeable. read it beside lagseconds before expecting a failover that names no target to find a promotable standby: a member streaming at a known lag is one, and a member reporting null is not evidence either way.
     * @param float|null $lagSeconds replication lag in seconds. null when the lag is not known: a primary has none to report, and a member the backend has not probed has none yet. also null against `replicating: true`, for a member that is streaming but whose engine printed no numeric lag.
     */
    public function __construct(
        public string $id,
        public string $role,
        public string $status,
        public ?bool $replicating = null,
        public ?float $lagSeconds = null
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
        if (!array_key_exists('role', $data)) {
            throw new \InvalidArgumentException('Missing required field "role" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            role: $data['role'],
            status: $data['status'],
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
            '$id' => static::serializeValue($this->id),
            'role' => static::serializeValue($this->role),
            'status' => static::serializeValue($this->status),
            'replicating' => static::serializeValue($this->replicating),
            'lagSeconds' => static::serializeValue($this->lagSeconds)
        ];
    }
}
