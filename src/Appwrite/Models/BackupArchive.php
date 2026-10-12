<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Archive
 *
 * @phpstan-consistent-constructor
 */
readonly class BackupArchive
{
    use ArraySerializable;

    /**
     * BackupArchive constructor.
     *
     * @param string $id archive id.
     * @param string $createdAt archive creation time in iso 8601 format.
     * @param string $updatedAt archive update date in iso 8601 format.
     * @param string $policyId archive policy id.
     * @param string $status the status of the archive creation. possible values: pending, processing, uploading, completed, failed, skipped.
     * @param string $migrationId migration id.
     * @param array $services the services that are backed up by this archive.
     * @param array $resources the resources that are backed up by this archive.
     * @param int|null $size archive size in bytes. null until the size is known.
     * @param string|null $startedAt the backup start time. null until the backup starts.
     * @param string|null $resourceId the resource id to backup. set only if this archive should backup a single resource.
     * @param string|null $resourceType the resource type to backup. set only if this archive should backup a single resource.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $policyId,
        public string $status,
        public string $migrationId,
        public array $services,
        public array $resources,
        public ?int $size = null,
        public ?string $startedAt = null,
        public ?string $resourceId = null,
        public ?string $resourceType = null
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
            'policyId' => "",
            'status' => "",
            'migrationId' => "",
        ];

        if (!array_key_exists('services', $data)) {
            throw new \InvalidArgumentException('Missing required field "services" for ' . static::class . '.');
        }
        if (!array_key_exists('resources', $data)) {
            throw new \InvalidArgumentException('Missing required field "resources" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            policyId: $data['policyId'],
            status: $data['status'],
            migrationId: $data['migrationId'],
            services: $data['services'],
            resources: $data['resources'],
            size: $data['size'] ?? null,
            startedAt: $data['startedAt'] ?? null,
            resourceId: $data['resourceId'] ?? null,
            resourceType: $data['resourceType'] ?? null
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
            'policyId' => static::serializeValue($this->policyId),
            'size' => static::serializeValue($this->size),
            'status' => static::serializeValue($this->status),
            'startedAt' => static::serializeValue($this->startedAt),
            'migrationId' => static::serializeValue($this->migrationId),
            'services' => static::serializeValue($this->services),
            'resources' => static::serializeValue($this->resources),
            'resourceId' => static::serializeValue($this->resourceId),
            'resourceType' => static::serializeValue($this->resourceType)
        ];
    }
}
