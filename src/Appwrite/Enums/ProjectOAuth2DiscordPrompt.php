<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProjectOAuth2DiscordPrompt implements JsonSerializable, Stringable
{
    private static ProjectOAuth2DiscordPrompt $NONE;
    private static ProjectOAuth2DiscordPrompt $CONSENT;

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

    public static function NONE(): ProjectOAuth2DiscordPrompt
    {
        self::$NONE ??= new ProjectOAuth2DiscordPrompt('none');

        return self::$NONE;
    }
    public static function CONSENT(): ProjectOAuth2DiscordPrompt
    {
        self::$CONSENT ??= new ProjectOAuth2DiscordPrompt('consent');

        return self::$CONSENT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'consent' => self::CONSENT(),
            default => throw new \InvalidArgumentException('Unknown ProjectOAuth2DiscordPrompt value: ' . $value),
        };
    }
}
