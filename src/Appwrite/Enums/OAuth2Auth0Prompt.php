<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class OAuth2Auth0Prompt implements JsonSerializable, Stringable
{
    private static OAuth2Auth0Prompt $NONE;
    private static OAuth2Auth0Prompt $LOGIN;
    private static OAuth2Auth0Prompt $CONSENT;

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

    public static function NONE(): OAuth2Auth0Prompt
    {
        self::$NONE ??= new OAuth2Auth0Prompt('none');

        return self::$NONE;
    }
    public static function LOGIN(): OAuth2Auth0Prompt
    {
        self::$LOGIN ??= new OAuth2Auth0Prompt('login');

        return self::$LOGIN;
    }
    public static function CONSENT(): OAuth2Auth0Prompt
    {
        self::$CONSENT ??= new OAuth2Auth0Prompt('consent');

        return self::$CONSENT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'login' => self::LOGIN(),
            'consent' => self::CONSENT(),
            default => throw new \InvalidArgumentException('Unknown OAuth2Auth0Prompt value: ' . $value),
        };
    }
}
