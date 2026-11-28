<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class AnalyticsInterval implements JsonSerializable, Stringable
{
    private static AnalyticsInterval $ONEHOUR;
    private static AnalyticsInterval $ONEDAY;
    private static AnalyticsInterval $ONEWEEK;
    private static AnalyticsInterval $ONEMONTH;

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

    public static function ONEHOUR(): AnalyticsInterval
    {
        self::$ONEHOUR ??= new AnalyticsInterval('1h');

        return self::$ONEHOUR;
    }
    public static function ONEDAY(): AnalyticsInterval
    {
        self::$ONEDAY ??= new AnalyticsInterval('1d');

        return self::$ONEDAY;
    }
    public static function ONEWEEK(): AnalyticsInterval
    {
        self::$ONEWEEK ??= new AnalyticsInterval('1w');

        return self::$ONEWEEK;
    }
    public static function ONEMONTH(): AnalyticsInterval
    {
        self::$ONEMONTH ??= new AnalyticsInterval('1m');

        return self::$ONEMONTH;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            '1h' => self::ONEHOUR(),
            '1d' => self::ONEDAY(),
            '1w' => self::ONEWEEK(),
            '1m' => self::ONEMONTH(),
            default => throw new \InvalidArgumentException('Unknown AnalyticsInterval value: ' . $value),
        };
    }
}
