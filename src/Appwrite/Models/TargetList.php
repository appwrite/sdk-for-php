<?php

namespace Appwrite\Models;

/**
 * Target list
 */
readonly class TargetList
{
    use ArraySerializable;

    /**
     * TargetList constructor.
     *
     * @param int $total total number of targets that matched your query.
     * @param list<Target> $targets list of targets.
     */
    public function __construct(
        public int $total,
        public array $targets
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
        if (!array_key_exists('targets', $data)) {
            throw new \InvalidArgumentException('Missing required field "targets" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            targets: is_array($data['targets'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Target::class, $item),
                    $data['targets']
                )
                : $data['targets']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'targets' => static::serializeValue($this->targets)
        ];

        return $result;
    }
}
