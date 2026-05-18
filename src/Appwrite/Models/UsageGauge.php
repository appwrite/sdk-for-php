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
     */
    public function __construct(
        public string $metric,
        public int $value,
        public string $time
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

        return new static(
            metric: $data['metric'],
            value: $data['value'],
            time: $data['time']
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
            'time' => static::serializeValue($this->time)
        ];

        return $result;
    }
}
