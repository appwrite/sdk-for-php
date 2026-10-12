<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Policy Session Duration
 *
 * @phpstan-consistent-constructor
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
        $data += [
            '$id' => "",
            'duration' => 31536000,
        ];

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
        return [
            '$id' => static::serializeValue($this->id),
            'duration' => static::serializeValue($this->duration)
        ];
    }
}
