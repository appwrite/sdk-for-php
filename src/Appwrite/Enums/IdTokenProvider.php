<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class IdTokenProvider implements JsonSerializable, Stringable
{
    private static IdTokenProvider $APPLE;
    private static IdTokenProvider $GOOGLE;

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

    public static function APPLE(): IdTokenProvider
    {
        self::$APPLE ??= new IdTokenProvider('apple');

        return self::$APPLE;
    }
    public static function GOOGLE(): IdTokenProvider
    {
        self::$GOOGLE ??= new IdTokenProvider('google');

        return self::$GOOGLE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'apple' => self::APPLE(),
            'google' => self::GOOGLE(),
            default => throw new \InvalidArgumentException('Unknown IdTokenProvider value: ' . $value),
        };
    }
}
