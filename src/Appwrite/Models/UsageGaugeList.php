<?php

namespace Appwrite\Models;

/**
 * usageGaugeList
 */
readonly class UsageGaugeList
{
    use ArraySerializable;

    /**
     * UsageGaugeList constructor.
     *
     * @param string $metric metric key the groups describe.
     * @param string $interval time interval size (1h or 1d).
     * @param list<UsageGroup> $groups aggregated groups ordered by time ascending. each group carries the latest snapshot in its interval (argmax over time).
     */
    public function __construct(
        public string $metric,
        public string $interval,
        public array $groups
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
        if (!array_key_exists('interval', $data)) {
            throw new \InvalidArgumentException('Missing required field "interval" for ' . static::class . '.');
        }
        if (!array_key_exists('groups', $data)) {
            throw new \InvalidArgumentException('Missing required field "groups" for ' . static::class . '.');
        }

        return new static(
            metric: $data['metric'],
            interval: $data['interval'],
            groups: is_array($data['groups'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(UsageGroup::class, $item),
                    $data['groups']
                )
                : $data['groups']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'metric' => static::serializeValue($this->metric),
            'interval' => static::serializeValue($this->interval),
            'groups' => static::serializeValue($this->groups)
        ];

        return $result;
    }
}
