<?php

namespace Appwrite\Models;

/**
 * Identities List
 */
readonly class IdentityList
{
    use ArraySerializable;

    /**
     * IdentityList constructor.
     *
     * @param int $total total number of identities that matched your query.
     * @param list<Identity> $identities list of identities.
     */
    public function __construct(
        public int $total,
        public array $identities
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
        if (!array_key_exists('identities', $data)) {
            throw new \InvalidArgumentException('Missing required field "identities" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            identities: is_array($data['identities'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Identity::class, $item),
                    $data['identities']
                )
                : $data['identities']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'identities' => static::serializeValue($this->identities)
        ];

        return $result;
    }
}
