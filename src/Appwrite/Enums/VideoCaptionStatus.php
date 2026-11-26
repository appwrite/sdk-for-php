<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class VideoCaptionStatus implements JsonSerializable, Stringable
{
    private static VideoCaptionStatus $PENDING;
    private static VideoCaptionStatus $STARTED;
    private static VideoCaptionStatus $READY;
    private static VideoCaptionStatus $ERROR;
    private static VideoCaptionStatus $ABORTED;

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

    public static function PENDING(): VideoCaptionStatus
    {
        self::$PENDING ??= new VideoCaptionStatus('pending');

        return self::$PENDING;
    }
    public static function STARTED(): VideoCaptionStatus
    {
        self::$STARTED ??= new VideoCaptionStatus('started');

        return self::$STARTED;
    }
    public static function READY(): VideoCaptionStatus
    {
        self::$READY ??= new VideoCaptionStatus('ready');

        return self::$READY;
    }
    public static function ERROR(): VideoCaptionStatus
    {
        self::$ERROR ??= new VideoCaptionStatus('error');

        return self::$ERROR;
    }
    public static function ABORTED(): VideoCaptionStatus
    {
        self::$ABORTED ??= new VideoCaptionStatus('aborted');

        return self::$ABORTED;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'pending' => self::PENDING(),
            'started' => self::STARTED(),
            'ready' => self::READY(),
            'error' => self::ERROR(),
            'aborted' => self::ABORTED(),
            default => throw new \InvalidArgumentException('Unknown VideoCaptionStatus value: ' . $value),
        };
    }
}
