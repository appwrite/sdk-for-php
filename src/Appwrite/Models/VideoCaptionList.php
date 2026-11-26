<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Video Captions List
 *
 * @phpstan-consistent-constructor
 */
readonly class VideoCaptionList
{
    use ArraySerializable;

    /**
     * VideoCaptionList constructor.
     *
     * @param int $total total number of captions that matched your query.
     * @param list<VideoCaption> $captions list of captions.
     */
    public function __construct(
        public int $total,
        public array $captions
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'captions' => [],
        ];

        return new static(
            total: $data['total'],
            captions: is_array($data['captions'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(VideoCaption::class, $item),
                    $data['captions']
                )
                : $data['captions']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'captions' => static::serializeValue($this->captions)
        ];
    }
}
