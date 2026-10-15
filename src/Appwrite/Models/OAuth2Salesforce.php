<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\OAuth2SalesforcePrompt;

/**
 * OAuth2Salesforce
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2Salesforce
{
    use ArraySerializable;

    /**
     * OAuth2Salesforce constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $customerKey salesforce oauth2 consumer key.
     * @param string $customerSecret salesforce oauth2 consumer secret.
     * @param list<OAuth2SalesforcePrompt> $prompt salesforce oauth2 prompt values.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $customerKey,
        public string $customerSecret,
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
            'customerKey' => "",
            'customerSecret' => "",
            'prompt' => [],
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            customerKey: $data['customerKey'],
            customerSecret: $data['customerSecret'],
            prompt: is_array($data['prompt'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(OAuth2SalesforcePrompt::class, $item),
                    $data['prompt']
                )
                : [static::hydrateTypedValue(OAuth2SalesforcePrompt::class, $data['prompt'])]
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
            'customerKey' => static::serializeValue($this->customerKey),
            'customerSecret' => static::serializeValue($this->customerSecret),
            'prompt' => static::serializeValue($this->prompt)
        ];
    }
}
