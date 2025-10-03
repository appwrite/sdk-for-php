<?php

namespace Appwrite\Enums;

use JsonSerializable;

class DatabaseType implements JsonSerializable
{
    private static DatabaseType $LEGACY;
    private static DatabaseType $TABLESDB;

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

    public static function LEGACY(): DatabaseType
    {
        if (!isset(self::$LEGACY)) {
            self::$LEGACY = new DatabaseType('legacy');
        }
        return self::$LEGACY;
    }
    public static function TABLESDB(): DatabaseType
    {
        if (!isset(self::$TABLESDB)) {
            self::$TABLESDB = new DatabaseType('tablesdb');
        }
        return self::$TABLESDB;
    }
}