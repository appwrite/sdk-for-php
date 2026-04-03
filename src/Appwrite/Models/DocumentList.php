<?php

namespace Appwrite\Models;

/**
 * Documents List
 */
readonly class DocumentList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'documents' => Document::class
    ];

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
}
