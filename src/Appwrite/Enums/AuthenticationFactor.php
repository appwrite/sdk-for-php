<?php

namespace Appwrite\Enums;

use JsonSerializable;

class AuthenticationFactor implements JsonSerializable
{
    private static AuthenticationFactor $EMAIL;
    private static AuthenticationFactor $PHONE;
    private static AuthenticationFactor $TOTP;
    private static AuthenticationFactor $RECOVERYCODE;

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

    public static function EMAIL(): AuthenticationFactor
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new AuthenticationFactor('email');
        }
        return self::$EMAIL;
    }
    public static function PHONE(): AuthenticationFactor
    {
        if (!isset(self::$PHONE)) {
            self::$PHONE = new AuthenticationFactor('phone');
        }
        return self::$PHONE;
    }
    public static function TOTP(): AuthenticationFactor
    {
        if (!isset(self::$TOTP)) {
            self::$TOTP = new AuthenticationFactor('totp');
        }
        return self::$TOTP;
    }
    public static function RECOVERYCODE(): AuthenticationFactor
    {
        if (!isset(self::$RECOVERYCODE)) {
            self::$RECOVERYCODE = new AuthenticationFactor('recoverycode');
        }
        return self::$RECOVERYCODE;
    }
}