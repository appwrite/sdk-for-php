<?php

namespace Appwrite\Models;

/**
 * Restoration
 */
readonly class BackupRestoration
{
    use ArraySerializable;

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
        if (!array_key_exists('archiveId', $data)) {
            throw new \InvalidArgumentException('Missing required field "archiveId" for ' . static::class . '.');
        }
        if (!array_key_exists('policyId', $data)) {
            throw new \InvalidArgumentException('Missing required field "policyId" for ' . static::class . '.');
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
        if (!array_key_exists('options', $data)) {
            throw new \InvalidArgumentException('Missing required field "options" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            archiveId: $data['archiveId'],
            policyId: $data['policyId'],
            status: $data['status'],
            startedAt: $data['startedAt'],
            migrationId: $data['migrationId'],
            services: $data['services'],
            resources: $data['resources'],
            options: $data['options']
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
            'archiveId' => static::serializeValue($this->archiveId),
            'policyId' => static::serializeValue($this->policyId),
            'status' => static::serializeValue($this->status),
            'startedAt' => static::serializeValue($this->startedAt),
            'migrationId' => static::serializeValue($this->migrationId),
            'services' => static::serializeValue($this->services),
            'resources' => static::serializeValue($this->resources),
            'options' => static::serializeValue($this->options)
        ];

        return $result;
    }
}
