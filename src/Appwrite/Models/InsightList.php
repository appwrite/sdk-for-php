<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Insights List
 *
 * @phpstan-consistent-constructor
 */
readonly class InsightList
{
    use ArraySerializable;

    /**
     * InsightList constructor.
     *
     * @param int $total total number of insights that matched your query.
     * @param list<Insight> $insights list of insights.
     */
    public function __construct(
        public int $total,
        public array $insights
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'insights' => [],
        ];

        return new static(
            total: $data['total'],
            insights: is_array($data['insights'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Insight::class, $item),
                    $data['insights']
                )
                : $data['insights']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'insights' => static::serializeValue($this->insights)
        ];
    }
}
