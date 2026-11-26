<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\VideoCaptionStatus;

/**
 * Video caption
 *
 * @phpstan-consistent-constructor
 */
readonly class VideoCaption
{
    use ArraySerializable;

    /**
     * VideoCaption constructor.
     *
     * @param string $id caption id.
     * @param string $createdAt caption creation time in iso 8601 format.
     * @param string $updatedAt caption update date in iso 8601 format.
     * @param string $videoId video id.
     * @param string $bucketId storage bucket id holding the caption file.
     * @param string $fileId caption file id.
     * @param string $name caption display name.
     * @param string $language caption iso 639-2 language code.
     * @param bool $default is this the default caption track?
     * @param bool $embedded was this track auto-extracted from the source container? extracted tracks have no backing file; extraction runs once per video, so a deleted extracted track is not re-created.
     * @param float $targetDuration longest segment duration in seconds.
     * @param VideoCaptionStatus $status packaging status: one of `pending`, `started`, `ready`, `error` or `aborted`.
     * @param string $error why the caption failed or was aborted. empty unless `status` is `error` or `aborted`.
     * @param int $size stored caption size in bytes.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $videoId,
        public string $bucketId,
        public string $fileId,
        public string $name,
        public string $language,
        public bool $default,
        public bool $embedded,
        public float $targetDuration,
        public VideoCaptionStatus $status,
        public string $error,
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
            'bucketId' => "",
            'fileId' => "",
            'name' => "",
            'language' => "",
            'default' => false,
            'embedded' => false,
            'targetDuration' => 0,
            'status' => "pending",
            'error' => "",
            'size' => 0,
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            videoId: $data['videoId'],
            bucketId: $data['bucketId'],
            fileId: $data['fileId'],
            name: $data['name'],
            language: $data['language'],
            default: $data['default'],
            embedded: $data['embedded'],
            targetDuration: $data['targetDuration'],
            status: static::hydrateTypedValue(VideoCaptionStatus::class, $data['status']),
            error: $data['error'],
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
            'bucketId' => static::serializeValue($this->bucketId),
            'fileId' => static::serializeValue($this->fileId),
            'name' => static::serializeValue($this->name),
            'language' => static::serializeValue($this->language),
            'default' => static::serializeValue($this->default),
            'embedded' => static::serializeValue($this->embedded),
            'targetDuration' => static::serializeValue($this->targetDuration),
            'status' => static::serializeValue($this->status),
            'error' => static::serializeValue($this->error),
            'size' => static::serializeValue($this->size)
        ];
    }
}
