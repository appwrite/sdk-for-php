<?php

namespace Appwrite\Enums;

use JsonSerializable;

class SiteAdapter implements JsonSerializable
{
    private static SiteAdapter $STATIC;
    private static SiteAdapter $SSR;

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

    public static function STATIC(): SiteAdapter
    {
        if (!isset(self::$STATIC)) {
            self::$STATIC = new SiteAdapter('static');
        }
        return self::$STATIC;
    }
    public static function SSR(): SiteAdapter
    {
        if (!isset(self::$SSR)) {
            self::$SSR = new SiteAdapter('ssr');
        }
        return self::$SSR;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'static' => self::STATIC(),
            'ssr' => self::SSR(),
            default => throw new \InvalidArgumentException('Unknown SiteAdapter value: ' . $value),
        };
    }
}
