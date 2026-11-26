<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\VideoRenditionStatus;
use Appwrite\Enums\VideoOutput;
use Appwrite\Enums\VideoCodecId;

/**
 * Video rendition
 *
 * @phpstan-consistent-constructor
 */
readonly class VideoRendition
{
    use ArraySerializable;

    /**
     * VideoRendition constructor.
     *
     * @param string $id rendition id.
     * @param string $createdAt rendition creation time in iso 8601 format.
     * @param string $updatedAt rendition update date in iso 8601 format.
     * @param string $videoId video id.
     * @param string $profileId video profile id this rendition was encoded against.
     * @param string $name rendition name, derived from its dimensions and bitrate.
     * @param string $startedAt transcoding start time in iso 8601 format.
     * @param string $endedAt transcoding end time in iso 8601 format.
     * @param int $width rendition width in pixels.
     * @param int $height rendition height in pixels.
     * @param int $videoBitRate video bitrate in bits per second.
     * @param int $audioBitRate audio bitrate in bits per second.
     * @param float $targetDuration longest segment duration in seconds.
     * @param VideoRenditionStatus $status transcoding status: one of `pending`, `started`, `ended`, `ready`, `error` or `aborted`.
     * @param string $error why the rendition failed or was aborted. empty unless `status` is `error` or `aborted`.
     * @param int $progress transcoding progress as a percentage, from 0 to 100.
     * @param VideoOutput $output streaming output format: `hls`, `dash`, or `cmaf`.
     * @param VideoCodecId $codec video encode codec snapshotted from the profile at create time: one of `h264`, `hevc`, or `vp9`.
     * @param int $size stored rendition size in bytes.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $videoId,
        public string $profileId,
        public string $name,
        public string $startedAt,
        public string $endedAt,
        public int $width,
        public int $height,
        public int $videoBitRate,
        public int $audioBitRate,
        public float $targetDuration,
        public VideoRenditionStatus $status,
        public string $error,
        public int $progress,
        public VideoOutput $output,
        public VideoCodecId $codec,
        public int $size
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
            'videoId' => "",
            'profileId' => "",
            'name' => "",
            'startedAt' => "",
            'endedAt' => "",
            'width' => 0,
            'height' => 0,
            'videoBitRate' => 0,
            'audioBitRate' => 0,
            'targetDuration' => 0,
            'status' => "pending",
            'error' => "",
            'progress' => 0,
            'output' => "hls",
            'codec' => "h264",
            'size' => 0,
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            videoId: $data['videoId'],
            profileId: $data['profileId'],
            name: $data['name'],
            startedAt: $data['startedAt'],
            endedAt: $data['endedAt'],
            width: $data['width'],
            height: $data['height'],
            videoBitRate: $data['videoBitRate'],
            audioBitRate: $data['audioBitRate'],
            targetDuration: $data['targetDuration'],
            status: static::hydrateTypedValue(VideoRenditionStatus::class, $data['status']),
            error: $data['error'],
            progress: $data['progress'],
            output: static::hydrateTypedValue(VideoOutput::class, $data['output']),
            codec: static::hydrateTypedValue(VideoCodecId::class, $data['codec']),
            size: $data['size']
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
            'videoId' => static::serializeValue($this->videoId),
            'profileId' => static::serializeValue($this->profileId),
            'name' => static::serializeValue($this->name),
            'startedAt' => static::serializeValue($this->startedAt),
            'endedAt' => static::serializeValue($this->endedAt),
            'width' => static::serializeValue($this->width),
            'height' => static::serializeValue($this->height),
            'videoBitRate' => static::serializeValue($this->videoBitRate),
            'audioBitRate' => static::serializeValue($this->audioBitRate),
            'targetDuration' => static::serializeValue($this->targetDuration),
            'status' => static::serializeValue($this->status),
            'error' => static::serializeValue($this->error),
            'progress' => static::serializeValue($this->progress),
            'output' => static::serializeValue($this->output),
            'codec' => static::serializeValue($this->codec),
            'size' => static::serializeValue($this->size)
        ];
    }
}
