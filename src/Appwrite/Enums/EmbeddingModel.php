<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class EmbeddingModel implements JsonSerializable, Stringable
{
    private static EmbeddingModel $NOMICEMBEDTEXT;
    private static EmbeddingModel $EMBEDDINGGEMMA;
    private static EmbeddingModel $ALLMINILM;
    private static EmbeddingModel $BGESMALL;

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
        if (!isset(self::$NOMICEMBEDTEXT)) {
            self::$NOMICEMBEDTEXT = new EmbeddingModel('nomic-embed-text');
        }
        return self::$NOMICEMBEDTEXT;
    }
    public static function EMBEDDINGGEMMA(): EmbeddingModel
    {
        if (!isset(self::$EMBEDDINGGEMMA)) {
            self::$EMBEDDINGGEMMA = new EmbeddingModel('embedding-gemma');
        }
        return self::$EMBEDDINGGEMMA;
    }
    public static function ALLMINILM(): EmbeddingModel
    {
        if (!isset(self::$ALLMINILM)) {
            self::$ALLMINILM = new EmbeddingModel('all-minilm');
        }
        return self::$ALLMINILM;
    }
    public static function BGESMALL(): EmbeddingModel
    {
        if (!isset(self::$BGESMALL)) {
            self::$BGESMALL = new EmbeddingModel('bge-small');
        }
        return self::$BGESMALL;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'nomic-embed-text' => self::NOMICEMBEDTEXT(),
            'embedding-gemma' => self::EMBEDDINGGEMMA(),
            'all-minilm' => self::ALLMINILM(),
            'bge-small' => self::BGESMALL(),
            default => throw new \InvalidArgumentException('Unknown EmbeddingModel value: ' . $value),
        };
    }
}
