<?php

namespace Appwrite\Models;

/**
 * Preferences
 */
readonly class Preferences
{
    use ArraySerializable;

    private const ADDITIONAL_PROPERTIES = true;

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
