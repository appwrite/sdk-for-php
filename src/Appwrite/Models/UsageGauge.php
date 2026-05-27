<?php

namespace Appwrite\Models;

/**
 * usageGauge
 */
readonly class UsageGauge
{
    use ArraySerializable;

    /**
     * UsageGauge constructor.
     *
     * @param string $metric the metric key.
     * @param int $value the current snapshot value.
     * @param string $time the snapshot timestamp.
     * @param string $resourceType the resource type.
     * @param string $resourceId the resource id.
     */
    public function __construct(
        public string $metric,
        public int $value,
        public string $time,
        public string $resourceType,
        public string $resourceId
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('metric', $data)) {
            throw new \InvalidArgumentException('Missing required field "metric" for ' . static::class . '.');
        }
        if (!array_key_exists('value', $data)) {
            throw new \InvalidArgumentException('Missing required field "value" for ' . static::class . '.');
        }
        if (!array_key_exists('time', $data)) {
            throw new \InvalidArgumentException('Missing required field "time" for ' . static::class . '.');
        }
        if (!array_key_exists('resourceType', $data)) {
            throw new \InvalidArgumentException('Missing required field "resourceType" for ' . static::class . '.');
        }
        if (!array_key_exists('resourceId', $data)) {
            throw new \InvalidArgumentException('Missing required field "resourceId" for ' . static::class . '.');
        }

        return new static(
            metric: $data['metric'],
            value: $data['value'],
            time: $data['time'],
            resourceType: $data['resourceType'],
            resourceId: $data['resourceId']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'metric' => static::serializeValue($this->metric),
            'value' => static::serializeValue($this->value),
            'time' => static::serializeValue($this->time),
            'resourceType' => static::serializeValue($this->resourceType),
            'resourceId' => static::serializeValue($this->resourceId)
        ];

        return $result;
    }
}
