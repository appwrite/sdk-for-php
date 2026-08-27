<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Policy MFA Factors
 *
 * @phpstan-consistent-constructor
 */
readonly class PolicyMfaFactors
{
    use ArraySerializable;

    /**
     * PolicyMfaFactors constructor.
     *
     * @param string $id policy id.
     * @param bool $totp whether totp can be used to complete an mfa challenge.
     * @param bool $email whether email can be used to complete an mfa challenge.
     * @param bool $phone whether phone (sms) can be used to complete an mfa challenge.
     * @param bool $custom whether the custom factor can be used to complete an mfa challenge.
     */
    public function __construct(
        public string $id,
        public bool $totp,
        public bool $email,
        public bool $phone,
        public bool $custom
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('totp', $data)) {
            throw new \InvalidArgumentException('Missing required field "totp" for ' . static::class . '.');
        }
        if (!array_key_exists('email', $data)) {
            throw new \InvalidArgumentException('Missing required field "email" for ' . static::class . '.');
        }
        if (!array_key_exists('phone', $data)) {
            throw new \InvalidArgumentException('Missing required field "phone" for ' . static::class . '.');
        }
        if (!array_key_exists('custom', $data)) {
            throw new \InvalidArgumentException('Missing required field "custom" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            totp: $data['totp'],
            email: $data['email'],
            phone: $data['phone'],
            custom: $data['custom']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            'totp' => static::serializeValue($this->totp),
            'email' => static::serializeValue($this->email),
            'phone' => static::serializeValue($this->phone),
            'custom' => static::serializeValue($this->custom)
        ];
    }
}
