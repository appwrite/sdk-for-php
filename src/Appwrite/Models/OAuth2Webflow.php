<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2Webflow
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Webflow
{
    use ArraySerializable;

    /**
     * OAuth2Webflow constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $clientId webflow oauth2 client id.
     * @param string $clientSecret webflow oauth2 client secret.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $clientId,
        public string $clientSecret
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
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            clientId: $data['clientId'],
            clientSecret: $data['clientSecret']
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
            'clientSecret' => static::serializeValue($this->clientSecret)
        ];
    }
}
