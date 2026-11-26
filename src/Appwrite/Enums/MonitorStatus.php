<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class MonitorStatus implements JsonSerializable, Stringable
{
    private static MonitorStatus $OK;
    private static MonitorStatus $FIRING;

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

    public static function OK(): MonitorStatus
    {
        self::$OK ??= new MonitorStatus('ok');

        return self::$OK;
    }
    public static function FIRING(): MonitorStatus
    {
        self::$FIRING ??= new MonitorStatus('firing');

        return self::$FIRING;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'ok' => self::OK(),
            'firing' => self::FIRING(),
            default => throw new \InvalidArgumentException('Unknown MonitorStatus value: ' . $value),
        };
    }
}
