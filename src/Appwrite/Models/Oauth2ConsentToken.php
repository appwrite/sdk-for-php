<?php

namespace Appwrite\Models;

/**
 * OAuth2 Consent Token
 */
readonly class Oauth2ConsentToken
{
    use ArraySerializable;

    /**
     * Oauth2ConsentToken constructor.
     *
     * @param string $id token family id.
     * @param string $createdAt token creation time in iso 8601 format.
     * @param string $updatedAt token update date in iso 8601 format. refreshing the token family updates this.
     * @param string $consentId id of the consent the token family was issued under.
     * @param string $userId id of the user the token family belongs to.
     * @param string $appId id of the registered app the token family was issued to. empty for url-form (cimd) clients.
     * @param string $cimdUrl client id metadata document url of the client the token family was issued to. empty for registered apps.
     * @param array $scopes oauth2 scopes granted on the token family.
     * @param array $resources rfc 8707 resource indicators granted on the token family.
     * @param string $authorizationDetails authorization details granted on the token family, as a json string. each entry has a `type` plus project-defined fields.
     * @param string $expire expiration time of the current access token of this family in iso 8601 format.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $consentId,
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
        if (!array_key_exists('consentId', $data)) {
            throw new \InvalidArgumentException('Missing required field "consentId" for ' . static::class . '.');
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
            consentId: $data['consentId'],
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
        $result = [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'consentId' => static::serializeValue($this->consentId),
            'userId' => static::serializeValue($this->userId),
            'appId' => static::serializeValue($this->appId),
            'cimdUrl' => static::serializeValue($this->cimdUrl),
            'scopes' => static::serializeValue($this->scopes),
            'resources' => static::serializeValue($this->resources),
            'authorizationDetails' => static::serializeValue($this->authorizationDetails),
            'expire' => static::serializeValue($this->expire)
        ];

        return $result;
    }
}
