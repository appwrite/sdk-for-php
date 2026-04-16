<?php

namespace Appwrite\Models;

use Appwrite\Enums\HealthCheckStatus;

/**
 * Health Status
 */
readonly class HealthStatus
{
    use ArraySerializable;

    /**
     * HealthStatus constructor.
     *
     * @param string $name name of the service.
     * @param int $ping duration in milliseconds how long the health check took.
     * @param HealthCheckStatus $status service status. possible values are: `pass`, `fail`
     */
    public function __construct(
        public string $name,
        public int $ping,
        public HealthCheckStatus $status
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('ping', $data)) {
            throw new \InvalidArgumentException('Missing required field "ping" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }

        return new static(
            name: $data['name'],
            ping: $data['ping'],
            status: static::hydrateTypedValue(HealthCheckStatus::class, $data['status'])
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'name' => static::serializeValue($this->name),
            'ping' => static::serializeValue($this->ping),
            'status' => static::serializeValue($this->status)
        ];

        return $result;
    }
}
