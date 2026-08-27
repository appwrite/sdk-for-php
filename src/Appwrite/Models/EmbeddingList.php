<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Embedding list
 *
 * @phpstan-consistent-constructor
 */
readonly class EmbeddingList
{
    use ArraySerializable;

    /**
     * EmbeddingList constructor.
     *
     * @param int $total total number of embeddings that matched your query.
     * @param list<Embedding> $embeddings list of embeddings.
     */
    public function __construct(
        public int $total,
        public array $embeddings
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
        if (!array_key_exists('embeddings', $data)) {
            throw new \InvalidArgumentException('Missing required field "embeddings" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            embeddings: is_array($data['embeddings'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Embedding::class, $item),
                    $data['embeddings']
                )
                : $data['embeddings']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'embeddings' => static::serializeValue($this->embeddings)
        ];
    }
}
