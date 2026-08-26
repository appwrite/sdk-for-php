<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * AlgoSHA
 *
 * @phpstan-consistent-constructor
 */
readonly class AlgoSha
{
    use ArraySerializable;

    /**
     * AlgoSha constructor.
     *
     * @param string $type algo type.
     */
    public function __construct(
        public string $type
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }

        return new static(
            type: $data['type']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'type' => static::serializeValue($this->type)
        ];
    }
}
