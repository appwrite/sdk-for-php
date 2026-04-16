<?php

namespace Appwrite\Models;

/**
 * Frameworks List
 */
readonly class FrameworkList
{
    use ArraySerializable;

    /**
     * FrameworkList constructor.
     *
     * @param int $total total number of frameworks that matched your query.
     * @param list<Framework> $frameworks list of frameworks.
     */
    public function __construct(
        public int $total,
        public array $frameworks
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
        if (!array_key_exists('frameworks', $data)) {
            throw new \InvalidArgumentException('Missing required field "frameworks" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            frameworks: is_array($data['frameworks'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Framework::class, $item),
                    $data['frameworks']
                )
                : $data['frameworks']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'frameworks' => static::serializeValue($this->frameworks)
        ];

        return $result;
    }
}
