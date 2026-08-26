<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class MessagingProviderType implements JsonSerializable, Stringable
{
    private static MessagingProviderType $EMAIL;
    private static MessagingProviderType $SMS;
    private static MessagingProviderType $PUSH;

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

    public static function EMAIL(): MessagingProviderType
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new MessagingProviderType('email');
        }
        return self::$EMAIL;
    }
    public static function SMS(): MessagingProviderType
    {
        if (!isset(self::$SMS)) {
            self::$SMS = new MessagingProviderType('sms');
        }
        return self::$SMS;
    }
    public static function PUSH(): MessagingProviderType
    {
        if (!isset(self::$PUSH)) {
            self::$PUSH = new MessagingProviderType('push');
        }
        return self::$PUSH;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'email' => self::EMAIL(),
            'sms' => self::SMS(),
            'push' => self::PUSH(),
            default => throw new \InvalidArgumentException('Unknown MessagingProviderType value: ' . $value),
        };
    }
}
