<?php

namespace Appwrite\Models;

/**
 * OAuth2Disqus
 */
readonly class OAuth2Disqus
{
    use ArraySerializable;

    /**
     * OAuth2Disqus constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $publicKey disqus oauth2 public key.
     * @param string $secretKey disqus oauth2 secret key.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $publicKey,
        public string $secretKey
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
        if (!array_key_exists('publicKey', $data)) {
            throw new \InvalidArgumentException('Missing required field "publicKey" for ' . static::class . '.');
        }
        if (!array_key_exists('secretKey', $data)) {
            throw new \InvalidArgumentException('Missing required field "secretKey" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            publicKey: $data['publicKey'],
            secretKey: $data['secretKey']
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
            'publicKey' => static::serializeValue($this->publicKey),
            'secretKey' => static::serializeValue($this->secretKey)
        ];

        return $result;
    }
}
