<?php

namespace Appwrite\Models;

/**
 * Variables List
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
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('variables', $data)) {
            throw new \InvalidArgumentException('Missing required field "variables" for ' . static::class . '.');
        }

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
        $result = [
            'total' => static::serializeValue($this->total),
            'variables' => static::serializeValue($this->variables)
        ];

        return $result;
    }
}
