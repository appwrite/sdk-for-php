<?php

namespace Appwrite\Models;

/**
 * OAuth2Microsoft
 */
readonly class OAuth2Microsoft
{
    use ArraySerializable;

    /**
     * OAuth2Microsoft constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $applicationId microsoft oauth2 application id.
     * @param string $applicationSecret microsoft oauth2 application secret.
     * @param string $tenant microsoft entra id tenant identifier. use 'common', 'organizations', 'consumers' or a specific tenant id.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $applicationId,
        public string $applicationSecret,
        public string $tenant
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
        if (!array_key_exists('applicationSecret', $data)) {
            throw new \InvalidArgumentException('Missing required field "applicationSecret" for ' . static::class . '.');
        }
        if (!array_key_exists('tenant', $data)) {
            throw new \InvalidArgumentException('Missing required field "tenant" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            applicationId: $data['applicationId'],
            applicationSecret: $data['applicationSecret'],
            tenant: $data['tenant']
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
            'applicationSecret' => static::serializeValue($this->applicationSecret),
            'tenant' => static::serializeValue($this->tenant)
        ];

        return $result;
    }
}
