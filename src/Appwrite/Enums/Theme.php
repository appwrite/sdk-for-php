<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Theme implements JsonSerializable
{
    private static Theme $LIGHT;
    private static Theme $DARK;

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

    public static function LIGHT(): Theme
    {
        if (!isset(self::$LIGHT)) {
            self::$LIGHT = new Theme('light');
        }
        return self::$LIGHT;
    }
    public static function DARK(): Theme
    {
        if (!isset(self::$DARK)) {
            self::$DARK = new Theme('dark');
        }
        return self::$DARK;
    }
}