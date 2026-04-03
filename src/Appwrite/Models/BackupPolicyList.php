<?php

namespace Appwrite\Models;

/**
 * Backup policy list
 */
readonly class BackupPolicyList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'policies' => BackupPolicy::class
    ];

    /**
     * BackupPolicyList constructor.
     *
     * @param int $total total number of policies that matched your query.
     * @param list<BackupPolicy> $policies list of policies.
     */
    public function __construct(
        public int $total,
        public array $policies
    ) {
    }
}
