<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class Compression implements JsonSerializable, Stringable
{
    private static Compression $NONE;
    private static Compression $GZIP;
    private static Compression $ZSTD;

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

    public static function NONE(): Compression
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new Compression('none');
        }
        return self::$NONE;
    }
    public static function GZIP(): Compression
    {
        if (!isset(self::$GZIP)) {
            self::$GZIP = new Compression('gzip');
        }
        return self::$GZIP;
    }
    public static function ZSTD(): Compression
    {
        if (!isset(self::$ZSTD)) {
            self::$ZSTD = new Compression('zstd');
        }
        return self::$ZSTD;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'gzip' => self::GZIP(),
            'zstd' => self::ZSTD(),
            default => throw new \InvalidArgumentException('Unknown Compression value: ' . $value),
        };
    }
}
