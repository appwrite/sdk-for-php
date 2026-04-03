<?php

namespace Appwrite\Enums;

use JsonSerializable;

class TablesDBIndexType implements JsonSerializable
{
    private static TablesDBIndexType $KEY;
    private static TablesDBIndexType $FULLTEXT;
    private static TablesDBIndexType $UNIQUE;
    private static TablesDBIndexType $SPATIAL;

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

    public static function KEY(): TablesDBIndexType
    {
        if (!isset(self::$KEY)) {
            self::$KEY = new TablesDBIndexType('key');
        }
        return self::$KEY;
    }
    public static function FULLTEXT(): TablesDBIndexType
    {
        if (!isset(self::$FULLTEXT)) {
            self::$FULLTEXT = new TablesDBIndexType('fulltext');
        }
        return self::$FULLTEXT;
    }
    public static function UNIQUE(): TablesDBIndexType
    {
        if (!isset(self::$UNIQUE)) {
            self::$UNIQUE = new TablesDBIndexType('unique');
        }
        return self::$UNIQUE;
    }
    public static function SPATIAL(): TablesDBIndexType
    {
        if (!isset(self::$SPATIAL)) {
            self::$SPATIAL = new TablesDBIndexType('spatial');
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
            default => throw new \InvalidArgumentException('Unknown TablesDBIndexType value: ' . $value),
        };
    }
}
