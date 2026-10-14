<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Policies List
 *
 * @phpstan-consistent-constructor
 */
readonly class PolicyList
{
    use ArraySerializable;

    /**
     * PolicyList constructor.
     *
     * @param int $total total number of policies in the given project.
     * @param array $policies list of policies.
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
            policies: $data['policies']
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
