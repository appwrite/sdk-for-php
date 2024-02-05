<?php

namespace Appwrite\Enums;

use JsonSerializable;

class AuthenticatorFactor implements JsonSerializable
{
    private static AuthenticatorFactor $TOTP;

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

    public static function TOTP(): AuthenticatorFactor
    {
        if (!isset(self::$TOTP)) {
            self::$TOTP = new AuthenticatorFactor('totp');
        }
        return self::$TOTP;
    }
}