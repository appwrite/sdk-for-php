<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Browser implements JsonSerializable
{
    private static Browser $AVANTBROWSER;
    private static Browser $ANDROIDWEBVIEWBETA;
    private static Browser $GOOGLECHROME;
    private static Browser $GOOGLECHROMEIOS;
    private static Browser $GOOGLECHROMEMOBILE;
    private static Browser $CHROMIUM;
    private static Browser $MOZILLAFIREFOX;
    private static Browser $SAFARI;
    private static Browser $MOBILESAFARI;
    private static Browser $MICROSOFTEDGE;
    private static Browser $MICROSOFTEDGEIOS;
    private static Browser $OPERAMINI;
    private static Browser $OPERA;
    private static Browser $OPERANEXT;

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

    public static function AVANTBROWSER(): Browser
    {
        if (!isset(self::$AVANTBROWSER)) {
            self::$AVANTBROWSER = new Browser('aa');
        }
        return self::$AVANTBROWSER;
    }
    public static function ANDROIDWEBVIEWBETA(): Browser
    {
        if (!isset(self::$ANDROIDWEBVIEWBETA)) {
            self::$ANDROIDWEBVIEWBETA = new Browser('an');
        }
        return self::$ANDROIDWEBVIEWBETA;
    }
    public static function GOOGLECHROME(): Browser
    {
        if (!isset(self::$GOOGLECHROME)) {
            self::$GOOGLECHROME = new Browser('ch');
        }
        return self::$GOOGLECHROME;
    }
    public static function GOOGLECHROMEIOS(): Browser
    {
        if (!isset(self::$GOOGLECHROMEIOS)) {
            self::$GOOGLECHROMEIOS = new Browser('ci');
        }
        return self::$GOOGLECHROMEIOS;
    }
    public static function GOOGLECHROMEMOBILE(): Browser
    {
        if (!isset(self::$GOOGLECHROMEMOBILE)) {
            self::$GOOGLECHROMEMOBILE = new Browser('cm');
        }
        return self::$GOOGLECHROMEMOBILE;
    }
    public static function CHROMIUM(): Browser
    {
        if (!isset(self::$CHROMIUM)) {
            self::$CHROMIUM = new Browser('cr');
        }
        return self::$CHROMIUM;
    }
    public static function MOZILLAFIREFOX(): Browser
    {
        if (!isset(self::$MOZILLAFIREFOX)) {
            self::$MOZILLAFIREFOX = new Browser('ff');
        }
        return self::$MOZILLAFIREFOX;
    }
    public static function SAFARI(): Browser
    {
        if (!isset(self::$SAFARI)) {
            self::$SAFARI = new Browser('sf');
        }
        return self::$SAFARI;
    }
    public static function MOBILESAFARI(): Browser
    {
        if (!isset(self::$MOBILESAFARI)) {
            self::$MOBILESAFARI = new Browser('mf');
        }
        return self::$MOBILESAFARI;
    }
    public static function MICROSOFTEDGE(): Browser
    {
        if (!isset(self::$MICROSOFTEDGE)) {
            self::$MICROSOFTEDGE = new Browser('ps');
        }
        return self::$MICROSOFTEDGE;
    }
    public static function MICROSOFTEDGEIOS(): Browser
    {
        if (!isset(self::$MICROSOFTEDGEIOS)) {
            self::$MICROSOFTEDGEIOS = new Browser('oi');
        }
        return self::$MICROSOFTEDGEIOS;
    }
    public static function OPERAMINI(): Browser
    {
        if (!isset(self::$OPERAMINI)) {
            self::$OPERAMINI = new Browser('om');
        }
        return self::$OPERAMINI;
    }
    public static function OPERA(): Browser
    {
        if (!isset(self::$OPERA)) {
            self::$OPERA = new Browser('op');
        }
        return self::$OPERA;
    }
    public static function OPERANEXT(): Browser
    {
        if (!isset(self::$OPERANEXT)) {
            self::$OPERANEXT = new Browser('on');
        }
        return self::$OPERANEXT;
    }
}