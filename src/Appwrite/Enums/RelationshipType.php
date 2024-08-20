<?php

namespace Appwrite\Enums;

use JsonSerializable;

class RelationshipType implements JsonSerializable
{
    private static RelationshipType $ONETOONE;
    private static RelationshipType $MANYTOONE;
    private static RelationshipType $MANYTOMANY;
    private static RelationshipType $ONETOMANY;

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

    public static function ONETOONE(): RelationshipType
    {
        if (!isset(self::$ONETOONE)) {
            self::$ONETOONE = new RelationshipType('oneToOne');
        }
        return self::$ONETOONE;
    }
    public static function MANYTOONE(): RelationshipType
    {
        if (!isset(self::$MANYTOONE)) {
            self::$MANYTOONE = new RelationshipType('manyToOne');
        }
        return self::$MANYTOONE;
    }
    public static function MANYTOMANY(): RelationshipType
    {
        if (!isset(self::$MANYTOMANY)) {
            self::$MANYTOMANY = new RelationshipType('manyToMany');
        }
        return self::$MANYTOMANY;
    }
    public static function ONETOMANY(): RelationshipType
    {
        if (!isset(self::$ONETOMANY)) {
            self::$ONETOMANY = new RelationshipType('oneToMany');
        }
        return self::$ONETOMANY;
    }
}