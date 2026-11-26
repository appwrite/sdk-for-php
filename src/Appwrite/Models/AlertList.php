<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Alerts List
 *
 * @phpstan-consistent-constructor
 */
readonly class AlertList
{
    use ArraySerializable;

    /**
     * AlertList constructor.
     *
     * @param int $total total number of alerts that matched your query.
     * @param list<Alert> $alerts list of alerts.
     */
    public function __construct(
        public int $total,
        public array $alerts
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'alerts' => [],
        ];

        return new static(
            total: $data['total'],
            alerts: is_array($data['alerts'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Alert::class, $item),
                    $data['alerts']
                )
                : $data['alerts']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'alerts' => static::serializeValue($this->alerts)
        ];
    }
}
