<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProjectSMTPSecure implements JsonSerializable, Stringable
{
    private static ProjectSMTPSecure $TLS;
    private static ProjectSMTPSecure $SSL;

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

    public static function TLS(): ProjectSMTPSecure
    {
        if (!isset(self::$TLS)) {
            self::$TLS = new ProjectSMTPSecure('tls');
        }
        return self::$TLS;
    }
    public static function SSL(): ProjectSMTPSecure
    {
        if (!isset(self::$SSL)) {
            self::$SSL = new ProjectSMTPSecure('ssl');
        }
        return self::$SSL;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'tls' => self::TLS(),
            'ssl' => self::SSL(),
            default => throw new \InvalidArgumentException('Unknown ProjectSMTPSecure value: ' . $value),
        };
    }
}
