<?php

namespace Appwrite\Models;

/**
 * Buckets List
 */
readonly class BucketList
{
    use ArraySerializable;

    /**
     * BucketList constructor.
     *
     * @param int $total total number of buckets that matched your query.
     * @param list<Bucket> $buckets list of buckets.
     */
    public function __construct(
        public int $total,
        public array $buckets
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
        if (!array_key_exists('buckets', $data)) {
            throw new \InvalidArgumentException('Missing required field "buckets" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            buckets: is_array($data['buckets'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Bucket::class, $item),
                    $data['buckets']
                )
                : $data['buckets']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'buckets' => static::serializeValue($this->buckets)
        ];

        return $result;
    }
}
