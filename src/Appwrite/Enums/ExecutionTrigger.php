<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ExecutionTrigger implements JsonSerializable
{
    private static ExecutionTrigger $HTTP;
    private static ExecutionTrigger $SCHEDULE;
    private static ExecutionTrigger $EVENT;

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

    public static function HTTP(): ExecutionTrigger
    {
        if (!isset(self::$HTTP)) {
            self::$HTTP = new ExecutionTrigger('http');
        }
        return self::$HTTP;
    }
    public static function SCHEDULE(): ExecutionTrigger
    {
        if (!isset(self::$SCHEDULE)) {
            self::$SCHEDULE = new ExecutionTrigger('schedule');
        }
        return self::$SCHEDULE;
    }
    public static function EVENT(): ExecutionTrigger
    {
        if (!isset(self::$EVENT)) {
            self::$EVENT = new ExecutionTrigger('event');
        }
        return self::$EVENT;
    }
}