<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * BackupStorageConfig
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseBackupStorage
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseBackupStorage constructor.
     *
     * @param string $provider storage provider. possible values: s3 (amazon s3 or s3-compatible), gcs (google cloud storage), azure (azure blob storage).
     * @param string $bucket storage bucket or container name.
     * @param string $region storage region.
     * @param string $prefix object key prefix for backups.
     * @param string $endpoint custom endpoint for s3-compatible storage.
     */
    public function __construct(
        public string $provider,
        public string $bucket,
        public string $region,
        public string $prefix,
        public string $endpoint
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'provider' => "",
            'bucket' => "",
            'region' => "",
            'prefix' => "backups/",
            'endpoint' => "",
        ];

        return new static(
            provider: $data['provider'],
            bucket: $data['bucket'],
            region: $data['region'],
            prefix: $data['prefix'],
            endpoint: $data['endpoint']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'provider' => static::serializeValue($this->provider),
            'bucket' => static::serializeValue($this->bucket),
            'region' => static::serializeValue($this->region),
            'prefix' => static::serializeValue($this->prefix),
            'endpoint' => static::serializeValue($this->endpoint)
        ];
    }
}
