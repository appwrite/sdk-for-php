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
     * @param string $sourceDatabaseId source database id when restoring a backup into another database.
     * @param string $projectId project id.
     * @param string $backupId backup id used for restoration (null for pitr).
     * @param string $type restoration type. possible values: backup (restore from a specific backup snapshot), pitr (point-in-time recovery to a specific timestamp).
     * @param string $status restoration status. possible values: pending (queued for processing), running (currently in progress), completed (successfully finished), failed (encountered an error).
     * @param string $targetTime target time for pitr restoration in iso 8601 format.
     * @param string $startedAt restoration start time in iso 8601 format.
     * @param string $completedAt restoration completion time in iso 8601 format.
     * @param string $error error message if restoration failed.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $databaseId,
        public string $sourceDatabaseId,
        public string $projectId,
        public string $backupId,
        public string $type,
        public string $status,
        public string $targetTime,
        public string $startedAt,
        public string $completedAt,
        public string $error
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
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('databaseId', $data)) {
            throw new \InvalidArgumentException('Missing required field "databaseId" for ' . static::class . '.');
        }
        if (!array_key_exists('sourceDatabaseId', $data)) {
            throw new \InvalidArgumentException('Missing required field "sourceDatabaseId" for ' . static::class . '.');
        }
        if (!array_key_exists('projectId', $data)) {
            throw new \InvalidArgumentException('Missing required field "projectId" for ' . static::class . '.');
        }
        if (!array_key_exists('backupId', $data)) {
            throw new \InvalidArgumentException('Missing required field "backupId" for ' . static::class . '.');
        }
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }
        if (!array_key_exists('targetTime', $data)) {
            throw new \InvalidArgumentException('Missing required field "targetTime" for ' . static::class . '.');
        }
        if (!array_key_exists('startedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "startedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('completedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "completedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('error', $data)) {
            throw new \InvalidArgumentException('Missing required field "error" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            databaseId: $data['databaseId'],
            sourceDatabaseId: $data['sourceDatabaseId'],
            projectId: $data['projectId'],
            backupId: $data['backupId'],
            type: $data['type'],
            status: $data['status'],
            targetTime: $data['targetTime'],
            startedAt: $data['startedAt'],
            completedAt: $data['completedAt'],
            error: $data['error']
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
            'status' => static::serializeValue($this->status),
            'targetTime' => static::serializeValue($this->targetTime),
            'startedAt' => static::serializeValue($this->startedAt),
            'completedAt' => static::serializeValue($this->completedAt),
            'error' => static::serializeValue($this->error)
        ];
    }
}
