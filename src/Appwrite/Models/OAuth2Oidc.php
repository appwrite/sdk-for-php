<?php

namespace Appwrite\Models;

/**
 * OAuth2Oidc
 */
readonly class OAuth2Oidc
{
    use ArraySerializable;

    /**
     * OAuth2Oidc constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $clientId openid connect oauth2 client id.
     * @param string $clientSecret openid connect oauth2 client secret.
     * @param string $wellKnownURL openid connect well-known configuration url. when set, authorization, token, and user info endpoints can be discovered automatically.
     * @param string $authorizationURL openid connect authorization endpoint url.
     * @param string $tokenURL openid connect token endpoint url.
     * @param string $userInfoURL openid connect user info endpoint url.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $clientId,
        public string $clientSecret,
        public string $wellKnownURL,
        public string $authorizationURL,
        public string $tokenURL,
        public string $userInfoURL
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
        if (!array_key_exists('clientId', $data)) {
            throw new \InvalidArgumentException('Missing required field "clientId" for ' . static::class . '.');
        }
        if (!array_key_exists('clientSecret', $data)) {
            throw new \InvalidArgumentException('Missing required field "clientSecret" for ' . static::class . '.');
        }
        if (!array_key_exists('wellKnownURL', $data)) {
            throw new \InvalidArgumentException('Missing required field "wellKnownURL" for ' . static::class . '.');
        }
        if (!array_key_exists('authorizationURL', $data)) {
            throw new \InvalidArgumentException('Missing required field "authorizationURL" for ' . static::class . '.');
        }
        if (!array_key_exists('tokenURL', $data)) {
            throw new \InvalidArgumentException('Missing required field "tokenURL" for ' . static::class . '.');
        }
        if (!array_key_exists('userInfoURL', $data)) {
            throw new \InvalidArgumentException('Missing required field "userInfoURL" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            clientId: $data['clientId'],
            clientSecret: $data['clientSecret'],
            wellKnownURL: $data['wellKnownURL'],
            authorizationURL: $data['authorizationURL'],
            tokenURL: $data['tokenURL'],
            userInfoURL: $data['userInfoURL']
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
            'clientId' => static::serializeValue($this->clientId),
            'clientSecret' => static::serializeValue($this->clientSecret),
            'wellKnownURL' => static::serializeValue($this->wellKnownURL),
            'authorizationURL' => static::serializeValue($this->authorizationURL),
            'tokenURL' => static::serializeValue($this->tokenURL),
            'userInfoURL' => static::serializeValue($this->userInfoURL)
        ];

        return $result;
    }
}
