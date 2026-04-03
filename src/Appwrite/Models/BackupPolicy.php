<?php

namespace Appwrite\Models;

/**
 * backup
 */
readonly class BackupPolicy
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
     * BackupPolicy constructor.
     *
     * @param string $id backup policy id.
     * @param string $name backup policy name.
     * @param string $createdAt policy creation date in iso 8601 format.
     * @param string $updatedAt policy update date in iso 8601 format.
     * @param array $services the services that are backed up by this policy.
     * @param array $resources the resources that are backed up by this policy.
     * @param int $retention how many days to keep the backup before it will be automatically deleted.
     * @param string $schedule policy backup schedule in cron format.
     * @param bool $enabled is this policy enabled.
     * @param string|null $resourceId the resource id to backup. set only if this policy should backup a single resource.
     * @param string|null $resourceType the resource type to backup. set only if this policy should backup a single resource.
     */
    public function __construct(
        public string $id,
        public string $name,
        public string $createdAt,
        public string $updatedAt,
        public array $services,
        public array $resources,
        public int $retention,
        public string $schedule,
        public bool $enabled,
        public ?string $resourceId = null,
        public ?string $resourceType = null
    ) {
    }
}
