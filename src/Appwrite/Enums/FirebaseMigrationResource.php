<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class FirebaseMigrationResource implements JsonSerializable, Stringable
{
    private static FirebaseMigrationResource $USER;
    private static FirebaseMigrationResource $DATABASE;
    private static FirebaseMigrationResource $TABLE;
    private static FirebaseMigrationResource $COLUMN;
    private static FirebaseMigrationResource $ROW;
    private static FirebaseMigrationResource $DOCUMENT;
    private static FirebaseMigrationResource $ATTRIBUTE;
    private static FirebaseMigrationResource $COLLECTION;
    private static FirebaseMigrationResource $BUCKET;
    private static FirebaseMigrationResource $FILE;

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

    public static function USER(): FirebaseMigrationResource
    {
        self::$USER ??= new FirebaseMigrationResource('user');

        return self::$USER;
    }
    public static function DATABASE(): FirebaseMigrationResource
    {
        self::$DATABASE ??= new FirebaseMigrationResource('database');

        return self::$DATABASE;
    }
    public static function TABLE(): FirebaseMigrationResource
    {
        self::$TABLE ??= new FirebaseMigrationResource('table');

        return self::$TABLE;
    }
    public static function COLUMN(): FirebaseMigrationResource
    {
        self::$COLUMN ??= new FirebaseMigrationResource('column');

        return self::$COLUMN;
    }
    public static function ROW(): FirebaseMigrationResource
    {
        self::$ROW ??= new FirebaseMigrationResource('row');

        return self::$ROW;
    }
    public static function DOCUMENT(): FirebaseMigrationResource
    {
        self::$DOCUMENT ??= new FirebaseMigrationResource('document');

        return self::$DOCUMENT;
    }
    public static function ATTRIBUTE(): FirebaseMigrationResource
    {
        self::$ATTRIBUTE ??= new FirebaseMigrationResource('attribute');

        return self::$ATTRIBUTE;
    }
    public static function COLLECTION(): FirebaseMigrationResource
    {
        self::$COLLECTION ??= new FirebaseMigrationResource('collection');

        return self::$COLLECTION;
    }
    public static function BUCKET(): FirebaseMigrationResource
    {
        self::$BUCKET ??= new FirebaseMigrationResource('bucket');

        return self::$BUCKET;
    }
    public static function FILE(): FirebaseMigrationResource
    {
        self::$FILE ??= new FirebaseMigrationResource('file');

        return self::$FILE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'user' => self::USER(),
            'database' => self::DATABASE(),
            'table' => self::TABLE(),
            'column' => self::COLUMN(),
            'row' => self::ROW(),
            'document' => self::DOCUMENT(),
            'attribute' => self::ATTRIBUTE(),
            'collection' => self::COLLECTION(),
            'bucket' => self::BUCKET(),
            'file' => self::FILE(),
            default => throw new \InvalidArgumentException('Unknown FirebaseMigrationResource value: ' . $value),
        };
    }
}
