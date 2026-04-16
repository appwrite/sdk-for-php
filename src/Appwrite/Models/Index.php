<?php

namespace Appwrite\Models;

use Appwrite\Enums\IndexStatus;

/**
 * Index
 */
readonly class Index
{
    use ArraySerializable;

    /**
     * Index constructor.
     *
     * @param string $id index id.
     * @param string $createdAt index creation date in iso 8601 format.
     * @param string $updatedAt index update date in iso 8601 format.
     * @param string $key index key.
     * @param string $type index type.
     * @param IndexStatus $status index status. possible values: `available`, `processing`, `deleting`, `stuck`, or `failed`
     * @param string $error error message. displays error generated on failure of creating or deleting an index.
     * @param array $attributes index attributes.
     * @param array $lengths index attributes length.
     * @param array|null $orders index orders.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $key,
        public string $type,
        public IndexStatus $status,
        public string $error,
        public array $attributes,
        public array $lengths,
        public ?array $orders = null
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
        if (!array_key_exists('attributes', $data)) {
            throw new \InvalidArgumentException('Missing required field "attributes" for ' . static::class . '.');
        }
        if (!array_key_exists('lengths', $data)) {
            throw new \InvalidArgumentException('Missing required field "lengths" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            key: $data['key'],
            type: $data['type'],
            status: static::hydrateTypedValue(IndexStatus::class, $data['status']),
            error: $data['error'],
            attributes: $data['attributes'],
            lengths: $data['lengths'],
            orders: array_key_exists('orders', $data) ? $data['orders'] : null
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
            'key' => static::serializeValue($this->key),
            'type' => static::serializeValue($this->type),
            'status' => static::serializeValue($this->status),
            'error' => static::serializeValue($this->error),
            'attributes' => static::serializeValue($this->attributes),
            'lengths' => static::serializeValue($this->lengths),
            'orders' => static::serializeValue($this->orders)
        ];

        return $result;
    }
}
