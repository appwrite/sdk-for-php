<?php

namespace Appwrite\Models;

/**
 * AlgoScryptModified
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
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }
        if (!array_key_exists('salt', $data)) {
            throw new \InvalidArgumentException('Missing required field "salt" for ' . static::class . '.');
        }
        if (!array_key_exists('saltSeparator', $data)) {
            throw new \InvalidArgumentException('Missing required field "saltSeparator" for ' . static::class . '.');
        }
        if (!array_key_exists('signerKey', $data)) {
            throw new \InvalidArgumentException('Missing required field "signerKey" for ' . static::class . '.');
        }

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
        $result = [
            'type' => static::serializeValue($this->type),
            'salt' => static::serializeValue($this->salt),
            'saltSeparator' => static::serializeValue($this->saltSeparator),
            'signerKey' => static::serializeValue($this->signerKey)
        ];

        return $result;
    }
}
