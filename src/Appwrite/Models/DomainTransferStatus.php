<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\DomainTransferStatusEnum;

/**
 * domainTransferStatus
 *
 * @phpstan-consistent-constructor
 */
readonly class DomainTransferStatus
{
    use ArraySerializable;

    /**
     * DomainTransferStatus constructor.
     *
     * @param DomainTransferStatusEnum $status transfer status.
     * @param string $reason additional transfer status information.
     * @param string $timestamp transfer status timestamp in iso 8601 format.
     */
    public function __construct(
        public DomainTransferStatusEnum $status,
        public string $reason,
        public string $timestamp
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'status' => "pending_registry",
            'reason' => "",
            'timestamp' => "",
        ];

        return new static(
            status: static::hydrateTypedValue(DomainTransferStatusEnum::class, $data['status']),
            reason: $data['reason'],
            timestamp: $data['timestamp']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'status' => static::serializeValue($this->status),
            'reason' => static::serializeValue($this->reason),
            'timestamp' => static::serializeValue($this->timestamp)
        ];
    }
}
