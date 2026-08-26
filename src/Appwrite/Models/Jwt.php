<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * JWT
 *
 * @phpstan-consistent-constructor
 */
readonly class Jwt
{
    use ArraySerializable;

    /**
     * Jwt constructor.
     *
     * @param string $jwt jwt encoded string.
     */
    public function __construct(
        public string $jwt
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('jwt', $data)) {
            throw new \InvalidArgumentException('Missing required field "jwt" for ' . static::class . '.');
        }

        return new static(
            jwt: $data['jwt']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'jwt' => static::serializeValue($this->jwt)
        ];
    }
}
