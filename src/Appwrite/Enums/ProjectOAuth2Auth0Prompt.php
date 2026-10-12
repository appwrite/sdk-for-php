<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProjectOAuth2Auth0Prompt implements JsonSerializable, Stringable
{
    private static ProjectOAuth2Auth0Prompt $NONE;
    private static ProjectOAuth2Auth0Prompt $LOGIN;
    private static ProjectOAuth2Auth0Prompt $CONSENT;

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

    public static function NONE(): ProjectOAuth2Auth0Prompt
    {
        self::$NONE ??= new ProjectOAuth2Auth0Prompt('none');

        return self::$NONE;
    }
    public static function LOGIN(): ProjectOAuth2Auth0Prompt
    {
        self::$LOGIN ??= new ProjectOAuth2Auth0Prompt('login');

        return self::$LOGIN;
    }
    public static function CONSENT(): ProjectOAuth2Auth0Prompt
    {
        self::$CONSENT ??= new ProjectOAuth2Auth0Prompt('consent');

        return self::$CONSENT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'login' => self::LOGIN(),
            'consent' => self::CONSENT(),
            default => throw new \InvalidArgumentException('Unknown ProjectOAuth2Auth0Prompt value: ' . $value),
        };
    }
}
