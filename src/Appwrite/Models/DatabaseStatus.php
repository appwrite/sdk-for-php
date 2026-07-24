<?php

namespace Appwrite\Models;

/**
 * Status
 */
readonly class DatabaseStatus
{
    use ArraySerializable;

    /**
     * DatabaseStatus constructor.
     *
     * @param string $health overall health status: healthy, degraded, or unhealthy.
     * @param bool $ready whether the database is ready to accept connections.
     * @param string $engine database engine: postgresql, mysql, mariadb, or mongodb.
     * @param string $version database engine version.
     * @param int $uptime database uptime in seconds.
     * @param DatabaseStatusConnections $connections connection statistics.
     * @param list<DatabaseStatusReplica> $replicas list of database replicas and their status.
     * @param list<DatabaseStatusVolume> $volumes storage volume information.
     */
    public function __construct(
        public string $health,
        public bool $ready,
        public string $engine,
        public string $version,
        public int $uptime,
        public DatabaseStatusConnections $connections,
        public array $replicas,
        public array $volumes
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('health', $data)) {
            throw new \InvalidArgumentException('Missing required field "health" for ' . static::class . '.');
        }
        if (!array_key_exists('ready', $data)) {
            throw new \InvalidArgumentException('Missing required field "ready" for ' . static::class . '.');
        }
        if (!array_key_exists('engine', $data)) {
            throw new \InvalidArgumentException('Missing required field "engine" for ' . static::class . '.');
        }
        if (!array_key_exists('version', $data)) {
            throw new \InvalidArgumentException('Missing required field "version" for ' . static::class . '.');
        }
        if (!array_key_exists('uptime', $data)) {
            throw new \InvalidArgumentException('Missing required field "uptime" for ' . static::class . '.');
        }
        if (!array_key_exists('connections', $data)) {
            throw new \InvalidArgumentException('Missing required field "connections" for ' . static::class . '.');
        }
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
            connections: static::hydrateTypedValue(DatabaseStatusConnections::class, $data['connections']),
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
                : $data['volumes']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'health' => static::serializeValue($this->health),
            'ready' => static::serializeValue($this->ready),
            'engine' => static::serializeValue($this->engine),
            'version' => static::serializeValue($this->version),
            'uptime' => static::serializeValue($this->uptime),
            'connections' => static::serializeValue($this->connections),
            'replicas' => static::serializeValue($this->replicas),
            'volumes' => static::serializeValue($this->volumes)
        ];

        return $result;
    }
}
