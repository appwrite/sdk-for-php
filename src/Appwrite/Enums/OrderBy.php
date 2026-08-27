<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class OrderBy implements JsonSerializable, Stringable
{
    private static OrderBy $ASC;
    private static OrderBy $DESC;

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

    public static function ASC(): OrderBy
    {
        self::$ASC ??= new OrderBy('asc');

        return self::$ASC;
    }
    public static function DESC(): OrderBy
    {
        self::$DESC ??= new OrderBy('desc');

        return self::$DESC;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'asc' => self::ASC(),
            'desc' => self::DESC(),
            default => throw new \InvalidArgumentException('Unknown OrderBy value: ' . $value),
        };
    }
}
