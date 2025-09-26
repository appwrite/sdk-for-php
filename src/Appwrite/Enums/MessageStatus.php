<?php

namespace Appwrite\Enums;

use JsonSerializable;

class MessageStatus implements JsonSerializable
{
    private static MessageStatus $DRAFT;
    private static MessageStatus $PROCESSING;
    private static MessageStatus $SCHEDULED;
    private static MessageStatus $SENT;
    private static MessageStatus $FAILED;

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

    public static function DRAFT(): MessageStatus
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new MessageStatus('draft');
        }
        return self::$DRAFT;
    }
    public static function PROCESSING(): MessageStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new MessageStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function SCHEDULED(): MessageStatus
    {
        if (!isset(self::$SCHEDULED)) {
            self::$SCHEDULED = new MessageStatus('scheduled');
        }
        return self::$SCHEDULED;
    }
    public static function SENT(): MessageStatus
    {
        if (!isset(self::$SENT)) {
            self::$SENT = new MessageStatus('sent');
        }
        return self::$SENT;
    }
    public static function FAILED(): MessageStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new MessageStatus('failed');
        }
        return self::$FAILED;
    }
}