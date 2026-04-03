<?php

namespace Appwrite\Models;

use Appwrite\Enums\ColumnStatus;

/**
 * ColumnEnum
 */
readonly class ColumnEnum
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
     * ColumnEnum constructor.
     *
     * @param string $key column key.
     * @param string $type column type.
     * @param ColumnStatus $status column status. possible values: `available`, `processing`, `deleting`, `stuck`, or `failed`
     * @param string $error error message. displays error generated on failure of creating or deleting an column.
     * @param bool $required is column required?
     * @param string $createdAt column creation date in iso 8601 format.
     * @param string $updatedAt column update date in iso 8601 format.
     * @param array $elements array of elements in enumerated type.
     * @param string $format string format.
     * @param bool|null $xarray is column an array?
     * @param string|null $xdefault default value for column when not provided. cannot be set when column is required.
     */
    public function __construct(
        public string $key,
        public string $type,
        public ColumnStatus $status,
        public string $error,
        public bool $required,
        public string $createdAt,
        public string $updatedAt,
        public array $elements,
        public string $format,
        public ?bool $xarray = null,
        public ?string $xdefault = null
    ) {
    }
}
