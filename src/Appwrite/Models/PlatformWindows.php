<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\PlatformType;

/**
 * Platform Windows
 *
 * @phpstan-consistent-constructor
 */
readonly class PlatformWindows
{
    use ArraySerializable;

    /**
     * PlatformWindows constructor.
     *
     * @param string $id platform id.
     * @param string $createdAt platform creation date in iso 8601 format.
     * @param string $updatedAt platform update date in iso 8601 format.
     * @param string $name platform name.
     * @param PlatformType $type platform type. possible values are: windows, apple, android, linux, web.
     * @param string $packageIdentifierName windows package identifier name.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public PlatformType $type,
        public string $packageIdentifierName
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
            'name' => "",
            'packageIdentifierName' => "",
        ];

        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            type: static::hydrateTypedValue(PlatformType::class, $data['type']),
            packageIdentifierName: $data['packageIdentifierName']
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
            'name' => static::serializeValue($this->name),
            'type' => static::serializeValue($this->type),
            'packageIdentifierName' => static::serializeValue($this->packageIdentifierName)
        ];
    }
}
