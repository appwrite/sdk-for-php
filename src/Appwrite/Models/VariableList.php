<?php

namespace Appwrite\Models;

/**
 * Variables List
 */
readonly class VariableList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'variables' => Variable::class
    ];

    /**
     * VariableList constructor.
     *
     * @param int $total total number of variables that matched your query.
     * @param list<Variable> $variables list of variables.
     */
    public function __construct(
        public int $total,
        public array $variables
    ) {
    }
}
