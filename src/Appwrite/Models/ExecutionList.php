<?php

namespace Appwrite\Models;

/**
 * Executions List
 */
readonly class ExecutionList
{
    use ArraySerializable;

    /**
     * ExecutionList constructor.
     *
     * @param int $total total number of executions that matched your query.
     * @param list<Execution> $executions list of executions.
     */
    public function __construct(
        public int $total,
        public array $executions
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
        if (!array_key_exists('executions', $data)) {
            throw new \InvalidArgumentException('Missing required field "executions" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            executions: is_array($data['executions'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Execution::class, $item),
                    $data['executions']
                )
                : $data['executions']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'executions' => static::serializeValue($this->executions)
        ];

        return $result;
    }
}
