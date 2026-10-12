<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * File
 *
 * @phpstan-consistent-constructor
 */
readonly class File
{
    use ArraySerializable;

    /**
     * File constructor.
     *
     * @param string $id file id.
     * @param string $bucketId bucket id.
     * @param string $createdAt file creation date in iso 8601 format.
     * @param string $updatedAt file update date in iso 8601 format.
     * @param array $permissions file permissions. [learn more about permissions](https://appwrite.io/docs/permissions).
     * @param string $name file name.
     * @param string $folder virtual folder containing the file, with a trailing slash. empty for the bucket root.
     * @param string $key full virtual path of the file: the folder followed by the file name.
     * @param string $signature file md5 signature.
     * @param string $mimeType file mime type.
     * @param int $sizeOriginal file original size in bytes.
     * @param int $sizeActual file actual stored size in bytes after compression and/or encryption.
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
        public string $folder,
        public string $key,
        public string $signature,
        public string $mimeType,
        public int $sizeOriginal,
        public int $sizeActual,
        public int $chunksTotal,
        public int $chunksUploaded,
        public bool $encryption,
        public string $compression
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            'bucketId' => "",
            '$createdAt' => "",
            '$updatedAt' => "",
            '$permissions' => [],
            'name' => "",
            'folder' => "",
            'key' => "",
            'signature' => "",
            'mimeType' => "",
            'sizeOriginal' => 0,
            'sizeActual' => 0,
            'chunksTotal' => 0,
            'chunksUploaded' => 0,
            'encryption' => false,
            'compression' => "none",
        ];

        return new static(
            id: $data['$id'],
            bucketId: $data['bucketId'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            permissions: $data['$permissions'],
            name: $data['name'],
            folder: $data['folder'],
            key: $data['key'],
            signature: $data['signature'],
            mimeType: $data['mimeType'],
            sizeOriginal: $data['sizeOriginal'],
            sizeActual: $data['sizeActual'],
            chunksTotal: $data['chunksTotal'],
            chunksUploaded: $data['chunksUploaded'],
            encryption: $data['encryption'],
            compression: $data['compression']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            'bucketId' => static::serializeValue($this->bucketId),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            '$permissions' => static::serializeValue($this->permissions),
            'name' => static::serializeValue($this->name),
            'folder' => static::serializeValue($this->folder),
            'key' => static::serializeValue($this->key),
            'signature' => static::serializeValue($this->signature),
            'mimeType' => static::serializeValue($this->mimeType),
            'sizeOriginal' => static::serializeValue($this->sizeOriginal),
            'sizeActual' => static::serializeValue($this->sizeActual),
            'chunksTotal' => static::serializeValue($this->chunksTotal),
            'chunksUploaded' => static::serializeValue($this->chunksUploaded),
            'encryption' => static::serializeValue($this->encryption),
            'compression' => static::serializeValue($this->compression)
        ];
    }
}
