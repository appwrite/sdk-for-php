<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Documents List
 *
 * @phpstan-consistent-constructor
 */
readonly class DocumentList
{
    use ArraySerializable;

    /**
     * DocumentList constructor.
     *
     * @param int $total total number of documents that matched your query.
     * @param list<Document> $documents list of documents.
     */
    public function __construct(
        public int $total,
        public array $documents
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'documents' => [],
        ];

        return new static(
            total: $data['total'],
            documents: is_array($data['documents'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Document::class, $item),
                    $data['documents']
                )
                : $data['documents']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'documents' => static::serializeValue($this->documents)
        ];
    }
}
