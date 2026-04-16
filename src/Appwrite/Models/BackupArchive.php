<?php

namespace Appwrite\Models;

/**
 * Archive
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
     * @param int $size archive size in bytes.
     * @param string $status the status of the archive creation. possible values: pending, processing, uploading, completed, failed.
     * @param string $startedAt the backup start time.
     * @param string $migrationId migration id.
     * @param array $services the services that are backed up by this archive.
     * @param array $resources the resources that are backed up by this archive.
     * @param string|null $resourceId the resource id to backup. set only if this archive should backup a single resource.
     * @param string|null $resourceType the resource type to backup. set only if this archive should backup a single resource.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $policyId,
        public int $size,
        public string $status,
        public string $startedAt,
        public string $migrationId,
        public array $services,
        public array $resources,
        public ?string $resourceId = null,
        public ?string $resourceType = null
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
        if (!array_key_exists('policyId', $data)) {
            throw new \InvalidArgumentException('Missing required field "policyId" for ' . static::class . '.');
        }
        if (!array_key_exists('size', $data)) {
            throw new \InvalidArgumentException('Missing required field "size" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }
        if (!array_key_exists('startedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "startedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('migrationId', $data)) {
            throw new \InvalidArgumentException('Missing required field "migrationId" for ' . static::class . '.');
        }
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
            size: $data['size'],
            status: $data['status'],
            startedAt: $data['startedAt'],
            migrationId: $data['migrationId'],
            services: $data['services'],
            resources: $data['resources'],
            resourceId: array_key_exists('resourceId', $data) ? $data['resourceId'] : null,
            resourceType: array_key_exists('resourceType', $data) ? $data['resourceType'] : null
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

        return $result;
    }
}
