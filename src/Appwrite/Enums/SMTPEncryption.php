<?php

namespace Appwrite\Enums;

use JsonSerializable;

class SMTPEncryption implements JsonSerializable
{
    private static SMTPEncryption $NONE;
    private static SMTPEncryption $SSL;
    private static SMTPEncryption $TLS;

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

    public static function NONE(): SMTPEncryption
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new SMTPEncryption('none');
        }
        return self::$NONE;
    }
    public static function SSL(): SMTPEncryption
    {
        if (!isset(self::$SSL)) {
            self::$SSL = new SMTPEncryption('ssl');
        }
        return self::$SSL;
    }
    public static function TLS(): SMTPEncryption
    {
        if (!isset(self::$TLS)) {
            self::$TLS = new SMTPEncryption('tls');
        }
        return self::$TLS;
    }
}