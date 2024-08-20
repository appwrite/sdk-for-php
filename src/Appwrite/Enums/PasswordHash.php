<?php

namespace Appwrite\Enums;

use JsonSerializable;

class PasswordHash implements JsonSerializable
{
    private static PasswordHash $SHA1;
    private static PasswordHash $SHA224;
    private static PasswordHash $SHA256;
    private static PasswordHash $SHA384;
    private static PasswordHash $SHA512224;
    private static PasswordHash $SHA512256;
    private static PasswordHash $SHA512;
    private static PasswordHash $SHA3224;
    private static PasswordHash $SHA3256;
    private static PasswordHash $SHA3384;
    private static PasswordHash $SHA3512;

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

    public static function SHA1(): PasswordHash
    {
        if (!isset(self::$SHA1)) {
            self::$SHA1 = new PasswordHash('sha1');
        }
        return self::$SHA1;
    }
    public static function SHA224(): PasswordHash
    {
        if (!isset(self::$SHA224)) {
            self::$SHA224 = new PasswordHash('sha224');
        }
        return self::$SHA224;
    }
    public static function SHA256(): PasswordHash
    {
        if (!isset(self::$SHA256)) {
            self::$SHA256 = new PasswordHash('sha256');
        }
        return self::$SHA256;
    }
    public static function SHA384(): PasswordHash
    {
        if (!isset(self::$SHA384)) {
            self::$SHA384 = new PasswordHash('sha384');
        }
        return self::$SHA384;
    }
    public static function SHA512224(): PasswordHash
    {
        if (!isset(self::$SHA512224)) {
            self::$SHA512224 = new PasswordHash('sha512/224');
        }
        return self::$SHA512224;
    }
    public static function SHA512256(): PasswordHash
    {
        if (!isset(self::$SHA512256)) {
            self::$SHA512256 = new PasswordHash('sha512/256');
        }
        return self::$SHA512256;
    }
    public static function SHA512(): PasswordHash
    {
        if (!isset(self::$SHA512)) {
            self::$SHA512 = new PasswordHash('sha512');
        }
        return self::$SHA512;
    }
    public static function SHA3224(): PasswordHash
    {
        if (!isset(self::$SHA3224)) {
            self::$SHA3224 = new PasswordHash('sha3-224');
        }
        return self::$SHA3224;
    }
    public static function SHA3256(): PasswordHash
    {
        if (!isset(self::$SHA3256)) {
            self::$SHA3256 = new PasswordHash('sha3-256');
        }
        return self::$SHA3256;
    }
    public static function SHA3384(): PasswordHash
    {
        if (!isset(self::$SHA3384)) {
            self::$SHA3384 = new PasswordHash('sha3-384');
        }
        return self::$SHA3384;
    }
    public static function SHA3512(): PasswordHash
    {
        if (!isset(self::$SHA3512)) {
            self::$SHA3512 = new PasswordHash('sha3-512');
        }
        return self::$SHA3512;
    }
}