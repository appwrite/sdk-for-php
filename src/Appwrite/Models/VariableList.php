<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Variables List
 *
 * @phpstan-consistent-constructor
 */
readonly class VariableList
{
    use ArraySerializable;

    /**
     * VariableList constructor.
     *
     * @param int $total total number of variables that matched your query.
     * @param list<Variable> $variables list of variables.
     */
    public function __construct(
        public int $total,
        public array $variables
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'variables' => [],
        ];

        return new static(
            total: $data['total'],
            variables: is_array($data['variables'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Variable::class, $item),
                    $data['variables']
                )
                : $data['variables']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'variables' => static::serializeValue($this->variables)
        ];
    }
}
