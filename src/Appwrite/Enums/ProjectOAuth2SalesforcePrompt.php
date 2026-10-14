<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProjectOAuth2SalesforcePrompt implements JsonSerializable, Stringable
{
    private static ProjectOAuth2SalesforcePrompt $LOGIN;
    private static ProjectOAuth2SalesforcePrompt $CONSENT;

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

    public static function LOGIN(): ProjectOAuth2SalesforcePrompt
    {
        self::$LOGIN ??= new ProjectOAuth2SalesforcePrompt('login');

        return self::$LOGIN;
    }
    public static function CONSENT(): ProjectOAuth2SalesforcePrompt
    {
        self::$CONSENT ??= new ProjectOAuth2SalesforcePrompt('consent');

        return self::$CONSENT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'login' => self::LOGIN(),
            'consent' => self::CONSENT(),
            default => throw new \InvalidArgumentException('Unknown ProjectOAuth2SalesforcePrompt value: ' . $value),
        };
    }
}
