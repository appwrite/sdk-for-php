<?php

namespace Appwrite\Models;

use Appwrite\Enums\ColumnStatus;

/**
 * ColumnRelationship
 */
readonly class ColumnRelationship
{
    use ArraySerializable;

    /**
     * ColumnRelationship constructor.
     *
     * @param string $key column key.
     * @param string $type column type.
     * @param ColumnStatus $status column status. possible values: `available`, `processing`, `deleting`, `stuck`, or `failed`
     * @param string $error error message. displays error generated on failure of creating or deleting an column.
     * @param bool $required is column required?
     * @param string $createdAt column creation date in iso 8601 format.
     * @param string $updatedAt column update date in iso 8601 format.
     * @param string $relatedTable the id of the related table.
     * @param string $relationType the type of the relationship.
     * @param bool $twoWay is the relationship two-way?
     * @param string $twoWayKey the key of the two-way relationship.
     * @param string $onDelete how deleting the parent document will propagate to child documents.
     * @param string $side whether this is the parent or child side of the relationship
     * @param bool|null $array is column an array?
     */
    public function __construct(
        public string $key,
        public string $type,
        public ColumnStatus $status,
        public string $error,
        public bool $required,
        public string $createdAt,
        public string $updatedAt,
        public string $relatedTable,
        public string $relationType,
        public bool $twoWay,
        public string $twoWayKey,
        public string $onDelete,
        public string $side,
        public ?bool $array = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('key', $data)) {
            throw new \InvalidArgumentException('Missing required field "key" for ' . static::class . '.');
        }
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }
        if (!array_key_exists('error', $data)) {
            throw new \InvalidArgumentException('Missing required field "error" for ' . static::class . '.');
        }
        if (!array_key_exists('required', $data)) {
            throw new \InvalidArgumentException('Missing required field "required" for ' . static::class . '.');
        }
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('relatedTable', $data)) {
            throw new \InvalidArgumentException('Missing required field "relatedTable" for ' . static::class . '.');
        }
        if (!array_key_exists('relationType', $data)) {
            throw new \InvalidArgumentException('Missing required field "relationType" for ' . static::class . '.');
        }
        if (!array_key_exists('twoWay', $data)) {
            throw new \InvalidArgumentException('Missing required field "twoWay" for ' . static::class . '.');
        }
        if (!array_key_exists('twoWayKey', $data)) {
            throw new \InvalidArgumentException('Missing required field "twoWayKey" for ' . static::class . '.');
        }
        if (!array_key_exists('onDelete', $data)) {
            throw new \InvalidArgumentException('Missing required field "onDelete" for ' . static::class . '.');
        }
        if (!array_key_exists('side', $data)) {
            throw new \InvalidArgumentException('Missing required field "side" for ' . static::class . '.');
        }

        return new static(
            key: $data['key'],
            type: $data['type'],
            status: static::hydrateTypedValue(ColumnStatus::class, $data['status']),
            error: $data['error'],
            required: $data['required'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            relatedTable: $data['relatedTable'],
            relationType: $data['relationType'],
            twoWay: $data['twoWay'],
            twoWayKey: $data['twoWayKey'],
            onDelete: $data['onDelete'],
            side: $data['side'],
            array: array_key_exists('array', $data) ? $data['array'] : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'key' => static::serializeValue($this->key),
            'type' => static::serializeValue($this->type),
            'status' => static::serializeValue($this->status),
            'error' => static::serializeValue($this->error),
            'required' => static::serializeValue($this->required),
            'array' => static::serializeValue($this->array),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'relatedTable' => static::serializeValue($this->relatedTable),
            'relationType' => static::serializeValue($this->relationType),
            'twoWay' => static::serializeValue($this->twoWay),
            'twoWayKey' => static::serializeValue($this->twoWayKey),
            'onDelete' => static::serializeValue($this->onDelete),
            'side' => static::serializeValue($this->side)
        ];

        return $result;
    }
}
