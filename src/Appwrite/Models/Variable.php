<?php

namespace Appwrite\Models;

/**
 * Variable
 */
readonly class Variable
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
     * Variable constructor.
     *
     * @param string $id variable id.
     * @param string $createdAt variable creation date in iso 8601 format.
     * @param string $updatedAt variable creation date in iso 8601 format.
     * @param string $key variable key.
     * @param string $value variable value.
     * @param bool $secret variable secret flag. secret variables can only be updated or deleted, but never read.
     * @param string $resourceType service to which the variable belongs. possible values are "project", "function"
     * @param string $resourceId id of resource to which the variable belongs. if resourcetype is "project", it is empty. if resourcetype is "function", it is id of the function.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $key,
        public string $value,
        public bool $secret,
        public string $resourceType,
        public string $resourceId
    ) {
    }
}
