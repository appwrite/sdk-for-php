<?php

namespace Appwrite\Models;

/**
 * Specifications List
 */
readonly class SpecificationList
{
    use ArraySerializable;

    /**
     * SpecificationList constructor.
     *
     * @param int $total total number of specifications that matched your query.
     * @param list<Specification> $specifications list of specifications.
     */
    public function __construct(
        public int $total,
        public array $specifications
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
        if (!array_key_exists('specifications', $data)) {
            throw new \InvalidArgumentException('Missing required field "specifications" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            specifications: is_array($data['specifications'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Specification::class, $item),
                    $data['specifications']
                )
                : $data['specifications']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'specifications' => static::serializeValue($this->specifications)
        ];

        return $result;
    }
}
