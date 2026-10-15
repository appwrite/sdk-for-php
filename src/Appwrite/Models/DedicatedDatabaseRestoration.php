<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Restoration
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseRestoration
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseRestoration constructor.
     *
     * @param string $id restoration id.
     * @param string $createdAt restoration creation time in iso 8601 format.
     * @param string $databaseId database id being restored into.
     * @param string $projectId project id.
     * @param string $type restoration type. possible values: backup (restore from a specific backup snapshot), pitr (point-in-time recovery to a specific timestamp).
     * @param string $restoreMode where the backup was restored. possible values: in_place (replayed over the database that took the backup), clone (recovered onto a second workload beside the database, which keeps serving until the clone is promoted onto its endpoint), copy (recovered onto a separate database with its own endpoint).
     * @param string $status restoration status. possible values: pending (queued for processing), running (currently in progress), completed (successfully finished), failed (encountered an error).
     * @param string $error error message if restoration failed.
     * @param string|null $sourceDatabaseId source database id when restoring a backup into another database.
     * @param string|null $backupId backup id used for restoration (null for pitr).
     * @param string|null $targetTime target time for pitr restoration in iso 8601 format.
     * @param string|null $startedAt restoration start time in iso 8601 format.
     * @param string|null $completedAt restoration completion time in iso 8601 format.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $databaseId,
        public string $projectId,
        public string $type,
        public string $restoreMode,
        public string $status,
        public string $error,
        public ?string $sourceDatabaseId = null,
        public ?string $backupId = null,
        public ?string $targetTime = null,
        public ?string $startedAt = null,
        public ?string $completedAt = null
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
            'type' => "backup",
            'restoreMode' => "in_place",
            'status' => "pending",
            'error' => "",
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            databaseId: $data['databaseId'],
            projectId: $data['projectId'],
            type: $data['type'],
            restoreMode: $data['restoreMode'],
            status: $data['status'],
            error: $data['error'],
            sourceDatabaseId: $data['sourceDatabaseId'] ?? null,
            backupId: $data['backupId'] ?? null,
            targetTime: $data['targetTime'] ?? null,
            startedAt: $data['startedAt'] ?? null,
            completedAt: $data['completedAt'] ?? null
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
            'sourceDatabaseId' => static::serializeValue($this->sourceDatabaseId),
            'projectId' => static::serializeValue($this->projectId),
            'backupId' => static::serializeValue($this->backupId),
            'type' => static::serializeValue($this->type),
            'restoreMode' => static::serializeValue($this->restoreMode),
            'status' => static::serializeValue($this->status),
            'targetTime' => static::serializeValue($this->targetTime),
            'startedAt' => static::serializeValue($this->startedAt),
            'completedAt' => static::serializeValue($this->completedAt),
            'error' => static::serializeValue($this->error)
        ];
    }
}
