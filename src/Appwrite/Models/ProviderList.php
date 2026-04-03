<?php

namespace Appwrite\Models;

/**
 * Provider list
 */
readonly class ProviderList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'providers' => Provider::class
    ];

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
}
