<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\DomainTransferStatusEnum;

/**
 * Domain
 *
 * @phpstan-consistent-constructor
 */
readonly class Domain
{
    use ArraySerializable;

    /**
     * Domain constructor.
     *
     * @param string $id domain id.
     * @param string $createdAt domain creation time in iso 8601 format.
     * @param string $updatedAt domain update date in iso 8601 format.
     * @param string $domain domain name.
     * @param string $registrar domain registrar (e.g. "appwrite" or "third_party").
     * @param string $nameservers nameservers setting. "appwrite" or empty string.
     * @param string $expire domain expiry date in iso 8601 format.
     * @param string $renewal domain renewal date in iso 8601 format.
     * @param bool $autoRenewal if set to true, the domain will automatically renew.
     * @param int $renewalPrice renewal price (in cents).
     * @param string $teamId team id.
     * @param list<DnsRecord> $dnsRecords dns records
     * @param DomainTransferStatusEnum|null $transferStatus transfer status for domains being transferred in. null when the domain is not being transferred.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $domain,
        public string $registrar,
        public string $nameservers,
        public string $expire,
        public string $renewal,
        public bool $autoRenewal,
        public int $renewalPrice,
        public string $teamId,
        public array $dnsRecords,
        public ?DomainTransferStatusEnum $transferStatus = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            '$createdAt' => "",
            '$updatedAt' => "",
            'domain' => "",
            'registrar' => "",
            'nameservers' => "",
            'expire' => "",
            'renewal' => "",
            'autoRenewal' => false,
            'renewalPrice' => 0,
            'teamId' => "",
        ];

        if (!array_key_exists('dnsRecords', $data)) {
            throw new \InvalidArgumentException('Missing required field "dnsRecords" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            domain: $data['domain'],
            registrar: $data['registrar'],
            nameservers: $data['nameservers'],
            expire: $data['expire'],
            renewal: $data['renewal'],
            autoRenewal: $data['autoRenewal'],
            renewalPrice: $data['renewalPrice'],
            teamId: $data['teamId'],
            dnsRecords: is_array($data['dnsRecords'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DnsRecord::class, $item),
                    $data['dnsRecords']
                )
                : $data['dnsRecords'],
            transferStatus: array_key_exists('transferStatus', $data) ? static::hydrateTypedValue(DomainTransferStatusEnum::class, $data['transferStatus'], true) : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'domain' => static::serializeValue($this->domain),
            'registrar' => static::serializeValue($this->registrar),
            'nameservers' => static::serializeValue($this->nameservers),
            'expire' => static::serializeValue($this->expire),
            'renewal' => static::serializeValue($this->renewal),
            'autoRenewal' => static::serializeValue($this->autoRenewal),
            'renewalPrice' => static::serializeValue($this->renewalPrice),
            'transferStatus' => static::serializeValue($this->transferStatus),
            'teamId' => static::serializeValue($this->teamId),
            'dnsRecords' => static::serializeValue($this->dnsRecords)
        ];
    }
}
