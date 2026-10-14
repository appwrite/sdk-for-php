<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class OAuth2ZohoPrompt implements JsonSerializable, Stringable
{
    private static OAuth2ZohoPrompt $CONSENT;

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

    public static function CONSENT(): OAuth2ZohoPrompt
    {
        self::$CONSENT ??= new OAuth2ZohoPrompt('consent');

        return self::$CONSENT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'consent' => self::CONSENT(),
            default => throw new \InvalidArgumentException('Unknown OAuth2ZohoPrompt value: ' . $value),
        };
    }
}
