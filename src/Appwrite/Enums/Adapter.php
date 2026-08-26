<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class Adapter implements JsonSerializable, Stringable
{
    private static Adapter $STATIC;
    private static Adapter $SSR;

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

    public static function STATIC(): Adapter
    {
        if (!isset(self::$STATIC)) {
            self::$STATIC = new Adapter('static');
        }
        return self::$STATIC;
    }
    public static function SSR(): Adapter
    {
        if (!isset(self::$SSR)) {
            self::$SSR = new Adapter('ssr');
        }
        return self::$SSR;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'static' => self::STATIC(),
            'ssr' => self::SSR(),
            default => throw new \InvalidArgumentException('Unknown Adapter value: ' . $value),
        };
    }
}
