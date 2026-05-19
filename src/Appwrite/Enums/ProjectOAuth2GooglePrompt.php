<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProjectOAuth2GooglePrompt implements JsonSerializable
{
    private static ProjectOAuth2GooglePrompt $NONE;
    private static ProjectOAuth2GooglePrompt $CONSENT;
    private static ProjectOAuth2GooglePrompt $SELECTACCOUNT;

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

    public static function NONE(): ProjectOAuth2GooglePrompt
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new ProjectOAuth2GooglePrompt('none');
        }
        return self::$NONE;
    }
    public static function CONSENT(): ProjectOAuth2GooglePrompt
    {
        if (!isset(self::$CONSENT)) {
            self::$CONSENT = new ProjectOAuth2GooglePrompt('consent');
        }
        return self::$CONSENT;
    }
    public static function SELECTACCOUNT(): ProjectOAuth2GooglePrompt
    {
        if (!isset(self::$SELECTACCOUNT)) {
            self::$SELECTACCOUNT = new ProjectOAuth2GooglePrompt('select_account');
        }
        return self::$SELECTACCOUNT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'consent' => self::CONSENT(),
            'select_account' => self::SELECTACCOUNT(),
            default => throw new \InvalidArgumentException('Unknown ProjectOAuth2GooglePrompt value: ' . $value),
        };
    }
}
