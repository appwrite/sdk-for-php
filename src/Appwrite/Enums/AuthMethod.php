<?php

namespace Appwrite\Enums;

use JsonSerializable;

class AuthMethod implements JsonSerializable
{
    private static AuthMethod $EMAILPASSWORD;
    private static AuthMethod $MAGICURL;
    private static AuthMethod $EMAILOTP;
    private static AuthMethod $ANONYMOUS;
    private static AuthMethod $INVITES;
    private static AuthMethod $JWT;
    private static AuthMethod $PHONE;

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

    public static function EMAILPASSWORD(): AuthMethod
    {
        if (!isset(self::$EMAILPASSWORD)) {
            self::$EMAILPASSWORD = new AuthMethod('email-password');
        }
        return self::$EMAILPASSWORD;
    }
    public static function MAGICURL(): AuthMethod
    {
        if (!isset(self::$MAGICURL)) {
            self::$MAGICURL = new AuthMethod('magic-url');
        }
        return self::$MAGICURL;
    }
    public static function EMAILOTP(): AuthMethod
    {
        if (!isset(self::$EMAILOTP)) {
            self::$EMAILOTP = new AuthMethod('email-otp');
        }
        return self::$EMAILOTP;
    }
    public static function ANONYMOUS(): AuthMethod
    {
        if (!isset(self::$ANONYMOUS)) {
            self::$ANONYMOUS = new AuthMethod('anonymous');
        }
        return self::$ANONYMOUS;
    }
    public static function INVITES(): AuthMethod
    {
        if (!isset(self::$INVITES)) {
            self::$INVITES = new AuthMethod('invites');
        }
        return self::$INVITES;
    }
    public static function JWT(): AuthMethod
    {
        if (!isset(self::$JWT)) {
            self::$JWT = new AuthMethod('jwt');
        }
        return self::$JWT;
    }
    public static function PHONE(): AuthMethod
    {
        if (!isset(self::$PHONE)) {
            self::$PHONE = new AuthMethod('phone');
        }
        return self::$PHONE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'email-password' => self::EMAILPASSWORD(),
            'magic-url' => self::MAGICURL(),
            'email-otp' => self::EMAILOTP(),
            'anonymous' => self::ANONYMOUS(),
            'invites' => self::INVITES(),
            'jwt' => self::JWT(),
            'phone' => self::PHONE(),
            default => throw new \InvalidArgumentException('Unknown AuthMethod value: ' . $value),
        };
    }
}
