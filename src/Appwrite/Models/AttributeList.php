<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Attributes List
 *
 * @phpstan-consistent-constructor
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
        $data += [
            'total' => 0,
            'attributes' => [],
        ];

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
        return [
            'total' => static::serializeValue($this->total),
            'attributes' => static::serializeValue($this->attributes)
        ];
    }
}
