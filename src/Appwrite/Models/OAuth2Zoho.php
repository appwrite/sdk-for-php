<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\OAuth2ZohoPrompt;

/**
 * OAuth2Zoho
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Zoho
{
    use ArraySerializable;

    /**
     * OAuth2Zoho constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $clientId zoho oauth2 client id.
     * @param string $clientSecret zoho oauth2 client secret.
     * @param list<OAuth2ZohoPrompt> $prompt zoho oauth2 prompt values.
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
                    static fn (mixed $item): mixed => static::hydrateTypedValue(OAuth2ZohoPrompt::class, $item),
                    $data['prompt']
                )
                : $data['prompt']
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
