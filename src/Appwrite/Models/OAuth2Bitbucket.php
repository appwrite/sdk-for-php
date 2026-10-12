<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2Bitbucket
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Bitbucket
{
    use ArraySerializable;

    /**
     * OAuth2Bitbucket constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $key bitbucket oauth2 key.
     * @param string $secret bitbucket oauth2 secret.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $key,
        public string $secret
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
            'key' => "",
            'secret' => "",
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            key: $data['key'],
            secret: $data['secret']
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
            'key' => static::serializeValue($this->key),
            'secret' => static::serializeValue($this->secret)
        ];
    }
}
