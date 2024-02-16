<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Factor implements JsonSerializable
{
    private static Factor $TOTP;
    private static Factor $PHONE;
    private static Factor $EMAIL;

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

    public static function TOTP(): Factor
    {
        if (!isset(self::$TOTP)) {
            self::$TOTP = new Factor('totp');
        }
        return self::$TOTP;
    }
    public static function PHONE(): Factor
    {
        if (!isset(self::$PHONE)) {
            self::$PHONE = new Factor('phone');
        }
        return self::$PHONE;
    }
    public static function EMAIL(): Factor
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new Factor('email');
        }
        return self::$EMAIL;
    }
}