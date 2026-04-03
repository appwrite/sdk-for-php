<?php

namespace Appwrite\Models;

/**
 * MFAType
 */
readonly class MfaType
{
    use ArraySerializable;

    /**
     * MfaType constructor.
     *
     * @param string $secret secret token used for totp factor.
     * @param string $uri uri for authenticator apps.
     */
    public function __construct(
        public string $secret,
        public string $uri
    ) {
    }
}
