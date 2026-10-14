<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class DomainRegistrationType implements JsonSerializable, Stringable
{
    private static DomainRegistrationType $NEW;
    private static DomainRegistrationType $TRANSFER;
    private static DomainRegistrationType $RENEWAL;
    private static DomainRegistrationType $TRADE;

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

    public static function NEW(): DomainRegistrationType
    {
        self::$NEW ??= new DomainRegistrationType('new');

        return self::$NEW;
    }
    public static function TRANSFER(): DomainRegistrationType
    {
        self::$TRANSFER ??= new DomainRegistrationType('transfer');

        return self::$TRANSFER;
    }
    public static function RENEWAL(): DomainRegistrationType
    {
        self::$RENEWAL ??= new DomainRegistrationType('renewal');

        return self::$RENEWAL;
    }
    public static function TRADE(): DomainRegistrationType
    {
        self::$TRADE ??= new DomainRegistrationType('trade');

        return self::$TRADE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'new' => self::NEW(),
            'transfer' => self::TRANSFER(),
            'renewal' => self::RENEWAL(),
            'trade' => self::TRADE(),
            default => throw new \InvalidArgumentException('Unknown DomainRegistrationType value: ' . $value),
        };
    }
}
