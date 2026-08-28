<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class DatabasesIndexType implements JsonSerializable, Stringable
{
    private static DatabasesIndexType $KEY;
    private static DatabasesIndexType $FULLTEXT;
    private static DatabasesIndexType $UNIQUE;
    private static DatabasesIndexType $SPATIAL;

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

    public static function KEY(): DatabasesIndexType
    {
        self::$KEY ??= new DatabasesIndexType('key');

        return self::$KEY;
    }
    public static function FULLTEXT(): DatabasesIndexType
    {
        self::$FULLTEXT ??= new DatabasesIndexType('fulltext');

        return self::$FULLTEXT;
    }
    public static function UNIQUE(): DatabasesIndexType
    {
        self::$UNIQUE ??= new DatabasesIndexType('unique');

        return self::$UNIQUE;
    }
    public static function SPATIAL(): DatabasesIndexType
    {
        self::$SPATIAL ??= new DatabasesIndexType('spatial');

        return self::$SPATIAL;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'key' => self::KEY(),
            'fulltext' => self::FULLTEXT(),
            'unique' => self::UNIQUE(),
            'spatial' => self::SPATIAL(),
            default => throw new \InvalidArgumentException('Unknown DatabasesIndexType value: ' . $value),
        };
    }
}
