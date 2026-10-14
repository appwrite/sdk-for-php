<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\OAuth2DiscordPrompt;

/**
 * OAuth2Discord
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Discord
{
    use ArraySerializable;

    /**
     * OAuth2Discord constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $clientId discord oauth2 client id.
     * @param string $clientSecret discord oauth2 client secret.
     * @param list<OAuth2DiscordPrompt>|null $prompt discord oauth2 prompt values.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $clientId,
        public string $clientSecret,
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
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            clientId: $data['clientId'],
            clientSecret: $data['clientSecret'],
            prompt: array_key_exists('prompt', $data)
                ? (
                    is_array($data['prompt'])
                        ? array_map(
                            static fn (mixed $item): mixed => static::hydrateTypedValue(OAuth2DiscordPrompt::class, $item),
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
            'prompt' => static::serializeValue($this->prompt)
        ];
    }
}
