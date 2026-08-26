<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * MFAFactors
 *
 * @phpstan-consistent-constructor
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
     * @param bool $custom can custom factor be used for mfa challenge for this account.
     */
    public function __construct(
        public bool $totp,
        public bool $phone,
        public bool $email,
        public bool $recoveryCode,
        public bool $custom
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('totp', $data)) {
            throw new \InvalidArgumentException('Missing required field "totp" for ' . static::class . '.');
        }
        if (!array_key_exists('phone', $data)) {
            throw new \InvalidArgumentException('Missing required field "phone" for ' . static::class . '.');
        }
        if (!array_key_exists('email', $data)) {
            throw new \InvalidArgumentException('Missing required field "email" for ' . static::class . '.');
        }
        if (!array_key_exists('recoveryCode', $data)) {
            throw new \InvalidArgumentException('Missing required field "recoveryCode" for ' . static::class . '.');
        }
        if (!array_key_exists('custom', $data)) {
            throw new \InvalidArgumentException('Missing required field "custom" for ' . static::class . '.');
        }

        return new static(
            totp: $data['totp'],
            phone: $data['phone'],
            email: $data['email'],
            recoveryCode: $data['recoveryCode'],
            custom: $data['custom']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'totp' => static::serializeValue($this->totp),
            'phone' => static::serializeValue($this->phone),
            'email' => static::serializeValue($this->email),
            'recoveryCode' => static::serializeValue($this->recoveryCode),
            'custom' => static::serializeValue($this->custom)
        ];
    }
}
