<?php

namespace Appwrite\Models;

/**
 * OAuth2Notion
 */
readonly class OAuth2Notion
{
    use ArraySerializable;

    /**
     * OAuth2Notion constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $oauthClientId notion oauth2 client id.
     * @param string $oauthClientSecret notion oauth2 client secret.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $oauthClientId,
        public string $oauthClientSecret
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
        if (!array_key_exists('oauthClientId', $data)) {
            throw new \InvalidArgumentException('Missing required field "oauthClientId" for ' . static::class . '.');
        }
        if (!array_key_exists('oauthClientSecret', $data)) {
            throw new \InvalidArgumentException('Missing required field "oauthClientSecret" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            oauthClientId: $data['oauthClientId'],
            oauthClientSecret: $data['oauthClientSecret']
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
            'oauthClientId' => static::serializeValue($this->oauthClientId),
            'oauthClientSecret' => static::serializeValue($this->oauthClientSecret)
        ];

        return $result;
    }
}
