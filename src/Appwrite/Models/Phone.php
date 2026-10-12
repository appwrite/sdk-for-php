<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Phone
 *
 * @phpstan-consistent-constructor
 */
readonly class Phone
{
    use ArraySerializable;

    /**
     * Phone constructor.
     *
     * @param string $code phone code.
     * @param string $countryCode country two-character iso 3166-1 alpha code.
     * @param string $countryName country name.
     */
    public function __construct(
        public string $code,
        public string $countryCode,
        public string $countryName
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'code' => "",
            'countryCode' => "",
            'countryName' => "",
        ];

        return new static(
            code: $data['code'],
            countryCode: $data['countryCode'],
            countryName: $data['countryName']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'code' => static::serializeValue($this->code),
            'countryCode' => static::serializeValue($this->countryCode),
            'countryName' => static::serializeValue($this->countryName)
        ];
    }
}
