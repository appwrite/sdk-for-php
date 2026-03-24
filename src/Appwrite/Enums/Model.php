<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Model implements JsonSerializable
{
    private static Model $EMBEDDINGGEMMA;

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

    public static function EMBEDDINGGEMMA(): Model
    {
        if (!isset(self::$EMBEDDINGGEMMA)) {
            self::$EMBEDDINGGEMMA = new Model('embeddinggemma');
        }
        return self::$EMBEDDINGGEMMA;
    }
}