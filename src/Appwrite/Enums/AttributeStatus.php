<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class AttributeStatus implements JsonSerializable, Stringable
{
    private static AttributeStatus $AVAILABLE;
    private static AttributeStatus $PROCESSING;
    private static AttributeStatus $DELETING;
    private static AttributeStatus $STUCK;
    private static AttributeStatus $FAILED;

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

    public static function AVAILABLE(): AttributeStatus
    {
        self::$AVAILABLE ??= new AttributeStatus('available');

        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeStatus
    {
        self::$PROCESSING ??= new AttributeStatus('processing');

        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeStatus
    {
        self::$DELETING ??= new AttributeStatus('deleting');

        return self::$DELETING;
    }
    public static function STUCK(): AttributeStatus
    {
        self::$STUCK ??= new AttributeStatus('stuck');

        return self::$STUCK;
    }
    public static function FAILED(): AttributeStatus
    {
        self::$FAILED ??= new AttributeStatus('failed');

        return self::$FAILED;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'available' => self::AVAILABLE(),
            'processing' => self::PROCESSING(),
            'deleting' => self::DELETING(),
            'stuck' => self::STUCK(),
            'failed' => self::FAILED(),
            default => throw new \InvalidArgumentException('Unknown AttributeStatus value: ' . $value),
        };
    }
}
