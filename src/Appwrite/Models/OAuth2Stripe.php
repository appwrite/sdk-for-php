<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2Stripe
 *
 * @phpstan-consistent-constructor
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
        $data += [
            '$id' => "",
            'enabled' => false,
            'clientId' => "",
            'apiSecretKey' => "",
        ];

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
        return [
            '$id' => static::serializeValue($this->id),
            'enabled' => static::serializeValue($this->enabled),
            'clientId' => static::serializeValue($this->clientId),
            'apiSecretKey' => static::serializeValue($this->apiSecretKey)
        ];
    }
}
