<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class AnalyticsPropertyType implements JsonSerializable, Stringable
{
    private static AnalyticsPropertyType $WEB;
    private static AnalyticsPropertyType $MOBILE;
    private static AnalyticsPropertyType $AGENT;

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

    public static function WEB(): AnalyticsPropertyType
    {
        self::$WEB ??= new AnalyticsPropertyType('web');

        return self::$WEB;
    }
    public static function MOBILE(): AnalyticsPropertyType
    {
        self::$MOBILE ??= new AnalyticsPropertyType('mobile');

        return self::$MOBILE;
    }
    public static function AGENT(): AnalyticsPropertyType
    {
        self::$AGENT ??= new AnalyticsPropertyType('agent');

        return self::$AGENT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'web' => self::WEB(),
            'mobile' => self::MOBILE(),
            'agent' => self::AGENT(),
            default => throw new \InvalidArgumentException('Unknown AnalyticsPropertyType value: ' . $value),
        };
    }
}
