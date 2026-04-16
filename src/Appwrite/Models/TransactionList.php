<?php

namespace Appwrite\Models;

/**
 * Transaction List
 */
readonly class TransactionList
{
    use ArraySerializable;

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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('transactions', $data)) {
            throw new \InvalidArgumentException('Missing required field "transactions" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            transactions: is_array($data['transactions'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Transaction::class, $item),
                    $data['transactions']
                )
                : $data['transactions']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'transactions' => static::serializeValue($this->transactions)
        ];

        return $result;
    }
}
