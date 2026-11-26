<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\VideoTimelineStatus;

/**
 * Video
 *
 * @phpstan-consistent-constructor
 */
readonly class Video
{
    use ArraySerializable;

    /**
     * Video constructor.
     *
     * @param string $id video id.
     * @param string $createdAt video creation time in iso 8601 format.
     * @param string $updatedAt video update date in iso 8601 format.
     * @param array $permissions video permissions. [learn more about permissions](https://appwrite.io/docs/permissions).
     * @param string $bucketId storage bucket id holding the source file.
     * @param string $fileId source file id.
     * @param string $name video name.
     * @param int $size source file size in bytes.
     * @param string $format container format.
     * @param int $duration video duration in milliseconds.
     * @param int $width video width in pixels.
     * @param int $height video height in pixels.
     * @param string $aspectRatio video aspect ratio.
     * @param string $videoCodec video codec.
     * @param string $videoFormat video format.
     * @param string $videoFormatProfile video format profile.
     * @param int $videoBitRate video bitrate in bits per second.
     * @param float $videoFrameRate video frame rate in frames per second.
     * @param string $videoFrameRateMode video frame rate mode.
     * @param string $audioCodec audio codec.
     * @param string $audioFormat audio format.
     * @param int $audioBitRate audio bitrate in bits per second.
     * @param int $audioSampleRate audio sample rate in hertz.
     * @param VideoTimelineStatus $timelineStatus thumbnail timeline job status: one of `pending`, `started`, `ready`, `skipped` (source has no video track) or `error`.
     * @param string $timelineError why the timeline job failed. empty unless `timelinestatus` is `error`.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public array $permissions,
        public string $bucketId,
        public string $fileId,
        public string $name,
        public int $size,
        public string $format,
        public int $duration,
        public int $width,
        public int $height,
        public string $aspectRatio,
        public string $videoCodec,
        public string $videoFormat,
        public string $videoFormatProfile,
        public int $videoBitRate,
        public float $videoFrameRate,
        public string $videoFrameRateMode,
        public string $audioCodec,
        public string $audioFormat,
        public int $audioBitRate,
        public int $audioSampleRate,
        public VideoTimelineStatus $timelineStatus,
        public string $timelineError
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
            '$permissions' => [],
            'bucketId' => "",
            'fileId' => "",
            'name' => "",
            'size' => 0,
            'format' => "",
            'duration' => 0,
            'width' => 0,
            'height' => 0,
            'aspectRatio' => "",
            'videoCodec' => "",
            'videoFormat' => "",
            'videoFormatProfile' => "",
            'videoBitRate' => 0,
            'videoFrameRate' => 0,
            'videoFrameRateMode' => "",
            'audioCodec' => "",
            'audioFormat' => "",
            'audioBitRate' => 0,
            'audioSampleRate' => 0,
            'timelineStatus' => "pending",
            'timelineError' => "",
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            permissions: $data['$permissions'],
            bucketId: $data['bucketId'],
            fileId: $data['fileId'],
            name: $data['name'],
            size: $data['size'],
            format: $data['format'],
            duration: $data['duration'],
            width: $data['width'],
            height: $data['height'],
            aspectRatio: $data['aspectRatio'],
            videoCodec: $data['videoCodec'],
            videoFormat: $data['videoFormat'],
            videoFormatProfile: $data['videoFormatProfile'],
            videoBitRate: $data['videoBitRate'],
            videoFrameRate: $data['videoFrameRate'],
            videoFrameRateMode: $data['videoFrameRateMode'],
            audioCodec: $data['audioCodec'],
            audioFormat: $data['audioFormat'],
            audioBitRate: $data['audioBitRate'],
            audioSampleRate: $data['audioSampleRate'],
            timelineStatus: static::hydrateTypedValue(VideoTimelineStatus::class, $data['timelineStatus']),
            timelineError: $data['timelineError']
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
            '$permissions' => static::serializeValue($this->permissions),
            'bucketId' => static::serializeValue($this->bucketId),
            'fileId' => static::serializeValue($this->fileId),
            'name' => static::serializeValue($this->name),
            'size' => static::serializeValue($this->size),
            'format' => static::serializeValue($this->format),
            'duration' => static::serializeValue($this->duration),
            'width' => static::serializeValue($this->width),
            'height' => static::serializeValue($this->height),
            'aspectRatio' => static::serializeValue($this->aspectRatio),
            'videoCodec' => static::serializeValue($this->videoCodec),
            'videoFormat' => static::serializeValue($this->videoFormat),
            'videoFormatProfile' => static::serializeValue($this->videoFormatProfile),
            'videoBitRate' => static::serializeValue($this->videoBitRate),
            'videoFrameRate' => static::serializeValue($this->videoFrameRate),
            'videoFrameRateMode' => static::serializeValue($this->videoFrameRateMode),
            'audioCodec' => static::serializeValue($this->audioCodec),
            'audioFormat' => static::serializeValue($this->audioFormat),
            'audioBitRate' => static::serializeValue($this->audioBitRate),
            'audioSampleRate' => static::serializeValue($this->audioSampleRate),
            'timelineStatus' => static::serializeValue($this->timelineStatus),
            'timelineError' => static::serializeValue($this->timelineError)
        ];
    }
}
