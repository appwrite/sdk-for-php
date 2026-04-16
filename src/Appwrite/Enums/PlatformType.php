<?php

namespace Appwrite\Enums;

use JsonSerializable;

class PlatformType implements JsonSerializable
{
    private static PlatformType $WINDOWS;
    private static PlatformType $APPLE;
    private static PlatformType $ANDROID;
    private static PlatformType $LINUX;
    private static PlatformType $WEB;

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

    public static function WINDOWS(): PlatformType
    {
        if (!isset(self::$WINDOWS)) {
            self::$WINDOWS = new PlatformType('windows');
        }
        return self::$WINDOWS;
    }
    public static function APPLE(): PlatformType
    {
        if (!isset(self::$APPLE)) {
            self::$APPLE = new PlatformType('apple');
        }
        return self::$APPLE;
    }
    public static function ANDROID(): PlatformType
    {
        if (!isset(self::$ANDROID)) {
            self::$ANDROID = new PlatformType('android');
        }
        return self::$ANDROID;
    }
    public static function LINUX(): PlatformType
    {
        if (!isset(self::$LINUX)) {
            self::$LINUX = new PlatformType('linux');
        }
        return self::$LINUX;
    }
    public static function WEB(): PlatformType
    {
        if (!isset(self::$WEB)) {
            self::$WEB = new PlatformType('web');
        }
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
