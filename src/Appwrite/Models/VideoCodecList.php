<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Video Codecs List
 *
 * @phpstan-consistent-constructor
 */
readonly class VideoCodecList
{
    use ArraySerializable;

    /**
     * VideoCodecList constructor.
     *
     * @param int $total total number of codecs that matched your query.
     * @param list<VideoCodec> $codecs list of codecs.
     */
    public function __construct(
        public int $total,
        public array $codecs
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'codecs' => [],
        ];

        return new static(
            total: $data['total'],
            codecs: is_array($data['codecs'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(VideoCodec::class, $item),
                    $data['codecs']
                )
                : $data['codecs']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'codecs' => static::serializeValue($this->codecs)
        ];
    }
}
