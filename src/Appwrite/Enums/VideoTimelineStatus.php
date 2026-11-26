<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class VideoTimelineStatus implements JsonSerializable, Stringable
{
    private static VideoTimelineStatus $PENDING;
    private static VideoTimelineStatus $STARTED;
    private static VideoTimelineStatus $READY;
    private static VideoTimelineStatus $SKIPPED;
    private static VideoTimelineStatus $ERROR;

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

    public static function PENDING(): VideoTimelineStatus
    {
        self::$PENDING ??= new VideoTimelineStatus('pending');

        return self::$PENDING;
    }
    public static function STARTED(): VideoTimelineStatus
    {
        self::$STARTED ??= new VideoTimelineStatus('started');

        return self::$STARTED;
    }
    public static function READY(): VideoTimelineStatus
    {
        self::$READY ??= new VideoTimelineStatus('ready');

        return self::$READY;
    }
    public static function SKIPPED(): VideoTimelineStatus
    {
        self::$SKIPPED ??= new VideoTimelineStatus('skipped');

        return self::$SKIPPED;
    }
    public static function ERROR(): VideoTimelineStatus
    {
        self::$ERROR ??= new VideoTimelineStatus('error');

        return self::$ERROR;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'pending' => self::PENDING(),
            'started' => self::STARTED(),
            'ready' => self::READY(),
            'skipped' => self::SKIPPED(),
            'error' => self::ERROR(),
            default => throw new \InvalidArgumentException('Unknown VideoTimelineStatus value: ' . $value),
        };
    }
}
