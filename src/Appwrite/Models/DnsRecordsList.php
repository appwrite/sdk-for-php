<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * DNS records list
 *
 * @phpstan-consistent-constructor
 */
readonly class DnsRecordsList
{
    use ArraySerializable;

    /**
     * DnsRecordsList constructor.
     *
     * @param int $total total number of dnsrecords that matched your query.
     * @param list<DnsRecord> $dnsRecords list of dnsrecords.
     */
    public function __construct(
        public int $total,
        public array $dnsRecords
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'dnsRecords' => [],
        ];

        return new static(
            total: $data['total'],
            dnsRecords: is_array($data['dnsRecords'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DnsRecord::class, $item),
                    $data['dnsRecords']
                )
                : $data['dnsRecords']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'dnsRecords' => static::serializeValue($this->dnsRecords)
        ];
    }
}
