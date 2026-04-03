<?php

namespace Appwrite\Models;

/**
 * Transaction
 */
readonly class Transaction
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt'
    ];

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
}
