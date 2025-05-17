<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Adapter implements JsonSerializable
{
    private static Adapter $STATIC;
    private static Adapter $SSR;

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

    public static function STATIC(): Adapter
    {
        if (!isset(self::$STATIC)) {
            self::$STATIC = new Adapter('static');
        }
        return self::$STATIC;
    }
    public static function SSR(): Adapter
    {
        if (!isset(self::$SSR)) {
            self::$SSR = new Adapter('ssr');
        }
        return self::$SSR;
    }
}