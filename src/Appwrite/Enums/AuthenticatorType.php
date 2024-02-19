<?php

namespace Appwrite\Enums;

use JsonSerializable;

class AuthenticatorType implements JsonSerializable
{
    private static AuthenticatorType $TOTP;

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

    public static function TOTP(): AuthenticatorType
    {
        if (!isset(self::$TOTP)) {
            self::$TOTP = new AuthenticatorType('totp');
        }
        return self::$TOTP;
    }
}