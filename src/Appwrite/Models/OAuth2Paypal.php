<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2Paypal
 *
 * @phpstan-consistent-constructor
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
        $data += [
            '$id' => "",
            'enabled' => false,
            'clientId' => "",
            'secretKey' => "",
        ];

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
        return [
            '$id' => static::serializeValue($this->id),
            'enabled' => static::serializeValue($this->enabled),
            'clientId' => static::serializeValue($this->clientId),
            'secretKey' => static::serializeValue($this->secretKey)
        ];
    }
}
