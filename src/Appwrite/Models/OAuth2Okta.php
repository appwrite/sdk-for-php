<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\OAuth2OktaPrompt;

/**
 * OAuth2Okta
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Okta
{
    use ArraySerializable;

    /**
     * OAuth2Okta constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $clientId okta oauth2 client id.
     * @param string $clientSecret okta oauth2 client secret.
     * @param string $domain okta oauth2 domain.
     * @param string $authorizationServerId okta oauth2 authorization server id.
     * @param list<OAuth2OktaPrompt>|null $prompt okta oauth2 prompt values.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $clientId,
        public string $clientSecret,
        public string $domain,
        public string $authorizationServerId,
        public ?array $prompt = null
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
            'domain' => "",
            'authorizationServerId' => "",
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            clientId: $data['clientId'],
            clientSecret: $data['clientSecret'],
            domain: $data['domain'],
            authorizationServerId: $data['authorizationServerId'],
            prompt: array_key_exists('prompt', $data)
                ? (
                    is_array($data['prompt'])
                        ? array_map(
                            static fn (mixed $item): mixed => static::hydrateTypedValue(OAuth2OktaPrompt::class, $item),
                            $data['prompt']
                        )
                        : $data['prompt']
                )
                : null
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
            'domain' => static::serializeValue($this->domain),
            'authorizationServerId' => static::serializeValue($this->authorizationServerId)
        ];
    }
}
