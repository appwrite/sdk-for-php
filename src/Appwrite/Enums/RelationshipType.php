<?php

namespace Appwrite\Enums;

use JsonSerializable;

class RelationshipType implements JsonSerializable
{
    private static RelationshipType $ONE_TO_ONE;
    private static RelationshipType $MANY_TO_ONE;
    private static RelationshipType $MANY_TO_MANY;
    private static RelationshipType $ONE_TO_MANY;

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

    public static function ONE_TO_ONE(): RelationshipType
    {
        if (!isset(self::$ONE_TO_ONE)) {
            self::$ONE_TO_ONE = new RelationshipType('oneToOne');
        }
        return self::$ONE_TO_ONE;
    }
    public static function MANY_TO_ONE(): RelationshipType
    {
        if (!isset(self::$MANY_TO_ONE)) {
            self::$MANY_TO_ONE = new RelationshipType('manyToOne');
        }
        return self::$MANY_TO_ONE;
    }
    public static function MANY_TO_MANY(): RelationshipType
    {
        if (!isset(self::$MANY_TO_MANY)) {
            self::$MANY_TO_MANY = new RelationshipType('manyToMany');
        }
        return self::$MANY_TO_MANY;
    }
    public static function ONE_TO_MANY(): RelationshipType
    {
        if (!isset(self::$ONE_TO_MANY)) {
            self::$ONE_TO_MANY = new RelationshipType('oneToMany');
        }
        return self::$ONE_TO_MANY;
    }
}