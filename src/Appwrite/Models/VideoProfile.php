<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\VideoCodecId;

/**
 * Video profile
 *
 * @phpstan-consistent-constructor
 */
readonly class VideoProfile
{
    use ArraySerializable;

    /**
     * VideoProfile constructor.
     *
     * @param string $id video profile id.
     * @param string $createdAt video profile creation time in iso 8601 format.
     * @param string $updatedAt video profile update date in iso 8601 format.
     * @param string $name video profile name.
     * @param VideoCodecId $codec video encode codec: one of `h264`, `hevc`, or `vp9`.
     * @param int $videoBitRate target video bitrate in bits per second.
     * @param int $audioBitRate target audio bitrate in bits per second.
     * @param int $width target video width in pixels.
     * @param int $height target video height in pixels.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public VideoCodecId $codec,
        public int $videoBitRate,
        public int $audioBitRate,
        public int $width,
        public int $height
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            '$createdAt' => "",
            '$updatedAt' => "",
            'name' => "",
            'codec' => "h264",
            'videoBitRate' => 0,
            'audioBitRate' => 0,
            'width' => 0,
            'height' => 0,
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            codec: static::hydrateTypedValue(VideoCodecId::class, $data['codec']),
            videoBitRate: $data['videoBitRate'],
            audioBitRate: $data['audioBitRate'],
            width: $data['width'],
            height: $data['height']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'name' => static::serializeValue($this->name),
            'codec' => static::serializeValue($this->codec),
            'videoBitRate' => static::serializeValue($this->videoBitRate),
            'audioBitRate' => static::serializeValue($this->audioBitRate),
            'width' => static::serializeValue($this->width),
            'height' => static::serializeValue($this->height)
        ];
    }
}
