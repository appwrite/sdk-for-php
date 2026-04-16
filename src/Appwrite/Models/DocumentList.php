<?php

namespace Appwrite\Models;

/**
 * Documents List
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
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('documents', $data)) {
            throw new \InvalidArgumentException('Missing required field "documents" for ' . static::class . '.');
        }

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
        $result = [
            'total' => static::serializeValue($this->total),
            'documents' => static::serializeValue($this->documents)
        ];

        return $result;
    }
}
