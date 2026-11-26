<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Monitors List
 *
 * @phpstan-consistent-constructor
 */
readonly class MonitorList
{
    use ArraySerializable;

    /**
     * MonitorList constructor.
     *
     * @param int $total total number of monitors that matched your query.
     * @param list<Monitor> $monitors list of monitors.
     */
    public function __construct(
        public int $total,
        public array $monitors
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'monitors' => [],
        ];

        return new static(
            total: $data['total'],
            monitors: is_array($data['monitors'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Monitor::class, $item),
                    $data['monitors']
                )
                : $data['monitors']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'monitors' => static::serializeValue($this->monitors)
        ];
    }
}
