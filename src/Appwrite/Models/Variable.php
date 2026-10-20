<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Variable
 *
 * @phpstan-consistent-constructor
 */
readonly class Variable
{
    use ArraySerializable;

    /**
     * Variable constructor.
     *
     * @param string $id variable id.
     * @param string $createdAt variable creation date in iso 8601 format.
     * @param string $updatedAt variable creation date in iso 8601 format.
     * @param string $key variable key.
     * @param string $description optional description for the variable.
     * @param string $value variable value.
     * @param bool $secret variable secret flag. secret variables can only be updated or deleted, but never read.
     * @param string $resourceType service to which the variable belongs. possible values are "project", "function"
     * @param string $resourceId id of resource to which the variable belongs. if resourcetype is "project", it is empty. if resourcetype is "function", it is id of the function.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $key,
        public string $description,
        public string $value,
        public bool $secret,
        public string $resourceType,
        public string $resourceId
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
            'key' => "",
            'description' => "",
            'value' => "",
            'secret' => false,
            'resourceType' => "",
            'resourceId' => "",
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            key: $data['key'],
            description: $data['description'],
            value: $data['value'],
            secret: $data['secret'],
            resourceType: $data['resourceType'],
            resourceId: $data['resourceId']
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
            'key' => static::serializeValue($this->key),
            'description' => static::serializeValue($this->description),
            'value' => static::serializeValue($this->value),
            'secret' => static::serializeValue($this->secret),
            'resourceType' => static::serializeValue($this->resourceType),
            'resourceId' => static::serializeValue($this->resourceId)
        ];
    }
}
