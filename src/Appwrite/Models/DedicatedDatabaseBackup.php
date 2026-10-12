<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Backup
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseBackup
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseBackup constructor.
     *
     * @param string $id backup id.
     * @param string $createdAt backup creation time in iso 8601 format.
     * @param string $databaseId database id this backup belongs to.
     * @param string $projectId project id.
     * @param string $policyId backup policy id when the backup was created by a schedule.
     * @param string $trigger backup trigger. possible values: manual, schedule.
     * @param string $type backup type. possible values: full (complete database snapshot), incremental (changes since last backup), wal (write-ahead log continuous archival).
     * @param string $requestedType backup type that was requested. differs from `type` when the backend could not run the requested type and took a different one instead, in which case `fallbackreason` explains why. empty for backups taken before the requested type was recorded.
     * @param string $fallbackReason why the backend ran a different backup type than the one requested. empty when the backup ran as requested.
     * @param string $status backup status. possible values: pending (queued for processing), running (currently in progress), completed (successfully finished), failed (encountered an error), verified (integrity check passed).
     * @param int $sizeBytes backup size in bytes.
     * @param string $error error message if backup failed.
     * @param string|null $startedAt backup start time in iso 8601 format.
     * @param string|null $completedAt backup completion time in iso 8601 format.
     * @param string|null $verifiedAt backup verification time in iso 8601 format.
     * @param string|null $expiresAt backup expiration time in iso 8601 format.
     * @param string|null $logPosition transaction-log position the backup anchors at, in the engine's own notation: postgresql `{walsegment}|{lsn}`, mysql and mariadb `{binlogfile}|{offset}`, mongodb `{seconds}|{increment}`. empty when the backup recorded no position, which is the case for backup types that carry none.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $databaseId,
        public string $projectId,
        public string $policyId,
        public string $trigger,
        public string $type,
        public string $requestedType,
        public string $fallbackReason,
        public string $status,
        public int $sizeBytes,
        public string $error,
        public ?string $startedAt = null,
        public ?string $completedAt = null,
        public ?string $verifiedAt = null,
        public ?string $expiresAt = null,
        public ?string $logPosition = null
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
            'databaseId' => "",
            'projectId' => "",
            'policyId' => "",
            'trigger' => "manual",
            'type' => "full",
            'requestedType' => "",
            'fallbackReason' => "",
            'status' => "pending",
            'sizeBytes' => 0,
            'error' => "",
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            databaseId: $data['databaseId'],
            projectId: $data['projectId'],
            policyId: $data['policyId'],
            trigger: $data['trigger'],
            type: $data['type'],
            requestedType: $data['requestedType'],
            fallbackReason: $data['fallbackReason'],
            status: $data['status'],
            sizeBytes: $data['sizeBytes'],
            error: $data['error'],
            startedAt: $data['startedAt'] ?? null,
            completedAt: $data['completedAt'] ?? null,
            verifiedAt: $data['verifiedAt'] ?? null,
            expiresAt: $data['expiresAt'] ?? null,
            logPosition: $data['logPosition'] ?? null
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
            'databaseId' => static::serializeValue($this->databaseId),
            'projectId' => static::serializeValue($this->projectId),
            'policyId' => static::serializeValue($this->policyId),
            'trigger' => static::serializeValue($this->trigger),
            'type' => static::serializeValue($this->type),
            'requestedType' => static::serializeValue($this->requestedType),
            'fallbackReason' => static::serializeValue($this->fallbackReason),
            'status' => static::serializeValue($this->status),
            'sizeBytes' => static::serializeValue($this->sizeBytes),
            'startedAt' => static::serializeValue($this->startedAt),
            'completedAt' => static::serializeValue($this->completedAt),
            'verifiedAt' => static::serializeValue($this->verifiedAt),
            'expiresAt' => static::serializeValue($this->expiresAt),
            'logPosition' => static::serializeValue($this->logPosition),
            'error' => static::serializeValue($this->error)
        ];
    }
}
