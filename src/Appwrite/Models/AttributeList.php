<?php

namespace Appwrite\Models;

/**
 * Attributes List
 */
readonly class AttributeList
{
    use ArraySerializable;

    /**
     * AttributeList constructor.
     *
     * @param int $total total number of attributes in the given collection.
     * @param array $attributes list of attributes.
     */
    public function __construct(
        public int $total,
        public array $attributes
    ) {
    }
}
