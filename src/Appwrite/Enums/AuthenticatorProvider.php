<?php

namespace Appwrite\Enums;

use JsonSerializable;

class AuthenticatorProvider implements JsonSerializable
{
    private static AuthenticatorProvider $TOTP;

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

    public static function TOTP(): AuthenticatorProvider
    {
        if (!isset(self::$TOTP)) {
            self::$TOTP = new AuthenticatorProvider('totp');
        }
        return self::$TOTP;
    }
}