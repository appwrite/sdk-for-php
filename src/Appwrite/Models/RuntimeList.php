<?php

namespace Appwrite\Models;

/**
 * Runtimes List
 */
readonly class RuntimeList
{
    use ArraySerializable;

    /**
     * RuntimeList constructor.
     *
     * @param int $total total number of runtimes that matched your query.
     * @param list<Runtime> $runtimes list of runtimes.
     */
    public function __construct(
        public int $total,
        public array $runtimes
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
        if (!array_key_exists('runtimes', $data)) {
            throw new \InvalidArgumentException('Missing required field "runtimes" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            runtimes: is_array($data['runtimes'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Runtime::class, $item),
                    $data['runtimes']
                )
                : $data['runtimes']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'runtimes' => static::serializeValue($this->runtimes)
        ];

        return $result;
    }
}
