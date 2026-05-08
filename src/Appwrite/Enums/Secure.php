<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Secure implements JsonSerializable
{
    private static Secure $TLS;
    private static Secure $SSL;

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

    public static function TLS(): Secure
    {
        if (!isset(self::$TLS)) {
            self::$TLS = new Secure('tls');
        }
        return self::$TLS;
    }
    public static function SSL(): Secure
    {
        if (!isset(self::$SSL)) {
            self::$SSL = new Secure('ssl');
        }
        return self::$SSL;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'tls' => self::TLS(),
            'ssl' => self::SSL(),
            default => throw new \InvalidArgumentException('Unknown Secure value: ' . $value),
        };
    }
}
