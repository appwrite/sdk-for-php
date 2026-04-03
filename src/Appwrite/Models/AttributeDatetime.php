<?php

namespace Appwrite\Models;

use Appwrite\Enums\AttributeStatus;

/**
 * AttributeDatetime
 */
readonly class AttributeDatetime
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
     * AttributeDatetime constructor.
     *
     * @param string $key attribute key.
     * @param string $type attribute type.
     * @param AttributeStatus $status attribute status. possible values: `available`, `processing`, `deleting`, `stuck`, or `failed`
     * @param string $error error message. displays error generated on failure of creating or deleting an attribute.
     * @param bool $required is attribute required?
     * @param string $createdAt attribute creation date in iso 8601 format.
     * @param string $updatedAt attribute update date in iso 8601 format.
     * @param string $format iso 8601 format.
     * @param bool|null $xarray is attribute an array?
     * @param string|null $xdefault default value for attribute when not provided. only null is optional
     */
    public function __construct(
        public string $key,
        public string $type,
        public AttributeStatus $status,
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
