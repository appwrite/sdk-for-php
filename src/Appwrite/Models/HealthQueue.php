<?php

namespace Appwrite\Models;

/**
 * Health Queue
 */
readonly class HealthQueue
{
    use ArraySerializable;

    /**
     * HealthQueue constructor.
     *
     * @param int $size amount of actions in the queue.
     */
    public function __construct(
        public int $size
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('size', $data)) {
            throw new \InvalidArgumentException('Missing required field "size" for ' . static::class . '.');
        }

        return new static(
            size: $data['size']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'size' => static::serializeValue($this->size)
        ];

        return $result;
    }
}
