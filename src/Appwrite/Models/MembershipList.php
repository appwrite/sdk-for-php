<?php

namespace Appwrite\Models;

/**
 * Memberships List
 */
readonly class MembershipList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'memberships' => Membership::class
    ];

    /**
     * MembershipList constructor.
     *
     * @param int $total total number of memberships that matched your query.
     * @param list<Membership> $memberships list of memberships.
     */
    public function __construct(
        public int $total,
        public array $memberships
    ) {
    }
}
