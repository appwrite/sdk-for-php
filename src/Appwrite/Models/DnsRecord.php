<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * DNSRecord
 *
 * @phpstan-consistent-constructor
 */
readonly class DnsRecord
{
    use ArraySerializable;

    /**
     * DnsRecord constructor.
     *
     * @param string $id dns record id.
     * @param string $createdAt dns record creation time in iso 8601 format.
     * @param string $updatedAt dns record update date in iso 8601 format.
     * @param string $type dns record type (e.g. a, cname, mx).
     * @param string $name record name relative to the domain, or `@` for the domain itself.
     * @param string $value value of the record (ip address, domain, etc.).
     * @param int $ttl time to live (in seconds).
     * @param int $priority record priority (commonly used for mx).
     * @param bool $lock whether this record is locked (read-only).
     * @param int $weight record weight (used for srv records).
     * @param int $port target port (used for srv records).
     * @param string $comment comment for the dns record.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $type,
        public string $name,
        public string $value,
        public int $ttl,
        public int $priority,
        public bool $lock,
        public int $weight,
        public int $port,
        public string $comment
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
            'type' => "",
            'name' => "",
            'value' => "",
            'ttl' => 3600,
            'priority' => 0,
            'lock' => false,
            'weight' => 0,
            'port' => 0,
            'comment' => "",
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            type: $data['type'],
            name: $data['name'],
            value: $data['value'],
            ttl: $data['ttl'],
            priority: $data['priority'],
            lock: $data['lock'],
            weight: $data['weight'],
            port: $data['port'],
            comment: $data['comment']
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
            'type' => static::serializeValue($this->type),
            'name' => static::serializeValue($this->name),
            'value' => static::serializeValue($this->value),
            'ttl' => static::serializeValue($this->ttl),
            'priority' => static::serializeValue($this->priority),
            'lock' => static::serializeValue($this->lock),
            'weight' => static::serializeValue($this->weight),
            'port' => static::serializeValue($this->port),
            'comment' => static::serializeValue($this->comment)
        ];
    }
}
