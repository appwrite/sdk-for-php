<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Runtime implements JsonSerializable
{
    private static Runtime $NODE180;
    private static Runtime $PHP80;
    private static Runtime $RUBY31;
    private static Runtime $PYTHON39;

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

    public static function NODE180(): Runtime
    {
        if (!isset(self::$NODE180)) {
            self::$NODE180 = new Runtime('node-18.0');
        }
        return self::$NODE180;
    }
    public static function PHP80(): Runtime
    {
        if (!isset(self::$PHP80)) {
            self::$PHP80 = new Runtime('php-8.0');
        }
        return self::$PHP80;
    }
    public static function RUBY31(): Runtime
    {
        if (!isset(self::$RUBY31)) {
            self::$RUBY31 = new Runtime('ruby-3.1');
        }
        return self::$RUBY31;
    }
    public static function PYTHON39(): Runtime
    {
        if (!isset(self::$PYTHON39)) {
            self::$PYTHON39 = new Runtime('python-3.9');
        }
        return self::$PYTHON39;
    }
}