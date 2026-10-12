<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2Dropbox
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Dropbox
{
    use ArraySerializable;

    /**
     * OAuth2Dropbox constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $appKey dropbox oauth2 app key.
     * @param string $appSecret dropbox oauth2 app secret.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $appKey,
        public string $appSecret
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
            'appKey' => "",
            'appSecret' => "",
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            appKey: $data['appKey'],
            appSecret: $data['appSecret']
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
            'appKey' => static::serializeValue($this->appKey),
            'appSecret' => static::serializeValue($this->appSecret)
        ];
    }
}
