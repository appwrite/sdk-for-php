<?php

namespace Appwrite\Models;

/**
 * Provider
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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('provider', $data)) {
            throw new \InvalidArgumentException('Missing required field "provider" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }
        if (!array_key_exists('credentials', $data)) {
            throw new \InvalidArgumentException('Missing required field "credentials" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            provider: $data['provider'],
            enabled: $data['enabled'],
            type: $data['type'],
            credentials: $data['credentials'],
            options: array_key_exists('options', $data) ? $data['options'] : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
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

        return $result;
    }
}
