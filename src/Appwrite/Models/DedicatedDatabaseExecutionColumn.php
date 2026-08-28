<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * ExecutionColumn
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseExecutionColumn
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseExecutionColumn constructor.
     *
     * @param string $name column name as returned by the database.
     * @param string $type engine-specific column type (e.g. int4, text, timestamptz).
     */
    public function __construct(
        public string $name,
        public string $type
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }

        return new static(
            name: $data['name'],
            type: $data['type']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'name' => static::serializeValue($this->name),
            'type' => static::serializeValue($this->type)
        ];
    }
}
