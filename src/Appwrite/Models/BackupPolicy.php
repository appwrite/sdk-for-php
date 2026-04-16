<?php

namespace Appwrite\Models;

/**
 * backup
 */
readonly class BackupPolicy
{
    use ArraySerializable;

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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('services', $data)) {
            throw new \InvalidArgumentException('Missing required field "services" for ' . static::class . '.');
        }
        if (!array_key_exists('resources', $data)) {
            throw new \InvalidArgumentException('Missing required field "resources" for ' . static::class . '.');
        }
        if (!array_key_exists('retention', $data)) {
            throw new \InvalidArgumentException('Missing required field "retention" for ' . static::class . '.');
        }
        if (!array_key_exists('schedule', $data)) {
            throw new \InvalidArgumentException('Missing required field "schedule" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            name: $data['name'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            services: $data['services'],
            resources: $data['resources'],
            retention: $data['retention'],
            schedule: $data['schedule'],
            enabled: $data['enabled'],
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
            'name' => static::serializeValue($this->name),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'services' => static::serializeValue($this->services),
            'resources' => static::serializeValue($this->resources),
            'resourceId' => static::serializeValue($this->resourceId),
            'resourceType' => static::serializeValue($this->resourceType),
            'retention' => static::serializeValue($this->retention),
            'schedule' => static::serializeValue($this->schedule),
            'enabled' => static::serializeValue($this->enabled)
        ];

        return $result;
    }
}
