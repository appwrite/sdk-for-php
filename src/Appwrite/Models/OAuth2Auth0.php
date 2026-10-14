<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\OAuth2Auth0Prompt;

/**
 * OAuth2Auth0
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Auth0
{
    use ArraySerializable;

    /**
     * OAuth2Auth0 constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $clientId auth0 oauth2 client id.
     * @param string $clientSecret auth0 oauth2 client secret.
     * @param list<OAuth2Auth0Prompt> $prompt auth0 oauth2 prompt values.
     * @param string $endpoint auth0 oauth2 endpoint domain.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $clientId,
        public string $clientSecret,
        public array $prompt,
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
            'clientId' => "",
            'clientSecret' => "",
            'prompt' => [],
            'endpoint' => "",
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            clientId: $data['clientId'],
            clientSecret: $data['clientSecret'],
            prompt: is_array($data['prompt'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(OAuth2Auth0Prompt::class, $item),
                    $data['prompt']
                )
                : $data['prompt'],
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
            'clientId' => static::serializeValue($this->clientId),
            'clientSecret' => static::serializeValue($this->clientSecret),
            'prompt' => static::serializeValue($this->prompt),
            'endpoint' => static::serializeValue($this->endpoint)
        ];
    }
}
