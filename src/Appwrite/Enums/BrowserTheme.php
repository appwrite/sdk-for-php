<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class BrowserTheme implements JsonSerializable, Stringable
{
    private static BrowserTheme $LIGHT;
    private static BrowserTheme $DARK;

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

    public static function LIGHT(): BrowserTheme
    {
        self::$LIGHT ??= new BrowserTheme('light');

        return self::$LIGHT;
    }
    public static function DARK(): BrowserTheme
    {
        self::$DARK ??= new BrowserTheme('dark');

        return self::$DARK;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'light' => self::LIGHT(),
            'dark' => self::DARK(),
            default => throw new \InvalidArgumentException('Unknown BrowserTheme value: ' . $value),
        };
    }
}
