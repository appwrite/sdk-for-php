<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Compression implements JsonSerializable
{
    private static Compression $NONE;
    private static Compression $GZIP;
    private static Compression $ZSTD;

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

    public static function NONE(): Compression
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new Compression('none');
        }
        return self::$NONE;
    }
    public static function GZIP(): Compression
    {
        if (!isset(self::$GZIP)) {
            self::$GZIP = new Compression('gzip');
        }
        return self::$GZIP;
    }
    public static function ZSTD(): Compression
    {
        if (!isset(self::$ZSTD)) {
            self::$ZSTD = new Compression('zstd');
        }
        return self::$ZSTD;
    }
}