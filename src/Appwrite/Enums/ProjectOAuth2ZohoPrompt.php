<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProjectOAuth2ZohoPrompt implements JsonSerializable, Stringable
{
    private static ProjectOAuth2ZohoPrompt $CONSENT;

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

    public static function CONSENT(): ProjectOAuth2ZohoPrompt
    {
        self::$CONSENT ??= new ProjectOAuth2ZohoPrompt('consent');

        return self::$CONSENT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'consent' => self::CONSENT(),
            default => throw new \InvalidArgumentException('Unknown ProjectOAuth2ZohoPrompt value: ' . $value),
        };
    }
}
