<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2Gitlab
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Gitlab
{
    use ArraySerializable;

    /**
     * OAuth2Gitlab constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $applicationId gitlab oauth2 application id.
     * @param string $secret gitlab oauth2 secret.
     * @param string $endpoint gitlab oauth2 endpoint url. defaults to https://gitlab.com for self-hosted instances.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $applicationId,
        public string $secret,
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
            'applicationId' => "",
            'secret' => "",
            'endpoint' => "",
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            applicationId: $data['applicationId'],
            secret: $data['secret'],
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
            'applicationId' => static::serializeValue($this->applicationId),
            'secret' => static::serializeValue($this->secret),
            'endpoint' => static::serializeValue($this->endpoint)
        ];
    }
}
