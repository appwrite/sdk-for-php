<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Escalations List
 *
 * @phpstan-consistent-constructor
 */
readonly class EscalationList
{
    use ArraySerializable;

    /**
     * EscalationList constructor.
     *
     * @param int $total total number of escalations that matched your query.
     * @param list<Escalation> $escalations list of escalations.
     */
    public function __construct(
        public int $total,
        public array $escalations
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'escalations' => [],
        ];

        return new static(
            total: $data['total'],
            escalations: is_array($data['escalations'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Escalation::class, $item),
                    $data['escalations']
                )
                : $data['escalations']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'escalations' => static::serializeValue($this->escalations)
        ];
    }
}
