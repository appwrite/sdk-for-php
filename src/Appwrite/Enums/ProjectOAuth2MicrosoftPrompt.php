<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProjectOAuth2MicrosoftPrompt implements JsonSerializable, Stringable
{
    private static ProjectOAuth2MicrosoftPrompt $NONE;
    private static ProjectOAuth2MicrosoftPrompt $LOGIN;
    private static ProjectOAuth2MicrosoftPrompt $CONSENT;
    private static ProjectOAuth2MicrosoftPrompt $SELECTACCOUNT;

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

    public static function NONE(): ProjectOAuth2MicrosoftPrompt
    {
        self::$NONE ??= new ProjectOAuth2MicrosoftPrompt('none');

        return self::$NONE;
    }
    public static function LOGIN(): ProjectOAuth2MicrosoftPrompt
    {
        self::$LOGIN ??= new ProjectOAuth2MicrosoftPrompt('login');

        return self::$LOGIN;
    }
    public static function CONSENT(): ProjectOAuth2MicrosoftPrompt
    {
        self::$CONSENT ??= new ProjectOAuth2MicrosoftPrompt('consent');

        return self::$CONSENT;
    }
    public static function SELECTACCOUNT(): ProjectOAuth2MicrosoftPrompt
    {
        self::$SELECTACCOUNT ??= new ProjectOAuth2MicrosoftPrompt('select_account');

        return self::$SELECTACCOUNT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'login' => self::LOGIN(),
            'consent' => self::CONSENT(),
            'select_account' => self::SELECTACCOUNT(),
            default => throw new \InvalidArgumentException('Unknown ProjectOAuth2MicrosoftPrompt value: ' . $value),
        };
    }
}
