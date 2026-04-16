<?php

namespace Appwrite\Models;

/**
 * LocaleCode
 */
readonly class LocaleCode
{
    use ArraySerializable;

    /**
     * LocaleCode constructor.
     *
     * @param string $code locale codes in [iso 639-1](https://en.wikipedia.org/wiki/list_of_iso_639-1_codes)
     * @param string $name locale name
     */
    public function __construct(
        public string $code,
        public string $name
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException('Missing required field "code" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }

        return new static(
            code: $data['code'],
            name: $data['name']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'code' => static::serializeValue($this->code),
            'name' => static::serializeValue($this->name)
        ];

        return $result;
    }
}
