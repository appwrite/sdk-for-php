<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class Region implements JsonSerializable, Stringable
{
    private static Region $FRA;
    private static Region $NYC;
    private static Region $SYD;
    private static Region $SFO;
    private static Region $SGP;
    private static Region $TOR;

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

    public static function FRA(): Region
    {
        self::$FRA ??= new Region('fra');

        return self::$FRA;
    }
    public static function NYC(): Region
    {
        self::$NYC ??= new Region('nyc');

        return self::$NYC;
    }
    public static function SYD(): Region
    {
        self::$SYD ??= new Region('syd');

        return self::$SYD;
    }
    public static function SFO(): Region
    {
        self::$SFO ??= new Region('sfo');

        return self::$SFO;
    }
    public static function SGP(): Region
    {
        self::$SGP ??= new Region('sgp');

        return self::$SGP;
    }
    public static function TOR(): Region
    {
        self::$TOR ??= new Region('tor');

        return self::$TOR;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'fra' => self::FRA(),
            'nyc' => self::NYC(),
            'syd' => self::SYD(),
            'sfo' => self::SFO(),
            'sgp' => self::SGP(),
            'tor' => self::TOR(),
            default => throw new \InvalidArgumentException('Unknown Region value: ' . $value),
        };
    }
}
