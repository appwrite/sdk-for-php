<?php

namespace Appwrite\Models;

/**
 * Policy Session Duration
 */
readonly class PolicySessionDuration
{
    use ArraySerializable;

    /**
     * PolicySessionDuration constructor.
     *
     * @param string $id policy id.
     * @param int $duration session duration in seconds.
     */
    public function __construct(
        public string $id,
        public int $duration
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
        if (!array_key_exists('duration', $data)) {
            throw new \InvalidArgumentException('Missing required field "duration" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            duration: $data['duration']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            'duration' => static::serializeValue($this->duration)
        ];

        return $result;
    }
}
