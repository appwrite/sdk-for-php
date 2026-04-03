<?php

namespace Appwrite\Models;

/**
 * Bucket
 */
readonly class Bucket
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt',
        'permissions' => '$permissions'
    ];

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
}
