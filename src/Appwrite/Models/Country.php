<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Country
 *
 * @phpstan-consistent-constructor
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
        $data += [
            'name' => "",
            'code' => "",
        ];

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
        return [
            'name' => static::serializeValue($this->name),
            'code' => static::serializeValue($this->code)
        ];
    }
}
