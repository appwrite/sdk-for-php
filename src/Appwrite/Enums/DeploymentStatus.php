<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class DeploymentStatus implements JsonSerializable, Stringable
{
    private static DeploymentStatus $WAITING;
    private static DeploymentStatus $PROCESSING;
    private static DeploymentStatus $BUILDING;
    private static DeploymentStatus $READY;
    private static DeploymentStatus $CANCELED;
    private static DeploymentStatus $FAILED;

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

    public static function WAITING(): DeploymentStatus
    {
        self::$WAITING ??= new DeploymentStatus('waiting');

        return self::$WAITING;
    }
    public static function PROCESSING(): DeploymentStatus
    {
        self::$PROCESSING ??= new DeploymentStatus('processing');

        return self::$PROCESSING;
    }
    public static function BUILDING(): DeploymentStatus
    {
        self::$BUILDING ??= new DeploymentStatus('building');

        return self::$BUILDING;
    }
    public static function READY(): DeploymentStatus
    {
        self::$READY ??= new DeploymentStatus('ready');

        return self::$READY;
    }
    public static function CANCELED(): DeploymentStatus
    {
        self::$CANCELED ??= new DeploymentStatus('canceled');

        return self::$CANCELED;
    }
    public static function FAILED(): DeploymentStatus
    {
        self::$FAILED ??= new DeploymentStatus('failed');

        return self::$FAILED;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'waiting' => self::WAITING(),
            'processing' => self::PROCESSING(),
            'building' => self::BUILDING(),
            'ready' => self::READY(),
            'canceled' => self::CANCELED(),
            'failed' => self::FAILED(),
            default => throw new \InvalidArgumentException('Unknown DeploymentStatus value: ' . $value),
        };
    }
}
