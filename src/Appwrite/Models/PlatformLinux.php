<?php

namespace Appwrite\Models;

use Appwrite\Enums\PlatformType;

/**
 * Platform Linux
 */
readonly class PlatformLinux
{
    use ArraySerializable;

    /**
     * PlatformLinux constructor.
     *
     * @param string $id platform id.
     * @param string $createdAt platform creation date in iso 8601 format.
     * @param string $updatedAt platform update date in iso 8601 format.
     * @param string $name platform name.
     * @param PlatformType $type platform type. possible values are: windows, apple, android, linux, web.
     * @param string $packageName linux package name.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public PlatformType $type,
        public string $packageName
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
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }
        if (!array_key_exists('packageName', $data)) {
            throw new \InvalidArgumentException('Missing required field "packageName" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            type: static::hydrateTypedValue(PlatformType::class, $data['type']),
            packageName: $data['packageName']
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
            'name' => static::serializeValue($this->name),
            'type' => static::serializeValue($this->type),
            'packageName' => static::serializeValue($this->packageName)
        ];

        return $result;
    }
}
