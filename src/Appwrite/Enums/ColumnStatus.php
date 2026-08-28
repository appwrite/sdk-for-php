<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ColumnStatus implements JsonSerializable, Stringable
{
    private static ColumnStatus $AVAILABLE;
    private static ColumnStatus $PROCESSING;
    private static ColumnStatus $DELETING;
    private static ColumnStatus $STUCK;
    private static ColumnStatus $FAILED;

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

    public static function AVAILABLE(): ColumnStatus
    {
        self::$AVAILABLE ??= new ColumnStatus('available');

        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnStatus
    {
        self::$PROCESSING ??= new ColumnStatus('processing');

        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnStatus
    {
        self::$DELETING ??= new ColumnStatus('deleting');

        return self::$DELETING;
    }
    public static function STUCK(): ColumnStatus
    {
        self::$STUCK ??= new ColumnStatus('stuck');

        return self::$STUCK;
    }
    public static function FAILED(): ColumnStatus
    {
        self::$FAILED ??= new ColumnStatus('failed');

        return self::$FAILED;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'available' => self::AVAILABLE(),
            'processing' => self::PROCESSING(),
            'deleting' => self::DELETING(),
            'stuck' => self::STUCK(),
            'failed' => self::FAILED(),
            default => throw new \InvalidArgumentException('Unknown ColumnStatus value: ' . $value),
        };
    }
}
