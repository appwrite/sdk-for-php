<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\OAuth2GithubPrompt;

/**
 * OAuth2GitHub
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Github
{
    use ArraySerializable;

    /**
     * OAuth2Github constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $clientId github oauth2 client id. for github apps, use the "app id" when both an app id and client id are available.
     * @param string $clientSecret github oauth2 client secret.
     * @param list<OAuth2GithubPrompt> $prompt github oauth2 prompt values.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $clientId,
        public string $clientSecret,
        public array $prompt
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
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            clientId: $data['clientId'],
            clientSecret: $data['clientSecret'],
            prompt: is_array($data['prompt'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(OAuth2GithubPrompt::class, $item),
                    $data['prompt']
                )
                : [static::hydrateTypedValue(OAuth2GithubPrompt::class, $data['prompt'])]
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
            'prompt' => static::serializeValue($this->prompt)
        ];
    }
}
