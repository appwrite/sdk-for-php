<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ExecutionStatus implements JsonSerializable, Stringable
{
    private static ExecutionStatus $WAITING;
    private static ExecutionStatus $PROCESSING;
    private static ExecutionStatus $COMPLETED;
    private static ExecutionStatus $FAILED;
    private static ExecutionStatus $SCHEDULED;

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

    public static function WAITING(): ExecutionStatus
    {
        self::$WAITING ??= new ExecutionStatus('waiting');

        return self::$WAITING;
    }
    public static function PROCESSING(): ExecutionStatus
    {
        self::$PROCESSING ??= new ExecutionStatus('processing');

        return self::$PROCESSING;
    }
    public static function COMPLETED(): ExecutionStatus
    {
        self::$COMPLETED ??= new ExecutionStatus('completed');

        return self::$COMPLETED;
    }
    public static function FAILED(): ExecutionStatus
    {
        self::$FAILED ??= new ExecutionStatus('failed');

        return self::$FAILED;
    }
    public static function SCHEDULED(): ExecutionStatus
    {
        self::$SCHEDULED ??= new ExecutionStatus('scheduled');

        return self::$SCHEDULED;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'waiting' => self::WAITING(),
            'processing' => self::PROCESSING(),
            'completed' => self::COMPLETED(),
            'failed' => self::FAILED(),
            'scheduled' => self::SCHEDULED(),
            default => throw new \InvalidArgumentException('Unknown ExecutionStatus value: ' . $value),
        };
    }
}
