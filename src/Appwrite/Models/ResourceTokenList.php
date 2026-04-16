<?php

namespace Appwrite\Models;

/**
 * Resource Tokens List
 */
readonly class ResourceTokenList
{
    use ArraySerializable;

    /**
     * ResourceTokenList constructor.
     *
     * @param int $total total number of tokens that matched your query.
     * @param list<ResourceToken> $tokens list of tokens.
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
                    static fn (mixed $item): mixed => static::hydrateTypedValue(ResourceToken::class, $item),
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
        $result = [
            'total' => static::serializeValue($this->total),
            'tokens' => static::serializeValue($this->tokens)
        ];

        return $result;
    }
}
