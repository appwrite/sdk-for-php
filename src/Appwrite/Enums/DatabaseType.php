<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class DatabaseType implements JsonSerializable, Stringable
{
    private static DatabaseType $LEGACY;
    private static DatabaseType $TABLESDB;
    private static DatabaseType $DOCUMENTSDB;
    private static DatabaseType $VECTORSDB;
    private static DatabaseType $MYSQL;
    private static DatabaseType $POSTGRESQL;
    private static DatabaseType $MONGODB;

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

    public static function LEGACY(): DatabaseType
    {
        self::$LEGACY ??= new DatabaseType('legacy');

        return self::$LEGACY;
    }
    public static function TABLESDB(): DatabaseType
    {
        self::$TABLESDB ??= new DatabaseType('tablesdb');

        return self::$TABLESDB;
    }
    public static function DOCUMENTSDB(): DatabaseType
    {
        self::$DOCUMENTSDB ??= new DatabaseType('documentsdb');

        return self::$DOCUMENTSDB;
    }
    public static function VECTORSDB(): DatabaseType
    {
        self::$VECTORSDB ??= new DatabaseType('vectorsdb');

        return self::$VECTORSDB;
    }
    public static function MYSQL(): DatabaseType
    {
        self::$MYSQL ??= new DatabaseType('mysql');

        return self::$MYSQL;
    }
    public static function POSTGRESQL(): DatabaseType
    {
        self::$POSTGRESQL ??= new DatabaseType('postgresql');

        return self::$POSTGRESQL;
    }
    public static function MONGODB(): DatabaseType
    {
        self::$MONGODB ??= new DatabaseType('mongodb');

        return self::$MONGODB;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'legacy' => self::LEGACY(),
            'tablesdb' => self::TABLESDB(),
            'documentsdb' => self::DOCUMENTSDB(),
            'vectorsdb' => self::VECTORSDB(),
            'mysql' => self::MYSQL(),
            'postgresql' => self::POSTGRESQL(),
            'mongodb' => self::MONGODB(),
            default => throw new \InvalidArgumentException('Unknown DatabaseType value: ' . $value),
        };
    }
}
