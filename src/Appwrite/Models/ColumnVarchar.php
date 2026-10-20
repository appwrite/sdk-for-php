<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\ColumnStatus;

/**
 * ColumnVarchar
 *
 * @phpstan-consistent-constructor
 */
readonly class ColumnVarchar
{
    use ArraySerializable;

    /**
     * ColumnVarchar constructor.
     *
     * @param string $key column key.
     * @param string $description optional description for the column.
     * @param string $type column type.
     * @param ColumnStatus $status column status. possible values: `available`, `processing`, `deleting`, `stuck`, or `failed`
     * @param string $error error message. displays error generated on failure of creating or deleting an column.
     * @param bool $required is column required?
     * @param string $createdAt column creation date in iso 8601 format.
     * @param string $updatedAt column update date in iso 8601 format.
     * @param int $size column size.
     * @param bool|null $array is column an array?
     * @param string|null $default default value for column when not provided. cannot be set when column is required.
     * @param bool|null $encrypt defines whether this column is encrypted or not.
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
        public int $size,
        public ?bool $array = null,
        public ?string $default = null,
        public ?bool $encrypt = null
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
            'size' => 0,
        ];

        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
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
            size: $data['size'],
            array: $data['array'] ?? null,
            default: $data['default'] ?? null,
            encrypt: $data['encrypt'] ?? null
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
            'size' => static::serializeValue($this->size),
            'default' => static::serializeValue($this->default),
            'encrypt' => static::serializeValue($this->encrypt)
        ];
    }
}
