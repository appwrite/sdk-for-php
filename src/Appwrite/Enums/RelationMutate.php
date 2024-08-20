<?php

namespace Appwrite\Enums;

use JsonSerializable;

class RelationMutate implements JsonSerializable
{
    private static RelationMutate $CASCADE;
    private static RelationMutate $RESTRICT;
    private static RelationMutate $SETNULL;

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

    public static function CASCADE(): RelationMutate
    {
        if (!isset(self::$CASCADE)) {
            self::$CASCADE = new RelationMutate('cascade');
        }
        return self::$CASCADE;
    }
    public static function RESTRICT(): RelationMutate
    {
        if (!isset(self::$RESTRICT)) {
            self::$RESTRICT = new RelationMutate('restrict');
        }
        return self::$RESTRICT;
    }
    public static function SETNULL(): RelationMutate
    {
        if (!isset(self::$SETNULL)) {
            self::$SETNULL = new RelationMutate('setNull');
        }
        return self::$SETNULL;
    }
}