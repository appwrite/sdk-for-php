<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class MonitorRecord implements JsonSerializable, Stringable
{
    private static MonitorRecord $A;
    private static MonitorRecord $AAAA;
    private static MonitorRecord $CNAME;
    private static MonitorRecord $MX;
    private static MonitorRecord $TXT;
    private static MonitorRecord $NS;

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

    public static function A(): MonitorRecord
    {
        self::$A ??= new MonitorRecord('A');

        return self::$A;
    }
    public static function AAAA(): MonitorRecord
    {
        self::$AAAA ??= new MonitorRecord('AAAA');

        return self::$AAAA;
    }
    public static function CNAME(): MonitorRecord
    {
        self::$CNAME ??= new MonitorRecord('CNAME');

        return self::$CNAME;
    }
    public static function MX(): MonitorRecord
    {
        self::$MX ??= new MonitorRecord('MX');

        return self::$MX;
    }
    public static function TXT(): MonitorRecord
    {
        self::$TXT ??= new MonitorRecord('TXT');

        return self::$TXT;
    }
    public static function NS(): MonitorRecord
    {
        self::$NS ??= new MonitorRecord('NS');

        return self::$NS;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'A' => self::A(),
            'AAAA' => self::AAAA(),
            'CNAME' => self::CNAME(),
            'MX' => self::MX(),
            'TXT' => self::TXT(),
            'NS' => self::NS(),
            default => throw new \InvalidArgumentException('Unknown MonitorRecord value: ' . $value),
        };
    }
}
