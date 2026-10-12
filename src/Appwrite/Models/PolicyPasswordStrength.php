<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Policy Password Strength
 *
 * @phpstan-consistent-constructor
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
        $data += [
            '$id' => "",
            'min' => 8,
            'uppercase' => false,
            'lowercase' => false,
            'number' => false,
            'symbols' => false,
        ];

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
        return [
            '$id' => static::serializeValue($this->id),
            'min' => static::serializeValue($this->min),
            'uppercase' => static::serializeValue($this->uppercase),
            'lowercase' => static::serializeValue($this->lowercase),
            'number' => static::serializeValue($this->number),
            'symbols' => static::serializeValue($this->symbols)
        ];
    }
}
