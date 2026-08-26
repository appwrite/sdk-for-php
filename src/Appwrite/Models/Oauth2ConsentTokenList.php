<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2 consent tokens list
 *
 * @phpstan-consistent-constructor
 */
readonly class Oauth2ConsentTokenList
{
    use ArraySerializable;

    /**
     * Oauth2ConsentTokenList constructor.
     *
     * @param int $total total number of tokens that matched your query.
     * @param list<Oauth2ConsentToken> $tokens list of tokens.
     */
    public function __construct(
        public int $total,
        public array $tokens
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
        if (!array_key_exists('tokens', $data)) {
            throw new \InvalidArgumentException('Missing required field "tokens" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            tokens: is_array($data['tokens'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Oauth2ConsentToken::class, $item),
                    $data['tokens']
                )
                : $data['tokens']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'tokens' => static::serializeValue($this->tokens)
        ];
    }
}
