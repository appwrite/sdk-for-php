<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * LocaleCode
 *
 * @phpstan-consistent-constructor
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
        $data += [
            'code' => "",
            'name' => "",
        ];

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
        return [
            'code' => static::serializeValue($this->code),
            'name' => static::serializeValue($this->name)
        ];
    }
}
