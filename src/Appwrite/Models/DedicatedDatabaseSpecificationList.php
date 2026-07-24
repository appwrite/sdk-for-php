<?php

namespace Appwrite\Models;

/**
 * SpecificationList
 */
readonly class DedicatedDatabaseSpecificationList
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseSpecificationList constructor.
     *
     * @param list<DedicatedDatabaseSpecification> $specifications list of dedicated database specifications.
     * @param int $total total number of specifications.
     * @param DedicatedDatabaseSpecificationPricing $pricing overage and add-on pricing shared across all specifications.
     */
    public function __construct(
        public array $specifications,
        public int $total,
        public DedicatedDatabaseSpecificationPricing $pricing
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('specifications', $data)) {
            throw new \InvalidArgumentException('Missing required field "specifications" for ' . static::class . '.');
        }
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('pricing', $data)) {
            throw new \InvalidArgumentException('Missing required field "pricing" for ' . static::class . '.');
        }

        return new static(
            specifications: is_array($data['specifications'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DedicatedDatabaseSpecification::class, $item),
                    $data['specifications']
                )
                : $data['specifications'],
            total: $data['total'],
            pricing: static::hydrateTypedValue(DedicatedDatabaseSpecificationPricing::class, $data['pricing'])
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'specifications' => static::serializeValue($this->specifications),
            'total' => static::serializeValue($this->total),
            'pricing' => static::serializeValue($this->pricing)
        ];

        return $result;
    }
}
