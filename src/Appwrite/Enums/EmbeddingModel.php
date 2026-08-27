<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class EmbeddingModel implements JsonSerializable, Stringable
{
    private static EmbeddingModel $NOMICEMBEDTEXT;
    private static EmbeddingModel $ALLMINILM;

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

    public static function NOMICEMBEDTEXT(): EmbeddingModel
    {
        self::$NOMICEMBEDTEXT ??= new EmbeddingModel('nomic-embed-text');

        return self::$NOMICEMBEDTEXT;
    }
    public static function ALLMINILM(): EmbeddingModel
    {
        self::$ALLMINILM ??= new EmbeddingModel('all-minilm');

        return self::$ALLMINILM;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'nomic-embed-text' => self::NOMICEMBEDTEXT(),
            'all-minilm' => self::ALLMINILM(),
            default => throw new \InvalidArgumentException('Unknown EmbeddingModel value: ' . $value),
        };
    }
}
