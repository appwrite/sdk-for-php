<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class StatusCode implements JsonSerializable, Stringable
{
    private static StatusCode $MOVEDPERMANENTLY;
    private static StatusCode $FOUND;
    private static StatusCode $TEMPORARYREDIRECT;
    private static StatusCode $PERMANENTREDIRECT;

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

    public static function MOVEDPERMANENTLY(): StatusCode
    {
        if (!isset(self::$MOVEDPERMANENTLY)) {
            self::$MOVEDPERMANENTLY = new StatusCode('301');
        }
        return self::$MOVEDPERMANENTLY;
    }
    public static function FOUND(): StatusCode
    {
        if (!isset(self::$FOUND)) {
            self::$FOUND = new StatusCode('302');
        }
        return self::$FOUND;
    }
    public static function TEMPORARYREDIRECT(): StatusCode
    {
        if (!isset(self::$TEMPORARYREDIRECT)) {
            self::$TEMPORARYREDIRECT = new StatusCode('307');
        }
        return self::$TEMPORARYREDIRECT;
    }
    public static function PERMANENTREDIRECT(): StatusCode
    {
        if (!isset(self::$PERMANENTREDIRECT)) {
            self::$PERMANENTREDIRECT = new StatusCode('308');
        }
        return self::$PERMANENTREDIRECT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            '301' => self::MOVEDPERMANENTLY(),
            '302' => self::FOUND(),
            '307' => self::TEMPORARYREDIRECT(),
            '308' => self::PERMANENTREDIRECT(),
            default => throw new \InvalidArgumentException('Unknown StatusCode value: ' . $value),
        };
    }
}
