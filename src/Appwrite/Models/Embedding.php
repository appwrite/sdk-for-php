<?php

namespace Appwrite\Models;

/**
 * Embedding
 */
readonly class Embedding
{
    use ArraySerializable;

    /**
     * Embedding constructor.
     *
     * @param string $model embedding model used to generate embeddings.
     * @param int $dimension number of dimensions for each embedding vector.
     * @param array $embedding embedding vector values. if an error occurs, this will be an empty array.
     * @param string $error error message if embedding generation fails. empty string if no error.
     */
    public function __construct(
        public string $model,
        public int $dimension,
        public array $embedding,
        public string $error
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('model', $data)) {
            throw new \InvalidArgumentException('Missing required field "model" for ' . static::class . '.');
        }
        if (!array_key_exists('dimension', $data)) {
            throw new \InvalidArgumentException('Missing required field "dimension" for ' . static::class . '.');
        }
        if (!array_key_exists('embedding', $data)) {
            throw new \InvalidArgumentException('Missing required field "embedding" for ' . static::class . '.');
        }
        if (!array_key_exists('error', $data)) {
            throw new \InvalidArgumentException('Missing required field "error" for ' . static::class . '.');
        }

        return new static(
            model: $data['model'],
            dimension: $data['dimension'],
            embedding: $data['embedding'],
            error: $data['error']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'model' => static::serializeValue($this->model),
            'dimension' => static::serializeValue($this->dimension),
            'embedding' => static::serializeValue($this->embedding),
            'error' => static::serializeValue($this->error)
        ];

        return $result;
    }
}
