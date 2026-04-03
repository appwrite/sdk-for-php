<?php

namespace Appwrite\Models;

/**
 * Archive
 */
readonly class BackupArchive
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt'
    ];

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
}
