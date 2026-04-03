<?php

namespace Appwrite\Models;

/**
 * Preferences
 */
readonly class Preferences
{
    use ArraySerializable;

    private const ADDITIONAL_PROPERTIES = true;

    /**
     * Preferences constructor.
     *
     * @param array<string, mixed> $data Additional properties.
     */
    public function __construct(
        public array $data = []
    ) {
    }
}
