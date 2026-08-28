<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ExecutionTrigger implements JsonSerializable, Stringable
{
    private static ExecutionTrigger $HTTP;
    private static ExecutionTrigger $SCHEDULE;
    private static ExecutionTrigger $EVENT;

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

    public static function HTTP(): ExecutionTrigger
    {
        self::$HTTP ??= new ExecutionTrigger('http');

        return self::$HTTP;
    }
    public static function SCHEDULE(): ExecutionTrigger
    {
        self::$SCHEDULE ??= new ExecutionTrigger('schedule');

        return self::$SCHEDULE;
    }
    public static function EVENT(): ExecutionTrigger
    {
        self::$EVENT ??= new ExecutionTrigger('event');

        return self::$EVENT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'http' => self::HTTP(),
            'schedule' => self::SCHEDULE(),
            'event' => self::EVENT(),
            default => throw new \InvalidArgumentException('Unknown ExecutionTrigger value: ' . $value),
        };
    }
}
