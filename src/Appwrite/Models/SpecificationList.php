<?php

namespace Appwrite\Models;

/**
 * Specifications List
 */
readonly class SpecificationList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'specifications' => Specification::class
    ];

    /**
     * SpecificationList constructor.
     *
     * @param int $total total number of specifications that matched your query.
     * @param list<Specification> $specifications list of specifications.
     */
    public function __construct(
        public int $total,
        public array $specifications
    ) {
    }
}
