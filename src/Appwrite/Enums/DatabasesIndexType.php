<?php

namespace Appwrite\Enums;

use JsonSerializable;

class DatabasesIndexType implements JsonSerializable
{
    private static DatabasesIndexType $KEY;
    private static DatabasesIndexType $FULLTEXT;
    private static DatabasesIndexType $UNIQUE;
    private static DatabasesIndexType $SPATIAL;

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

    public static function KEY(): DatabasesIndexType
    {
        if (!isset(self::$KEY)) {
            self::$KEY = new DatabasesIndexType('key');
        }
        return self::$KEY;
    }
    public static function FULLTEXT(): DatabasesIndexType
    {
        if (!isset(self::$FULLTEXT)) {
            self::$FULLTEXT = new DatabasesIndexType('fulltext');
        }
        return self::$FULLTEXT;
    }
    public static function UNIQUE(): DatabasesIndexType
    {
        if (!isset(self::$UNIQUE)) {
            self::$UNIQUE = new DatabasesIndexType('unique');
        }
        return self::$UNIQUE;
    }
    public static function SPATIAL(): DatabasesIndexType
    {
        if (!isset(self::$SPATIAL)) {
            self::$SPATIAL = new DatabasesIndexType('spatial');
        }
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
