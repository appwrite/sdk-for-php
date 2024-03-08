<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ImageGravity implements JsonSerializable
{
    private static ImageGravity $CENTER;
    private static ImageGravity $TOPLEFT;
    private static ImageGravity $TOP;
    private static ImageGravity $TOPRIGHT;
    private static ImageGravity $LEFT;
    private static ImageGravity $RIGHT;
    private static ImageGravity $BOTTOMLEFT;
    private static ImageGravity $BOTTOM;
    private static ImageGravity $BOTTOMRIGHT;

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

    public static function CENTER(): ImageGravity
    {
        if (!isset(self::$CENTER)) {
            self::$CENTER = new ImageGravity('center');
        }
        return self::$CENTER;
    }
    public static function TOPLEFT(): ImageGravity
    {
        if (!isset(self::$TOPLEFT)) {
            self::$TOPLEFT = new ImageGravity('top-left');
        }
        return self::$TOPLEFT;
    }
    public static function TOP(): ImageGravity
    {
        if (!isset(self::$TOP)) {
            self::$TOP = new ImageGravity('top');
        }
        return self::$TOP;
    }
    public static function TOPRIGHT(): ImageGravity
    {
        if (!isset(self::$TOPRIGHT)) {
            self::$TOPRIGHT = new ImageGravity('top-right');
        }
        return self::$TOPRIGHT;
    }
    public static function LEFT(): ImageGravity
    {
        if (!isset(self::$LEFT)) {
            self::$LEFT = new ImageGravity('left');
        }
        return self::$LEFT;
    }
    public static function RIGHT(): ImageGravity
    {
        if (!isset(self::$RIGHT)) {
            self::$RIGHT = new ImageGravity('right');
        }
        return self::$RIGHT;
    }
    public static function BOTTOMLEFT(): ImageGravity
    {
        if (!isset(self::$BOTTOMLEFT)) {
            self::$BOTTOMLEFT = new ImageGravity('bottom-left');
        }
        return self::$BOTTOMLEFT;
    }
    public static function BOTTOM(): ImageGravity
    {
        if (!isset(self::$BOTTOM)) {
            self::$BOTTOM = new ImageGravity('bottom');
        }
        return self::$BOTTOM;
    }
    public static function BOTTOMRIGHT(): ImageGravity
    {
        if (!isset(self::$BOTTOMRIGHT)) {
            self::$BOTTOMRIGHT = new ImageGravity('bottom-right');
        }
        return self::$BOTTOMRIGHT;
    }
}