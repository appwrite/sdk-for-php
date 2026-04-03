<?php

namespace Appwrite\Models;

/**
 * Transaction List
 */
readonly class TransactionList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'transactions' => Transaction::class
    ];

    /**
     * TransactionList constructor.
     *
     * @param int $total total number of transactions that matched your query.
     * @param list<Transaction> $transactions list of transactions.
     */
    public function __construct(
        public int $total,
        public array $transactions
    ) {
    }
}
