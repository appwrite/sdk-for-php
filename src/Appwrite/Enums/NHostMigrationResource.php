<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class NHostMigrationResource implements JsonSerializable, Stringable
{
    private static NHostMigrationResource $USER;
    private static NHostMigrationResource $DATABASE;
    private static NHostMigrationResource $TABLE;
    private static NHostMigrationResource $COLUMN;
    private static NHostMigrationResource $INDEX;
    private static NHostMigrationResource $ROW;
    private static NHostMigrationResource $DOCUMENT;
    private static NHostMigrationResource $ATTRIBUTE;
    private static NHostMigrationResource $COLLECTION;
    private static NHostMigrationResource $BUCKET;
    private static NHostMigrationResource $FILE;

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

    public static function USER(): NHostMigrationResource
    {
        self::$USER ??= new NHostMigrationResource('user');

        return self::$USER;
    }
    public static function DATABASE(): NHostMigrationResource
    {
        self::$DATABASE ??= new NHostMigrationResource('database');

        return self::$DATABASE;
    }
    public static function TABLE(): NHostMigrationResource
    {
        self::$TABLE ??= new NHostMigrationResource('table');

        return self::$TABLE;
    }
    public static function COLUMN(): NHostMigrationResource
    {
        self::$COLUMN ??= new NHostMigrationResource('column');

        return self::$COLUMN;
    }
    public static function INDEX(): NHostMigrationResource
    {
        self::$INDEX ??= new NHostMigrationResource('index');

        return self::$INDEX;
    }
    public static function ROW(): NHostMigrationResource
    {
        self::$ROW ??= new NHostMigrationResource('row');

        return self::$ROW;
    }
    public static function DOCUMENT(): NHostMigrationResource
    {
        self::$DOCUMENT ??= new NHostMigrationResource('document');

        return self::$DOCUMENT;
    }
    public static function ATTRIBUTE(): NHostMigrationResource
    {
        self::$ATTRIBUTE ??= new NHostMigrationResource('attribute');

        return self::$ATTRIBUTE;
    }
    public static function COLLECTION(): NHostMigrationResource
    {
        self::$COLLECTION ??= new NHostMigrationResource('collection');

        return self::$COLLECTION;
    }
    public static function BUCKET(): NHostMigrationResource
    {
        self::$BUCKET ??= new NHostMigrationResource('bucket');

        return self::$BUCKET;
    }
    public static function FILE(): NHostMigrationResource
    {
        self::$FILE ??= new NHostMigrationResource('file');

        return self::$FILE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'user' => self::USER(),
            'database' => self::DATABASE(),
            'table' => self::TABLE(),
            'column' => self::COLUMN(),
            'index' => self::INDEX(),
            'row' => self::ROW(),
            'document' => self::DOCUMENT(),
            'attribute' => self::ATTRIBUTE(),
            'collection' => self::COLLECTION(),
            'bucket' => self::BUCKET(),
            'file' => self::FILE(),
            default => throw new \InvalidArgumentException('Unknown NHostMigrationResource value: ' . $value),
        };
    }
}
