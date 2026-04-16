<?php

namespace Appwrite\Models;

/**
 * Mock Number
 */
readonly class MockNumber
{
    use ArraySerializable;

    /**
     * MockNumber constructor.
     *
     * @param string $phone mock phone number for testing phone authentication. useful for testing phone authentication without sending an sms.
     * @param string $otp mock otp for the number. 
     */
    public function __construct(
        public string $phone,
        public string $otp
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('phone', $data)) {
            throw new \InvalidArgumentException('Missing required field "phone" for ' . static::class . '.');
        }
        if (!array_key_exists('otp', $data)) {
            throw new \InvalidArgumentException('Missing required field "otp" for ' . static::class . '.');
        }

        return new static(
            phone: $data['phone'],
            otp: $data['otp']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'phone' => static::serializeValue($this->phone),
            'otp' => static::serializeValue($this->otp)
        ];

        return $result;
    }
}
