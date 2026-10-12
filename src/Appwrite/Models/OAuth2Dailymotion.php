<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2Dailymotion
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Dailymotion
{
    use ArraySerializable;

    /**
     * OAuth2Dailymotion constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $apiKey dailymotion oauth2 api key.
     * @param string $apiSecret dailymotion oauth2 api secret.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $apiKey,
        public string $apiSecret
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
            'apiKey' => "",
            'apiSecret' => "",
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            apiKey: $data['apiKey'],
            apiSecret: $data['apiSecret']
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
            'apiKey' => static::serializeValue($this->apiKey),
            'apiSecret' => static::serializeValue($this->apiSecret)
        ];
    }
}
