<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProjectOAuth2GitHubPrompt implements JsonSerializable, Stringable
{
    private static ProjectOAuth2GitHubPrompt $SELECTACCOUNT;

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

    public static function SELECTACCOUNT(): ProjectOAuth2GitHubPrompt
    {
        self::$SELECTACCOUNT ??= new ProjectOAuth2GitHubPrompt('select_account');

        return self::$SELECTACCOUNT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'select_account' => self::SELECTACCOUNT(),
            default => throw new \InvalidArgumentException('Unknown ProjectOAuth2GitHubPrompt value: ' . $value),
        };
    }
}
