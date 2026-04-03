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
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'xarray' => 'array',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt'
    ];

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
     * @param bool|null $xarray is column an array?
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
        public ?bool $xarray = null
    ) {
    }
}
