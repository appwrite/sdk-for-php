<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class TablesDBIndexType implements JsonSerializable, Stringable
{
    private static TablesDBIndexType $KEY;
    private static TablesDBIndexType $FULLTEXT;
    private static TablesDBIndexType $UNIQUE;
    private static TablesDBIndexType $SPATIAL;

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

    public static function KEY(): TablesDBIndexType
    {
        self::$KEY ??= new TablesDBIndexType('key');

        return self::$KEY;
    }
    public static function FULLTEXT(): TablesDBIndexType
    {
        self::$FULLTEXT ??= new TablesDBIndexType('fulltext');

        return self::$FULLTEXT;
    }
    public static function UNIQUE(): TablesDBIndexType
    {
        self::$UNIQUE ??= new TablesDBIndexType('unique');

        return self::$UNIQUE;
    }
    public static function SPATIAL(): TablesDBIndexType
    {
        self::$SPATIAL ??= new TablesDBIndexType('spatial');

        return self::$SPATIAL;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'key' => self::KEY(),
            'fulltext' => self::FULLTEXT(),
            'unique' => self::UNIQUE(),
            'spatial' => self::SPATIAL(),
            default => throw new \InvalidArgumentException('Unknown TablesDBIndexType value: ' . $value),
        };
    }
}
