<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2Authentik
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Authentik
{
    use ArraySerializable;

    /**
     * OAuth2Authentik constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $clientId authentik oauth2 client id.
     * @param string $clientSecret authentik oauth2 client secret.
     * @param string $endpoint authentik oauth2 endpoint domain.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $clientId,
        public string $clientSecret,
        public string $endpoint
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
            'clientSecret' => "",
            'endpoint' => "",
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            clientId: $data['clientId'],
            clientSecret: $data['clientSecret'],
            endpoint: $data['endpoint']
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
            'clientSecret' => static::serializeValue($this->clientSecret),
            'endpoint' => static::serializeValue($this->endpoint)
        ];
    }
}
