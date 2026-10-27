<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class SupabaseMigrationResource implements JsonSerializable, Stringable
{
    private static SupabaseMigrationResource $USER;
    private static SupabaseMigrationResource $DATABASE;
    private static SupabaseMigrationResource $TABLE;
    private static SupabaseMigrationResource $COLUMN;
    private static SupabaseMigrationResource $INDEX;
    private static SupabaseMigrationResource $ROW;
    private static SupabaseMigrationResource $DOCUMENT;
    private static SupabaseMigrationResource $ATTRIBUTE;
    private static SupabaseMigrationResource $COLLECTION;
    private static SupabaseMigrationResource $BUCKET;
    private static SupabaseMigrationResource $FILE;

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

    public static function USER(): SupabaseMigrationResource
    {
        self::$USER ??= new SupabaseMigrationResource('user');

        return self::$USER;
    }
    public static function DATABASE(): SupabaseMigrationResource
    {
        self::$DATABASE ??= new SupabaseMigrationResource('database');

        return self::$DATABASE;
    }
    public static function TABLE(): SupabaseMigrationResource
    {
        self::$TABLE ??= new SupabaseMigrationResource('table');

        return self::$TABLE;
    }
    public static function COLUMN(): SupabaseMigrationResource
    {
        self::$COLUMN ??= new SupabaseMigrationResource('column');

        return self::$COLUMN;
    }
    public static function INDEX(): SupabaseMigrationResource
    {
        self::$INDEX ??= new SupabaseMigrationResource('index');

        return self::$INDEX;
    }
    public static function ROW(): SupabaseMigrationResource
    {
        self::$ROW ??= new SupabaseMigrationResource('row');

        return self::$ROW;
    }
    public static function DOCUMENT(): SupabaseMigrationResource
    {
        self::$DOCUMENT ??= new SupabaseMigrationResource('document');

        return self::$DOCUMENT;
    }
    public static function ATTRIBUTE(): SupabaseMigrationResource
    {
        self::$ATTRIBUTE ??= new SupabaseMigrationResource('attribute');

        return self::$ATTRIBUTE;
    }
    public static function COLLECTION(): SupabaseMigrationResource
    {
        self::$COLLECTION ??= new SupabaseMigrationResource('collection');

        return self::$COLLECTION;
    }
    public static function BUCKET(): SupabaseMigrationResource
    {
        self::$BUCKET ??= new SupabaseMigrationResource('bucket');

        return self::$BUCKET;
    }
    public static function FILE(): SupabaseMigrationResource
    {
        self::$FILE ??= new SupabaseMigrationResource('file');

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
            default => throw new \InvalidArgumentException('Unknown SupabaseMigrationResource value: ' . $value),
        };
    }
}
