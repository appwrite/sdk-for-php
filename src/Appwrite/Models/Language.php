<?php

namespace Appwrite\Models;

/**
 * Language
 */
readonly class Language
{
    use ArraySerializable;

    /**
     * Language constructor.
     *
     * @param string $name language name.
     * @param string $code language two-character iso 639-1 codes.
     * @param string $nativeName language native name.
     */
    public function __construct(
        public string $name,
        public string $code,
        public string $nativeName
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
        if (!array_key_exists('nativeName', $data)) {
            throw new \InvalidArgumentException('Missing required field "nativeName" for ' . static::class . '.');
        }

        return new static(
            name: $data['name'],
            code: $data['code'],
            nativeName: $data['nativeName']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'name' => static::serializeValue($this->name),
            'code' => static::serializeValue($this->code),
            'nativeName' => static::serializeValue($this->nativeName)
        ];

        return $result;
    }
}
