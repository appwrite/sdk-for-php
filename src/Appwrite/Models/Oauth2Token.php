<?php

namespace Appwrite\Models;

/**
 * OAuth2 Token
 */
readonly class Oauth2Token
{
    use ArraySerializable;

    /**
     * Oauth2Token constructor.
     *
     * @param string $accessToken oauth2 access token.
     * @param string $tokenType oauth2 token type.
     * @param int $expiresIn access token lifetime in seconds.
     * @param string $refreshToken oauth2 refresh token.
     * @param string $scope space-separated scopes granted to the access token.
     * @param string|null $authorizationDetails granted rfc 9396 authorization details as a json string.
     * @param string|null $idToken openid connect id token. returned when the `openid` scope is granted.
     */
    public function __construct(
        public string $accessToken,
        public string $tokenType,
        public int $expiresIn,
        public string $refreshToken,
        public string $scope,
        public ?string $authorizationDetails = null,
        public ?string $idToken = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('access_token', $data)) {
            throw new \InvalidArgumentException('Missing required field "access_token" for ' . static::class . '.');
        }
        if (!array_key_exists('token_type', $data)) {
            throw new \InvalidArgumentException('Missing required field "token_type" for ' . static::class . '.');
        }
        if (!array_key_exists('expires_in', $data)) {
            throw new \InvalidArgumentException('Missing required field "expires_in" for ' . static::class . '.');
        }
        if (!array_key_exists('refresh_token', $data)) {
            throw new \InvalidArgumentException('Missing required field "refresh_token" for ' . static::class . '.');
        }
        if (!array_key_exists('scope', $data)) {
            throw new \InvalidArgumentException('Missing required field "scope" for ' . static::class . '.');
        }

        return new static(
            accessToken: $data['access_token'],
            tokenType: $data['token_type'],
            expiresIn: $data['expires_in'],
            refreshToken: $data['refresh_token'],
            scope: $data['scope'],
            authorizationDetails: array_key_exists('authorization_details', $data) ? $data['authorization_details'] : null,
            idToken: array_key_exists('id_token', $data) ? $data['id_token'] : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'access_token' => static::serializeValue($this->accessToken),
            'token_type' => static::serializeValue($this->tokenType),
            'expires_in' => static::serializeValue($this->expiresIn),
            'refresh_token' => static::serializeValue($this->refreshToken),
            'scope' => static::serializeValue($this->scope),
            'authorization_details' => static::serializeValue($this->authorizationDetails),
            'id_token' => static::serializeValue($this->idToken)
        ];

        return $result;
    }
}
