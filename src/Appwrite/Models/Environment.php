<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Environment
 *
 * @phpstan-consistent-constructor
 */
readonly class Environment
{
    use ArraySerializable;

    /**
     * Environment constructor.
     *
     * @param string $id environment id, as passed in the x-appwrite-environment header.
     * @param string $createdAt environment creation date in iso 8601 format.
     * @param string $updatedAt environment update date in iso 8601 format.
     * @param string $projectId id of the project the environment belongs to, as passed in the x-appwrite-project header.
     * @param string $name environment name.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $projectId,
        public string $name
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
            'projectId' => "",
            'name' => "",
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            projectId: $data['projectId'],
            name: $data['name']
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
            'projectId' => static::serializeValue($this->projectId),
            'name' => static::serializeValue($this->name)
        ];
    }
}
