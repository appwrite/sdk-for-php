<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class MonitorType implements JsonSerializable, Stringable
{
    private static MonitorType $USAGE;
    private static MonitorType $HTTP;
    private static MonitorType $DNS;
    private static MonitorType $TCP;
    private static MonitorType $SMTP;
    private static MonitorType $BUDGET;

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

    public static function USAGE(): MonitorType
    {
        self::$USAGE ??= new MonitorType('usage');

        return self::$USAGE;
    }
    public static function HTTP(): MonitorType
    {
        self::$HTTP ??= new MonitorType('http');

        return self::$HTTP;
    }
    public static function DNS(): MonitorType
    {
        self::$DNS ??= new MonitorType('dns');

        return self::$DNS;
    }
    public static function TCP(): MonitorType
    {
        self::$TCP ??= new MonitorType('tcp');

        return self::$TCP;
    }
    public static function SMTP(): MonitorType
    {
        self::$SMTP ??= new MonitorType('smtp');

        return self::$SMTP;
    }
    public static function BUDGET(): MonitorType
    {
        self::$BUDGET ??= new MonitorType('budget');

        return self::$BUDGET;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'usage' => self::USAGE(),
            'http' => self::HTTP(),
            'dns' => self::DNS(),
            'tcp' => self::TCP(),
            'smtp' => self::SMTP(),
            'budget' => self::BUDGET(),
            default => throw new \InvalidArgumentException('Unknown MonitorType value: ' . $value),
        };
    }
}
