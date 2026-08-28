<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class BackupServices implements JsonSerializable, Stringable
{
    private static BackupServices $DATABASES;
    private static BackupServices $TABLESDB;
    private static BackupServices $DOCUMENTSDB;
    private static BackupServices $VECTORSDB;
    private static BackupServices $DEDICATEDDATABASES;
    private static BackupServices $FUNCTIONS;
    private static BackupServices $STORAGE;

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

    public static function DATABASES(): BackupServices
    {
        self::$DATABASES ??= new BackupServices('databases');

        return self::$DATABASES;
    }
    public static function TABLESDB(): BackupServices
    {
        self::$TABLESDB ??= new BackupServices('tablesdb');

        return self::$TABLESDB;
    }
    public static function DOCUMENTSDB(): BackupServices
    {
        self::$DOCUMENTSDB ??= new BackupServices('documentsdb');

        return self::$DOCUMENTSDB;
    }
    public static function VECTORSDB(): BackupServices
    {
        self::$VECTORSDB ??= new BackupServices('vectorsdb');

        return self::$VECTORSDB;
    }
    public static function DEDICATEDDATABASES(): BackupServices
    {
        self::$DEDICATEDDATABASES ??= new BackupServices('dedicatedDatabases');

        return self::$DEDICATEDDATABASES;
    }
    public static function FUNCTIONS(): BackupServices
    {
        self::$FUNCTIONS ??= new BackupServices('functions');

        return self::$FUNCTIONS;
    }
    public static function STORAGE(): BackupServices
    {
        self::$STORAGE ??= new BackupServices('storage');

        return self::$STORAGE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'databases' => self::DATABASES(),
            'tablesdb' => self::TABLESDB(),
            'documentsdb' => self::DOCUMENTSDB(),
            'vectorsdb' => self::VECTORSDB(),
            'dedicatedDatabases' => self::DEDICATEDDATABASES(),
            'functions' => self::FUNCTIONS(),
            'storage' => self::STORAGE(),
            default => throw new \InvalidArgumentException('Unknown BackupServices value: ' . $value),
        };
    }
}
