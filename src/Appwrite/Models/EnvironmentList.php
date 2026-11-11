<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Environments list
 *
 * @phpstan-consistent-constructor
 */
readonly class EnvironmentList
{
    use ArraySerializable;

    /**
     * EnvironmentList constructor.
     *
     * @param int $total total number of environments that matched your query.
     * @param list<Environment> $environments list of environments.
     */
    public function __construct(
        public int $total,
        public array $environments
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'environments' => [],
        ];

        return new static(
            total: $data['total'],
            environments: is_array($data['environments'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Environment::class, $item),
                    $data['environments']
                )
                : $data['environments']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'environments' => static::serializeValue($this->environments)
        ];
    }
}
