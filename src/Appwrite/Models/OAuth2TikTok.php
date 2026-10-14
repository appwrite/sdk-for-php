<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2TikTok
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2TikTok
{
    use ArraySerializable;

    /**
     * OAuth2TikTok constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $clientId tiktok oauth2 client key.
     * @param string $clientSecret tiktok oauth2 client secret.
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
