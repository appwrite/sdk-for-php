<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * App scopes list
 *
 * @phpstan-consistent-constructor
 */
readonly class AppScopeList
{
    use ArraySerializable;

    /**
     * AppScopeList constructor.
     *
     * @param int $total total number of scopes that matched your query.
     * @param list<AppScope> $scopes list of scopes.
     */
    public function __construct(
        public int $total,
        public array $scopes
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
        if (!array_key_exists('scopes', $data)) {
            throw new \InvalidArgumentException('Missing required field "scopes" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            scopes: is_array($data['scopes'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(AppScope::class, $item),
                    $data['scopes']
                )
                : $data['scopes']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'scopes' => static::serializeValue($this->scopes)
        ];
    }
}
