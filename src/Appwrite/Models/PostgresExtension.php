<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Postgres extension
 *
 * @phpstan-consistent-constructor
 */
readonly class PostgresExtension
{
    use ArraySerializable;

    /**
     * PostgresExtension constructor.
     *
     * @param string $key extension key used with create extension.
     * @param string $name human-readable extension name.
     * @param string $description short description of what the extension provides.
     * @param string $category category the extension belongs to.
     */
    public function __construct(
        public string $key,
        public string $name,
        public string $description,
        public string $category
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'key' => "",
            'name' => "",
            'description' => "",
            'category' => "",
        ];

        return new static(
            key: $data['key'],
            name: $data['name'],
            description: $data['description'],
            category: $data['category']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'key' => static::serializeValue($this->key),
            'name' => static::serializeValue($this->name),
            'description' => static::serializeValue($this->description),
            'category' => static::serializeValue($this->category)
        ];
    }
}
