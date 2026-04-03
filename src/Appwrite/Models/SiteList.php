<?php

namespace Appwrite\Models;

/**
 * Sites List
 */
readonly class SiteList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'sites' => Site::class
    ];

    /**
     * SiteList constructor.
     *
     * @param int $total total number of sites that matched your query.
     * @param list<Site> $sites list of sites.
     */
    public function __construct(
        public int $total,
        public array $sites
    ) {
    }
}
