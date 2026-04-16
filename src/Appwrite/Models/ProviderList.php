<?php

namespace Appwrite\Models;

/**
 * Provider list
 */
readonly class ProviderList
{
    use ArraySerializable;

    /**
     * ProviderList constructor.
     *
     * @param int $total total number of providers that matched your query.
     * @param list<Provider> $providers list of providers.
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
            providers: is_array($data['providers'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Provider::class, $item),
                    $data['providers']
                )
                : $data['providers']
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
