<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * BranchList
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseBranchList
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseBranchList constructor.
     *
     * @param int $total total number of branches.
     * @param list<DedicatedDatabaseBranch> $branches list of branches.
     */
    public function __construct(
        public int $total,
        public array $branches
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
        if (!array_key_exists('branches', $data)) {
            throw new \InvalidArgumentException('Missing required field "branches" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            branches: is_array($data['branches'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DedicatedDatabaseBranch::class, $item),
                    $data['branches']
                )
                : $data['branches']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'branches' => static::serializeValue($this->branches)
        ];
    }
}
