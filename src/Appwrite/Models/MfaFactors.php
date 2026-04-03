<?php

namespace Appwrite\Models;

/**
 * MFAFactors
 */
readonly class MfaFactors
{
    use ArraySerializable;

    /**
     * MfaFactors constructor.
     *
     * @param bool $totp can totp be used for mfa challenge for this account.
     * @param bool $phone can phone (sms) be used for mfa challenge for this account.
     * @param bool $email can email be used for mfa challenge for this account.
     * @param bool $recoveryCode can recovery code be used for mfa challenge for this account.
     */
    public function __construct(
        public bool $totp,
        public bool $phone,
        public bool $email,
        public bool $recoveryCode
    ) {
    }
}
