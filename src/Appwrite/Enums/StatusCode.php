<?php

namespace Appwrite\Enums;

use JsonSerializable;

class StatusCode implements JsonSerializable
{
    private static StatusCode $MOVEDPERMANENTLY301;
    private static StatusCode $FOUND302;
    private static StatusCode $TEMPORARYREDIRECT307;
    private static StatusCode $PERMANENTREDIRECT308;

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

    public static function MOVEDPERMANENTLY301(): StatusCode
    {
        if (!isset(self::$MOVEDPERMANENTLY301)) {
            self::$MOVEDPERMANENTLY301 = new StatusCode('301');
        }
        return self::$MOVEDPERMANENTLY301;
    }
    public static function FOUND302(): StatusCode
    {
        if (!isset(self::$FOUND302)) {
            self::$FOUND302 = new StatusCode('302');
        }
        return self::$FOUND302;
    }
    public static function TEMPORARYREDIRECT307(): StatusCode
    {
        if (!isset(self::$TEMPORARYREDIRECT307)) {
            self::$TEMPORARYREDIRECT307 = new StatusCode('307');
        }
        return self::$TEMPORARYREDIRECT307;
    }
    public static function PERMANENTREDIRECT308(): StatusCode
    {
        if (!isset(self::$PERMANENTREDIRECT308)) {
            self::$PERMANENTREDIRECT308 = new StatusCode('308');
        }
        return self::$PERMANENTREDIRECT308;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            '301' => self::MOVEDPERMANENTLY301(),
            '302' => self::FOUND302(),
            '307' => self::TEMPORARYREDIRECT307(),
            '308' => self::PERMANENTREDIRECT308(),
            default => throw new \InvalidArgumentException('Unknown StatusCode value: ' . $value),
        };
    }
}
