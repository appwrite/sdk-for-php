<?php

namespace Appwrite\Models;

/**
 * File
 */
readonly class File
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
     * File constructor.
     *
     * @param string $id file id.
     * @param string $bucketId bucket id.
     * @param string $createdAt file creation date in iso 8601 format.
     * @param string $updatedAt file update date in iso 8601 format.
     * @param array $permissions file permissions. [learn more about permissions](https://appwrite.io/docs/permissions).
     * @param string $name file name.
     * @param string $signature file md5 signature.
     * @param string $mimeType file mime type.
     * @param int $sizeOriginal file original size in bytes.
     * @param int $chunksTotal total number of chunks available
     * @param int $chunksUploaded total number of chunks uploaded
     * @param bool $encryption whether file contents are encrypted at rest.
     * @param string $compression compression algorithm used for the file. will be one of none, [gzip](https://en.wikipedia.org/wiki/gzip), or [zstd](https://en.wikipedia.org/wiki/zstd).
     */
    public function __construct(
        public string $id,
        public string $bucketId,
        public string $createdAt,
        public string $updatedAt,
        public array $permissions,
        public string $name,
        public string $signature,
        public string $mimeType,
        public int $sizeOriginal,
        public int $chunksTotal,
        public int $chunksUploaded,
        public bool $encryption,
        public string $compression
    ) {
    }
}
