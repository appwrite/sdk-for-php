<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Video Renditions List
 *
 * @phpstan-consistent-constructor
 */
readonly class VideoRenditionList
{
    use ArraySerializable;

    /**
     * VideoRenditionList constructor.
     *
     * @param int $total total number of renditions that matched your query.
     * @param list<VideoRendition> $renditions list of renditions.
     */
    public function __construct(
        public int $total,
        public array $renditions
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'renditions' => [],
        ];

        return new static(
            total: $data['total'],
            renditions: is_array($data['renditions'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(VideoRendition::class, $item),
                    $data['renditions']
                )
                : $data['renditions']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'renditions' => static::serializeValue($this->renditions)
        ];
    }
}
