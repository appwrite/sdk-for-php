<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Analytics annotations list
 *
 * @phpstan-consistent-constructor
 */
readonly class AnalyticsAnnotationList
{
    use ArraySerializable;

    /**
     * AnalyticsAnnotationList constructor.
     *
     * @param int $total total number of annotations that matched your query.
     * @param list<AnalyticsAnnotation> $annotations list of annotations.
     */
    public function __construct(
        public int $total,
        public array $annotations
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'annotations' => [],
        ];

        return new static(
            total: $data['total'],
            annotations: is_array($data['annotations'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(AnalyticsAnnotation::class, $item),
                    $data['annotations']
                )
                : $data['annotations']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'annotations' => static::serializeValue($this->annotations)
        ];
    }
}
