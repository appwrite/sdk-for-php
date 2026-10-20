<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\ColumnStatus;

/**
 * ColumnDatetime
 *
 * @phpstan-consistent-constructor
 */
readonly class ColumnDatetime
{
    use ArraySerializable;

    /**
     * ColumnDatetime constructor.
     *
     * @param string $key column key.
     * @param string $description optional description for the column.
     * @param string $type column type.
     * @param ColumnStatus $status column status. possible values: `available`, `processing`, `deleting`, `stuck`, or `failed`
     * @param string $error error message. displays error generated on failure of creating or deleting an column.
     * @param bool $required is column required?
     * @param string $createdAt column creation date in iso 8601 format.
     * @param string $updatedAt column update date in iso 8601 format.
     * @param string $format iso 8601 format.
     * @param bool|null $array is column an array?
     * @param string|null $default default value for column when not provided. only null is optional
     */
    public function __construct(
        public string $key,
        public string $description,
        public string $type,
        public ColumnStatus $status,
        public string $error,
        public bool $required,
        public string $createdAt,
        public string $updatedAt,
        public string $format,
        public ?bool $array = null,
        public ?string $default = null
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
        if (!array_key_exists('format', $data)) {
            throw new \InvalidArgumentException('Missing required field "format" for ' . static::class . '.');
        }

        return new static(
            key: $data['key'],
            description: $data['description'],
            type: $data['type'],
            status: static::hydrateTypedValue(ColumnStatus::class, $data['status']),
            error: $data['error'],
            required: $data['required'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            format: $data['format'],
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
            'format' => static::serializeValue($this->format),
            'default' => static::serializeValue($this->default)
        ];
    }
}
