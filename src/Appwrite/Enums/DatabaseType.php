<?php

namespace Appwrite\Enums;

use JsonSerializable;

class DatabaseType implements JsonSerializable
{
    private static DatabaseType $LEGACY;
    private static DatabaseType $TABLESDB;
    private static DatabaseType $DOCUMENTSDB;
    private static DatabaseType $VECTORSDB;

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
    public static function DOCUMENTSDB(): DatabaseType
    {
        if (!isset(self::$DOCUMENTSDB)) {
            self::$DOCUMENTSDB = new DatabaseType('documentsdb');
        }
        return self::$DOCUMENTSDB;
    }
    public static function VECTORSDB(): DatabaseType
    {
        if (!isset(self::$VECTORSDB)) {
            self::$VECTORSDB = new DatabaseType('vectorsdb');
        }
        return self::$VECTORSDB;
    }
}