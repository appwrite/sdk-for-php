<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Region implements JsonSerializable
{
    private static Region $FRA;
    private static Region $NYC;
    private static Region $SYD;
    private static Region $SFO;
    private static Region $SGP;
    private static Region $TOR;

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
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
        if (!isset(self::$FRA)) {
            self::$FRA = new Region('fra');
        }
        return self::$FRA;
    }
    public static function NYC(): Region
    {
        if (!isset(self::$NYC)) {
            self::$NYC = new Region('nyc');
        }
        return self::$NYC;
    }
    public static function SYD(): Region
    {
        if (!isset(self::$SYD)) {
            self::$SYD = new Region('syd');
        }
        return self::$SYD;
    }
    public static function SFO(): Region
    {
        if (!isset(self::$SFO)) {
            self::$SFO = new Region('sfo');
        }
        return self::$SFO;
    }
    public static function SGP(): Region
    {
        if (!isset(self::$SGP)) {
            self::$SGP = new Region('sgp');
        }
        return self::$SGP;
    }
    public static function TOR(): Region
    {
        if (!isset(self::$TOR)) {
            self::$TOR = new Region('tor');
        }
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
