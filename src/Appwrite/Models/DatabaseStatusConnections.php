<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Connections
 *
 * @phpstan-consistent-constructor
 */
readonly class DatabaseStatusConnections
{
    use ArraySerializable;

    /**
     * DatabaseStatusConnections constructor.
     *
     * @param int $current current number of active connections.
     * @param int $max the engine's own max_connections. on a pooled database this is the backend limit the pooler multiplexes onto, not the ceiling a client pool may reach — that is networkmaxconnections on the database resource.
     */
    public function __construct(
        public int $current,
        public int $max
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('current', $data)) {
            throw new \InvalidArgumentException('Missing required field "current" for ' . static::class . '.');
        }
        if (!array_key_exists('max', $data)) {
            throw new \InvalidArgumentException('Missing required field "max" for ' . static::class . '.');
        }

        return new static(
            current: $data['current'],
            max: $data['max']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'current' => static::serializeValue($this->current),
            'max' => static::serializeValue($this->max)
        ];
    }
}
