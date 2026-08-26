<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * dedicatedDatabaseLimits
 *
 * @phpstan-consistent-constructor
 */
readonly class BillingPlanDedicatedDatabaseLimits
{
    use ArraySerializable;

    /**
     * BillingPlanDedicatedDatabaseLimits constructor.
     *
     * @param int|null $minCpu minimum cpu allocation in millicores.
     * @param int|null $maxCpu maximum cpu allocation in millicores.
     * @param int|null $minMemoryMb minimum memory allocation in megabytes.
     * @param int|null $maxMemoryMb maximum memory allocation in megabytes.
     * @param int|null $minStorageGb minimum storage allocation in gigabytes.
     * @param int|null $maxStorageGb maximum storage allocation in gigabytes.
     * @param int|null $maxReplicas maximum number of high-availability replicas per dedicated database.
     * @param int|null $maxConnections maximum number of client connections.
     * @param int|null $maxIpAllowlistSize maximum number of entries allowed in the ip allowlist.
     * @param int|null $maxExtensions maximum number of database extensions that can be enabled.
     * @param int|null $maxBackupRetentionDays maximum number of days a backup can be retained.
     * @param int|null $maxPitrRetentionDays maximum number of days of point-in-time recovery data that can be retained.
     * @param int|null $maxSqlApiMaxRows maximum number of rows a single sql api query can return.
     * @param int|null $maxSqlApiMaxBytes maximum response size in bytes for a single sql api query.
     * @param int|null $maxSqlApiTimeoutSeconds maximum execution time in seconds for a single sql api query.
     * @param int|null $maxSqlApiAllowedStatements maximum number of sql statement types that can be permitted through the sql api.
     * @param array|null $allowedSqlStatements sql statement types permitted through the sql api.
     * @param array|null $allowedStorageClasses storage classes available for dedicated databases.
     * @param array|null $allowedSyncModes replica synchronization modes available for dedicated databases.
     */
    public function __construct(
        public ?int $minCpu = null,
        public ?int $maxCpu = null,
        public ?int $minMemoryMb = null,
        public ?int $maxMemoryMb = null,
        public ?int $minStorageGb = null,
        public ?int $maxStorageGb = null,
        public ?int $maxReplicas = null,
        public ?int $maxConnections = null,
        public ?int $maxIpAllowlistSize = null,
        public ?int $maxExtensions = null,
        public ?int $maxBackupRetentionDays = null,
        public ?int $maxPitrRetentionDays = null,
        public ?int $maxSqlApiMaxRows = null,
        public ?int $maxSqlApiMaxBytes = null,
        public ?int $maxSqlApiTimeoutSeconds = null,
        public ?int $maxSqlApiAllowedStatements = null,
        public ?array $allowedSqlStatements = null,
        public ?array $allowedStorageClasses = null,
        public ?array $allowedSyncModes = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {

        return new static(
            minCpu: $data['minCpu'] ?? null,
            maxCpu: $data['maxCpu'] ?? null,
            minMemoryMb: $data['minMemoryMb'] ?? null,
            maxMemoryMb: $data['maxMemoryMb'] ?? null,
            minStorageGb: $data['minStorageGb'] ?? null,
            maxStorageGb: $data['maxStorageGb'] ?? null,
            maxReplicas: $data['maxReplicas'] ?? null,
            maxConnections: $data['maxConnections'] ?? null,
            maxIpAllowlistSize: $data['maxIpAllowlistSize'] ?? null,
            maxExtensions: $data['maxExtensions'] ?? null,
            maxBackupRetentionDays: $data['maxBackupRetentionDays'] ?? null,
            maxPitrRetentionDays: $data['maxPitrRetentionDays'] ?? null,
            maxSqlApiMaxRows: $data['maxSqlApiMaxRows'] ?? null,
            maxSqlApiMaxBytes: $data['maxSqlApiMaxBytes'] ?? null,
            maxSqlApiTimeoutSeconds: $data['maxSqlApiTimeoutSeconds'] ?? null,
            maxSqlApiAllowedStatements: $data['maxSqlApiAllowedStatements'] ?? null,
            allowedSqlStatements: $data['allowedSqlStatements'] ?? null,
            allowedStorageClasses: $data['allowedStorageClasses'] ?? null,
            allowedSyncModes: $data['allowedSyncModes'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'minCpu' => static::serializeValue($this->minCpu),
            'maxCpu' => static::serializeValue($this->maxCpu),
            'minMemoryMb' => static::serializeValue($this->minMemoryMb),
            'maxMemoryMb' => static::serializeValue($this->maxMemoryMb),
            'minStorageGb' => static::serializeValue($this->minStorageGb),
            'maxStorageGb' => static::serializeValue($this->maxStorageGb),
            'maxReplicas' => static::serializeValue($this->maxReplicas),
            'maxConnections' => static::serializeValue($this->maxConnections),
            'maxIpAllowlistSize' => static::serializeValue($this->maxIpAllowlistSize),
            'maxExtensions' => static::serializeValue($this->maxExtensions),
            'maxBackupRetentionDays' => static::serializeValue($this->maxBackupRetentionDays),
            'maxPitrRetentionDays' => static::serializeValue($this->maxPitrRetentionDays),
            'maxSqlApiMaxRows' => static::serializeValue($this->maxSqlApiMaxRows),
            'maxSqlApiMaxBytes' => static::serializeValue($this->maxSqlApiMaxBytes),
            'maxSqlApiTimeoutSeconds' => static::serializeValue($this->maxSqlApiTimeoutSeconds),
            'maxSqlApiAllowedStatements' => static::serializeValue($this->maxSqlApiAllowedStatements),
            'allowedSqlStatements' => static::serializeValue($this->allowedSqlStatements),
            'allowedStorageClasses' => static::serializeValue($this->allowedStorageClasses),
            'allowedSyncModes' => static::serializeValue($this->allowedSyncModes)
        ];
    }
}
