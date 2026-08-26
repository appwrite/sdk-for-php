<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2 Organization
 *
 * @phpstan-consistent-constructor
 */
readonly class Oauth2Organization
{
    use ArraySerializable;

    /**
     * Oauth2Organization constructor.
     *
     * @param string $id organization id.
     */
    public function __construct(
        public string $id
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id)
        ];
    }
}
