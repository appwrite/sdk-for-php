<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class AlertStatus implements JsonSerializable, Stringable
{
    private static AlertStatus $FIRING;
    private static AlertStatus $RESOLVED;

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

    public static function FIRING(): AlertStatus
    {
        self::$FIRING ??= new AlertStatus('firing');

        return self::$FIRING;
    }
    public static function RESOLVED(): AlertStatus
    {
        self::$RESOLVED ??= new AlertStatus('resolved');

        return self::$RESOLVED;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'firing' => self::FIRING(),
            'resolved' => self::RESOLVED(),
            default => throw new \InvalidArgumentException('Unknown AlertStatus value: ' . $value),
        };
    }
}
