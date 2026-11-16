<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProjectLDAPEncryption implements JsonSerializable, Stringable
{
    private static ProjectLDAPEncryption $NONE;
    private static ProjectLDAPEncryption $LDAPS;
    private static ProjectLDAPEncryption $STARTTLS;

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

    public static function NONE(): ProjectLDAPEncryption
    {
        self::$NONE ??= new ProjectLDAPEncryption('none');

        return self::$NONE;
    }
    public static function LDAPS(): ProjectLDAPEncryption
    {
        self::$LDAPS ??= new ProjectLDAPEncryption('ldaps');

        return self::$LDAPS;
    }
    public static function STARTTLS(): ProjectLDAPEncryption
    {
        self::$STARTTLS ??= new ProjectLDAPEncryption('starttls');

        return self::$STARTTLS;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'ldaps' => self::LDAPS(),
            'starttls' => self::STARTTLS(),
            default => throw new \InvalidArgumentException('Unknown ProjectLDAPEncryption value: ' . $value),
        };
    }
}
