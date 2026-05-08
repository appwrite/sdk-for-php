<?php

namespace Appwrite\Models;

/**
 * OAuth2Facebook
 */
readonly class OAuth2Facebook
{
    use ArraySerializable;

    /**
     * OAuth2Facebook constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $appId facebook oauth2 app id.
     * @param string $appSecret facebook oauth2 app secret.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $appId,
        public string $appSecret
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
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }
        if (!array_key_exists('appId', $data)) {
            throw new \InvalidArgumentException('Missing required field "appId" for ' . static::class . '.');
        }
        if (!array_key_exists('appSecret', $data)) {
            throw new \InvalidArgumentException('Missing required field "appSecret" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            appId: $data['appId'],
            appSecret: $data['appSecret']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            'enabled' => static::serializeValue($this->enabled),
            'appId' => static::serializeValue($this->appId),
            'appSecret' => static::serializeValue($this->appSecret)
        ];

        return $result;
    }
}
