<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * SpecificationList
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseSpecificationList
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseSpecificationList constructor.
     *
     * @param list<DedicatedDatabaseSpecification> $specifications list of dedicated database specifications.
     * @param int $total total number of specifications.
     */
    public function __construct(
        public array $specifications,
        public int $total
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'specifications' => [],
            'total' => 0,
        ];

        return new static(
            specifications: is_array($data['specifications'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DedicatedDatabaseSpecification::class, $item),
                    $data['specifications']
                )
                : $data['specifications'],
            total: $data['total']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'specifications' => static::serializeValue($this->specifications),
            'total' => static::serializeValue($this->total)
        ];
    }
}
