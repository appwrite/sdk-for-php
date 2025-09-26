<?php

namespace Appwrite\Enums;

use JsonSerializable;

class AttributeStatus implements JsonSerializable
{
    private static AttributeStatus $AVAILABLE;
    private static AttributeStatus $PROCESSING;
    private static AttributeStatus $DELETING;
    private static AttributeStatus $STUCK;
    private static AttributeStatus $FAILED;

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

    public static function AVAILABLE(): AttributeStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeStatus('failed');
        }
        return self::$FAILED;
    }
}