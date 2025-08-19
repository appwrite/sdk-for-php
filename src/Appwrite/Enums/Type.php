<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Type implements JsonSerializable
{
    private static Type $TABLESDB;
    private static Type $LEGACY;

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

    public static function TABLESDB(): Type
    {
        if (!isset(self::$TABLESDB)) {
            self::$TABLESDB = new Type('tablesdb');
        }
        return self::$TABLESDB;
    }
    public static function LEGACY(): Type
    {
        if (!isset(self::$LEGACY)) {
            self::$LEGACY = new Type('legacy');
        }
        return self::$LEGACY;
    }
}