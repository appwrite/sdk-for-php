<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\AttributeStatus;

/**
 * AttributePolygon
 *
 * @phpstan-consistent-constructor
 */
readonly class AttributePolygon
{
    use ArraySerializable;

    /**
     * AttributePolygon constructor.
     *
     * @param string $key attribute key.
     * @param string $description optional description for the attribute.
     * @param string $type attribute type.
     * @param AttributeStatus $status attribute status. possible values: `available`, `processing`, `deleting`, `stuck`, or `failed`
     * @param string $error error message. displays error generated on failure of creating or deleting an attribute.
     * @param bool $required is attribute required?
     * @param string $createdAt attribute creation date in iso 8601 format.
     * @param string $updatedAt attribute update date in iso 8601 format.
     * @param bool|null $array is attribute an array?
     * @param array|null $default default value for attribute when not provided. cannot be set when attribute is required.
     */
    public function __construct(
        public string $key,
        public string $description,
        public string $type,
        public AttributeStatus $status,
        public string $error,
        public bool $required,
        public string $createdAt,
        public string $updatedAt,
        public ?bool $array = null,
        public ?array $default = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'key' => "",
            'description' => "",
            'type' => "",
            'error' => "",
            'required' => false,
            '$createdAt' => "",
            '$updatedAt' => "",
        ];

        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }

        return new static(
            key: $data['key'],
            description: $data['description'],
            type: $data['type'],
            status: static::hydrateTypedValue(AttributeStatus::class, $data['status']),
            error: $data['error'],
            required: $data['required'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            array: $data['array'] ?? null,
            default: $data['default'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'key' => static::serializeValue($this->key),
            'description' => static::serializeValue($this->description),
            'type' => static::serializeValue($this->type),
            'status' => static::serializeValue($this->status),
            'error' => static::serializeValue($this->error),
            'required' => static::serializeValue($this->required),
            'array' => static::serializeValue($this->array),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'default' => static::serializeValue($this->default)
        ];
    }
}
