<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class VectorsDBIndexType implements JsonSerializable, Stringable
{
    private static VectorsDBIndexType $HNSWEUCLIDEAN;
    private static VectorsDBIndexType $HNSWDOT;
    private static VectorsDBIndexType $HNSWCOSINE;
    private static VectorsDBIndexType $OBJECT;
    private static VectorsDBIndexType $KEY;
    private static VectorsDBIndexType $UNIQUE;

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

    public static function HNSWEUCLIDEAN(): VectorsDBIndexType
    {
        self::$HNSWEUCLIDEAN ??= new VectorsDBIndexType('hnsw_euclidean');

        return self::$HNSWEUCLIDEAN;
    }
    public static function HNSWDOT(): VectorsDBIndexType
    {
        self::$HNSWDOT ??= new VectorsDBIndexType('hnsw_dot');

        return self::$HNSWDOT;
    }
    public static function HNSWCOSINE(): VectorsDBIndexType
    {
        self::$HNSWCOSINE ??= new VectorsDBIndexType('hnsw_cosine');

        return self::$HNSWCOSINE;
    }
    public static function OBJECT(): VectorsDBIndexType
    {
        self::$OBJECT ??= new VectorsDBIndexType('object');

        return self::$OBJECT;
    }
    public static function KEY(): VectorsDBIndexType
    {
        self::$KEY ??= new VectorsDBIndexType('key');

        return self::$KEY;
    }
    public static function UNIQUE(): VectorsDBIndexType
    {
        self::$UNIQUE ??= new VectorsDBIndexType('unique');

        return self::$UNIQUE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'hnsw_euclidean' => self::HNSWEUCLIDEAN(),
            'hnsw_dot' => self::HNSWDOT(),
            'hnsw_cosine' => self::HNSWCOSINE(),
            'object' => self::OBJECT(),
            'key' => self::KEY(),
            'unique' => self::UNIQUE(),
            default => throw new \InvalidArgumentException('Unknown VectorsDBIndexType value: ' . $value),
        };
    }
}
