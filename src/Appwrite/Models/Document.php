<?php

namespace Appwrite\Models;

/**
 * Document
 */
readonly class Document
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'sequence' => '$sequence',
        'collectionId' => '$collectionId',
        'databaseId' => '$databaseId',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt',
        'permissions' => '$permissions'
    ];

    private const ADDITIONAL_PROPERTIES = true;

    /**
     * Document constructor.
     *
     * @param string $id document id.
     * @param string $sequence document sequence id.
     * @param string $collectionId collection id.
     * @param string $databaseId database id.
     * @param string $createdAt document creation date in iso 8601 format.
     * @param string $updatedAt document update date in iso 8601 format.
     * @param array $permissions document permissions. [learn more about permissions](https://appwrite.io/docs/permissions).
     * @param array<string, mixed> $data Additional properties.
     */
    public function __construct(
        public string $id,
        public string $sequence,
        public string $collectionId,
        public string $databaseId,
        public string $createdAt,
        public string $updatedAt,
        public array $permissions,
        public array $data = []
    ) {
    }
}
