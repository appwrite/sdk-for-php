<?php

namespace Appwrite\Models;

/**
 * Attributes List
 */
readonly class AttributeList
{
    use ArraySerializable;

    /**
     * AttributeList constructor.
     *
     * @param int $total total number of attributes in the given collection.
     * @param array $attributes list of attributes.
     */
    public function __construct(
        public int $total,
        public array $attributes
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('attributes', $data)) {
            throw new \InvalidArgumentException('Missing required field "attributes" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            attributes: $data['attributes']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'attributes' => static::serializeValue($this->attributes)
        ];

        return $result;
    }
}
