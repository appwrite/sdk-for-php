<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class MessageStatus implements JsonSerializable, Stringable
{
    private static MessageStatus $DRAFT;
    private static MessageStatus $PROCESSING;
    private static MessageStatus $SCHEDULED;
    private static MessageStatus $SENT;
    private static MessageStatus $FAILED;

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

    public static function DRAFT(): MessageStatus
    {
        self::$DRAFT ??= new MessageStatus('draft');

        return self::$DRAFT;
    }
    public static function PROCESSING(): MessageStatus
    {
        self::$PROCESSING ??= new MessageStatus('processing');

        return self::$PROCESSING;
    }
    public static function SCHEDULED(): MessageStatus
    {
        self::$SCHEDULED ??= new MessageStatus('scheduled');

        return self::$SCHEDULED;
    }
    public static function SENT(): MessageStatus
    {
        self::$SENT ??= new MessageStatus('sent');

        return self::$SENT;
    }
    public static function FAILED(): MessageStatus
    {
        self::$FAILED ??= new MessageStatus('failed');

        return self::$FAILED;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'draft' => self::DRAFT(),
            'processing' => self::PROCESSING(),
            'scheduled' => self::SCHEDULED(),
            'sent' => self::SENT(),
            'failed' => self::FAILED(),
            default => throw new \InvalidArgumentException('Unknown MessageStatus value: ' . $value),
        };
    }
}
