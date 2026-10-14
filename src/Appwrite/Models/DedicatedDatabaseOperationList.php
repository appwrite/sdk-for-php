<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OperationList
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseOperationList
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseOperationList constructor.
     *
     * @param int $total total number of operations.
     * @param list<DedicatedDatabaseOperation> $operations list of operations.
     */
    public function __construct(
        public int $total,
        public array $operations
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'operations' => [],
        ];

        return new static(
            total: $data['total'],
            operations: is_array($data['operations'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DedicatedDatabaseOperation::class, $item),
                    $data['operations']
                )
                : $data['operations']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'operations' => static::serializeValue($this->operations)
        ];
    }
}
