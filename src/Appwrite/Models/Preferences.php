<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Preferences
 *
 * @phpstan-consistent-constructor
 */
readonly class Preferences
{
    use ArraySerializable;

    /**
     * Preferences constructor.
     *
     * @param array<string, mixed> $data Additional properties.
     */
    public function __construct(
        public array $data = []
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {

        $additionalProperties = static::extractAdditionalPropertiesFromFields(
            $data,
            [
            ]
        );

        return new static(
            data: $additionalProperties
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
        ];

        foreach (static::serializeAdditionalProperties($this->data) as $field => $value) {
            $result[$field] = $value;
        }

        return $result;
    }
}
