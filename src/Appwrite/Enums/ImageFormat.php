<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ImageFormat implements JsonSerializable
{
    private static ImageFormat $JPG;
    private static ImageFormat $JPEG;
    private static ImageFormat $PNG;
    private static ImageFormat $WEBP;
    private static ImageFormat $HEIC;
    private static ImageFormat $AVIF;

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

    public static function JPG(): ImageFormat
    {
        if (!isset(self::$JPG)) {
            self::$JPG = new ImageFormat('jpg');
        }
        return self::$JPG;
    }
    public static function JPEG(): ImageFormat
    {
        if (!isset(self::$JPEG)) {
            self::$JPEG = new ImageFormat('jpeg');
        }
        return self::$JPEG;
    }
    public static function PNG(): ImageFormat
    {
        if (!isset(self::$PNG)) {
            self::$PNG = new ImageFormat('png');
        }
        return self::$PNG;
    }
    public static function WEBP(): ImageFormat
    {
        if (!isset(self::$WEBP)) {
            self::$WEBP = new ImageFormat('webp');
        }
        return self::$WEBP;
    }
    public static function HEIC(): ImageFormat
    {
        if (!isset(self::$HEIC)) {
            self::$HEIC = new ImageFormat('heic');
        }
        return self::$HEIC;
    }
    public static function AVIF(): ImageFormat
    {
        if (!isset(self::$AVIF)) {
            self::$AVIF = new ImageFormat('avif');
        }
        return self::$AVIF;
    }
}