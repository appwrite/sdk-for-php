<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Index
 *
 * @phpstan-consistent-constructor
 */
readonly class ColumnIndex
{
    use ArraySerializable;

    /**
     * ColumnIndex constructor.
     *
     * @param string $id index id.
     * @param string $createdAt index creation date in iso 8601 format.
     * @param string $updatedAt index update date in iso 8601 format.
     * @param string $key index key.
     * @param string $description optional description for the index.
     * @param string $type index type.
     * @param string $status index status. possible values: `available`, `processing`, `deleting`, `stuck`, or `failed`
     * @param string $error error message. displays error generated on failure of creating or deleting an index.
     * @param array $columns index columns.
     * @param array $lengths index columns length.
     * @param array|null $orders index orders.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $key,
        public string $description,
        public string $type,
        public string $status,
        public string $error,
        public array $columns,
        public array $lengths,
        public ?array $orders = null
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
            'type' => "",
            'status' => "",
            'error' => "",
            'columns' => [],
            'lengths' => [],
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            key: $data['key'],
            description: $data['description'],
            type: $data['type'],
            status: $data['status'],
            error: $data['error'],
            columns: $data['columns'],
            lengths: $data['lengths'],
            orders: $data['orders'] ?? null
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
            'type' => static::serializeValue($this->type),
            'status' => static::serializeValue($this->status),
            'error' => static::serializeValue($this->error),
            'columns' => static::serializeValue($this->columns),
            'lengths' => static::serializeValue($this->lengths),
            'orders' => static::serializeValue($this->orders)
        ];
    }
}
