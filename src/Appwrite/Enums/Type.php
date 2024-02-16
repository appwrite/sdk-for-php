<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Type implements JsonSerializable
{
    private static Type $TOTP;

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

    public static function TOTP(): Type
    {
        if (!isset(self::$TOTP)) {
            self::$TOTP = new Type('totp');
        }
        return self::$TOTP;
    }
}