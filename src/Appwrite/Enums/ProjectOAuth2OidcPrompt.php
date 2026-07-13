<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProjectOAuth2OidcPrompt implements JsonSerializable
{
    private static ProjectOAuth2OidcPrompt $NONE;
    private static ProjectOAuth2OidcPrompt $LOGIN;
    private static ProjectOAuth2OidcPrompt $CONSENT;
    private static ProjectOAuth2OidcPrompt $SELECTACCOUNT;

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

    public static function NONE(): ProjectOAuth2OidcPrompt
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new ProjectOAuth2OidcPrompt('none');
        }
        return self::$NONE;
    }
    public static function LOGIN(): ProjectOAuth2OidcPrompt
    {
        if (!isset(self::$LOGIN)) {
            self::$LOGIN = new ProjectOAuth2OidcPrompt('login');
        }
        return self::$LOGIN;
    }
    public static function CONSENT(): ProjectOAuth2OidcPrompt
    {
        if (!isset(self::$CONSENT)) {
            self::$CONSENT = new ProjectOAuth2OidcPrompt('consent');
        }
        return self::$CONSENT;
    }
    public static function SELECTACCOUNT(): ProjectOAuth2OidcPrompt
    {
        if (!isset(self::$SELECTACCOUNT)) {
            self::$SELECTACCOUNT = new ProjectOAuth2OidcPrompt('select_account');
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
            default => throw new \InvalidArgumentException('Unknown ProjectOAuth2OidcPrompt value: ' . $value),
        };
    }
}
