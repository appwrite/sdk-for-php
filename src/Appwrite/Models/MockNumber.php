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
     * @param string $number mock phone number for testing phone authentication. useful for testing phone authentication without sending an sms.
     * @param string $otp mock otp for the number. 
     * @param string $createdAt attribute creation date in iso 8601 format.
     * @param string $updatedAt attribute update date in iso 8601 format.
     */
    public function __construct(
        public string $number,
        public string $otp,
        public string $createdAt,
        public string $updatedAt
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('number', $data)) {
            throw new \InvalidArgumentException('Missing required field "number" for ' . static::class . '.');
        }
        if (!array_key_exists('otp', $data)) {
            throw new \InvalidArgumentException('Missing required field "otp" for ' . static::class . '.');
        }
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }

        return new static(
            number: $data['number'],
            otp: $data['otp'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'number' => static::serializeValue($this->number),
            'otp' => static::serializeValue($this->otp),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt)
        ];

        return $result;
    }
}
