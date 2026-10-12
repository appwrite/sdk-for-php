<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Transaction
 *
 * @phpstan-consistent-constructor
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
        $data += [
            '$id' => "",
            '$createdAt' => "",
            '$updatedAt' => "",
            'status' => "pending",
            'operations' => 0,
            'expiresAt' => "",
        ];

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
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'status' => static::serializeValue($this->status),
            'operations' => static::serializeValue($this->operations),
            'expiresAt' => static::serializeValue($this->expiresAt)
        ];
    }
}
