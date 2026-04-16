<?php

namespace Appwrite\Models;

/**
 * Memberships List
 */
readonly class MembershipList
{
    use ArraySerializable;

    /**
     * MembershipList constructor.
     *
     * @param int $total total number of memberships that matched your query.
     * @param list<Membership> $memberships list of memberships.
     */
    public function __construct(
        public int $total,
        public array $memberships
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
        if (!array_key_exists('memberships', $data)) {
            throw new \InvalidArgumentException('Missing required field "memberships" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            memberships: is_array($data['memberships'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Membership::class, $item),
                    $data['memberships']
                )
                : $data['memberships']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'memberships' => static::serializeValue($this->memberships)
        ];

        return $result;
    }
}
