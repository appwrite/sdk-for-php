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
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt'
    ];

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
}
