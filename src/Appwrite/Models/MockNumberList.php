<?php

namespace Appwrite\Models;

/**
 * Mock Numbers List
 */
readonly class MockNumberList
{
    use ArraySerializable;

    /**
     * MockNumberList constructor.
     *
     * @param int $total total number of mocknumbers that matched your query.
     * @param list<MockNumber> $mockNumbers list of mocknumbers.
     */
    public function __construct(
        public int $total,
        public array $mockNumbers
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
        if (!array_key_exists('mockNumbers', $data)) {
            throw new \InvalidArgumentException('Missing required field "mockNumbers" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            mockNumbers: is_array($data['mockNumbers'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(MockNumber::class, $item),
                    $data['mockNumbers']
                )
                : $data['mockNumbers']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'mockNumbers' => static::serializeValue($this->mockNumbers)
        ];

        return $result;
    }
}
