<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * AnalyticsMetricList
 *
 * @phpstan-consistent-constructor
 */
readonly class AnalyticsMetricList
{
    use ArraySerializable;

    /**
     * AnalyticsMetricList constructor.
     *
     * @param int $total total number of metric rows returned.
     * @param list<AnalyticsMetric> $metrics metric rows: one per time bucket, one per dimension value, or a single row for the flat aggregate.
     */
    public function __construct(
        public int $total,
        public array $metrics
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'metrics' => [],
        ];

        return new static(
            total: $data['total'],
            metrics: is_array($data['metrics'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(AnalyticsMetric::class, $item),
                    $data['metrics']
                )
                : $data['metrics']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'metrics' => static::serializeValue($this->metrics)
        ];
    }
}
