<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\OAuth2MicrosoftPrompt;

/**
 * OAuth2Microsoft
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Microsoft
{
    use ArraySerializable;

    /**
     * OAuth2Microsoft constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $applicationId microsoft oauth2 application id.
     * @param string $applicationSecret microsoft oauth2 application secret.
     * @param string $tenant microsoft entra id tenant identifier. use 'common', 'organizations', 'consumers' or a specific tenant id.
     * @param list<OAuth2MicrosoftPrompt>|null $prompt microsoft oauth2 prompt values.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $applicationId,
        public string $applicationSecret,
        public string $tenant,
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
            'applicationId' => "",
            'applicationSecret' => "",
            'tenant' => "",
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            applicationId: $data['applicationId'],
            applicationSecret: $data['applicationSecret'],
            tenant: $data['tenant'],
            prompt: array_key_exists('prompt', $data)
                ? (
                    is_array($data['prompt'])
                        ? array_map(
                            static fn (mixed $item): mixed => static::hydrateTypedValue(OAuth2MicrosoftPrompt::class, $item),
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
            'applicationId' => static::serializeValue($this->applicationId),
            'applicationSecret' => static::serializeValue($this->applicationSecret),
            'prompt' => static::serializeValue($this->prompt),
            'tenant' => static::serializeValue($this->tenant)
        ];
    }
}
