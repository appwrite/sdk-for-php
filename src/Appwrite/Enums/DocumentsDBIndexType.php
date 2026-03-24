<?php

namespace Appwrite\Enums;

use JsonSerializable;

class DocumentsDBIndexType implements JsonSerializable
{
    private static DocumentsDBIndexType $KEY;
    private static DocumentsDBIndexType $FULLTEXT;
    private static DocumentsDBIndexType $UNIQUE;
    private static DocumentsDBIndexType $SPATIAL;

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

    public static function KEY(): DocumentsDBIndexType
    {
        if (!isset(self::$KEY)) {
            self::$KEY = new DocumentsDBIndexType('key');
        }
        return self::$KEY;
    }
    public static function FULLTEXT(): DocumentsDBIndexType
    {
        if (!isset(self::$FULLTEXT)) {
            self::$FULLTEXT = new DocumentsDBIndexType('fulltext');
        }
        return self::$FULLTEXT;
    }
    public static function UNIQUE(): DocumentsDBIndexType
    {
        if (!isset(self::$UNIQUE)) {
            self::$UNIQUE = new DocumentsDBIndexType('unique');
        }
        return self::$UNIQUE;
    }
    public static function SPATIAL(): DocumentsDBIndexType
    {
        if (!isset(self::$SPATIAL)) {
            self::$SPATIAL = new DocumentsDBIndexType('spatial');
        }
        return self::$SPATIAL;
    }
}