<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Output implements JsonSerializable
{
    private static Output $JPG;
    private static Output $JPEG;
    private static Output $PNG;
    private static Output $WEBP;
    private static Output $HEIC;
    private static Output $AVIF;
    private static Output $GIF;

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

    public static function JPG(): Output
    {
        if (!isset(self::$JPG)) {
            self::$JPG = new Output('jpg');
        }
        return self::$JPG;
    }
    public static function JPEG(): Output
    {
        if (!isset(self::$JPEG)) {
            self::$JPEG = new Output('jpeg');
        }
        return self::$JPEG;
    }
    public static function PNG(): Output
    {
        if (!isset(self::$PNG)) {
            self::$PNG = new Output('png');
        }
        return self::$PNG;
    }
    public static function WEBP(): Output
    {
        if (!isset(self::$WEBP)) {
            self::$WEBP = new Output('webp');
        }
        return self::$WEBP;
    }
    public static function HEIC(): Output
    {
        if (!isset(self::$HEIC)) {
            self::$HEIC = new Output('heic');
        }
        return self::$HEIC;
    }
    public static function AVIF(): Output
    {
        if (!isset(self::$AVIF)) {
            self::$AVIF = new Output('avif');
        }
        return self::$AVIF;
    }
    public static function GIF(): Output
    {
        if (!isset(self::$GIF)) {
            self::$GIF = new Output('gif');
        }
        return self::$GIF;
    }
}