<?php

namespace Appwrite\Models;

/**
 * Provider
 */
readonly class Provider
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
     * Provider constructor.
     *
     * @param string $id provider id.
     * @param string $createdAt provider creation time in iso 8601 format.
     * @param string $updatedAt provider update date in iso 8601 format.
     * @param string $name the name for the provider instance.
     * @param string $provider the name of the provider service.
     * @param bool $enabled is provider enabled?
     * @param string $type type of provider.
     * @param array $credentials provider credentials.
     * @param array|null $options provider options.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public string $provider,
        public bool $enabled,
        public string $type,
        public array $credentials,
        public ?array $options = null
    ) {
    }
}
