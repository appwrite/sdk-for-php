<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class OAuth2KakaoPrompt implements JsonSerializable, Stringable
{
    private static OAuth2KakaoPrompt $NONE;
    private static OAuth2KakaoPrompt $LOGIN;
    private static OAuth2KakaoPrompt $CREATE;
    private static OAuth2KakaoPrompt $SELECTACCOUNT;

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

    public static function NONE(): OAuth2KakaoPrompt
    {
        self::$NONE ??= new OAuth2KakaoPrompt('none');

        return self::$NONE;
    }
    public static function LOGIN(): OAuth2KakaoPrompt
    {
        self::$LOGIN ??= new OAuth2KakaoPrompt('login');

        return self::$LOGIN;
    }
    public static function CREATE(): OAuth2KakaoPrompt
    {
        self::$CREATE ??= new OAuth2KakaoPrompt('create');

        return self::$CREATE;
    }
    public static function SELECTACCOUNT(): OAuth2KakaoPrompt
    {
        self::$SELECTACCOUNT ??= new OAuth2KakaoPrompt('select_account');

        return self::$SELECTACCOUNT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'login' => self::LOGIN(),
            'create' => self::CREATE(),
            'select_account' => self::SELECTACCOUNT(),
            default => throw new \InvalidArgumentException('Unknown OAuth2KakaoPrompt value: ' . $value),
        };
    }
}
