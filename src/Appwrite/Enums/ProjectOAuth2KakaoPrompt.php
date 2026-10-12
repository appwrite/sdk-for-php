<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProjectOAuth2KakaoPrompt implements JsonSerializable, Stringable
{
    private static ProjectOAuth2KakaoPrompt $NONE;
    private static ProjectOAuth2KakaoPrompt $LOGIN;
    private static ProjectOAuth2KakaoPrompt $CREATE;
    private static ProjectOAuth2KakaoPrompt $SELECTACCOUNT;

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

    public static function NONE(): ProjectOAuth2KakaoPrompt
    {
        self::$NONE ??= new ProjectOAuth2KakaoPrompt('none');

        return self::$NONE;
    }
    public static function LOGIN(): ProjectOAuth2KakaoPrompt
    {
        self::$LOGIN ??= new ProjectOAuth2KakaoPrompt('login');

        return self::$LOGIN;
    }
    public static function CREATE(): ProjectOAuth2KakaoPrompt
    {
        self::$CREATE ??= new ProjectOAuth2KakaoPrompt('create');

        return self::$CREATE;
    }
    public static function SELECTACCOUNT(): ProjectOAuth2KakaoPrompt
    {
        self::$SELECTACCOUNT ??= new ProjectOAuth2KakaoPrompt('select_account');

        return self::$SELECTACCOUNT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'login' => self::LOGIN(),
            'create' => self::CREATE(),
            'select_account' => self::SELECTACCOUNT(),
            default => throw new \InvalidArgumentException('Unknown ProjectOAuth2KakaoPrompt value: ' . $value),
        };
    }
}
