<?php

namespace Appwrite\Models;

/**
 * Insights List
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
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('insights', $data)) {
            throw new \InvalidArgumentException('Missing required field "insights" for ' . static::class . '.');
        }

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
        $result = [
            'total' => static::serializeValue($this->total),
            'insights' => static::serializeValue($this->insights)
        ];

        return $result;
    }
}
