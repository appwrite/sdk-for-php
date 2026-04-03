<?php

namespace Appwrite\Models;

/**
 * Resource Tokens List
 */
readonly class ResourceTokenList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'tokens' => ResourceToken::class
    ];

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
}
