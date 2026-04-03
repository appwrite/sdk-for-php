<?php

namespace Appwrite\Models;

/**
 * Buckets List
 */
readonly class BucketList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'buckets' => Bucket::class
    ];

    /**
     * BucketList constructor.
     *
     * @param int $total total number of buckets that matched your query.
     * @param list<Bucket> $buckets list of buckets.
     */
    public function __construct(
        public int $total,
        public array $buckets
    ) {
    }
}
