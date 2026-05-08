<?php

namespace Appwrite\Models;

/**
 * OAuth2Bitbucket
 */
readonly class OAuth2Bitbucket
{
    use ArraySerializable;

    /**
     * OAuth2Bitbucket constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $key bitbucket oauth2 key.
     * @param string $secret bitbucket oauth2 secret.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $key,
        public string $secret
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
        if (!array_key_exists('key', $data)) {
            throw new \InvalidArgumentException('Missing required field "key" for ' . static::class . '.');
        }
        if (!array_key_exists('secret', $data)) {
            throw new \InvalidArgumentException('Missing required field "secret" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            key: $data['key'],
            secret: $data['secret']
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
            'key' => static::serializeValue($this->key),
            'secret' => static::serializeValue($this->secret)
        ];

        return $result;
    }
}
