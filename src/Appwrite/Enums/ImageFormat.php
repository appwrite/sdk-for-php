<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ImageFormat implements JsonSerializable
{
    private static ImageFormat $JPG;
    private static ImageFormat $JPEG;
    private static ImageFormat $GIF;
    private static ImageFormat $PNG;
    private static ImageFormat $WEBP;

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
    public static function GIF(): ImageFormat
    {
        if (!isset(self::$GIF)) {
            self::$GIF = new ImageFormat('gif');
        }
        return self::$GIF;
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
}