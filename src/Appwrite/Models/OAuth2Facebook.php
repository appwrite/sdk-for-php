<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2Facebook
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Facebook
{
    use ArraySerializable;

    /**
     * OAuth2Facebook constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $appId facebook oauth2 app id.
     * @param string $appSecret facebook oauth2 app secret.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $appId,
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
            'appId' => "",
            'appSecret' => "",
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            appId: $data['appId'],
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
            'appId' => static::serializeValue($this->appId),
            'appSecret' => static::serializeValue($this->appSecret)
        ];
    }
}
