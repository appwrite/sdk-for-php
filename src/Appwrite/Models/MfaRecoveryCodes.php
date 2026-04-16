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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('recoveryCodes', $data)) {
            throw new \InvalidArgumentException('Missing required field "recoveryCodes" for ' . static::class . '.');
        }

        return new static(
            recoveryCodes: $data['recoveryCodes']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'recoveryCodes' => static::serializeValue($this->recoveryCodes)
        ];

        return $result;
    }
}
