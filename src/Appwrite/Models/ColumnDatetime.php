<?php

namespace Appwrite\Models;

use Appwrite\Enums\ColumnStatus;

/**
 * ColumnDatetime
 */
readonly class ColumnDatetime
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'xarray' => 'array',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt',
        'xdefault' => 'default'
    ];

    /**
     * ColumnDatetime constructor.
     *
     * @param string $key column key.
     * @param string $type column type.
     * @param ColumnStatus $status column status. possible values: `available`, `processing`, `deleting`, `stuck`, or `failed`
     * @param string $error error message. displays error generated on failure of creating or deleting an column.
     * @param bool $required is column required?
     * @param string $createdAt column creation date in iso 8601 format.
     * @param string $updatedAt column update date in iso 8601 format.
     * @param string $format iso 8601 format.
     * @param bool|null $xarray is column an array?
     * @param string|null $xdefault default value for column when not provided. only null is optional
     */
    public function __construct(
        public string $key,
        public string $type,
        public ColumnStatus $status,
        public string $error,
        public bool $required,
        public string $createdAt,
        public string $updatedAt,
        public string $format,
        public ?bool $xarray = null,
        public ?string $xdefault = null
    ) {
    }
}
