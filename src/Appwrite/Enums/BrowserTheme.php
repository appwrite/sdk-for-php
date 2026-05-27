<?php

namespace Appwrite\Enums;

use JsonSerializable;

class BrowserTheme implements JsonSerializable
{
    private static BrowserTheme $LIGHT;
    private static BrowserTheme $DARK;

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

    public static function LIGHT(): BrowserTheme
    {
        if (!isset(self::$LIGHT)) {
            self::$LIGHT = new BrowserTheme('light');
        }
        return self::$LIGHT;
    }
    public static function DARK(): BrowserTheme
    {
        if (!isset(self::$DARK)) {
            self::$DARK = new BrowserTheme('dark');
        }
        return self::$DARK;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'light' => self::LIGHT(),
            'dark' => self::DARK(),
            default => throw new \InvalidArgumentException('Unknown BrowserTheme value: ' . $value),
        };
    }
}
