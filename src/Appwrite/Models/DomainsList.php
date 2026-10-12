<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Domains list
 *
 * @phpstan-consistent-constructor
 */
readonly class DomainsList
{
    use ArraySerializable;

    /**
     * DomainsList constructor.
     *
     * @param int $total total number of domains that matched your query.
     * @param list<Domain> $domains list of domains.
     */
    public function __construct(
        public int $total,
        public array $domains
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
        ];

        if (!array_key_exists('domains', $data)) {
            throw new \InvalidArgumentException('Missing required field "domains" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            domains: is_array($data['domains'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Domain::class, $item),
                    $data['domains']
                )
                : $data['domains']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'domains' => static::serializeValue($this->domains)
        ];
    }
}
