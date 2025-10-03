<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ColumnStatus implements JsonSerializable
{
    private static ColumnStatus $AVAILABLE;
    private static ColumnStatus $PROCESSING;
    private static ColumnStatus $DELETING;
    private static ColumnStatus $STUCK;
    private static ColumnStatus $FAILED;

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

    public static function AVAILABLE(): ColumnStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnStatus('failed');
        }
        return self::$FAILED;
    }
}