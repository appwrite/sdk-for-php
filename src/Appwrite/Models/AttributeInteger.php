<?php

namespace Appwrite\Models;

use Appwrite\Enums\AttributeStatus;

/**
 * AttributeInteger
 */
readonly class AttributeInteger
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
     * AttributeInteger constructor.
     *
     * @param string $key attribute key.
     * @param string $type attribute type.
     * @param AttributeStatus $status attribute status. possible values: `available`, `processing`, `deleting`, `stuck`, or `failed`
     * @param string $error error message. displays error generated on failure of creating or deleting an attribute.
     * @param bool $required is attribute required?
     * @param string $createdAt attribute creation date in iso 8601 format.
     * @param string $updatedAt attribute update date in iso 8601 format.
     * @param bool|null $xarray is attribute an array?
     * @param int|null $min minimum value to enforce for new documents.
     * @param int|null $max maximum value to enforce for new documents.
     * @param int|null $xdefault default value for attribute when not provided. cannot be set when attribute is required.
     */
    public function __construct(
        public string $key,
        public string $type,
        public AttributeStatus $status,
        public string $error,
        public bool $required,
        public string $createdAt,
        public string $updatedAt,
        public ?bool $xarray = null,
        public ?int $min = null,
        public ?int $max = null,
        public ?int $xdefault = null
    ) {
    }
}
