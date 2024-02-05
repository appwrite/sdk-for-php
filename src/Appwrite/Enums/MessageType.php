<?php

namespace Appwrite\Enums;

use JsonSerializable;

class MessageType implements JsonSerializable
{
    private static MessageType $DRAFT;
    private static MessageType $CANCELLED;
    private static MessageType $PROCESSING;

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

    public static function DRAFT(): MessageType
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new MessageType('draft');
        }
        return self::$DRAFT;
    }
    public static function CANCELLED(): MessageType
    {
        if (!isset(self::$CANCELLED)) {
            self::$CANCELLED = new MessageType('cancelled');
        }
        return self::$CANCELLED;
    }
    public static function PROCESSING(): MessageType
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new MessageType('processing');
        }
        return self::$PROCESSING;
    }
}