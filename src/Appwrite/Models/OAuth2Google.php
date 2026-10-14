<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\OAuth2GooglePrompt;

/**
 * OAuth2Google
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Google
{
    use ArraySerializable;

    /**
     * OAuth2Google constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $clientId google oauth2 client id.
     * @param string $clientSecret google oauth2 client secret.
     * @param list<OAuth2GooglePrompt> $prompt google oauth2 prompt values.
     * @param bool $nativeEnabled native google sign-in is active and can be used to create sessions from an id token. independent of enabled, which only controls the browser-based flow.
     * @param array $nativeClientIds additional oauth2 client ids accepted as id token audiences for native sign-in, next to the client id.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $clientId,
        public string $clientSecret,
        public array $prompt,
        public bool $nativeEnabled,
        public array $nativeClientIds
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
            'prompt' => ["consent"],
            'nativeEnabled' => false,
            'nativeClientIds' => [],
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            clientId: $data['clientId'],
            clientSecret: $data['clientSecret'],
            prompt: is_array($data['prompt'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(OAuth2GooglePrompt::class, $item),
                    $data['prompt']
                )
                : $data['prompt'],
            nativeEnabled: $data['nativeEnabled'],
            nativeClientIds: $data['nativeClientIds']
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
            'nativeEnabled' => static::serializeValue($this->nativeEnabled),
            'nativeClientIds' => static::serializeValue($this->nativeClientIds)
        ];
    }
}
