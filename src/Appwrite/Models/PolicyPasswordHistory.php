<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Policy Password History
 *
 * @phpstan-consistent-constructor
 */
readonly class PolicyPasswordHistory
{
    use ArraySerializable;

    /**
     * PolicyPasswordHistory constructor.
     *
     * @param string $id policy id.
     * @param int $total password history length. a value of 0 means the policy is disabled.
     */
    public function __construct(
        public string $id,
        public int $total
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            'total' => 0,
        ];

        return new static(
            id: $data['$id'],
            total: $data['total']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            'total' => static::serializeValue($this->total)
        ];
    }
}
