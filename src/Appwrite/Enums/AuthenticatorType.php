<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class AuthenticatorType implements JsonSerializable, Stringable
{
    private static AuthenticatorType $TOTP;

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

    public static function TOTP(): AuthenticatorType
    {
        self::$TOTP ??= new AuthenticatorType('totp');

        return self::$TOTP;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'totp' => self::TOTP(),
            default => throw new \InvalidArgumentException('Unknown AuthenticatorType value: ' . $value),
        };
    }
}
