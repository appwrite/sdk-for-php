<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class DeploymentDownloadType implements JsonSerializable, Stringable
{
    private static DeploymentDownloadType $SOURCE;
    private static DeploymentDownloadType $OUTPUT;

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

    public static function SOURCE(): DeploymentDownloadType
    {
        self::$SOURCE ??= new DeploymentDownloadType('source');

        return self::$SOURCE;
    }
    public static function OUTPUT(): DeploymentDownloadType
    {
        self::$OUTPUT ??= new DeploymentDownloadType('output');

        return self::$OUTPUT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'source' => self::SOURCE(),
            'output' => self::OUTPUT(),
            default => throw new \InvalidArgumentException('Unknown DeploymentDownloadType value: ' . $value),
        };
    }
}
