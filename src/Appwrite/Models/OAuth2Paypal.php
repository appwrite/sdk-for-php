<?php

namespace Appwrite\Models;

/**
 * OAuth2Paypal
 */
readonly class OAuth2Paypal
{
    use ArraySerializable;

    /**
     * OAuth2Paypal constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $clientId paypal oauth2 client id.
     * @param string $secretKey paypal oauth2 secret key.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $clientId,
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
        if (!array_key_exists('clientId', $data)) {
            throw new \InvalidArgumentException('Missing required field "clientId" for ' . static::class . '.');
        }
        if (!array_key_exists('secretKey', $data)) {
            throw new \InvalidArgumentException('Missing required field "secretKey" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            clientId: $data['clientId'],
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
            'clientId' => static::serializeValue($this->clientId),
            'secretKey' => static::serializeValue($this->secretKey)
        ];

        return $result;
    }
}
