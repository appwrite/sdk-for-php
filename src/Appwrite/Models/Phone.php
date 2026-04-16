<?php

namespace Appwrite\Models;

/**
 * Phone
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
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException('Missing required field "code" for ' . static::class . '.');
        }
        if (!array_key_exists('countryCode', $data)) {
            throw new \InvalidArgumentException('Missing required field "countryCode" for ' . static::class . '.');
        }
        if (!array_key_exists('countryName', $data)) {
            throw new \InvalidArgumentException('Missing required field "countryName" for ' . static::class . '.');
        }

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
        $result = [
            'code' => static::serializeValue($this->code),
            'countryCode' => static::serializeValue($this->countryCode),
            'countryName' => static::serializeValue($this->countryName)
        ];

        return $result;
    }
}
