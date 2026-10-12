<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2Linkedin
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Linkedin
{
    use ArraySerializable;

    /**
     * OAuth2Linkedin constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $clientId linkedin oauth2 client id.
     * @param string $primaryClientSecret linkedin oauth2 primary client secret.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $clientId,
        public string $primaryClientSecret
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
            'primaryClientSecret' => "",
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            clientId: $data['clientId'],
            primaryClientSecret: $data['primaryClientSecret']
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
            'primaryClientSecret' => static::serializeValue($this->primaryClientSecret)
        ];
    }
}
