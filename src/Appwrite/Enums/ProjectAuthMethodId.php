<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProjectAuthMethodId implements JsonSerializable
{
    private static ProjectAuthMethodId $EMAILPASSWORD;
    private static ProjectAuthMethodId $MAGICURL;
    private static ProjectAuthMethodId $EMAILOTP;
    private static ProjectAuthMethodId $ANONYMOUS;
    private static ProjectAuthMethodId $INVITES;
    private static ProjectAuthMethodId $JWT;
    private static ProjectAuthMethodId $PHONE;

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

    public static function EMAILPASSWORD(): ProjectAuthMethodId
    {
        if (!isset(self::$EMAILPASSWORD)) {
            self::$EMAILPASSWORD = new ProjectAuthMethodId('email-password');
        }
        return self::$EMAILPASSWORD;
    }
    public static function MAGICURL(): ProjectAuthMethodId
    {
        if (!isset(self::$MAGICURL)) {
            self::$MAGICURL = new ProjectAuthMethodId('magic-url');
        }
        return self::$MAGICURL;
    }
    public static function EMAILOTP(): ProjectAuthMethodId
    {
        if (!isset(self::$EMAILOTP)) {
            self::$EMAILOTP = new ProjectAuthMethodId('email-otp');
        }
        return self::$EMAILOTP;
    }
    public static function ANONYMOUS(): ProjectAuthMethodId
    {
        if (!isset(self::$ANONYMOUS)) {
            self::$ANONYMOUS = new ProjectAuthMethodId('anonymous');
        }
        return self::$ANONYMOUS;
    }
    public static function INVITES(): ProjectAuthMethodId
    {
        if (!isset(self::$INVITES)) {
            self::$INVITES = new ProjectAuthMethodId('invites');
        }
        return self::$INVITES;
    }
    public static function JWT(): ProjectAuthMethodId
    {
        if (!isset(self::$JWT)) {
            self::$JWT = new ProjectAuthMethodId('jwt');
        }
        return self::$JWT;
    }
    public static function PHONE(): ProjectAuthMethodId
    {
        if (!isset(self::$PHONE)) {
            self::$PHONE = new ProjectAuthMethodId('phone');
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
            default => throw new \InvalidArgumentException('Unknown ProjectAuthMethodId value: ' . $value),
        };
    }
}
