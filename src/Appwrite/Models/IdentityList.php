<?php

namespace Appwrite\Models;

/**
 * Identities List
 */
readonly class IdentityList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'identities' => Identity::class
    ];

    /**
     * IdentityList constructor.
     *
     * @param int $total total number of identities that matched your query.
     * @param list<Identity> $identities list of identities.
     */
    public function __construct(
        public int $total,
        public array $identities
    ) {
    }
}
