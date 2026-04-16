<?php

namespace Appwrite\Models;

/**
 * Bucket
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
     * @param bool $enabled bucket enabled.
     * @param int $maximumFileSize maximum file size supported.
     * @param array $allowedFileExtensions allowed file extensions.
     * @param string $compression compression algorithm chosen for compression. will be one of none, [gzip](https://en.wikipedia.org/wiki/gzip), or [zstd](https://en.wikipedia.org/wiki/zstd).
     * @param bool $encryption bucket is encrypted.
     * @param bool $antivirus virus scanning is enabled.
     * @param bool $transformations image transformations are enabled.
     * @param int $totalSize total size of this bucket in bytes.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public array $permissions,
        public bool $fileSecurity,
        public string $name,
        public bool $enabled,
        public int $maximumFileSize,
        public array $allowedFileExtensions,
        public string $compression,
        public bool $encryption,
        public bool $antivirus,
        public bool $transformations,
        public int $totalSize
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$permissions', $data)) {
            throw new \InvalidArgumentException('Missing required field "$permissions" for ' . static::class . '.');
        }
        if (!array_key_exists('fileSecurity', $data)) {
            throw new \InvalidArgumentException('Missing required field "fileSecurity" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }
        if (!array_key_exists('maximumFileSize', $data)) {
            throw new \InvalidArgumentException('Missing required field "maximumFileSize" for ' . static::class . '.');
        }
        if (!array_key_exists('allowedFileExtensions', $data)) {
            throw new \InvalidArgumentException('Missing required field "allowedFileExtensions" for ' . static::class . '.');
        }
        if (!array_key_exists('compression', $data)) {
            throw new \InvalidArgumentException('Missing required field "compression" for ' . static::class . '.');
        }
        if (!array_key_exists('encryption', $data)) {
            throw new \InvalidArgumentException('Missing required field "encryption" for ' . static::class . '.');
        }
        if (!array_key_exists('antivirus', $data)) {
            throw new \InvalidArgumentException('Missing required field "antivirus" for ' . static::class . '.');
        }
        if (!array_key_exists('transformations', $data)) {
            throw new \InvalidArgumentException('Missing required field "transformations" for ' . static::class . '.');
        }
        if (!array_key_exists('totalSize', $data)) {
            throw new \InvalidArgumentException('Missing required field "totalSize" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            permissions: $data['$permissions'],
            fileSecurity: $data['fileSecurity'],
            name: $data['name'],
            enabled: $data['enabled'],
            maximumFileSize: $data['maximumFileSize'],
            allowedFileExtensions: $data['allowedFileExtensions'],
            compression: $data['compression'],
            encryption: $data['encryption'],
            antivirus: $data['antivirus'],
            transformations: $data['transformations'],
            totalSize: $data['totalSize']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            '$permissions' => static::serializeValue($this->permissions),
            'fileSecurity' => static::serializeValue($this->fileSecurity),
            'name' => static::serializeValue($this->name),
            'enabled' => static::serializeValue($this->enabled),
            'maximumFileSize' => static::serializeValue($this->maximumFileSize),
            'allowedFileExtensions' => static::serializeValue($this->allowedFileExtensions),
            'compression' => static::serializeValue($this->compression),
            'encryption' => static::serializeValue($this->encryption),
            'antivirus' => static::serializeValue($this->antivirus),
            'transformations' => static::serializeValue($this->transformations),
            'totalSize' => static::serializeValue($this->totalSize)
        ];

        return $result;
    }
}
