<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Videos List
 *
 * @phpstan-consistent-constructor
 */
readonly class VideoList
{
    use ArraySerializable;

    /**
     * VideoList constructor.
     *
     * @param int $total total number of videos that matched your query.
     * @param list<Video> $videos list of videos.
     */
    public function __construct(
        public int $total,
        public array $videos
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'videos' => [],
        ];

        return new static(
            total: $data['total'],
            videos: is_array($data['videos'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Video::class, $item),
                    $data['videos']
                )
                : $data['videos']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'videos' => static::serializeValue($this->videos)
        ];
    }
}
