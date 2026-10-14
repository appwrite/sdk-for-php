<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProjectOAuth2OktaPrompt implements JsonSerializable, Stringable
{
    private static ProjectOAuth2OktaPrompt $NONE;
    private static ProjectOAuth2OktaPrompt $LOGIN;
    private static ProjectOAuth2OktaPrompt $CONSENT;

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

    public static function NONE(): ProjectOAuth2OktaPrompt
    {
        self::$NONE ??= new ProjectOAuth2OktaPrompt('none');

        return self::$NONE;
    }
    public static function LOGIN(): ProjectOAuth2OktaPrompt
    {
        self::$LOGIN ??= new ProjectOAuth2OktaPrompt('login');

        return self::$LOGIN;
    }
    public static function CONSENT(): ProjectOAuth2OktaPrompt
    {
        self::$CONSENT ??= new ProjectOAuth2OktaPrompt('consent');

        return self::$CONSENT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'login' => self::LOGIN(),
            'consent' => self::CONSENT(),
            default => throw new \InvalidArgumentException('Unknown ProjectOAuth2OktaPrompt value: ' . $value),
        };
    }
}
