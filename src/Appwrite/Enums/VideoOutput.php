<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class VideoOutput implements JsonSerializable, Stringable
{
    private static VideoOutput $HLS;
    private static VideoOutput $DASH;
    private static VideoOutput $CMAF;

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

    public static function HLS(): VideoOutput
    {
        self::$HLS ??= new VideoOutput('hls');

        return self::$HLS;
    }
    public static function DASH(): VideoOutput
    {
        self::$DASH ??= new VideoOutput('dash');

        return self::$DASH;
    }
    public static function CMAF(): VideoOutput
    {
        self::$CMAF ??= new VideoOutput('cmaf');

        return self::$CMAF;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'hls' => self::HLS(),
            'dash' => self::DASH(),
            'cmaf' => self::CMAF(),
            default => throw new \InvalidArgumentException('Unknown VideoOutput value: ' . $value),
        };
    }
}
