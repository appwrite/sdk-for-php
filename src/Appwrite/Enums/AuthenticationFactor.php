<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class AuthenticationFactor implements JsonSerializable, Stringable
{
    private static AuthenticationFactor $EMAIL;
    private static AuthenticationFactor $PHONE;
    private static AuthenticationFactor $TOTP;
    private static AuthenticationFactor $RECOVERYCODE;
    private static AuthenticationFactor $CUSTOM;

    private function __construct(private readonly string $value)
    {
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
    public static function CUSTOM(): AuthenticationFactor
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new AuthenticationFactor('custom');
        }
        return self::$CUSTOM;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'email' => self::EMAIL(),
            'phone' => self::PHONE(),
            'totp' => self::TOTP(),
            'recoverycode' => self::RECOVERYCODE(),
            'custom' => self::CUSTOM(),
            default => throw new \InvalidArgumentException('Unknown AuthenticationFactor value: ' . $value),
        };
    }
}
