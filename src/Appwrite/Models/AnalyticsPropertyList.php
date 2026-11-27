<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Analytics properties list
 *
 * @phpstan-consistent-constructor
 */
readonly class AnalyticsPropertyList
{
    use ArraySerializable;

    /**
     * AnalyticsPropertyList constructor.
     *
     * @param int $total total number of properties that matched your query.
     * @param list<AnalyticsProperty> $properties list of properties.
     */
    public function __construct(
        public int $total,
        public array $properties
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'properties' => [],
        ];

        return new static(
            total: $data['total'],
            properties: is_array($data['properties'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(AnalyticsProperty::class, $item),
                    $data['properties']
                )
                : $data['properties']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'properties' => static::serializeValue($this->properties)
        ];
    }
}
