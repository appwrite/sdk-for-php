<?php

namespace Appwrite\Models;

/**
 * Policy Password Strength
 */
readonly class PolicyPasswordStrength
{
    use ArraySerializable;

    /**
     * PolicyPasswordStrength constructor.
     *
     * @param string $id policy id.
     * @param int $min minimum password length required for user passwords.
     * @param bool $uppercase whether passwords must include at least one uppercase letter.
     * @param bool $lowercase whether passwords must include at least one lowercase letter.
     * @param bool $number whether passwords must include at least one number.
     * @param bool $symbols whether passwords must include at least one symbol.
     */
    public function __construct(
        public string $id,
        public int $min,
        public bool $uppercase,
        public bool $lowercase,
        public bool $number,
        public bool $symbols
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
        if (!array_key_exists('min', $data)) {
            throw new \InvalidArgumentException('Missing required field "min" for ' . static::class . '.');
        }
        if (!array_key_exists('uppercase', $data)) {
            throw new \InvalidArgumentException('Missing required field "uppercase" for ' . static::class . '.');
        }
        if (!array_key_exists('lowercase', $data)) {
            throw new \InvalidArgumentException('Missing required field "lowercase" for ' . static::class . '.');
        }
        if (!array_key_exists('number', $data)) {
            throw new \InvalidArgumentException('Missing required field "number" for ' . static::class . '.');
        }
        if (!array_key_exists('symbols', $data)) {
            throw new \InvalidArgumentException('Missing required field "symbols" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            min: $data['min'],
            uppercase: $data['uppercase'],
            lowercase: $data['lowercase'],
            number: $data['number'],
            symbols: $data['symbols']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            'min' => static::serializeValue($this->min),
            'uppercase' => static::serializeValue($this->uppercase),
            'lowercase' => static::serializeValue($this->lowercase),
            'number' => static::serializeValue($this->number),
            'symbols' => static::serializeValue($this->symbols)
        ];

        return $result;
    }
}
