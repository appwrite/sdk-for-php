<?php

namespace Appwrite\Enums;

use JsonSerializable;

class PasswordVersion implements JsonSerializable
{
    private static PasswordVersion $SHA1;
    private static PasswordVersion $SHA224;
    private static PasswordVersion $SHA256;
    private static PasswordVersion $SHA384;
    private static PasswordVersion $SHA512224;
    private static PasswordVersion $SHA512256;
    private static PasswordVersion $SHA512;
    private static PasswordVersion $SHA3224;
    private static PasswordVersion $SHA3256;
    private static PasswordVersion $SHA3384;
    private static PasswordVersion $SHA3512;

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

    public static function SHA1(): PasswordVersion
    {
        if (!isset(self::$SHA1)) {
            self::$SHA1 = new PasswordVersion('sha1');
        }
        return self::$SHA1;
    }
    public static function SHA224(): PasswordVersion
    {
        if (!isset(self::$SHA224)) {
            self::$SHA224 = new PasswordVersion('sha224');
        }
        return self::$SHA224;
    }
    public static function SHA256(): PasswordVersion
    {
        if (!isset(self::$SHA256)) {
            self::$SHA256 = new PasswordVersion('sha256');
        }
        return self::$SHA256;
    }
    public static function SHA384(): PasswordVersion
    {
        if (!isset(self::$SHA384)) {
            self::$SHA384 = new PasswordVersion('sha384');
        }
        return self::$SHA384;
    }
    public static function SHA512224(): PasswordVersion
    {
        if (!isset(self::$SHA512224)) {
            self::$SHA512224 = new PasswordVersion('sha512/224');
        }
        return self::$SHA512224;
    }
    public static function SHA512256(): PasswordVersion
    {
        if (!isset(self::$SHA512256)) {
            self::$SHA512256 = new PasswordVersion('sha512/256');
        }
        return self::$SHA512256;
    }
    public static function SHA512(): PasswordVersion
    {
        if (!isset(self::$SHA512)) {
            self::$SHA512 = new PasswordVersion('sha512');
        }
        return self::$SHA512;
    }
    public static function SHA3224(): PasswordVersion
    {
        if (!isset(self::$SHA3224)) {
            self::$SHA3224 = new PasswordVersion('sha3-224');
        }
        return self::$SHA3224;
    }
    public static function SHA3256(): PasswordVersion
    {
        if (!isset(self::$SHA3256)) {
            self::$SHA3256 = new PasswordVersion('sha3-256');
        }
        return self::$SHA3256;
    }
    public static function SHA3384(): PasswordVersion
    {
        if (!isset(self::$SHA3384)) {
            self::$SHA3384 = new PasswordVersion('sha3-384');
        }
        return self::$SHA3384;
    }
    public static function SHA3512(): PasswordVersion
    {
        if (!isset(self::$SHA3512)) {
            self::$SHA3512 = new PasswordVersion('sha3-512');
        }
        return self::$SHA3512;
    }
}