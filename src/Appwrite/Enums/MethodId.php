<?php

namespace Appwrite\Enums;

use JsonSerializable;

class MethodId implements JsonSerializable
{
    private static MethodId $EMAILPASSWORD;
    private static MethodId $MAGICURL;
    private static MethodId $EMAILOTP;
    private static MethodId $ANONYMOUS;
    private static MethodId $INVITES;
    private static MethodId $JWT;
    private static MethodId $PHONE;

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

    public static function EMAILPASSWORD(): MethodId
    {
        if (!isset(self::$EMAILPASSWORD)) {
            self::$EMAILPASSWORD = new MethodId('email-password');
        }
        return self::$EMAILPASSWORD;
    }
    public static function MAGICURL(): MethodId
    {
        if (!isset(self::$MAGICURL)) {
            self::$MAGICURL = new MethodId('magic-url');
        }
        return self::$MAGICURL;
    }
    public static function EMAILOTP(): MethodId
    {
        if (!isset(self::$EMAILOTP)) {
            self::$EMAILOTP = new MethodId('email-otp');
        }
        return self::$EMAILOTP;
    }
    public static function ANONYMOUS(): MethodId
    {
        if (!isset(self::$ANONYMOUS)) {
            self::$ANONYMOUS = new MethodId('anonymous');
        }
        return self::$ANONYMOUS;
    }
    public static function INVITES(): MethodId
    {
        if (!isset(self::$INVITES)) {
            self::$INVITES = new MethodId('invites');
        }
        return self::$INVITES;
    }
    public static function JWT(): MethodId
    {
        if (!isset(self::$JWT)) {
            self::$JWT = new MethodId('jwt');
        }
        return self::$JWT;
    }
    public static function PHONE(): MethodId
    {
        if (!isset(self::$PHONE)) {
            self::$PHONE = new MethodId('phone');
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
            default => throw new \InvalidArgumentException('Unknown MethodId value: ' . $value),
        };
    }
}
