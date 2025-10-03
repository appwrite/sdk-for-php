<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ExecutionStatus implements JsonSerializable
{
    private static ExecutionStatus $WAITING;
    private static ExecutionStatus $PROCESSING;
    private static ExecutionStatus $COMPLETED;
    private static ExecutionStatus $FAILED;

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

    public static function WAITING(): ExecutionStatus
    {
        if (!isset(self::$WAITING)) {
            self::$WAITING = new ExecutionStatus('waiting');
        }
        return self::$WAITING;
    }
    public static function PROCESSING(): ExecutionStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ExecutionStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function COMPLETED(): ExecutionStatus
    {
        if (!isset(self::$COMPLETED)) {
            self::$COMPLETED = new ExecutionStatus('completed');
        }
        return self::$COMPLETED;
    }
    public static function FAILED(): ExecutionStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ExecutionStatus('failed');
        }
        return self::$FAILED;
    }
}