<?php

namespace Appwrite\Models;

/**
 * OAuth2Stripe
 */
readonly class OAuth2Stripe
{
    use ArraySerializable;

    /**
     * OAuth2Stripe constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $clientId stripe oauth2 client id.
     * @param string $apiSecretKey stripe oauth2 api secret key.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $clientId,
        public string $apiSecretKey
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
        if (!array_key_exists('clientId', $data)) {
            throw new \InvalidArgumentException('Missing required field "clientId" for ' . static::class . '.');
        }
        if (!array_key_exists('apiSecretKey', $data)) {
            throw new \InvalidArgumentException('Missing required field "apiSecretKey" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            clientId: $data['clientId'],
            apiSecretKey: $data['apiSecretKey']
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
            'clientId' => static::serializeValue($this->clientId),
            'apiSecretKey' => static::serializeValue($this->apiSecretKey)
        ];

        return $result;
    }
}
