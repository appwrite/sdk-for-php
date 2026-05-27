<?php

namespace Appwrite\Enums;

use JsonSerializable;

class RedirectStatusCode implements JsonSerializable
{
    private static RedirectStatusCode $MOVEDPERMANENTLY;
    private static RedirectStatusCode $FOUND;
    private static RedirectStatusCode $TEMPORARYREDIRECT;
    private static RedirectStatusCode $PERMANENTREDIRECT;

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

    public static function MOVEDPERMANENTLY(): RedirectStatusCode
    {
        if (!isset(self::$MOVEDPERMANENTLY)) {
            self::$MOVEDPERMANENTLY = new RedirectStatusCode('301');
        }
        return self::$MOVEDPERMANENTLY;
    }
    public static function FOUND(): RedirectStatusCode
    {
        if (!isset(self::$FOUND)) {
            self::$FOUND = new RedirectStatusCode('302');
        }
        return self::$FOUND;
    }
    public static function TEMPORARYREDIRECT(): RedirectStatusCode
    {
        if (!isset(self::$TEMPORARYREDIRECT)) {
            self::$TEMPORARYREDIRECT = new RedirectStatusCode('307');
        }
        return self::$TEMPORARYREDIRECT;
    }
    public static function PERMANENTREDIRECT(): RedirectStatusCode
    {
        if (!isset(self::$PERMANENTREDIRECT)) {
            self::$PERMANENTREDIRECT = new RedirectStatusCode('308');
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
            default => throw new \InvalidArgumentException('Unknown RedirectStatusCode value: ' . $value),
        };
    }
}
