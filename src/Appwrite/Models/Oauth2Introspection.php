<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2 Introspection
 *
 * @phpstan-consistent-constructor
 */
readonly class Oauth2Introspection
{
    use ArraySerializable;

    /**
     * Oauth2Introspection constructor.
     *
     * @param bool $active whether the token is currently active. an inactive token carries no other claims (rfc 7662).
     * @param string|null $tokenUse kind of token that was introspected. can be one of: `access_token` or `refresh_token`.
     * @param string|null $tokenType oauth2 token type.
     * @param string|null $scope space-separated scopes granted to the token.
     * @param string|null $clientId oauth2 client id the token was issued to.
     * @param string|null $sub id of the user who authorized the token.
     * @param array|null $aud audiences the token is intended for. the first entry is the project api base url; any further entries are the resource indicators requested at authorization time (rfc 8707).
     * @param string|null $iss issuer url of the token.
     * @param int|null $exp expiration time as a unix timestamp in seconds.
     * @param int|null $iat issued-at time as a unix timestamp in seconds.
     * @param string|null $jti unique identifier of the token.
     * @param array|null $authorizationDetails granted rfc 9396 authorization details, restricted to what the user can currently access.
     */
    public function __construct(
        public bool $active,
        public ?string $tokenUse = null,
        public ?string $tokenType = null,
        public ?string $scope = null,
        public ?string $clientId = null,
        public ?string $sub = null,
        public ?array $aud = null,
        public ?string $iss = null,
        public ?int $exp = null,
        public ?int $iat = null,
        public ?string $jti = null,
        public ?array $authorizationDetails = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'active' => false,
        ];

        return new static(
            active: $data['active'],
            tokenUse: $data['token_use'] ?? null,
            tokenType: $data['token_type'] ?? null,
            scope: $data['scope'] ?? null,
            clientId: $data['client_id'] ?? null,
            sub: $data['sub'] ?? null,
            aud: $data['aud'] ?? null,
            iss: $data['iss'] ?? null,
            exp: $data['exp'] ?? null,
            iat: $data['iat'] ?? null,
            jti: $data['jti'] ?? null,
            authorizationDetails: $data['authorization_details'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'active' => static::serializeValue($this->active),
            'token_use' => static::serializeValue($this->tokenUse),
            'token_type' => static::serializeValue($this->tokenType),
            'scope' => static::serializeValue($this->scope),
            'client_id' => static::serializeValue($this->clientId),
            'sub' => static::serializeValue($this->sub),
            'aud' => static::serializeValue($this->aud),
            'iss' => static::serializeValue($this->iss),
            'exp' => static::serializeValue($this->exp),
            'iat' => static::serializeValue($this->iat),
            'jti' => static::serializeValue($this->jti),
            'authorization_details' => static::serializeValue($this->authorizationDetails)
        ];
    }
}
