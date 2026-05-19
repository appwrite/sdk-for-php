<?php

namespace Appwrite\Models;

/**
 * Usage gauges list
 */
readonly class UsageGaugeList
{
    use ArraySerializable;

    /**
     * UsageGaugeList constructor.
     *
     * @param int $total total number of gauges that matched your query.
     * @param list<UsageGauge> $gauges list of gauges.
     */
    public function __construct(
        public int $total,
        public array $gauges
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
        if (!array_key_exists('gauges', $data)) {
            throw new \InvalidArgumentException('Missing required field "gauges" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            gauges: is_array($data['gauges'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(UsageGauge::class, $item),
                    $data['gauges']
                )
                : $data['gauges']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'gauges' => static::serializeValue($this->gauges)
        ];

        return $result;
    }
}
