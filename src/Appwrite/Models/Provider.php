<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Provider
 *
 * @phpstan-consistent-constructor
 */
readonly class Provider
{
    use ArraySerializable;

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
     * @param array $credentials provider credentials. secret values are write-only and never returned.
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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            '$createdAt' => "",
            '$updatedAt' => "",
            'name' => "",
            'provider' => "",
            'enabled' => true,
            'type' => "",
            'credentials' => [],
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            provider: $data['provider'],
            enabled: $data['enabled'],
            type: $data['type'],
            credentials: $data['credentials'],
            options: $data['options'] ?? null
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
            'name' => static::serializeValue($this->name),
            'provider' => static::serializeValue($this->provider),
            'enabled' => static::serializeValue($this->enabled),
            'type' => static::serializeValue($this->type),
            'credentials' => static::serializeValue($this->credentials),
            'options' => static::serializeValue($this->options)
        ];
    }
}
