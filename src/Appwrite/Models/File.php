<?php

namespace Appwrite\Models;

/**
 * File
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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('bucketId', $data)) {
            throw new \InvalidArgumentException('Missing required field "bucketId" for ' . static::class . '.');
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
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('signature', $data)) {
            throw new \InvalidArgumentException('Missing required field "signature" for ' . static::class . '.');
        }
        if (!array_key_exists('mimeType', $data)) {
            throw new \InvalidArgumentException('Missing required field "mimeType" for ' . static::class . '.');
        }
        if (!array_key_exists('sizeOriginal', $data)) {
            throw new \InvalidArgumentException('Missing required field "sizeOriginal" for ' . static::class . '.');
        }
        if (!array_key_exists('chunksTotal', $data)) {
            throw new \InvalidArgumentException('Missing required field "chunksTotal" for ' . static::class . '.');
        }
        if (!array_key_exists('chunksUploaded', $data)) {
            throw new \InvalidArgumentException('Missing required field "chunksUploaded" for ' . static::class . '.');
        }
        if (!array_key_exists('encryption', $data)) {
            throw new \InvalidArgumentException('Missing required field "encryption" for ' . static::class . '.');
        }
        if (!array_key_exists('compression', $data)) {
            throw new \InvalidArgumentException('Missing required field "compression" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            bucketId: $data['bucketId'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            permissions: $data['$permissions'],
            name: $data['name'],
            signature: $data['signature'],
            mimeType: $data['mimeType'],
            sizeOriginal: $data['sizeOriginal'],
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
        $result = [
            '$id' => static::serializeValue($this->id),
            'bucketId' => static::serializeValue($this->bucketId),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            '$permissions' => static::serializeValue($this->permissions),
            'name' => static::serializeValue($this->name),
            'signature' => static::serializeValue($this->signature),
            'mimeType' => static::serializeValue($this->mimeType),
            'sizeOriginal' => static::serializeValue($this->sizeOriginal),
            'chunksTotal' => static::serializeValue($this->chunksTotal),
            'chunksUploaded' => static::serializeValue($this->chunksUploaded),
            'encryption' => static::serializeValue($this->encryption),
            'compression' => static::serializeValue($this->compression)
        ];

        return $result;
    }
}
