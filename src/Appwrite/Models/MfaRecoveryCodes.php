<?php

namespace Appwrite\Models;

/**
 * MFA Recovery Codes
 */
readonly class MfaRecoveryCodes
{
    use ArraySerializable;

    /**
     * MfaRecoveryCodes constructor.
     *
     * @param array $recoveryCodes recovery codes.
     */
    public function __construct(
        public array $recoveryCodes
    ) {
    }
}
