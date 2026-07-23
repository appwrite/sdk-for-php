<?php

namespace Appwrite\Models;

/**
 * Member
 */
readonly class DedicatedDatabaseMember
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseMember constructor.
     *
     * @param string $id member identifier.
     * @param string $role member role. possible values: primary (accepts reads and writes), replica (read-only follower).
     * @param string $status member pod status. possible values: provisioning (pod missing or pending), starting (running but not ready), active (running and ready), failed (failed phase or crashloopbackoff container), or the lowercased pod phase reported by the cluster.
     * @param float $lagSeconds replication lag in seconds.
     */
    public function __construct(
        public string $id,
        public string $role,
        public string $status,
        public float $lagSeconds
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
        if (!array_key_exists('lagSeconds', $data)) {
            throw new \InvalidArgumentException('Missing required field "lagSeconds" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            role: $data['role'],
            status: $data['status'],
            lagSeconds: $data['lagSeconds']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            'role' => static::serializeValue($this->role),
            'status' => static::serializeValue($this->status),
            'lagSeconds' => static::serializeValue($this->lagSeconds)
        ];

        return $result;
    }
}
