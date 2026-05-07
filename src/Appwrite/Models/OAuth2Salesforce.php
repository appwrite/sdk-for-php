<?php

namespace Appwrite\Models;

/**
 * OAuth2Salesforce
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
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $customerKey,
        public string $customerSecret
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }
        if (!array_key_exists('customerKey', $data)) {
            throw new \InvalidArgumentException('Missing required field "customerKey" for ' . static::class . '.');
        }
        if (!array_key_exists('customerSecret', $data)) {
            throw new \InvalidArgumentException('Missing required field "customerSecret" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            customerKey: $data['customerKey'],
            customerSecret: $data['customerSecret']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            'enabled' => static::serializeValue($this->enabled),
            'customerKey' => static::serializeValue($this->customerKey),
            'customerSecret' => static::serializeValue($this->customerSecret)
        ];

        return $result;
    }
}
