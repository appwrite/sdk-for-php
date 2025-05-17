<?php

namespace Appwrite\Enums;

use JsonSerializable;

class BuildRuntime implements JsonSerializable
{
    private static BuildRuntime $NODE145;
    private static BuildRuntime $NODE160;
    private static BuildRuntime $NODE180;
    private static BuildRuntime $NODE190;
    private static BuildRuntime $NODE200;
    private static BuildRuntime $NODE210;
    private static BuildRuntime $NODE22;
    private static BuildRuntime $PHP80;
    private static BuildRuntime $PHP81;
    private static BuildRuntime $PHP82;
    private static BuildRuntime $PHP83;
    private static BuildRuntime $RUBY30;
    private static BuildRuntime $RUBY31;
    private static BuildRuntime $RUBY32;
    private static BuildRuntime $RUBY33;
    private static BuildRuntime $PYTHON38;
    private static BuildRuntime $PYTHON39;
    private static BuildRuntime $PYTHON310;
    private static BuildRuntime $PYTHON311;
    private static BuildRuntime $PYTHON312;
    private static BuildRuntime $PYTHONML311;
    private static BuildRuntime $PYTHONML312;
    private static BuildRuntime $DENO121;
    private static BuildRuntime $DENO124;
    private static BuildRuntime $DENO135;
    private static BuildRuntime $DENO140;
    private static BuildRuntime $DENO146;
    private static BuildRuntime $DENO20;
    private static BuildRuntime $DART215;
    private static BuildRuntime $DART216;
    private static BuildRuntime $DART217;
    private static BuildRuntime $DART218;
    private static BuildRuntime $DART219;
    private static BuildRuntime $DART30;
    private static BuildRuntime $DART31;
    private static BuildRuntime $DART33;
    private static BuildRuntime $DART35;
    private static BuildRuntime $DOTNET60;
    private static BuildRuntime $DOTNET70;
    private static BuildRuntime $DOTNET80;
    private static BuildRuntime $JAVA80;
    private static BuildRuntime $JAVA110;
    private static BuildRuntime $JAVA170;
    private static BuildRuntime $JAVA180;
    private static BuildRuntime $JAVA210;
    private static BuildRuntime $JAVA22;
    private static BuildRuntime $SWIFT55;
    private static BuildRuntime $SWIFT58;
    private static BuildRuntime $SWIFT59;
    private static BuildRuntime $SWIFT510;
    private static BuildRuntime $KOTLIN16;
    private static BuildRuntime $KOTLIN18;
    private static BuildRuntime $KOTLIN19;
    private static BuildRuntime $KOTLIN20;
    private static BuildRuntime $CPP17;
    private static BuildRuntime $CPP20;
    private static BuildRuntime $BUN10;
    private static BuildRuntime $BUN11;
    private static BuildRuntime $GO123;
    private static BuildRuntime $STATIC1;
    private static BuildRuntime $FLUTTER324;
    private static BuildRuntime $FLUTTER327;
    private static BuildRuntime $FLUTTER329;

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

    public static function NODE145(): BuildRuntime
    {
        if (!isset(self::$NODE145)) {
            self::$NODE145 = new BuildRuntime('node-14.5');
        }
        return self::$NODE145;
    }
    public static function NODE160(): BuildRuntime
    {
        if (!isset(self::$NODE160)) {
            self::$NODE160 = new BuildRuntime('node-16.0');
        }
        return self::$NODE160;
    }
    public static function NODE180(): BuildRuntime
    {
        if (!isset(self::$NODE180)) {
            self::$NODE180 = new BuildRuntime('node-18.0');
        }
        return self::$NODE180;
    }
    public static function NODE190(): BuildRuntime
    {
        if (!isset(self::$NODE190)) {
            self::$NODE190 = new BuildRuntime('node-19.0');
        }
        return self::$NODE190;
    }
    public static function NODE200(): BuildRuntime
    {
        if (!isset(self::$NODE200)) {
            self::$NODE200 = new BuildRuntime('node-20.0');
        }
        return self::$NODE200;
    }
    public static function NODE210(): BuildRuntime
    {
        if (!isset(self::$NODE210)) {
            self::$NODE210 = new BuildRuntime('node-21.0');
        }
        return self::$NODE210;
    }
    public static function NODE22(): BuildRuntime
    {
        if (!isset(self::$NODE22)) {
            self::$NODE22 = new BuildRuntime('node-22');
        }
        return self::$NODE22;
    }
    public static function PHP80(): BuildRuntime
    {
        if (!isset(self::$PHP80)) {
            self::$PHP80 = new BuildRuntime('php-8.0');
        }
        return self::$PHP80;
    }
    public static function PHP81(): BuildRuntime
    {
        if (!isset(self::$PHP81)) {
            self::$PHP81 = new BuildRuntime('php-8.1');
        }
        return self::$PHP81;
    }
    public static function PHP82(): BuildRuntime
    {
        if (!isset(self::$PHP82)) {
            self::$PHP82 = new BuildRuntime('php-8.2');
        }
        return self::$PHP82;
    }
    public static function PHP83(): BuildRuntime
    {
        if (!isset(self::$PHP83)) {
            self::$PHP83 = new BuildRuntime('php-8.3');
        }
        return self::$PHP83;
    }
    public static function RUBY30(): BuildRuntime
    {
        if (!isset(self::$RUBY30)) {
            self::$RUBY30 = new BuildRuntime('ruby-3.0');
        }
        return self::$RUBY30;
    }
    public static function RUBY31(): BuildRuntime
    {
        if (!isset(self::$RUBY31)) {
            self::$RUBY31 = new BuildRuntime('ruby-3.1');
        }
        return self::$RUBY31;
    }
    public static function RUBY32(): BuildRuntime
    {
        if (!isset(self::$RUBY32)) {
            self::$RUBY32 = new BuildRuntime('ruby-3.2');
        }
        return self::$RUBY32;
    }
    public static function RUBY33(): BuildRuntime
    {
        if (!isset(self::$RUBY33)) {
            self::$RUBY33 = new BuildRuntime('ruby-3.3');
        }
        return self::$RUBY33;
    }
    public static function PYTHON38(): BuildRuntime
    {
        if (!isset(self::$PYTHON38)) {
            self::$PYTHON38 = new BuildRuntime('python-3.8');
        }
        return self::$PYTHON38;
    }
    public static function PYTHON39(): BuildRuntime
    {
        if (!isset(self::$PYTHON39)) {
            self::$PYTHON39 = new BuildRuntime('python-3.9');
        }
        return self::$PYTHON39;
    }
    public static function PYTHON310(): BuildRuntime
    {
        if (!isset(self::$PYTHON310)) {
            self::$PYTHON310 = new BuildRuntime('python-3.10');
        }
        return self::$PYTHON310;
    }
    public static function PYTHON311(): BuildRuntime
    {
        if (!isset(self::$PYTHON311)) {
            self::$PYTHON311 = new BuildRuntime('python-3.11');
        }
        return self::$PYTHON311;
    }
    public static function PYTHON312(): BuildRuntime
    {
        if (!isset(self::$PYTHON312)) {
            self::$PYTHON312 = new BuildRuntime('python-3.12');
        }
        return self::$PYTHON312;
    }
    public static function PYTHONML311(): BuildRuntime
    {
        if (!isset(self::$PYTHONML311)) {
            self::$PYTHONML311 = new BuildRuntime('python-ml-3.11');
        }
        return self::$PYTHONML311;
    }
    public static function PYTHONML312(): BuildRuntime
    {
        if (!isset(self::$PYTHONML312)) {
            self::$PYTHONML312 = new BuildRuntime('python-ml-3.12');
        }
        return self::$PYTHONML312;
    }
    public static function DENO121(): BuildRuntime
    {
        if (!isset(self::$DENO121)) {
            self::$DENO121 = new BuildRuntime('deno-1.21');
        }
        return self::$DENO121;
    }
    public static function DENO124(): BuildRuntime
    {
        if (!isset(self::$DENO124)) {
            self::$DENO124 = new BuildRuntime('deno-1.24');
        }
        return self::$DENO124;
    }
    public static function DENO135(): BuildRuntime
    {
        if (!isset(self::$DENO135)) {
            self::$DENO135 = new BuildRuntime('deno-1.35');
        }
        return self::$DENO135;
    }
    public static function DENO140(): BuildRuntime
    {
        if (!isset(self::$DENO140)) {
            self::$DENO140 = new BuildRuntime('deno-1.40');
        }
        return self::$DENO140;
    }
    public static function DENO146(): BuildRuntime
    {
        if (!isset(self::$DENO146)) {
            self::$DENO146 = new BuildRuntime('deno-1.46');
        }
        return self::$DENO146;
    }
    public static function DENO20(): BuildRuntime
    {
        if (!isset(self::$DENO20)) {
            self::$DENO20 = new BuildRuntime('deno-2.0');
        }
        return self::$DENO20;
    }
    public static function DART215(): BuildRuntime
    {
        if (!isset(self::$DART215)) {
            self::$DART215 = new BuildRuntime('dart-2.15');
        }
        return self::$DART215;
    }
    public static function DART216(): BuildRuntime
    {
        if (!isset(self::$DART216)) {
            self::$DART216 = new BuildRuntime('dart-2.16');
        }
        return self::$DART216;
    }
    public static function DART217(): BuildRuntime
    {
        if (!isset(self::$DART217)) {
            self::$DART217 = new BuildRuntime('dart-2.17');
        }
        return self::$DART217;
    }
    public static function DART218(): BuildRuntime
    {
        if (!isset(self::$DART218)) {
            self::$DART218 = new BuildRuntime('dart-2.18');
        }
        return self::$DART218;
    }
    public static function DART219(): BuildRuntime
    {
        if (!isset(self::$DART219)) {
            self::$DART219 = new BuildRuntime('dart-2.19');
        }
        return self::$DART219;
    }
    public static function DART30(): BuildRuntime
    {
        if (!isset(self::$DART30)) {
            self::$DART30 = new BuildRuntime('dart-3.0');
        }
        return self::$DART30;
    }
    public static function DART31(): BuildRuntime
    {
        if (!isset(self::$DART31)) {
            self::$DART31 = new BuildRuntime('dart-3.1');
        }
        return self::$DART31;
    }
    public static function DART33(): BuildRuntime
    {
        if (!isset(self::$DART33)) {
            self::$DART33 = new BuildRuntime('dart-3.3');
        }
        return self::$DART33;
    }
    public static function DART35(): BuildRuntime
    {
        if (!isset(self::$DART35)) {
            self::$DART35 = new BuildRuntime('dart-3.5');
        }
        return self::$DART35;
    }
    public static function DOTNET60(): BuildRuntime
    {
        if (!isset(self::$DOTNET60)) {
            self::$DOTNET60 = new BuildRuntime('dotnet-6.0');
        }
        return self::$DOTNET60;
    }
    public static function DOTNET70(): BuildRuntime
    {
        if (!isset(self::$DOTNET70)) {
            self::$DOTNET70 = new BuildRuntime('dotnet-7.0');
        }
        return self::$DOTNET70;
    }
    public static function DOTNET80(): BuildRuntime
    {
        if (!isset(self::$DOTNET80)) {
            self::$DOTNET80 = new BuildRuntime('dotnet-8.0');
        }
        return self::$DOTNET80;
    }
    public static function JAVA80(): BuildRuntime
    {
        if (!isset(self::$JAVA80)) {
            self::$JAVA80 = new BuildRuntime('java-8.0');
        }
        return self::$JAVA80;
    }
    public static function JAVA110(): BuildRuntime
    {
        if (!isset(self::$JAVA110)) {
            self::$JAVA110 = new BuildRuntime('java-11.0');
        }
        return self::$JAVA110;
    }
    public static function JAVA170(): BuildRuntime
    {
        if (!isset(self::$JAVA170)) {
            self::$JAVA170 = new BuildRuntime('java-17.0');
        }
        return self::$JAVA170;
    }
    public static function JAVA180(): BuildRuntime
    {
        if (!isset(self::$JAVA180)) {
            self::$JAVA180 = new BuildRuntime('java-18.0');
        }
        return self::$JAVA180;
    }
    public static function JAVA210(): BuildRuntime
    {
        if (!isset(self::$JAVA210)) {
            self::$JAVA210 = new BuildRuntime('java-21.0');
        }
        return self::$JAVA210;
    }
    public static function JAVA22(): BuildRuntime
    {
        if (!isset(self::$JAVA22)) {
            self::$JAVA22 = new BuildRuntime('java-22');
        }
        return self::$JAVA22;
    }
    public static function SWIFT55(): BuildRuntime
    {
        if (!isset(self::$SWIFT55)) {
            self::$SWIFT55 = new BuildRuntime('swift-5.5');
        }
        return self::$SWIFT55;
    }
    public static function SWIFT58(): BuildRuntime
    {
        if (!isset(self::$SWIFT58)) {
            self::$SWIFT58 = new BuildRuntime('swift-5.8');
        }
        return self::$SWIFT58;
    }
    public static function SWIFT59(): BuildRuntime
    {
        if (!isset(self::$SWIFT59)) {
            self::$SWIFT59 = new BuildRuntime('swift-5.9');
        }
        return self::$SWIFT59;
    }
    public static function SWIFT510(): BuildRuntime
    {
        if (!isset(self::$SWIFT510)) {
            self::$SWIFT510 = new BuildRuntime('swift-5.10');
        }
        return self::$SWIFT510;
    }
    public static function KOTLIN16(): BuildRuntime
    {
        if (!isset(self::$KOTLIN16)) {
            self::$KOTLIN16 = new BuildRuntime('kotlin-1.6');
        }
        return self::$KOTLIN16;
    }
    public static function KOTLIN18(): BuildRuntime
    {
        if (!isset(self::$KOTLIN18)) {
            self::$KOTLIN18 = new BuildRuntime('kotlin-1.8');
        }
        return self::$KOTLIN18;
    }
    public static function KOTLIN19(): BuildRuntime
    {
        if (!isset(self::$KOTLIN19)) {
            self::$KOTLIN19 = new BuildRuntime('kotlin-1.9');
        }
        return self::$KOTLIN19;
    }
    public static function KOTLIN20(): BuildRuntime
    {
        if (!isset(self::$KOTLIN20)) {
            self::$KOTLIN20 = new BuildRuntime('kotlin-2.0');
        }
        return self::$KOTLIN20;
    }
    public static function CPP17(): BuildRuntime
    {
        if (!isset(self::$CPP17)) {
            self::$CPP17 = new BuildRuntime('cpp-17');
        }
        return self::$CPP17;
    }
    public static function CPP20(): BuildRuntime
    {
        if (!isset(self::$CPP20)) {
            self::$CPP20 = new BuildRuntime('cpp-20');
        }
        return self::$CPP20;
    }
    public static function BUN10(): BuildRuntime
    {
        if (!isset(self::$BUN10)) {
            self::$BUN10 = new BuildRuntime('bun-1.0');
        }
        return self::$BUN10;
    }
    public static function BUN11(): BuildRuntime
    {
        if (!isset(self::$BUN11)) {
            self::$BUN11 = new BuildRuntime('bun-1.1');
        }
        return self::$BUN11;
    }
    public static function GO123(): BuildRuntime
    {
        if (!isset(self::$GO123)) {
            self::$GO123 = new BuildRuntime('go-1.23');
        }
        return self::$GO123;
    }
    public static function STATIC1(): BuildRuntime
    {
        if (!isset(self::$STATIC1)) {
            self::$STATIC1 = new BuildRuntime('static-1');
        }
        return self::$STATIC1;
    }
    public static function FLUTTER324(): BuildRuntime
    {
        if (!isset(self::$FLUTTER324)) {
            self::$FLUTTER324 = new BuildRuntime('flutter-3.24');
        }
        return self::$FLUTTER324;
    }
    public static function FLUTTER327(): BuildRuntime
    {
        if (!isset(self::$FLUTTER327)) {
            self::$FLUTTER327 = new BuildRuntime('flutter-3.27');
        }
        return self::$FLUTTER327;
    }
    public static function FLUTTER329(): BuildRuntime
    {
        if (!isset(self::$FLUTTER329)) {
            self::$FLUTTER329 = new BuildRuntime('flutter-3.29');
        }
        return self::$FLUTTER329;
    }
}