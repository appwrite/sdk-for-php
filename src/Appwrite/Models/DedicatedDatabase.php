<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * DedicatedDatabase
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabase
{
    use ArraySerializable;

    /**
     * DedicatedDatabase constructor.
     *
     * @param string $id dedicated database id.
     * @param string $createdAt database creation time in iso 8601 format.
     * @param string $updatedAt database update date in iso 8601 format.
     * @param string $projectId project id that owns this database.
     * @param string $name database display name.
     * @param string $version database engine version.
     * @param string $specification specification identifier.
     * @param string $backend database backend provider. possible values: edge.
     * @param string $hostname database hostname for connections.
     * @param string $connectionUser database username for connections.
     * @param string $connectionPassword database password for connections.
     * @param string $connectionString full database connection string (uri format).
     * @param bool $ssl whether ssl/tls is required for client connections.
     * @param string $status database status. possible values: provisioning, ready, inactive, paused, failed, deleted, restoring, scaling.
     * @param string $containerStatus container status for lifecycle-managed database runtimes: active, inactive, or failed (a wake was declined because the backing namespace is gone).
     * @param string $lifecycleState idle-lifecycle state of the database. possible values: active, warm, cold, hibernated.
     * @param int $idleTimeoutMinutes minutes of inactivity before container scales to zero.
     * @param int $cpu cpu allocated in millicores.
     * @param int $memory memory allocated in mb.
     * @param int $storage storage allocated in gb.
     * @param string $storageStatus storage resize status. possible values: idle (no resize in flight), resizing (the volume is growing towards storagetargetgb).
     * @param int $storageTargetGb size in gb the volume is growing towards while storagestatus is resizing. 0 when no resize is in flight.
     * @param string $storageClass storage class. currently always 'ssd'; digitalocean exposes a single block-storage class.
     * @param int $storageMaxGb maximum storage allowed in gb. 0 means use system default.
     * @param string $nodePool kubernetes node pool where the database is scheduled.
     * @param int $replicas number of high availability replicas. high availability is enabled when greater than 0.
     * @param string $syncMode replication sync mode: async, sync, or quorum.
     * @param int $networkMaxConnections maximum concurrent client connections. this is the limit a client pool may reach; the engine's own max_connections reported by the status endpoint is a smaller backend limit the pooler multiplexes onto and does not constrain a client pool.
     * @param int $networkIdleTimeoutSeconds connection idle timeout in seconds.
     * @param array $networkIPAllowlist ip addresses/cidr ranges allowed to connect.
     * @param bool $backupEnabled whether automatic backups are enabled.
     * @param bool $pitr whether point-in-time recovery is enabled.
     * @param int $pitrRetentionDays number of days to retain pitr data.
     * @param bool $storageAutoscaling whether automatic storage expansion is enabled.
     * @param int $storageAutoscalingThresholdPercent storage usage percentage that triggers automatic expansion.
     * @param int $storageAutoscalingMaxGb maximum storage size in gb for autoscaling. defaults to 3 times the specification's storage. 0 means no limit.
     * @param string $maintenanceWindowDay day of the week for the maintenance window. possible values: sun, mon, tue, wed, thu, fri, sat.
     * @param int $maintenanceWindowHourUtc hour in utc (0-23) when the maintenance window starts.
     * @param bool $metricsEnabled whether metrics collection is enabled.
     * @param bool $sqlApiEnabled whether the sql api sidecar is enabled for this database.
     * @param array $sqlApiAllowedStatements statement types accepted by the sql api. defaults to read/write dml only; ddl/dcl types (create, alter, drop, truncate, grant, revoke) are opt-in per database. allowed values: select, insert, update, delete, create, alter, drop, truncate, grant, revoke.
     * @param int $sqlApiMaxRows maximum rows returned per sql api execution. results larger than this are truncated.
     * @param int $sqlApiMaxBytes maximum serialised sql api result payload in bytes. results larger than this are truncated.
     * @param int $sqlApiTimeoutSeconds maximum server-side sql api execution time in seconds before the query is cancelled.
     * @param string $error error message if status is failed.
     * @param string|null $api product api that owns this database: tablesdb, documentsdb, vectorsdb, mysql, postgresql, or mongodb.
     * @param string|null $engine database engine: postgresql, mysql, or mongodb. null until the backing reports one.
     * @param int|null $connectionPort database port for connections. derived from the engine when the backing has not reported one yet.
     * @param int|null $credentialGeneration committed generation of the primary connection credentials. null until the rotation contract has been initialized.
     * @param string|null $lastAccessedAt last activity timestamp in iso 8601 format.
     * @param string|null $idleUntil display-only timestamp when the database is expected to be considered idle (iso 8601 format). derived from last activity; lifecycle transitions are driven by lifecyclestate.
     * @param string|null $storageResizeStartedAt time the in-flight storage resize started, in iso 8601 format.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $projectId,
        public string $name,
        public string $version,
        public string $specification,
        public string $backend,
        public string $hostname,
        public string $connectionUser,
        public string $connectionPassword,
        public string $connectionString,
        public bool $ssl,
        public string $status,
        public string $containerStatus,
        public string $lifecycleState,
        public int $idleTimeoutMinutes,
        public int $cpu,
        public int $memory,
        public int $storage,
        public string $storageStatus,
        public int $storageTargetGb,
        public string $storageClass,
        public int $storageMaxGb,
        public string $nodePool,
        public int $replicas,
        public string $syncMode,
        public int $networkMaxConnections,
        public int $networkIdleTimeoutSeconds,
        public array $networkIPAllowlist,
        public bool $backupEnabled,
        public bool $pitr,
        public int $pitrRetentionDays,
        public bool $storageAutoscaling,
        public int $storageAutoscalingThresholdPercent,
        public int $storageAutoscalingMaxGb,
        public string $maintenanceWindowDay,
        public int $maintenanceWindowHourUtc,
        public bool $metricsEnabled,
        public bool $sqlApiEnabled,
        public array $sqlApiAllowedStatements,
        public int $sqlApiMaxRows,
        public int $sqlApiMaxBytes,
        public int $sqlApiTimeoutSeconds,
        public string $error,
        public ?string $api = null,
        public ?string $engine = null,
        public ?int $connectionPort = null,
        public ?int $credentialGeneration = null,
        public ?string $lastAccessedAt = null,
        public ?string $idleUntil = null,
        public ?string $storageResizeStartedAt = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            '$createdAt' => "",
            '$updatedAt' => "",
            'projectId' => "",
            'name' => "",
            'version' => "",
            'specification' => "",
            'backend' => "",
            'hostname' => "",
            'connectionUser' => "",
            'connectionPassword' => "",
            'connectionString' => "",
            'ssl' => false,
            'status' => "provisioning",
            'containerStatus' => "",
            'lifecycleState' => "",
            'idleTimeoutMinutes' => 15,
            'cpu' => 500,
            'memory' => 512,
            'storage' => 10,
            'storageStatus' => "idle",
            'storageTargetGb' => 0,
            'storageClass' => "ssd",
            'storageMaxGb' => 0,
            'nodePool' => "",
            'replicas' => 0,
            'syncMode' => "",
            'networkMaxConnections' => 100,
            'networkIdleTimeoutSeconds' => 900,
            'networkIPAllowlist' => [],
            'backupEnabled' => true,
            'pitr' => true,
            'pitrRetentionDays' => 7,
            'storageAutoscaling' => true,
            'storageAutoscalingThresholdPercent' => 85,
            'storageAutoscalingMaxGb' => 0,
            'maintenanceWindowDay' => "sun",
            'maintenanceWindowHourUtc' => 3,
            'metricsEnabled' => false,
            'sqlApiEnabled' => true,
            'sqlApiAllowedStatements' => ["SELECT", "INSERT", "UPDATE", "DELETE"],
            'sqlApiMaxRows' => 10000,
            'sqlApiMaxBytes' => 10485760,
            'sqlApiTimeoutSeconds' => 30,
            'error' => "",
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            projectId: $data['projectId'],
            name: $data['name'],
            version: $data['version'],
            specification: $data['specification'],
            backend: $data['backend'],
            hostname: $data['hostname'],
            connectionUser: $data['connectionUser'],
            connectionPassword: $data['connectionPassword'],
            connectionString: $data['connectionString'],
            ssl: $data['ssl'],
            status: $data['status'],
            containerStatus: $data['containerStatus'],
            lifecycleState: $data['lifecycleState'],
            idleTimeoutMinutes: $data['idleTimeoutMinutes'],
            cpu: $data['cpu'],
            memory: $data['memory'],
            storage: $data['storage'],
            storageStatus: $data['storageStatus'],
            storageTargetGb: $data['storageTargetGb'],
            storageClass: $data['storageClass'],
            storageMaxGb: $data['storageMaxGb'],
            nodePool: $data['nodePool'],
            replicas: $data['replicas'],
            syncMode: $data['syncMode'],
            networkMaxConnections: $data['networkMaxConnections'],
            networkIdleTimeoutSeconds: $data['networkIdleTimeoutSeconds'],
            networkIPAllowlist: $data['networkIPAllowlist'],
            backupEnabled: $data['backupEnabled'],
            pitr: $data['pitr'],
            pitrRetentionDays: $data['pitrRetentionDays'],
            storageAutoscaling: $data['storageAutoscaling'],
            storageAutoscalingThresholdPercent: $data['storageAutoscalingThresholdPercent'],
            storageAutoscalingMaxGb: $data['storageAutoscalingMaxGb'],
            maintenanceWindowDay: $data['maintenanceWindowDay'],
            maintenanceWindowHourUtc: $data['maintenanceWindowHourUtc'],
            metricsEnabled: $data['metricsEnabled'],
            sqlApiEnabled: $data['sqlApiEnabled'],
            sqlApiAllowedStatements: $data['sqlApiAllowedStatements'],
            sqlApiMaxRows: $data['sqlApiMaxRows'],
            sqlApiMaxBytes: $data['sqlApiMaxBytes'],
            sqlApiTimeoutSeconds: $data['sqlApiTimeoutSeconds'],
            error: $data['error'],
            api: $data['api'] ?? null,
            engine: $data['engine'] ?? null,
            connectionPort: $data['connectionPort'] ?? null,
            credentialGeneration: $data['credentialGeneration'] ?? null,
            lastAccessedAt: $data['lastAccessedAt'] ?? null,
            idleUntil: $data['idleUntil'] ?? null,
            storageResizeStartedAt: $data['storageResizeStartedAt'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'projectId' => static::serializeValue($this->projectId),
            'name' => static::serializeValue($this->name),
            'api' => static::serializeValue($this->api),
            'engine' => static::serializeValue($this->engine),
            'version' => static::serializeValue($this->version),
            'specification' => static::serializeValue($this->specification),
            'backend' => static::serializeValue($this->backend),
            'hostname' => static::serializeValue($this->hostname),
            'connectionPort' => static::serializeValue($this->connectionPort),
            'connectionUser' => static::serializeValue($this->connectionUser),
            'connectionPassword' => static::serializeValue($this->connectionPassword),
            'credentialGeneration' => static::serializeValue($this->credentialGeneration),
            'connectionString' => static::serializeValue($this->connectionString),
            'ssl' => static::serializeValue($this->ssl),
            'status' => static::serializeValue($this->status),
            'containerStatus' => static::serializeValue($this->containerStatus),
            'lastAccessedAt' => static::serializeValue($this->lastAccessedAt),
            'idleUntil' => static::serializeValue($this->idleUntil),
            'lifecycleState' => static::serializeValue($this->lifecycleState),
            'idleTimeoutMinutes' => static::serializeValue($this->idleTimeoutMinutes),
            'cpu' => static::serializeValue($this->cpu),
            'memory' => static::serializeValue($this->memory),
            'storage' => static::serializeValue($this->storage),
            'storageStatus' => static::serializeValue($this->storageStatus),
            'storageTargetGb' => static::serializeValue($this->storageTargetGb),
            'storageResizeStartedAt' => static::serializeValue($this->storageResizeStartedAt),
            'storageClass' => static::serializeValue($this->storageClass),
            'storageMaxGb' => static::serializeValue($this->storageMaxGb),
            'nodePool' => static::serializeValue($this->nodePool),
            'replicas' => static::serializeValue($this->replicas),
            'syncMode' => static::serializeValue($this->syncMode),
            'networkMaxConnections' => static::serializeValue($this->networkMaxConnections),
            'networkIdleTimeoutSeconds' => static::serializeValue($this->networkIdleTimeoutSeconds),
            'networkIPAllowlist' => static::serializeValue($this->networkIPAllowlist),
            'backupEnabled' => static::serializeValue($this->backupEnabled),
            'pitr' => static::serializeValue($this->pitr),
            'pitrRetentionDays' => static::serializeValue($this->pitrRetentionDays),
            'storageAutoscaling' => static::serializeValue($this->storageAutoscaling),
            'storageAutoscalingThresholdPercent' => static::serializeValue($this->storageAutoscalingThresholdPercent),
            'storageAutoscalingMaxGb' => static::serializeValue($this->storageAutoscalingMaxGb),
            'maintenanceWindowDay' => static::serializeValue($this->maintenanceWindowDay),
            'maintenanceWindowHourUtc' => static::serializeValue($this->maintenanceWindowHourUtc),
            'metricsEnabled' => static::serializeValue($this->metricsEnabled),
            'sqlApiEnabled' => static::serializeValue($this->sqlApiEnabled),
            'sqlApiAllowedStatements' => static::serializeValue($this->sqlApiAllowedStatements),
            'sqlApiMaxRows' => static::serializeValue($this->sqlApiMaxRows),
            'sqlApiMaxBytes' => static::serializeValue($this->sqlApiMaxBytes),
            'sqlApiTimeoutSeconds' => static::serializeValue($this->sqlApiTimeoutSeconds),
            'error' => static::serializeValue($this->error)
        ];
    }
}
