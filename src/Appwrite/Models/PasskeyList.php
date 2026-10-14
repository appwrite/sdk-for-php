<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Passkeys List
 *
 * @phpstan-consistent-constructor
 */
readonly class PasskeyList
{
    use ArraySerializable;

    /**
     * PasskeyList constructor.
     *
     * @param int $total total number of passkeys that matched your query.
     * @param list<Passkey> $passkeys list of passkeys.
     */
    public function __construct(
        public int $total,
        public array $passkeys
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'passkeys' => [],
        ];

        return new static(
            total: $data['total'],
            passkeys: is_array($data['passkeys'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Passkey::class, $item),
                    $data['passkeys']
                )
                : $data['passkeys']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'passkeys' => static::serializeValue($this->passkeys)
        ];
    }
}
