<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Runtimes List
 *
 * @phpstan-consistent-constructor
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
        $data += [
            'total' => 0,
            'runtimes' => [],
        ];

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
        return [
            'total' => static::serializeValue($this->total),
            'runtimes' => static::serializeValue($this->runtimes)
        ];
    }
}
