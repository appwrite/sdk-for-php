<?php

namespace Appwrite\Models;

/**
 * Transaction
 */
readonly class Transaction
{
    use ArraySerializable;

    /**
     * Transaction constructor.
     *
     * @param string $id transaction id.
     * @param string $createdAt transaction creation time in iso 8601 format.
     * @param string $updatedAt transaction update date in iso 8601 format.
     * @param string $status current status of the transaction. one of: pending, committing, committed, rolled_back, failed.
     * @param int $operations number of operations in the transaction.
     * @param string $expiresAt expiration time in iso 8601 format.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $status,
        public int $operations,
        public string $expiresAt
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
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }
        if (!array_key_exists('operations', $data)) {
            throw new \InvalidArgumentException('Missing required field "operations" for ' . static::class . '.');
        }
        if (!array_key_exists('expiresAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "expiresAt" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            status: $data['status'],
            operations: $data['operations'],
            expiresAt: $data['expiresAt']
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
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'status' => static::serializeValue($this->status),
            'operations' => static::serializeValue($this->operations),
            'expiresAt' => static::serializeValue($this->expiresAt)
        ];

        return $result;
    }
}
