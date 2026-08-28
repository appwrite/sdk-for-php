<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ImageGravity implements JsonSerializable, Stringable
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

    private function __construct(private readonly string $value)
    {
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
        self::$CENTER ??= new ImageGravity('center');

        return self::$CENTER;
    }
    public static function TOPLEFT(): ImageGravity
    {
        self::$TOPLEFT ??= new ImageGravity('top-left');

        return self::$TOPLEFT;
    }
    public static function TOP(): ImageGravity
    {
        self::$TOP ??= new ImageGravity('top');

        return self::$TOP;
    }
    public static function TOPRIGHT(): ImageGravity
    {
        self::$TOPRIGHT ??= new ImageGravity('top-right');

        return self::$TOPRIGHT;
    }
    public static function LEFT(): ImageGravity
    {
        self::$LEFT ??= new ImageGravity('left');

        return self::$LEFT;
    }
    public static function RIGHT(): ImageGravity
    {
        self::$RIGHT ??= new ImageGravity('right');

        return self::$RIGHT;
    }
    public static function BOTTOMLEFT(): ImageGravity
    {
        self::$BOTTOMLEFT ??= new ImageGravity('bottom-left');

        return self::$BOTTOMLEFT;
    }
    public static function BOTTOM(): ImageGravity
    {
        self::$BOTTOM ??= new ImageGravity('bottom');

        return self::$BOTTOM;
    }
    public static function BOTTOMRIGHT(): ImageGravity
    {
        self::$BOTTOMRIGHT ??= new ImageGravity('bottom-right');

        return self::$BOTTOMRIGHT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'center' => self::CENTER(),
            'top-left' => self::TOPLEFT(),
            'top' => self::TOP(),
            'top-right' => self::TOPRIGHT(),
            'left' => self::LEFT(),
            'right' => self::RIGHT(),
            'bottom-left' => self::BOTTOMLEFT(),
            'bottom' => self::BOTTOM(),
            'bottom-right' => self::BOTTOMRIGHT(),
            default => throw new \InvalidArgumentException('Unknown ImageGravity value: ' . $value),
        };
    }
}
