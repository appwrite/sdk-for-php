<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Language
 *
 * @phpstan-consistent-constructor
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
        $data += [
            'name' => "",
            'code' => "",
            'nativeName' => "",
        ];

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
        return [
            'name' => static::serializeValue($this->name),
            'code' => static::serializeValue($this->code),
            'nativeName' => static::serializeValue($this->nativeName)
        ];
    }
}
