<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Bucket
 *
 * @phpstan-consistent-constructor
 */
readonly class Bucket
{
    use ArraySerializable;

    /**
     * Bucket constructor.
     *
     * @param string $id bucket id.
     * @param string $createdAt bucket creation time in iso 8601 format.
     * @param string $updatedAt bucket update date in iso 8601 format.
     * @param array $permissions bucket permissions. [learn more about permissions](https://appwrite.io/docs/permissions).
     * @param bool $fileSecurity whether file-level security is enabled. [learn more about permissions](https://appwrite.io/docs/permissions).
     * @param string $name bucket name.
     * @param string $description optional description for the bucket.
     * @param bool $enabled bucket enabled.
     * @param int $maximumFileSize maximum file size supported.
     * @param array $allowedFileExtensions allowed file extensions.
     * @param string $compression compression algorithm chosen for compression. will be one of none, [gzip](https://en.wikipedia.org/wiki/gzip), or [zstd](https://en.wikipedia.org/wiki/zstd).
     * @param bool $encryption bucket is encrypted.
     * @param bool $antivirus virus scanning is enabled.
     * @param bool $transformations image transformations are enabled.
     * @param bool $stripMetadata metadata such as location, device and capture time is removed from uploaded images.
     * @param int $totalSize total size of this bucket in bytes.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public array $permissions,
        public bool $fileSecurity,
        public string $name,
        public string $description,
        public bool $enabled,
        public int $maximumFileSize,
        public array $allowedFileExtensions,
        public string $compression,
        public bool $encryption,
        public bool $antivirus,
        public bool $transformations,
        public bool $stripMetadata,
        public int $totalSize
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
            'fileSecurity' => false,
            'name' => "",
            'description' => "",
            'enabled' => true,
            'maximumFileSize' => 0,
            'allowedFileExtensions' => [],
            'compression' => "",
            'encryption' => true,
            'antivirus' => true,
            'transformations' => true,
            'stripMetadata' => false,
            'totalSize' => 0,
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            permissions: $data['$permissions'],
            fileSecurity: $data['fileSecurity'],
            name: $data['name'],
            description: $data['description'],
            enabled: $data['enabled'],
            maximumFileSize: $data['maximumFileSize'],
            allowedFileExtensions: $data['allowedFileExtensions'],
            compression: $data['compression'],
            encryption: $data['encryption'],
            antivirus: $data['antivirus'],
            transformations: $data['transformations'],
            stripMetadata: $data['stripMetadata'],
            totalSize: $data['totalSize']
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
            'fileSecurity' => static::serializeValue($this->fileSecurity),
            'name' => static::serializeValue($this->name),
            'description' => static::serializeValue($this->description),
            'enabled' => static::serializeValue($this->enabled),
            'maximumFileSize' => static::serializeValue($this->maximumFileSize),
            'allowedFileExtensions' => static::serializeValue($this->allowedFileExtensions),
            'compression' => static::serializeValue($this->compression),
            'encryption' => static::serializeValue($this->encryption),
            'antivirus' => static::serializeValue($this->antivirus),
            'transformations' => static::serializeValue($this->transformations),
            'stripMetadata' => static::serializeValue($this->stripMetadata),
            'totalSize' => static::serializeValue($this->totalSize)
        ];
    }
}
