<?php

namespace Appwrite\Models;

/**
 * Country
 */
readonly class Country
{
    use ArraySerializable;

    /**
     * Country constructor.
     *
     * @param string $name country name.
     * @param string $code country two-character iso 3166-1 alpha code.
     */
    public function __construct(
        public string $name,
        public string $code
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException('Missing required field "code" for ' . static::class . '.');
        }

        return new static(
            name: $data['name'],
            code: $data['code']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'name' => static::serializeValue($this->name),
            'code' => static::serializeValue($this->code)
        ];

        return $result;
    }
}
