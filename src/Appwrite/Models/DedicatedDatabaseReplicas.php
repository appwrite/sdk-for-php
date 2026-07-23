<?php

namespace Appwrite\Models;

/**
 * Replicas
 */
readonly class DedicatedDatabaseReplicas
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseReplicas constructor.
     *
     * @param int $replicas number of configured replicas. zero means high availability is disabled.
     * @param string $syncMode replication sync mode. possible values: async (asynchronous, fastest), sync (synchronous, strong consistency), quorum (quorum-based, majority of replicas must confirm).
     * @param list<DedicatedDatabaseMember> $members per-pod statuses for the primary and every replica.
     */
    public function __construct(
        public int $replicas,
        public string $syncMode,
        public array $members
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('replicas', $data)) {
            throw new \InvalidArgumentException('Missing required field "replicas" for ' . static::class . '.');
        }
        if (!array_key_exists('syncMode', $data)) {
            throw new \InvalidArgumentException('Missing required field "syncMode" for ' . static::class . '.');
        }
        if (!array_key_exists('members', $data)) {
            throw new \InvalidArgumentException('Missing required field "members" for ' . static::class . '.');
        }

        return new static(
            replicas: $data['replicas'],
            syncMode: $data['syncMode'],
            members: is_array($data['members'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DedicatedDatabaseMember::class, $item),
                    $data['members']
                )
                : $data['members']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'replicas' => static::serializeValue($this->replicas),
            'syncMode' => static::serializeValue($this->syncMode),
            'members' => static::serializeValue($this->members)
        ];

        return $result;
    }
}
