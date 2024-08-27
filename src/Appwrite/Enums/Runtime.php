<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Runtime implements JsonSerializable
{
    private static Runtime $NODE145;
    private static Runtime $NODE160;
    private static Runtime $NODE180;
    private static Runtime $NODE190;
    private static Runtime $NODE200;
    private static Runtime $NODE210;
    private static Runtime $PHP80;
    private static Runtime $PHP81;
    private static Runtime $PHP82;
    private static Runtime $PHP83;
    private static Runtime $RUBY30;
    private static Runtime $RUBY31;
    private static Runtime $RUBY32;
    private static Runtime $RUBY33;
    private static Runtime $PYTHON38;
    private static Runtime $PYTHON39;
    private static Runtime $PYTHON310;
    private static Runtime $PYTHON311;
    private static Runtime $PYTHON312;
    private static Runtime $PYTHONML311;
    private static Runtime $DENO140;
    private static Runtime $DART215;
    private static Runtime $DART216;
    private static Runtime $DART217;
    private static Runtime $DART218;
    private static Runtime $DART30;
    private static Runtime $DART31;
    private static Runtime $DART33;
    private static Runtime $DOTNET31;
    private static Runtime $DOTNET60;
    private static Runtime $DOTNET70;
    private static Runtime $JAVA80;
    private static Runtime $JAVA110;
    private static Runtime $JAVA170;
    private static Runtime $JAVA180;
    private static Runtime $JAVA210;
    private static Runtime $SWIFT55;
    private static Runtime $SWIFT58;
    private static Runtime $SWIFT59;
    private static Runtime $KOTLIN16;
    private static Runtime $KOTLIN18;
    private static Runtime $KOTLIN19;
    private static Runtime $CPP17;
    private static Runtime $CPP20;
    private static Runtime $BUN10;
    private static Runtime $GO123;

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

    public static function NODE145(): Runtime
    {
        if (!isset(self::$NODE145)) {
            self::$NODE145 = new Runtime('node-14.5');
        }
        return self::$NODE145;
    }
    public static function NODE160(): Runtime
    {
        if (!isset(self::$NODE160)) {
            self::$NODE160 = new Runtime('node-16.0');
        }
        return self::$NODE160;
    }
    public static function NODE180(): Runtime
    {
        if (!isset(self::$NODE180)) {
            self::$NODE180 = new Runtime('node-18.0');
        }
        return self::$NODE180;
    }
    public static function NODE190(): Runtime
    {
        if (!isset(self::$NODE190)) {
            self::$NODE190 = new Runtime('node-19.0');
        }
        return self::$NODE190;
    }
    public static function NODE200(): Runtime
    {
        if (!isset(self::$NODE200)) {
            self::$NODE200 = new Runtime('node-20.0');
        }
        return self::$NODE200;
    }
    public static function NODE210(): Runtime
    {
        if (!isset(self::$NODE210)) {
            self::$NODE210 = new Runtime('node-21.0');
        }
        return self::$NODE210;
    }
    public static function PHP80(): Runtime
    {
        if (!isset(self::$PHP80)) {
            self::$PHP80 = new Runtime('php-8.0');
        }
        return self::$PHP80;
    }
    public static function PHP81(): Runtime
    {
        if (!isset(self::$PHP81)) {
            self::$PHP81 = new Runtime('php-8.1');
        }
        return self::$PHP81;
    }
    public static function PHP82(): Runtime
    {
        if (!isset(self::$PHP82)) {
            self::$PHP82 = new Runtime('php-8.2');
        }
        return self::$PHP82;
    }
    public static function PHP83(): Runtime
    {
        if (!isset(self::$PHP83)) {
            self::$PHP83 = new Runtime('php-8.3');
        }
        return self::$PHP83;
    }
    public static function RUBY30(): Runtime
    {
        if (!isset(self::$RUBY30)) {
            self::$RUBY30 = new Runtime('ruby-3.0');
        }
        return self::$RUBY30;
    }
    public static function RUBY31(): Runtime
    {
        if (!isset(self::$RUBY31)) {
            self::$RUBY31 = new Runtime('ruby-3.1');
        }
        return self::$RUBY31;
    }
    public static function RUBY32(): Runtime
    {
        if (!isset(self::$RUBY32)) {
            self::$RUBY32 = new Runtime('ruby-3.2');
        }
        return self::$RUBY32;
    }
    public static function RUBY33(): Runtime
    {
        if (!isset(self::$RUBY33)) {
            self::$RUBY33 = new Runtime('ruby-3.3');
        }
        return self::$RUBY33;
    }
    public static function PYTHON38(): Runtime
    {
        if (!isset(self::$PYTHON38)) {
            self::$PYTHON38 = new Runtime('python-3.8');
        }
        return self::$PYTHON38;
    }
    public static function PYTHON39(): Runtime
    {
        if (!isset(self::$PYTHON39)) {
            self::$PYTHON39 = new Runtime('python-3.9');
        }
        return self::$PYTHON39;
    }
    public static function PYTHON310(): Runtime
    {
        if (!isset(self::$PYTHON310)) {
            self::$PYTHON310 = new Runtime('python-3.10');
        }
        return self::$PYTHON310;
    }
    public static function PYTHON311(): Runtime
    {
        if (!isset(self::$PYTHON311)) {
            self::$PYTHON311 = new Runtime('python-3.11');
        }
        return self::$PYTHON311;
    }
    public static function PYTHON312(): Runtime
    {
        if (!isset(self::$PYTHON312)) {
            self::$PYTHON312 = new Runtime('python-3.12');
        }
        return self::$PYTHON312;
    }
    public static function PYTHONML311(): Runtime
    {
        if (!isset(self::$PYTHONML311)) {
            self::$PYTHONML311 = new Runtime('python-ml-3.11');
        }
        return self::$PYTHONML311;
    }
    public static function DENO140(): Runtime
    {
        if (!isset(self::$DENO140)) {
            self::$DENO140 = new Runtime('deno-1.40');
        }
        return self::$DENO140;
    }
    public static function DART215(): Runtime
    {
        if (!isset(self::$DART215)) {
            self::$DART215 = new Runtime('dart-2.15');
        }
        return self::$DART215;
    }
    public static function DART216(): Runtime
    {
        if (!isset(self::$DART216)) {
            self::$DART216 = new Runtime('dart-2.16');
        }
        return self::$DART216;
    }
    public static function DART217(): Runtime
    {
        if (!isset(self::$DART217)) {
            self::$DART217 = new Runtime('dart-2.17');
        }
        return self::$DART217;
    }
    public static function DART218(): Runtime
    {
        if (!isset(self::$DART218)) {
            self::$DART218 = new Runtime('dart-2.18');
        }
        return self::$DART218;
    }
    public static function DART30(): Runtime
    {
        if (!isset(self::$DART30)) {
            self::$DART30 = new Runtime('dart-3.0');
        }
        return self::$DART30;
    }
    public static function DART31(): Runtime
    {
        if (!isset(self::$DART31)) {
            self::$DART31 = new Runtime('dart-3.1');
        }
        return self::$DART31;
    }
    public static function DART33(): Runtime
    {
        if (!isset(self::$DART33)) {
            self::$DART33 = new Runtime('dart-3.3');
        }
        return self::$DART33;
    }
    public static function DOTNET31(): Runtime
    {
        if (!isset(self::$DOTNET31)) {
            self::$DOTNET31 = new Runtime('dotnet-3.1');
        }
        return self::$DOTNET31;
    }
    public static function DOTNET60(): Runtime
    {
        if (!isset(self::$DOTNET60)) {
            self::$DOTNET60 = new Runtime('dotnet-6.0');
        }
        return self::$DOTNET60;
    }
    public static function DOTNET70(): Runtime
    {
        if (!isset(self::$DOTNET70)) {
            self::$DOTNET70 = new Runtime('dotnet-7.0');
        }
        return self::$DOTNET70;
    }
    public static function JAVA80(): Runtime
    {
        if (!isset(self::$JAVA80)) {
            self::$JAVA80 = new Runtime('java-8.0');
        }
        return self::$JAVA80;
    }
    public static function JAVA110(): Runtime
    {
        if (!isset(self::$JAVA110)) {
            self::$JAVA110 = new Runtime('java-11.0');
        }
        return self::$JAVA110;
    }
    public static function JAVA170(): Runtime
    {
        if (!isset(self::$JAVA170)) {
            self::$JAVA170 = new Runtime('java-17.0');
        }
        return self::$JAVA170;
    }
    public static function JAVA180(): Runtime
    {
        if (!isset(self::$JAVA180)) {
            self::$JAVA180 = new Runtime('java-18.0');
        }
        return self::$JAVA180;
    }
    public static function JAVA210(): Runtime
    {
        if (!isset(self::$JAVA210)) {
            self::$JAVA210 = new Runtime('java-21.0');
        }
        return self::$JAVA210;
    }
    public static function SWIFT55(): Runtime
    {
        if (!isset(self::$SWIFT55)) {
            self::$SWIFT55 = new Runtime('swift-5.5');
        }
        return self::$SWIFT55;
    }
    public static function SWIFT58(): Runtime
    {
        if (!isset(self::$SWIFT58)) {
            self::$SWIFT58 = new Runtime('swift-5.8');
        }
        return self::$SWIFT58;
    }
    public static function SWIFT59(): Runtime
    {
        if (!isset(self::$SWIFT59)) {
            self::$SWIFT59 = new Runtime('swift-5.9');
        }
        return self::$SWIFT59;
    }
    public static function KOTLIN16(): Runtime
    {
        if (!isset(self::$KOTLIN16)) {
            self::$KOTLIN16 = new Runtime('kotlin-1.6');
        }
        return self::$KOTLIN16;
    }
    public static function KOTLIN18(): Runtime
    {
        if (!isset(self::$KOTLIN18)) {
            self::$KOTLIN18 = new Runtime('kotlin-1.8');
        }
        return self::$KOTLIN18;
    }
    public static function KOTLIN19(): Runtime
    {
        if (!isset(self::$KOTLIN19)) {
            self::$KOTLIN19 = new Runtime('kotlin-1.9');
        }
        return self::$KOTLIN19;
    }
    public static function CPP17(): Runtime
    {
        if (!isset(self::$CPP17)) {
            self::$CPP17 = new Runtime('cpp-17');
        }
        return self::$CPP17;
    }
    public static function CPP20(): Runtime
    {
        if (!isset(self::$CPP20)) {
            self::$CPP20 = new Runtime('cpp-20');
        }
        return self::$CPP20;
    }
    public static function BUN10(): Runtime
    {
        if (!isset(self::$BUN10)) {
            self::$BUN10 = new Runtime('bun-1.0');
        }
        return self::$BUN10;
    }
    public static function GO123(): Runtime
    {
        if (!isset(self::$GO123)) {
            self::$GO123 = new Runtime('go-1.23');
        }
        return self::$GO123;
    }
}