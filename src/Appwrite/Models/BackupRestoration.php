<?php

namespace Appwrite\Models;

/**
 * Restoration
 */
readonly class BackupRestoration
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
     * BackupRestoration constructor.
     *
     * @param string $id restoration id.
     * @param string $createdAt restoration creation time in iso 8601 format.
     * @param string $updatedAt restoration update date in iso 8601 format.
     * @param string $archiveId backup archive id.
     * @param string $policyId backup policy id.
     * @param string $status the status of the restoration. possible values: pending, downloading, processing, completed, failed.
     * @param string $startedAt the backup start time.
     * @param string $migrationId migration id.
     * @param array $services the services that are backed up by this policy.
     * @param array $resources the resources that are backed up by this policy.
     * @param string $options optional data in key-value object. 
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $archiveId,
        public string $policyId,
        public string $status,
        public string $startedAt,
        public string $migrationId,
        public array $services,
        public array $resources,
        public string $options
    ) {
    }
}
