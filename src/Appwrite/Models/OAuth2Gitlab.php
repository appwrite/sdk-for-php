<?php

namespace Appwrite\Models;

/**
 * OAuth2Gitlab
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
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }
        if (!array_key_exists('applicationId', $data)) {
            throw new \InvalidArgumentException('Missing required field "applicationId" for ' . static::class . '.');
        }
        if (!array_key_exists('secret', $data)) {
            throw new \InvalidArgumentException('Missing required field "secret" for ' . static::class . '.');
        }
        if (!array_key_exists('endpoint', $data)) {
            throw new \InvalidArgumentException('Missing required field "endpoint" for ' . static::class . '.');
        }

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
        $result = [
            '$id' => static::serializeValue($this->id),
            'enabled' => static::serializeValue($this->enabled),
            'applicationId' => static::serializeValue($this->applicationId),
            'secret' => static::serializeValue($this->secret),
            'endpoint' => static::serializeValue($this->endpoint)
        ];

        return $result;
    }
}
