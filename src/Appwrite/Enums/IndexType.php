<?php

namespace Appwrite\Enums;

use JsonSerializable;

class IndexType implements JsonSerializable
{
    private static IndexType $KEY;
    private static IndexType $FULLTEXT;
    private static IndexType $UNIQUE;

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

    public static function KEY(): IndexType
    {
        if (!isset(self::$KEY)) {
            self::$KEY = new IndexType('key');
        }
        return self::$KEY;
    }
    public static function FULLTEXT(): IndexType
    {
        if (!isset(self::$FULLTEXT)) {
            self::$FULLTEXT = new IndexType('fulltext');
        }
        return self::$FULLTEXT;
    }
    public static function UNIQUE(): IndexType
    {
        if (!isset(self::$UNIQUE)) {
            self::$UNIQUE = new IndexType('unique');
        }
        return self::$UNIQUE;
    }
}