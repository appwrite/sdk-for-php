<?php

namespace Appwrite\Enums;

use JsonSerializable;

class VectorsDBIndexType implements JsonSerializable
{
    private static VectorsDBIndexType $HNSWEUCLIDEAN;
    private static VectorsDBIndexType $HNSWDOT;
    private static VectorsDBIndexType $HNSWCOSINE;
    private static VectorsDBIndexType $OBJECT;
    private static VectorsDBIndexType $KEY;
    private static VectorsDBIndexType $UNIQUE;

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
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
        if (!isset(self::$HNSWEUCLIDEAN)) {
            self::$HNSWEUCLIDEAN = new VectorsDBIndexType('hnsw_euclidean');
        }
        return self::$HNSWEUCLIDEAN;
    }
    public static function HNSWDOT(): VectorsDBIndexType
    {
        if (!isset(self::$HNSWDOT)) {
            self::$HNSWDOT = new VectorsDBIndexType('hnsw_dot');
        }
        return self::$HNSWDOT;
    }
    public static function HNSWCOSINE(): VectorsDBIndexType
    {
        if (!isset(self::$HNSWCOSINE)) {
            self::$HNSWCOSINE = new VectorsDBIndexType('hnsw_cosine');
        }
        return self::$HNSWCOSINE;
    }
    public static function OBJECT(): VectorsDBIndexType
    {
        if (!isset(self::$OBJECT)) {
            self::$OBJECT = new VectorsDBIndexType('object');
        }
        return self::$OBJECT;
    }
    public static function KEY(): VectorsDBIndexType
    {
        if (!isset(self::$KEY)) {
            self::$KEY = new VectorsDBIndexType('key');
        }
        return self::$KEY;
    }
    public static function UNIQUE(): VectorsDBIndexType
    {
        if (!isset(self::$UNIQUE)) {
            self::$UNIQUE = new VectorsDBIndexType('unique');
        }
        return self::$UNIQUE;
    }
}