<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2 consents list
 *
 * @phpstan-consistent-constructor
 */
readonly class Oauth2ConsentList
{
    use ArraySerializable;

    /**
     * Oauth2ConsentList constructor.
     *
     * @param int $total total number of consents that matched your query.
     * @param list<Oauth2Consent> $consents list of consents.
     */
    public function __construct(
        public int $total,
        public array $consents
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
        if (!array_key_exists('consents', $data)) {
            throw new \InvalidArgumentException('Missing required field "consents" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            consents: is_array($data['consents'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Oauth2Consent::class, $item),
                    $data['consents']
                )
                : $data['consents']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'consents' => static::serializeValue($this->consents)
        ];
    }
}
