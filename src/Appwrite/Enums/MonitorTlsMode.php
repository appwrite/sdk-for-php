<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class MonitorTlsMode implements JsonSerializable, Stringable
{
    private static MonitorTlsMode $NONE;
    private static MonitorTlsMode $STARTTLS;
    private static MonitorTlsMode $IMPLICIT;
    private static MonitorTlsMode $AUTO;

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

    public static function NONE(): MonitorTlsMode
    {
        self::$NONE ??= new MonitorTlsMode('none');

        return self::$NONE;
    }
    public static function STARTTLS(): MonitorTlsMode
    {
        self::$STARTTLS ??= new MonitorTlsMode('starttls');

        return self::$STARTTLS;
    }
    public static function IMPLICIT(): MonitorTlsMode
    {
        self::$IMPLICIT ??= new MonitorTlsMode('implicit');

        return self::$IMPLICIT;
    }
    public static function AUTO(): MonitorTlsMode
    {
        self::$AUTO ??= new MonitorTlsMode('auto');

        return self::$AUTO;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'starttls' => self::STARTTLS(),
            'implicit' => self::IMPLICIT(),
            'auto' => self::AUTO(),
            default => throw new \InvalidArgumentException('Unknown MonitorTlsMode value: ' . $value),
        };
    }
}
