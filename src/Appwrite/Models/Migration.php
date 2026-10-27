<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Migration
 *
 * @phpstan-consistent-constructor
 */
readonly class Migration
{
    use ArraySerializable;

    /**
     * Migration constructor.
     *
     * @param string $id migration id.
     * @param string $createdAt migration creation date in iso 8601 format.
     * @param string $updatedAt variable creation date in iso 8601 format.
     * @param string $status migration status ( pending, processing, failed, completed )
     * @param string $stage migration stage ( init, processing, source-check, destination-check, migrating, finished )
     * @param string $source a string containing the type of source of the migration.
     * @param string $destination a string containing the type of destination of the migration.
     * @param array $resources resources to migrate.
     * @param string $resourceId id of the resource being migrated.
     * @param string $resourceInternalId internal id of the resource being migrated.
     * @param string $resourceType type of the resource being migrated.
     * @param string $parentResourceId id of the parent resource that contains the migrated resource.
     * @param string $parentResourceInternalId internal id of the parent resource that contains the migrated resource.
     * @param string $parentResourceType type of the parent resource that contains the migrated resource.
     * @param string $destinationResourceId id of the destination resource created or overwritten by the migration.
     * @param string $destinationResourceInternalId internal id of the destination resource created or overwritten by the migration.
     * @param string $destinationResourceType type of the destination resource created or overwritten by the migration.
     * @param array $statusCounters a group of counters that represent the total progress of the migration.
     * @param array $resourceData an array of objects containing the report data of the resources that were migrated.
     * @param array $errors all errors that occurred during the migration process.
     * @param array $options migration options used during the migration process.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $status,
        public string $stage,
        public string $source,
        public string $destination,
        public array $resources,
        public string $resourceId,
        public string $resourceInternalId,
        public string $resourceType,
        public string $parentResourceId,
        public string $parentResourceInternalId,
        public string $parentResourceType,
        public string $destinationResourceId,
        public string $destinationResourceInternalId,
        public string $destinationResourceType,
        public array $statusCounters,
        public array $resourceData,
        public array $errors,
        public array $options
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
            'status' => "",
            'stage' => "",
            'source' => "",
            'destination' => "Appwrite",
            'resources' => [],
            'resourceId' => "",
            'resourceInternalId' => "",
            'resourceType' => "",
            'parentResourceId' => "",
            'parentResourceInternalId' => "",
            'parentResourceType' => "",
            'destinationResourceId' => "",
            'destinationResourceInternalId' => "",
            'destinationResourceType' => "",
            'statusCounters' => [],
            'resourceData' => [],
            'errors' => [],
            'options' => [],
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            status: $data['status'],
            stage: $data['stage'],
            source: $data['source'],
            destination: $data['destination'],
            resources: $data['resources'],
            resourceId: $data['resourceId'],
            resourceInternalId: $data['resourceInternalId'],
            resourceType: $data['resourceType'],
            parentResourceId: $data['parentResourceId'],
            parentResourceInternalId: $data['parentResourceInternalId'],
            parentResourceType: $data['parentResourceType'],
            destinationResourceId: $data['destinationResourceId'],
            destinationResourceInternalId: $data['destinationResourceInternalId'],
            destinationResourceType: $data['destinationResourceType'],
            statusCounters: $data['statusCounters'],
            resourceData: $data['resourceData'],
            errors: $data['errors'],
            options: $data['options']
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
            'status' => static::serializeValue($this->status),
            'stage' => static::serializeValue($this->stage),
            'source' => static::serializeValue($this->source),
            'destination' => static::serializeValue($this->destination),
            'resources' => static::serializeValue($this->resources),
            'resourceId' => static::serializeValue($this->resourceId),
            'resourceInternalId' => static::serializeValue($this->resourceInternalId),
            'resourceType' => static::serializeValue($this->resourceType),
            'parentResourceId' => static::serializeValue($this->parentResourceId),
            'parentResourceInternalId' => static::serializeValue($this->parentResourceInternalId),
            'parentResourceType' => static::serializeValue($this->parentResourceType),
            'destinationResourceId' => static::serializeValue($this->destinationResourceId),
            'destinationResourceInternalId' => static::serializeValue($this->destinationResourceInternalId),
            'destinationResourceType' => static::serializeValue($this->destinationResourceType),
            'statusCounters' => static::serializeValue($this->statusCounters),
            'resourceData' => static::serializeValue($this->resourceData),
            'errors' => static::serializeValue($this->errors),
            'options' => static::serializeValue($this->options)
        ];
    }
}
