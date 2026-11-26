<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class VideoCodecId implements JsonSerializable, Stringable
{
    private static VideoCodecId $H264;
    private static VideoCodecId $HEVC;
    private static VideoCodecId $VP9;

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

    public static function H264(): VideoCodecId
    {
        self::$H264 ??= new VideoCodecId('h264');

        return self::$H264;
    }
    public static function HEVC(): VideoCodecId
    {
        self::$HEVC ??= new VideoCodecId('hevc');

        return self::$HEVC;
    }
    public static function VP9(): VideoCodecId
    {
        self::$VP9 ??= new VideoCodecId('vp9');

        return self::$VP9;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'h264' => self::H264(),
            'hevc' => self::HEVC(),
            'vp9' => self::VP9(),
            default => throw new \InvalidArgumentException('Unknown VideoCodecId value: ' . $value),
        };
    }
}
