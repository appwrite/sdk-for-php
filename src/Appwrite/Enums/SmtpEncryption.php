<?php

namespace Appwrite\Enums;

use JsonSerializable;

class SmtpEncryption implements JsonSerializable
{
    private static SmtpEncryption $NONE;
    private static SmtpEncryption $SSL;
    private static SmtpEncryption $TLS;

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

    public static function NONE(): SmtpEncryption
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new SmtpEncryption('none');
        }
        return self::$NONE;
    }
    public static function SSL(): SmtpEncryption
    {
        if (!isset(self::$SSL)) {
            self::$SSL = new SmtpEncryption('ssl');
        }
        return self::$SSL;
    }
    public static function TLS(): SmtpEncryption
    {
        if (!isset(self::$TLS)) {
            self::$TLS = new SmtpEncryption('tls');
        }
        return self::$TLS;
    }
}