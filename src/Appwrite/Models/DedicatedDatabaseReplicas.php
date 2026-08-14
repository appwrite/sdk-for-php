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
     * @param string $syncMode requested replication sync mode. possible values: async (asynchronous, fastest), sync (synchronous, strong consistency), quorum (quorum-based, majority of replicas must confirm). this is what was asked for; compare it with effectivesyncmode for what the primary is enforcing.
     * @param bool $syncDegraded whether the enforced replication is weaker than the requested syncmode.
     * @param int $syncAcknowledgements number of standby acknowledgements the primary waits for before a write is committed. zero means writes are acknowledged locally.
     * @param int $syncStandbyCount number of standbys registered with the primary for synchronous replication.
     * @param list<DedicatedDatabaseMember> $members per-pod statuses for the primary and every replica.
     * @param string|null $effectiveSyncMode replication sync mode the primary is actually enforcing. null when high availability is disabled or the state could not be read. a value below the requested syncmode means writes are being acknowledged with weaker durability than configured.
     * @param bool|null $syncStateConfirmed whether the other sync fields are an engine reading rather than a recorded estimate. true when the primary answered what it is enforcing, including when that answer contradicted the record, in which case the contradicted values are replaced by the ones the engine reports. false when the reading could not be taken: the probe did not answer, there was no engine to ask, or the values describe a configuration change just applied rather than anything measured. absent when no engine was asked at all, so an unprobed database is distinguishable from an unconfirmed one. false never means a standby was found lagging, because it is the absence of a reading rather than a negative one, so draw no conclusion about replication health from it or from a response that omits it.
     */
    public function __construct(
        public int $replicas,
        public string $syncMode,
        public bool $syncDegraded,
        public int $syncAcknowledgements,
        public int $syncStandbyCount,
        public array $members,
        public ?string $effectiveSyncMode = null,
        public ?bool $syncStateConfirmed = null
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
        if (!array_key_exists('syncDegraded', $data)) {
            throw new \InvalidArgumentException('Missing required field "syncDegraded" for ' . static::class . '.');
        }
        if (!array_key_exists('syncAcknowledgements', $data)) {
            throw new \InvalidArgumentException('Missing required field "syncAcknowledgements" for ' . static::class . '.');
        }
        if (!array_key_exists('syncStandbyCount', $data)) {
            throw new \InvalidArgumentException('Missing required field "syncStandbyCount" for ' . static::class . '.');
        }
        if (!array_key_exists('members', $data)) {
            throw new \InvalidArgumentException('Missing required field "members" for ' . static::class . '.');
        }

        return new static(
            replicas: $data['replicas'],
            syncMode: $data['syncMode'],
            syncDegraded: $data['syncDegraded'],
            syncAcknowledgements: $data['syncAcknowledgements'],
            syncStandbyCount: $data['syncStandbyCount'],
            members: is_array($data['members'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DedicatedDatabaseMember::class, $item),
                    $data['members']
                )
                : $data['members'],
            effectiveSyncMode: array_key_exists('effectiveSyncMode', $data) ? $data['effectiveSyncMode'] : null,
            syncStateConfirmed: array_key_exists('syncStateConfirmed', $data) ? $data['syncStateConfirmed'] : null
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
            'effectiveSyncMode' => static::serializeValue($this->effectiveSyncMode),
            'syncDegraded' => static::serializeValue($this->syncDegraded),
            'syncAcknowledgements' => static::serializeValue($this->syncAcknowledgements),
            'syncStandbyCount' => static::serializeValue($this->syncStandbyCount),
            'syncStateConfirmed' => static::serializeValue($this->syncStateConfirmed),
            'members' => static::serializeValue($this->members)
        ];

        return $result;
    }
}
