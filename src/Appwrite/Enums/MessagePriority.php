<?php

namespace Appwrite\Enums;

use JsonSerializable;

class MessagePriority implements JsonSerializable
{
    private static MessagePriority $NORMAL;
    private static MessagePriority $HIGH;

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

    public static function NORMAL(): MessagePriority
    {
        if (!isset(self::$NORMAL)) {
            self::$NORMAL = new MessagePriority('normal');
        }
        return self::$NORMAL;
    }
    public static function HIGH(): MessagePriority
    {
        if (!isset(self::$HIGH)) {
            self::$HIGH = new MessagePriority('high');
        }
        return self::$HIGH;
    }
}