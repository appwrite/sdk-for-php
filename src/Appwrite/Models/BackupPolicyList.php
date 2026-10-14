<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Backup policy list
 *
 * @phpstan-consistent-constructor
 */
readonly class BackupPolicyList
{
    use ArraySerializable;

    /**
     * BackupPolicyList constructor.
     *
     * @param int $total total number of policies that matched your query.
     * @param list<BackupPolicy> $policies list of policies.
     */
    public function __construct(
        public int $total,
        public array $policies
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'policies' => [],
        ];

        return new static(
            total: $data['total'],
            policies: is_array($data['policies'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(BackupPolicy::class, $item),
                    $data['policies']
                )
                : $data['policies']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'policies' => static::serializeValue($this->policies)
        ];
    }
}
