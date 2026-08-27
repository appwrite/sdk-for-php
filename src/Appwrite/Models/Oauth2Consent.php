<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2 Consent
 *
 * @phpstan-consistent-constructor
 */
readonly class Oauth2Consent
{
    use ArraySerializable;

    /**
     * Oauth2Consent constructor.
     *
     * @param string $id consent id.
     * @param string $createdAt consent creation time in iso 8601 format.
     * @param string $updatedAt consent update date in iso 8601 format.
     * @param string $userId id of the user the consent belongs to.
     * @param string $appId id of the registered app the consent was given to. empty for url-form (cimd) clients.
     * @param string $cimdUrl client id metadata document url of the client the consent was given to. empty for registered apps.
     * @param array $scopes oauth2 scopes the user consented to.
     * @param array $resources rfc 8707 resource indicators the user consented to.
     * @param string $authorizationDetails authorization details the user consented to, as a json string. each entry has a `type` plus project-defined fields.
     * @param string $expire consent expiration time in iso 8601 format. empty when the consent has no token-bound expiry yet.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $userId,
        public string $appId,
        public string $cimdUrl,
        public array $scopes,
        public array $resources,
        public string $authorizationDetails,
        public string $expire
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
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('userId', $data)) {
            throw new \InvalidArgumentException('Missing required field "userId" for ' . static::class . '.');
        }
        if (!array_key_exists('appId', $data)) {
            throw new \InvalidArgumentException('Missing required field "appId" for ' . static::class . '.');
        }
        if (!array_key_exists('cimdUrl', $data)) {
            throw new \InvalidArgumentException('Missing required field "cimdUrl" for ' . static::class . '.');
        }
        if (!array_key_exists('scopes', $data)) {
            throw new \InvalidArgumentException('Missing required field "scopes" for ' . static::class . '.');
        }
        if (!array_key_exists('resources', $data)) {
            throw new \InvalidArgumentException('Missing required field "resources" for ' . static::class . '.');
        }
        if (!array_key_exists('authorizationDetails', $data)) {
            throw new \InvalidArgumentException('Missing required field "authorizationDetails" for ' . static::class . '.');
        }
        if (!array_key_exists('expire', $data)) {
            throw new \InvalidArgumentException('Missing required field "expire" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            userId: $data['userId'],
            appId: $data['appId'],
            cimdUrl: $data['cimdUrl'],
            scopes: $data['scopes'],
            resources: $data['resources'],
            authorizationDetails: $data['authorizationDetails'],
            expire: $data['expire']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'userId' => static::serializeValue($this->userId),
            'appId' => static::serializeValue($this->appId),
            'cimdUrl' => static::serializeValue($this->cimdUrl),
            'scopes' => static::serializeValue($this->scopes),
            'resources' => static::serializeValue($this->resources),
            'authorizationDetails' => static::serializeValue($this->authorizationDetails),
            'expire' => static::serializeValue($this->expire)
        ];
    }
}
