<?php

namespace Appwrite\Models;

/**
 * OAuth2Etsy
 */
readonly class OAuth2Etsy
{
    use ArraySerializable;

    /**
     * OAuth2Etsy constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $keyString etsy oauth2 keystring.
     * @param string $sharedSecret etsy oauth2 shared secret.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $keyString,
        public string $sharedSecret
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
        if (!array_key_exists('keyString', $data)) {
            throw new \InvalidArgumentException('Missing required field "keyString" for ' . static::class . '.');
        }
        if (!array_key_exists('sharedSecret', $data)) {
            throw new \InvalidArgumentException('Missing required field "sharedSecret" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            keyString: $data['keyString'],
            sharedSecret: $data['sharedSecret']
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
            'keyString' => static::serializeValue($this->keyString),
            'sharedSecret' => static::serializeValue($this->sharedSecret)
        ];

        return $result;
    }
}
