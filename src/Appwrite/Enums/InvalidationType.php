<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class InvalidationType implements JsonSerializable, Stringable
{
    private static InvalidationType $TAG;
    private static InvalidationType $PATH;
    private static InvalidationType $ALL;

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

    public static function TAG(): InvalidationType
    {
        self::$TAG ??= new InvalidationType('tag');

        return self::$TAG;
    }
    public static function PATH(): InvalidationType
    {
        self::$PATH ??= new InvalidationType('path');

        return self::$PATH;
    }
    public static function ALL(): InvalidationType
    {
        self::$ALL ??= new InvalidationType('all');

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
