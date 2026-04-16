<?php

namespace Appwrite\Models;

/**
 * Functions List
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
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('functions', $data)) {
            throw new \InvalidArgumentException('Missing required field "functions" for ' . static::class . '.');
        }

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
        $result = [
            'total' => static::serializeValue($this->total),
            'functions' => static::serializeValue($this->functions)
        ];

        return $result;
    }
}
