<?php

namespace Appwrite\Models;

/**
 * OAuth2 Providers List
 */
readonly class OAuth2ProviderList
{
    use ArraySerializable;

    /**
     * OAuth2ProviderList constructor.
     *
     * @param int $total total number of oauth2 providers in the given project.
     * @param array $providers list of oauth2 providers.
     */
    public function __construct(
        public int $total,
        public array $providers
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('providers', $data)) {
            throw new \InvalidArgumentException('Missing required field "providers" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            providers: $data['providers']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'providers' => static::serializeValue($this->providers)
        ];

        return $result;
    }
}
