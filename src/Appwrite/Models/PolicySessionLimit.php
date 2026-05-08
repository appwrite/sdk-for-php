<?php

namespace Appwrite\Models;

/**
 * Policy Session Limit
 */
readonly class PolicySessionLimit
{
    use ArraySerializable;

    /**
     * PolicySessionLimit constructor.
     *
     * @param string $id policy id.
     * @param int $total maximum number of sessions allowed per user. a value of 0 means the policy is disabled.
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
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }

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
        $result = [
            '$id' => static::serializeValue($this->id),
            'total' => static::serializeValue($this->total)
        ];

        return $result;
    }
}
