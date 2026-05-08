<?php

namespace Appwrite\Models;

/**
 * OAuth2Tradeshift
 */
readonly class OAuth2Tradeshift
{
    use ArraySerializable;

    /**
     * OAuth2Tradeshift constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $oauth2ClientId tradeshift oauth2 client id.
     * @param string $oauth2ClientSecret tradeshift oauth2 client secret.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $oauth2ClientId,
        public string $oauth2ClientSecret
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
        if (!array_key_exists('oauth2ClientId', $data)) {
            throw new \InvalidArgumentException('Missing required field "oauth2ClientId" for ' . static::class . '.');
        }
        if (!array_key_exists('oauth2ClientSecret', $data)) {
            throw new \InvalidArgumentException('Missing required field "oauth2ClientSecret" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            oauth2ClientId: $data['oauth2ClientId'],
            oauth2ClientSecret: $data['oauth2ClientSecret']
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
            'oauth2ClientId' => static::serializeValue($this->oauth2ClientId),
            'oauth2ClientSecret' => static::serializeValue($this->oauth2ClientSecret)
        ];

        return $result;
    }
}
