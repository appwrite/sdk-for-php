<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class OAuth2DiscordPrompt implements JsonSerializable, Stringable
{
    private static OAuth2DiscordPrompt $NONE;
    private static OAuth2DiscordPrompt $CONSENT;

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

    public static function NONE(): OAuth2DiscordPrompt
    {
        self::$NONE ??= new OAuth2DiscordPrompt('none');

        return self::$NONE;
    }
    public static function CONSENT(): OAuth2DiscordPrompt
    {
        self::$CONSENT ??= new OAuth2DiscordPrompt('consent');

        return self::$CONSENT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'consent' => self::CONSENT(),
            default => throw new \InvalidArgumentException('Unknown OAuth2DiscordPrompt value: ' . $value),
        };
    }
}
