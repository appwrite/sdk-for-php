<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Functions List
 *
 * @phpstan-consistent-constructor
 */
readonly class FunctionList
{
    use ArraySerializable;

    /**
     * FunctionList constructor.
     *
     * @param int $total total number of functions that matched your query.
     * @param list<FunctionModel> $functions list of functions.
     */
    public function __construct(
        public int $total,
        public array $functions
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'functions' => [],
        ];

        return new static(
            total: $data['total'],
            functions: is_array($data['functions'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(FunctionModel::class, $item),
                    $data['functions']
                )
                : $data['functions']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'functions' => static::serializeValue($this->functions)
        ];
    }
}
