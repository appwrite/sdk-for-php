<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * AlgoScryptModified
 *
 * @phpstan-consistent-constructor
 */
readonly class AlgoScryptModified
{
    use ArraySerializable;

    /**
     * AlgoScryptModified constructor.
     *
     * @param string $type algo type.
     * @param string $salt salt used to compute hash.
     * @param string $saltSeparator separator used to compute hash.
     * @param string $signerKey key used to compute hash.
     */
    public function __construct(
        public string $type,
        public string $salt,
        public string $saltSeparator,
        public string $signerKey
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'type' => "scryptMod",
            'salt' => "",
            'saltSeparator' => "",
            'signerKey' => "",
        ];

        return new static(
            type: $data['type'],
            salt: $data['salt'],
            saltSeparator: $data['saltSeparator'],
            signerKey: $data['signerKey']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'type' => static::serializeValue($this->type),
            'salt' => static::serializeValue($this->salt),
            'saltSeparator' => static::serializeValue($this->saltSeparator),
            'signerKey' => static::serializeValue($this->signerKey)
        ];
    }
}
