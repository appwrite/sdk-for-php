<?php

namespace Appwrite\Enums;

use JsonSerializable;

class InvalidationType implements JsonSerializable
{
    private static InvalidationType $TAG;
    private static InvalidationType $PATH;
    private static InvalidationType $ALL;

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

    public static function TAG(): InvalidationType
    {
        if (!isset(self::$TAG)) {
            self::$TAG = new InvalidationType('tag');
        }
        return self::$TAG;
    }
    public static function PATH(): InvalidationType
    {
        if (!isset(self::$PATH)) {
            self::$PATH = new InvalidationType('path');
        }
        return self::$PATH;
    }
    public static function ALL(): InvalidationType
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new InvalidationType('all');
        }
        return self::$ALL;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'tag' => self::TAG(),
            'path' => self::PATH(),
            'all' => self::ALL(),
            default => throw new \InvalidArgumentException('Unknown InvalidationType value: ' . $value),
        };
    }
}
