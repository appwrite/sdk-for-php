<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class VideoRenditionStatus implements JsonSerializable, Stringable
{
    private static VideoRenditionStatus $PENDING;
    private static VideoRenditionStatus $STARTED;
    private static VideoRenditionStatus $ENDED;
    private static VideoRenditionStatus $READY;
    private static VideoRenditionStatus $ERROR;
    private static VideoRenditionStatus $ABORTED;

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

    public static function PENDING(): VideoRenditionStatus
    {
        self::$PENDING ??= new VideoRenditionStatus('pending');

        return self::$PENDING;
    }
    public static function STARTED(): VideoRenditionStatus
    {
        self::$STARTED ??= new VideoRenditionStatus('started');

        return self::$STARTED;
    }
    public static function ENDED(): VideoRenditionStatus
    {
        self::$ENDED ??= new VideoRenditionStatus('ended');

        return self::$ENDED;
    }
    public static function READY(): VideoRenditionStatus
    {
        self::$READY ??= new VideoRenditionStatus('ready');

        return self::$READY;
    }
    public static function ERROR(): VideoRenditionStatus
    {
        self::$ERROR ??= new VideoRenditionStatus('error');

        return self::$ERROR;
    }
    public static function ABORTED(): VideoRenditionStatus
    {
        self::$ABORTED ??= new VideoRenditionStatus('aborted');

        return self::$ABORTED;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'pending' => self::PENDING(),
            'started' => self::STARTED(),
            'ended' => self::ENDED(),
            'ready' => self::READY(),
            'error' => self::ERROR(),
            'aborted' => self::ABORTED(),
            default => throw new \InvalidArgumentException('Unknown VideoRenditionStatus value: ' . $value),
        };
    }
}
