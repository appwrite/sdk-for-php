<?php

namespace Appwrite\Models;

/**
 * Phones List
 */
readonly class PhoneList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'phones' => Phone::class
    ];

    /**
     * PhoneList constructor.
     *
     * @param int $total total number of phones that matched your query.
     * @param list<Phone> $phones list of phones.
     */
    public function __construct(
        public int $total,
        public array $phones
    ) {
    }
}
