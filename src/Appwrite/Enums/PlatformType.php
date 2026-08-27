<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class PlatformType implements JsonSerializable, Stringable
{
    private static PlatformType $WINDOWS;
    private static PlatformType $APPLE;
    private static PlatformType $ANDROID;
    private static PlatformType $LINUX;
    private static PlatformType $WEB;

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

    public static function WINDOWS(): PlatformType
    {
        self::$WINDOWS ??= new PlatformType('windows');

        return self::$WINDOWS;
    }
    public static function APPLE(): PlatformType
    {
        self::$APPLE ??= new PlatformType('apple');

        return self::$APPLE;
    }
    public static function ANDROID(): PlatformType
    {
        self::$ANDROID ??= new PlatformType('android');

        return self::$ANDROID;
    }
    public static function LINUX(): PlatformType
    {
        self::$LINUX ??= new PlatformType('linux');

        return self::$LINUX;
    }
    public static function WEB(): PlatformType
    {
        self::$WEB ??= new PlatformType('web');

        return self::$WEB;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'windows' => self::WINDOWS(),
            'apple' => self::APPLE(),
            'android' => self::ANDROID(),
            'linux' => self::LINUX(),
            'web' => self::WEB(),
            default => throw new \InvalidArgumentException('Unknown PlatformType value: ' . $value),
        };
    }
}
