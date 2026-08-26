<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class OAuth2OidcPrompt implements JsonSerializable, Stringable
{
    private static OAuth2OidcPrompt $NONE;
    private static OAuth2OidcPrompt $LOGIN;
    private static OAuth2OidcPrompt $CONSENT;
    private static OAuth2OidcPrompt $SELECTACCOUNT;

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

    public static function NONE(): OAuth2OidcPrompt
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new OAuth2OidcPrompt('none');
        }
        return self::$NONE;
    }
    public static function LOGIN(): OAuth2OidcPrompt
    {
        if (!isset(self::$LOGIN)) {
            self::$LOGIN = new OAuth2OidcPrompt('login');
        }
        return self::$LOGIN;
    }
    public static function CONSENT(): OAuth2OidcPrompt
    {
        if (!isset(self::$CONSENT)) {
            self::$CONSENT = new OAuth2OidcPrompt('consent');
        }
        return self::$CONSENT;
    }
    public static function SELECTACCOUNT(): OAuth2OidcPrompt
    {
        if (!isset(self::$SELECTACCOUNT)) {
            self::$SELECTACCOUNT = new OAuth2OidcPrompt('select_account');
        }
        return self::$SELECTACCOUNT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'login' => self::LOGIN(),
            'consent' => self::CONSENT(),
            'select_account' => self::SELECTACCOUNT(),
            default => throw new \InvalidArgumentException('Unknown OAuth2OidcPrompt value: ' . $value),
        };
    }
}
