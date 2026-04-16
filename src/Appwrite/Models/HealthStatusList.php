<?php

namespace Appwrite\Models;

/**
 * Status List
 */
readonly class HealthStatusList
{
    use ArraySerializable;

    /**
     * HealthStatusList constructor.
     *
     * @param int $total total number of statuses that matched your query.
     * @param list<HealthStatus> $statuses list of statuses.
     */
    public function __construct(
        public int $total,
        public array $statuses
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
        if (!array_key_exists('statuses', $data)) {
            throw new \InvalidArgumentException('Missing required field "statuses" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            statuses: is_array($data['statuses'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(HealthStatus::class, $item),
                    $data['statuses']
                )
                : $data['statuses']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'statuses' => static::serializeValue($this->statuses)
        ];

        return $result;
    }
}
