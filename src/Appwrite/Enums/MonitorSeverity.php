<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class MonitorSeverity implements JsonSerializable, Stringable
{
    private static MonitorSeverity $INFO;
    private static MonitorSeverity $WARNING;
    private static MonitorSeverity $ERROR;
    private static MonitorSeverity $CRITICAL;

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

    public static function INFO(): MonitorSeverity
    {
        self::$INFO ??= new MonitorSeverity('info');

        return self::$INFO;
    }
    public static function WARNING(): MonitorSeverity
    {
        self::$WARNING ??= new MonitorSeverity('warning');

        return self::$WARNING;
    }
    public static function ERROR(): MonitorSeverity
    {
        self::$ERROR ??= new MonitorSeverity('error');

        return self::$ERROR;
    }
    public static function CRITICAL(): MonitorSeverity
    {
        self::$CRITICAL ??= new MonitorSeverity('critical');

        return self::$CRITICAL;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'info' => self::INFO(),
            'warning' => self::WARNING(),
            'error' => self::ERROR(),
            'critical' => self::CRITICAL(),
            default => throw new \InvalidArgumentException('Unknown MonitorSeverity value: ' . $value),
        };
    }
}
