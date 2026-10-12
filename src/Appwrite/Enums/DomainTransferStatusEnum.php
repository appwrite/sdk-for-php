<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class DomainTransferStatusEnum implements JsonSerializable, Stringable
{
    private static DomainTransferStatusEnum $TRANSFERRABLE;
    private static DomainTransferStatusEnum $NOTTRANSFERRABLE;
    private static DomainTransferStatusEnum $PENDINGOWNER;
    private static DomainTransferStatusEnum $PENDINGADMIN;
    private static DomainTransferStatusEnum $PENDINGREGISTRY;
    private static DomainTransferStatusEnum $COMPLETED;
    private static DomainTransferStatusEnum $CANCELLED;
    private static DomainTransferStatusEnum $SERVICEUNAVAILABLE;

    private function __construct(private readonly string $value)
    {
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public static function TRANSFERRABLE(): DomainTransferStatusEnum
    {
        self::$TRANSFERRABLE ??= new DomainTransferStatusEnum('transferrable');

        return self::$TRANSFERRABLE;
    }
    public static function NOTTRANSFERRABLE(): DomainTransferStatusEnum
    {
        self::$NOTTRANSFERRABLE ??= new DomainTransferStatusEnum('not_transferrable');

        return self::$NOTTRANSFERRABLE;
    }
    public static function PENDINGOWNER(): DomainTransferStatusEnum
    {
        self::$PENDINGOWNER ??= new DomainTransferStatusEnum('pending_owner');

        return self::$PENDINGOWNER;
    }
    public static function PENDINGADMIN(): DomainTransferStatusEnum
    {
        self::$PENDINGADMIN ??= new DomainTransferStatusEnum('pending_admin');

        return self::$PENDINGADMIN;
    }
    public static function PENDINGREGISTRY(): DomainTransferStatusEnum
    {
        self::$PENDINGREGISTRY ??= new DomainTransferStatusEnum('pending_registry');

        return self::$PENDINGREGISTRY;
    }
    public static function COMPLETED(): DomainTransferStatusEnum
    {
        self::$COMPLETED ??= new DomainTransferStatusEnum('completed');

        return self::$COMPLETED;
    }
    public static function CANCELLED(): DomainTransferStatusEnum
    {
        self::$CANCELLED ??= new DomainTransferStatusEnum('cancelled');

        return self::$CANCELLED;
    }
    public static function SERVICEUNAVAILABLE(): DomainTransferStatusEnum
    {
        self::$SERVICEUNAVAILABLE ??= new DomainTransferStatusEnum('service_unavailable');

        return self::$SERVICEUNAVAILABLE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'transferrable' => self::TRANSFERRABLE(),
            'not_transferrable' => self::NOTTRANSFERRABLE(),
            'pending_owner' => self::PENDINGOWNER(),
            'pending_admin' => self::PENDINGADMIN(),
            'pending_registry' => self::PENDINGREGISTRY(),
            'completed' => self::COMPLETED(),
            'cancelled' => self::CANCELLED(),
            'service_unavailable' => self::SERVICEUNAVAILABLE(),
            default => throw new \InvalidArgumentException('Unknown DomainTransferStatusEnum value: ' . $value),
        };
    }
}
