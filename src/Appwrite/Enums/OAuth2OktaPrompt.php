<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class OAuth2OktaPrompt implements JsonSerializable, Stringable
{
    private static OAuth2OktaPrompt $NONE;
    private static OAuth2OktaPrompt $LOGIN;
    private static OAuth2OktaPrompt $CONSENT;

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

    public static function NONE(): OAuth2OktaPrompt
    {
        self::$NONE ??= new OAuth2OktaPrompt('none');

        return self::$NONE;
    }
    public static function LOGIN(): OAuth2OktaPrompt
    {
        self::$LOGIN ??= new OAuth2OktaPrompt('login');

        return self::$LOGIN;
    }
    public static function CONSENT(): OAuth2OktaPrompt
    {
        self::$CONSENT ??= new OAuth2OktaPrompt('consent');

        return self::$CONSENT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'login' => self::LOGIN(),
            'consent' => self::CONSENT(),
            default => throw new \InvalidArgumentException('Unknown OAuth2OktaPrompt value: ' . $value),
        };
    }
}
