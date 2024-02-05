<?php

namespace Appwrite\Enums;

use JsonSerializable;

class MessagingProviderType implements JsonSerializable
{
    private static MessagingProviderType $EMAIL;
    private static MessagingProviderType $SMS;
    private static MessagingProviderType $PUSH;

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
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
}