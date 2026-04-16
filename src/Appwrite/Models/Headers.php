<?php

namespace Appwrite\Models;

/**
 * Headers
 */
readonly class Headers
{
    use ArraySerializable;

    /**
     * Headers constructor.
     *
     * @param string $name header name.
     * @param string $value header value.
     */
    public function __construct(
        public string $name,
        public string $value
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('value', $data)) {
            throw new \InvalidArgumentException('Missing required field "value" for ' . static::class . '.');
        }

        return new static(
            name: $data['name'],
            value: $data['value']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'name' => static::serializeValue($this->name),
            'value' => static::serializeValue($this->value)
        ];

        return $result;
    }
}
