<?php

namespace Appwrite\Enums;

use JsonSerializable;

class IndexStatus implements JsonSerializable
{
    private static IndexStatus $AVAILABLE;
    private static IndexStatus $PROCESSING;
    private static IndexStatus $DELETING;
    private static IndexStatus $STUCK;
    private static IndexStatus $FAILED;

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

    public static function AVAILABLE(): IndexStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new IndexStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): IndexStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new IndexStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): IndexStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new IndexStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): IndexStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new IndexStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): IndexStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new IndexStatus('failed');
        }
        return self::$FAILED;
    }
}