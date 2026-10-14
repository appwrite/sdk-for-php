<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class OAuth2MicrosoftPrompt implements JsonSerializable, Stringable
{
    private static OAuth2MicrosoftPrompt $NONE;
    private static OAuth2MicrosoftPrompt $LOGIN;
    private static OAuth2MicrosoftPrompt $CONSENT;
    private static OAuth2MicrosoftPrompt $SELECTACCOUNT;

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

    public static function NONE(): OAuth2MicrosoftPrompt
    {
        self::$NONE ??= new OAuth2MicrosoftPrompt('none');

        return self::$NONE;
    }
    public static function LOGIN(): OAuth2MicrosoftPrompt
    {
        self::$LOGIN ??= new OAuth2MicrosoftPrompt('login');

        return self::$LOGIN;
    }
    public static function CONSENT(): OAuth2MicrosoftPrompt
    {
        self::$CONSENT ??= new OAuth2MicrosoftPrompt('consent');

        return self::$CONSENT;
    }
    public static function SELECTACCOUNT(): OAuth2MicrosoftPrompt
    {
        self::$SELECTACCOUNT ??= new OAuth2MicrosoftPrompt('select_account');

        return self::$SELECTACCOUNT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'login' => self::LOGIN(),
            'consent' => self::CONSENT(),
            'select_account' => self::SELECTACCOUNT(),
            default => throw new \InvalidArgumentException('Unknown OAuth2MicrosoftPrompt value: ' . $value),
        };
    }
}
