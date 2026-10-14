<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Specifications List
 *
 * @phpstan-consistent-constructor
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
        $data += [
            'total' => 0,
            'specifications' => [],
        ];

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
        return [
            'total' => static::serializeValue($this->total),
            'specifications' => static::serializeValue($this->specifications)
        ];
    }
}
