<?php

namespace Appwrite\Models;

/**
 * Functions List
 */
readonly class FunctionList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'functions' => FunctionModel::class
    ];

    /**
     * FunctionList constructor.
     *
     * @param int $total total number of functions that matched your query.
     * @param list<FunctionModel> $functions list of functions.
     */
    public function __construct(
        public int $total,
        public array $functions
    ) {
    }
}
