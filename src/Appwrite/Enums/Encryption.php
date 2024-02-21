<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Encryption implements JsonSerializable
{
    private static Encryption $NONE;
    private static Encryption $SSL;
    private static Encryption $TLS;

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

    public static function NONE(): Encryption
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new Encryption('none');
        }
        return self::$NONE;
    }
    public static function SSL(): Encryption
    {
        if (!isset(self::$SSL)) {
            self::$SSL = new Encryption('ssl');
        }
        return self::$SSL;
    }
    public static function TLS(): Encryption
    {
        if (!isset(self::$TLS)) {
            self::$TLS = new Encryption('tls');
        }
        return self::$TLS;
    }
}