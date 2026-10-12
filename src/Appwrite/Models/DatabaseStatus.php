<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Status
 *
 * @phpstan-consistent-constructor
 */
readonly class DatabaseStatus
{
    use ArraySerializable;

    /**
     * DatabaseStatus constructor.
     *
     * @param string $health overall health status: healthy, degraded, unhealthy, or unknown when nothing could be measured.
     * @param bool $ready whether the database is ready to accept connections.
     * @param string $engine database engine: postgresql, mysql, or mongodb.
     * @param string $version database engine version.
     * @param int $uptime database uptime in seconds.
     * @param string $syncMode requested replication sync mode. possible values: async, sync, quorum. compare with effectivesyncmode for what the primary is enforcing.
     * @param bool $syncDegraded whether the enforced replication is weaker than the requested syncmode.
     * @param int $syncAcknowledgements number of standby acknowledgements the primary waits for before a write is committed.
     * @param int $syncStandbyCount number of standbys registered with the primary for synchronous replication.
     * @param list<DatabaseStatusReplica> $replicas list of database replicas and their status. every configured member appears, including one the backend has not brought up, which is reported as not healthy.
     * @param list<DatabaseStatusVolume> $volumes storage volume information.
     * @param DatabaseStatusConnections|null $connections connection statistics. null when the database has not been probed.
     * @param string|null $effectiveSyncMode replication sync mode the primary is actually enforcing. null when high availability is disabled or the state could not be read.
     * @param bool|null $syncStateConfirmed whether the other sync fields are an engine reading rather than a recorded estimate. true when the primary answered what it is enforcing, including when that answer contradicted the record, in which case the contradicted values are replaced by the ones the engine reports. false when the reading could not be taken: the probe did not answer, there was no engine to ask, or the values describe a configuration change just applied rather than anything measured. absent when no engine was asked at all, so an unprobed database is distinguishable from an unconfirmed one. false never means a standby was found lagging, because it is the absence of a reading rather than a negative one, so draw no conclusion about replication health from it or from a response that omits it.
     */
    public function __construct(
        public string $health,
        public bool $ready,
        public string $engine,
        public string $version,
        public int $uptime,
        public string $syncMode,
        public bool $syncDegraded,
        public int $syncAcknowledgements,
        public int $syncStandbyCount,
        public array $replicas,
        public array $volumes,
        public ?DatabaseStatusConnections $connections = null,
        public ?string $effectiveSyncMode = null,
        public ?bool $syncStateConfirmed = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'health' => "unknown",
            'ready' => false,
            'engine' => "postgresql",
            'version' => "",
            'uptime' => 0,
            'syncMode' => "async",
            'syncDegraded' => false,
            'syncAcknowledgements' => 0,
            'syncStandbyCount' => 0,
        ];

        if (!array_key_exists('replicas', $data)) {
            throw new \InvalidArgumentException('Missing required field "replicas" for ' . static::class . '.');
        }
        if (!array_key_exists('volumes', $data)) {
            throw new \InvalidArgumentException('Missing required field "volumes" for ' . static::class . '.');
        }

        return new static(
            health: $data['health'],
            ready: $data['ready'],
            engine: $data['engine'],
            version: $data['version'],
            uptime: $data['uptime'],
            syncMode: $data['syncMode'],
            syncDegraded: $data['syncDegraded'],
            syncAcknowledgements: $data['syncAcknowledgements'],
            syncStandbyCount: $data['syncStandbyCount'],
            replicas: is_array($data['replicas'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DatabaseStatusReplica::class, $item),
                    $data['replicas']
                )
                : $data['replicas'],
            volumes: is_array($data['volumes'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DatabaseStatusVolume::class, $item),
                    $data['volumes']
                )
                : $data['volumes'],
            connections: array_key_exists('connections', $data) ? static::hydrateTypedValue(DatabaseStatusConnections::class, $data['connections'], true) : null,
            effectiveSyncMode: $data['effectiveSyncMode'] ?? null,
            syncStateConfirmed: $data['syncStateConfirmed'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'health' => static::serializeValue($this->health),
            'ready' => static::serializeValue($this->ready),
            'engine' => static::serializeValue($this->engine),
            'version' => static::serializeValue($this->version),
            'uptime' => static::serializeValue($this->uptime),
            'connections' => static::serializeValue($this->connections),
            'syncMode' => static::serializeValue($this->syncMode),
            'effectiveSyncMode' => static::serializeValue($this->effectiveSyncMode),
            'syncDegraded' => static::serializeValue($this->syncDegraded),
            'syncAcknowledgements' => static::serializeValue($this->syncAcknowledgements),
            'syncStandbyCount' => static::serializeValue($this->syncStandbyCount),
            'syncStateConfirmed' => static::serializeValue($this->syncStateConfirmed),
            'replicas' => static::serializeValue($this->replicas),
            'volumes' => static::serializeValue($this->volumes)
        ];
    }
}
