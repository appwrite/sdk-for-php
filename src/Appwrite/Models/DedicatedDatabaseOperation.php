<?php

namespace Appwrite\Models;

/**
 * Operation
 */
readonly class DedicatedDatabaseOperation
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseOperation constructor.
     *
     * @param string $id operation id.
     * @param string $createdAt operation creation time in iso 8601 format.
     * @param string $databaseId database id the operation ran against.
     * @param string $type operation type, such as provision, update, restore, pausing, resuming, failover, backup-create or cross-region-enable.
     * @param string $status operation status. possible values: running (in progress), completed (finished successfully), failed (ended in an error).
     * @param int $attempts number of times this operation has been attempted.
     * @param string $errorCode machine-readable failure code. `interrupted` marks an attempt that ended before its outcome could be confirmed.
     * @param string $errorMessage failure message if the operation failed.
     * @param string|null $requestedAt time the operation was requested, in iso 8601 format.
     * @param string|null $startedAt time the operation started, in iso 8601 format.
     * @param string|null $completedAt time the operation reached a terminal state, in iso 8601 format.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $databaseId,
        public string $type,
        public string $status,
        public int $attempts,
        public string $errorCode,
        public string $errorMessage,
        public ?string $requestedAt = null,
        public ?string $startedAt = null,
        public ?string $completedAt = null
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
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }
        if (!array_key_exists('attempts', $data)) {
            throw new \InvalidArgumentException('Missing required field "attempts" for ' . static::class . '.');
        }
        if (!array_key_exists('errorCode', $data)) {
            throw new \InvalidArgumentException('Missing required field "errorCode" for ' . static::class . '.');
        }
        if (!array_key_exists('errorMessage', $data)) {
            throw new \InvalidArgumentException('Missing required field "errorMessage" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            databaseId: $data['databaseId'],
            type: $data['type'],
            status: $data['status'],
            attempts: $data['attempts'],
            errorCode: $data['errorCode'],
            errorMessage: $data['errorMessage'],
            requestedAt: array_key_exists('requestedAt', $data) ? $data['requestedAt'] : null,
            startedAt: array_key_exists('startedAt', $data) ? $data['startedAt'] : null,
            completedAt: array_key_exists('completedAt', $data) ? $data['completedAt'] : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            'databaseId' => static::serializeValue($this->databaseId),
            'type' => static::serializeValue($this->type),
            'status' => static::serializeValue($this->status),
            'attempts' => static::serializeValue($this->attempts),
            'requestedAt' => static::serializeValue($this->requestedAt),
            'startedAt' => static::serializeValue($this->startedAt),
            'completedAt' => static::serializeValue($this->completedAt),
            'errorCode' => static::serializeValue($this->errorCode),
            'errorMessage' => static::serializeValue($this->errorMessage)
        ];

        return $result;
    }
}
