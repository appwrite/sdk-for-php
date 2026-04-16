<?php

namespace Appwrite\Models;

/**
 * AuthProvider
 */
readonly class AuthProvider
{
    use ArraySerializable;

    /**
     * AuthProvider constructor.
     *
     * @param string $key auth provider.
     * @param string $name auth provider name.
     * @param string $appId oauth 2.0 application id.
     * @param string $secret oauth 2.0 application secret. might be json string if provider requires extra configuration.
     * @param bool $enabled auth provider is active and can be used to create session.
     */
    public function __construct(
        public string $key,
        public string $name,
        public string $appId,
        public string $secret,
        public bool $enabled
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('key', $data)) {
            throw new \InvalidArgumentException('Missing required field "key" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('appId', $data)) {
            throw new \InvalidArgumentException('Missing required field "appId" for ' . static::class . '.');
        }
        if (!array_key_exists('secret', $data)) {
            throw new \InvalidArgumentException('Missing required field "secret" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }

        return new static(
            key: $data['key'],
            name: $data['name'],
            appId: $data['appId'],
            secret: $data['secret'],
            enabled: $data['enabled']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'key' => static::serializeValue($this->key),
            'name' => static::serializeValue($this->name),
            'appId' => static::serializeValue($this->appId),
            'secret' => static::serializeValue($this->secret),
            'enabled' => static::serializeValue($this->enabled)
        ];

        return $result;
    }
}
