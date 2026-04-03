<?php

namespace Appwrite\Enums;

use JsonSerializable;

class OrderBy implements JsonSerializable
{
    private static OrderBy $ASC;
    private static OrderBy $DESC;

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

    public static function ASC(): OrderBy
    {
        if (!isset(self::$ASC)) {
            self::$ASC = new OrderBy('asc');
        }
        return self::$ASC;
    }
    public static function DESC(): OrderBy
    {
        if (!isset(self::$DESC)) {
            self::$DESC = new OrderBy('desc');
        }
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
