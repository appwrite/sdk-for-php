<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\OAuth2OidcPrompt;

/**
 * OAuth2Oidc
 *
 * @phpstan-consistent-constructor
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
     * @param list<OAuth2OidcPrompt> $prompt openid connect prompt values controlling the authentication and consent screens.
     * @param string $wellKnownURL openid connect well-known configuration url. when set, authorization, token, and user info endpoints can be discovered automatically.
     * @param string $authorizationURL openid connect authorization endpoint url.
     * @param string $tokenURL openid connect token endpoint url.
     * @param string $userInfoURL openid connect user info endpoint url.
     * @param int|null $maxAge maximum authentication age in seconds. when set, the user must have authenticated within this many seconds.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $clientId,
        public string $clientSecret,
        public array $prompt,
        public string $wellKnownURL,
        public string $authorizationURL,
        public string $tokenURL,
        public string $userInfoURL,
        public ?int $maxAge = null
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
            'clientId' => "",
            'clientSecret' => "",
            'prompt' => [],
            'wellKnownURL' => "",
            'authorizationURL' => "",
            'tokenURL' => "",
            'userInfoURL' => "",
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            clientId: $data['clientId'],
            clientSecret: $data['clientSecret'],
            prompt: is_array($data['prompt'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(OAuth2OidcPrompt::class, $item),
                    $data['prompt']
                )
                : [static::hydrateTypedValue(OAuth2OidcPrompt::class, $data['prompt'])],
            wellKnownURL: $data['wellKnownURL'],
            authorizationURL: $data['authorizationURL'],
            tokenURL: $data['tokenURL'],
            userInfoURL: $data['userInfoURL'],
            maxAge: $data['maxAge'] ?? null
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
            'clientId' => static::serializeValue($this->clientId),
            'clientSecret' => static::serializeValue($this->clientSecret),
            'prompt' => static::serializeValue($this->prompt),
            'wellKnownURL' => static::serializeValue($this->wellKnownURL),
            'authorizationURL' => static::serializeValue($this->authorizationURL),
            'tokenURL' => static::serializeValue($this->tokenURL),
            'userInfoURL' => static::serializeValue($this->userInfoURL),
            'maxAge' => static::serializeValue($this->maxAge)
        ];
    }
}
