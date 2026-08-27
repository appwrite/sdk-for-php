<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class MessagePriority implements JsonSerializable, Stringable
{
    private static MessagePriority $NORMAL;
    private static MessagePriority $HIGH;

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

    public static function NORMAL(): MessagePriority
    {
        self::$NORMAL ??= new MessagePriority('normal');

        return self::$NORMAL;
    }
    public static function HIGH(): MessagePriority
    {
        self::$HIGH ??= new MessagePriority('high');

        return self::$HIGH;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'normal' => self::NORMAL(),
            'high' => self::HIGH(),
            default => throw new \InvalidArgumentException('Unknown MessagePriority value: ' . $value),
        };
    }
}
