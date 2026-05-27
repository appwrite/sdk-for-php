<?php

namespace Appwrite\Enums;

use JsonSerializable;

class SiteBuildRuntime implements JsonSerializable
{
    private static SiteBuildRuntime $NODE145;
    private static SiteBuildRuntime $NODE160;
    private static SiteBuildRuntime $NODE180;
    private static SiteBuildRuntime $NODE190;
    private static SiteBuildRuntime $NODE200;
    private static SiteBuildRuntime $NODE210;
    private static SiteBuildRuntime $NODE22;
    private static SiteBuildRuntime $NODE23;
    private static SiteBuildRuntime $NODE24;
    private static SiteBuildRuntime $NODE25;
    private static SiteBuildRuntime $PHP80;
    private static SiteBuildRuntime $PHP81;
    private static SiteBuildRuntime $PHP82;
    private static SiteBuildRuntime $PHP83;
    private static SiteBuildRuntime $PHP84;
    private static SiteBuildRuntime $RUBY30;
    private static SiteBuildRuntime $RUBY31;
    private static SiteBuildRuntime $RUBY32;
    private static SiteBuildRuntime $RUBY33;
    private static SiteBuildRuntime $RUBY34;
    private static SiteBuildRuntime $RUBY40;
    private static SiteBuildRuntime $PYTHON38;
    private static SiteBuildRuntime $PYTHON39;
    private static SiteBuildRuntime $PYTHON310;
    private static SiteBuildRuntime $PYTHON311;
    private static SiteBuildRuntime $PYTHON312;
    private static SiteBuildRuntime $PYTHON313;
    private static SiteBuildRuntime $PYTHON314;
    private static SiteBuildRuntime $PYTHONML311;
    private static SiteBuildRuntime $PYTHONML312;
    private static SiteBuildRuntime $PYTHONML313;
    private static SiteBuildRuntime $DENO121;
    private static SiteBuildRuntime $DENO124;
    private static SiteBuildRuntime $DENO135;
    private static SiteBuildRuntime $DENO140;
    private static SiteBuildRuntime $DENO146;
    private static SiteBuildRuntime $DENO20;
    private static SiteBuildRuntime $DENO25;
    private static SiteBuildRuntime $DENO26;
    private static SiteBuildRuntime $DART215;
    private static SiteBuildRuntime $DART216;
    private static SiteBuildRuntime $DART217;
    private static SiteBuildRuntime $DART218;
    private static SiteBuildRuntime $DART219;
    private static SiteBuildRuntime $DART30;
    private static SiteBuildRuntime $DART31;
    private static SiteBuildRuntime $DART33;
    private static SiteBuildRuntime $DART35;
    private static SiteBuildRuntime $DART38;
    private static SiteBuildRuntime $DART39;
    private static SiteBuildRuntime $DART310;
    private static SiteBuildRuntime $DART311;
    private static SiteBuildRuntime $DART312;
    private static SiteBuildRuntime $DOTNET60;
    private static SiteBuildRuntime $DOTNET70;
    private static SiteBuildRuntime $DOTNET80;
    private static SiteBuildRuntime $DOTNET10;
    private static SiteBuildRuntime $JAVA80;
    private static SiteBuildRuntime $JAVA110;
    private static SiteBuildRuntime $JAVA170;
    private static SiteBuildRuntime $JAVA180;
    private static SiteBuildRuntime $JAVA210;
    private static SiteBuildRuntime $JAVA22;
    private static SiteBuildRuntime $JAVA25;
    private static SiteBuildRuntime $SWIFT55;
    private static SiteBuildRuntime $SWIFT58;
    private static SiteBuildRuntime $SWIFT59;
    private static SiteBuildRuntime $SWIFT510;
    private static SiteBuildRuntime $SWIFT62;
    private static SiteBuildRuntime $KOTLIN16;
    private static SiteBuildRuntime $KOTLIN18;
    private static SiteBuildRuntime $KOTLIN19;
    private static SiteBuildRuntime $KOTLIN20;
    private static SiteBuildRuntime $KOTLIN23;
    private static SiteBuildRuntime $CPP17;
    private static SiteBuildRuntime $CPP20;
    private static SiteBuildRuntime $BUN10;
    private static SiteBuildRuntime $BUN11;
    private static SiteBuildRuntime $BUN12;
    private static SiteBuildRuntime $BUN13;
    private static SiteBuildRuntime $GO123;
    private static SiteBuildRuntime $GO124;
    private static SiteBuildRuntime $GO125;
    private static SiteBuildRuntime $GO126;
    private static SiteBuildRuntime $RUST183;
    private static SiteBuildRuntime $STATIC1;
    private static SiteBuildRuntime $FLUTTER324;
    private static SiteBuildRuntime $FLUTTER327;
    private static SiteBuildRuntime $FLUTTER329;
    private static SiteBuildRuntime $FLUTTER332;
    private static SiteBuildRuntime $FLUTTER335;
    private static SiteBuildRuntime $FLUTTER338;
    private static SiteBuildRuntime $FLUTTER341;
    private static SiteBuildRuntime $FLUTTER344;

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

    public static function NODE145(): SiteBuildRuntime
    {
        if (!isset(self::$NODE145)) {
            self::$NODE145 = new SiteBuildRuntime('node-14.5');
        }
        return self::$NODE145;
    }
    public static function NODE160(): SiteBuildRuntime
    {
        if (!isset(self::$NODE160)) {
            self::$NODE160 = new SiteBuildRuntime('node-16.0');
        }
        return self::$NODE160;
    }
    public static function NODE180(): SiteBuildRuntime
    {
        if (!isset(self::$NODE180)) {
            self::$NODE180 = new SiteBuildRuntime('node-18.0');
        }
        return self::$NODE180;
    }
    public static function NODE190(): SiteBuildRuntime
    {
        if (!isset(self::$NODE190)) {
            self::$NODE190 = new SiteBuildRuntime('node-19.0');
        }
        return self::$NODE190;
    }
    public static function NODE200(): SiteBuildRuntime
    {
        if (!isset(self::$NODE200)) {
            self::$NODE200 = new SiteBuildRuntime('node-20.0');
        }
        return self::$NODE200;
    }
    public static function NODE210(): SiteBuildRuntime
    {
        if (!isset(self::$NODE210)) {
            self::$NODE210 = new SiteBuildRuntime('node-21.0');
        }
        return self::$NODE210;
    }
    public static function NODE22(): SiteBuildRuntime
    {
        if (!isset(self::$NODE22)) {
            self::$NODE22 = new SiteBuildRuntime('node-22');
        }
        return self::$NODE22;
    }
    public static function NODE23(): SiteBuildRuntime
    {
        if (!isset(self::$NODE23)) {
            self::$NODE23 = new SiteBuildRuntime('node-23');
        }
        return self::$NODE23;
    }
    public static function NODE24(): SiteBuildRuntime
    {
        if (!isset(self::$NODE24)) {
            self::$NODE24 = new SiteBuildRuntime('node-24');
        }
        return self::$NODE24;
    }
    public static function NODE25(): SiteBuildRuntime
    {
        if (!isset(self::$NODE25)) {
            self::$NODE25 = new SiteBuildRuntime('node-25');
        }
        return self::$NODE25;
    }
    public static function PHP80(): SiteBuildRuntime
    {
        if (!isset(self::$PHP80)) {
            self::$PHP80 = new SiteBuildRuntime('php-8.0');
        }
        return self::$PHP80;
    }
    public static function PHP81(): SiteBuildRuntime
    {
        if (!isset(self::$PHP81)) {
            self::$PHP81 = new SiteBuildRuntime('php-8.1');
        }
        return self::$PHP81;
    }
    public static function PHP82(): SiteBuildRuntime
    {
        if (!isset(self::$PHP82)) {
            self::$PHP82 = new SiteBuildRuntime('php-8.2');
        }
        return self::$PHP82;
    }
    public static function PHP83(): SiteBuildRuntime
    {
        if (!isset(self::$PHP83)) {
            self::$PHP83 = new SiteBuildRuntime('php-8.3');
        }
        return self::$PHP83;
    }
    public static function PHP84(): SiteBuildRuntime
    {
        if (!isset(self::$PHP84)) {
            self::$PHP84 = new SiteBuildRuntime('php-8.4');
        }
        return self::$PHP84;
    }
    public static function RUBY30(): SiteBuildRuntime
    {
        if (!isset(self::$RUBY30)) {
            self::$RUBY30 = new SiteBuildRuntime('ruby-3.0');
        }
        return self::$RUBY30;
    }
    public static function RUBY31(): SiteBuildRuntime
    {
        if (!isset(self::$RUBY31)) {
            self::$RUBY31 = new SiteBuildRuntime('ruby-3.1');
        }
        return self::$RUBY31;
    }
    public static function RUBY32(): SiteBuildRuntime
    {
        if (!isset(self::$RUBY32)) {
            self::$RUBY32 = new SiteBuildRuntime('ruby-3.2');
        }
        return self::$RUBY32;
    }
    public static function RUBY33(): SiteBuildRuntime
    {
        if (!isset(self::$RUBY33)) {
            self::$RUBY33 = new SiteBuildRuntime('ruby-3.3');
        }
        return self::$RUBY33;
    }
    public static function RUBY34(): SiteBuildRuntime
    {
        if (!isset(self::$RUBY34)) {
            self::$RUBY34 = new SiteBuildRuntime('ruby-3.4');
        }
        return self::$RUBY34;
    }
    public static function RUBY40(): SiteBuildRuntime
    {
        if (!isset(self::$RUBY40)) {
            self::$RUBY40 = new SiteBuildRuntime('ruby-4.0');
        }
        return self::$RUBY40;
    }
    public static function PYTHON38(): SiteBuildRuntime
    {
        if (!isset(self::$PYTHON38)) {
            self::$PYTHON38 = new SiteBuildRuntime('python-3.8');
        }
        return self::$PYTHON38;
    }
    public static function PYTHON39(): SiteBuildRuntime
    {
        if (!isset(self::$PYTHON39)) {
            self::$PYTHON39 = new SiteBuildRuntime('python-3.9');
        }
        return self::$PYTHON39;
    }
    public static function PYTHON310(): SiteBuildRuntime
    {
        if (!isset(self::$PYTHON310)) {
            self::$PYTHON310 = new SiteBuildRuntime('python-3.10');
        }
        return self::$PYTHON310;
    }
    public static function PYTHON311(): SiteBuildRuntime
    {
        if (!isset(self::$PYTHON311)) {
            self::$PYTHON311 = new SiteBuildRuntime('python-3.11');
        }
        return self::$PYTHON311;
    }
    public static function PYTHON312(): SiteBuildRuntime
    {
        if (!isset(self::$PYTHON312)) {
            self::$PYTHON312 = new SiteBuildRuntime('python-3.12');
        }
        return self::$PYTHON312;
    }
    public static function PYTHON313(): SiteBuildRuntime
    {
        if (!isset(self::$PYTHON313)) {
            self::$PYTHON313 = new SiteBuildRuntime('python-3.13');
        }
        return self::$PYTHON313;
    }
    public static function PYTHON314(): SiteBuildRuntime
    {
        if (!isset(self::$PYTHON314)) {
            self::$PYTHON314 = new SiteBuildRuntime('python-3.14');
        }
        return self::$PYTHON314;
    }
    public static function PYTHONML311(): SiteBuildRuntime
    {
        if (!isset(self::$PYTHONML311)) {
            self::$PYTHONML311 = new SiteBuildRuntime('python-ml-3.11');
        }
        return self::$PYTHONML311;
    }
    public static function PYTHONML312(): SiteBuildRuntime
    {
        if (!isset(self::$PYTHONML312)) {
            self::$PYTHONML312 = new SiteBuildRuntime('python-ml-3.12');
        }
        return self::$PYTHONML312;
    }
    public static function PYTHONML313(): SiteBuildRuntime
    {
        if (!isset(self::$PYTHONML313)) {
            self::$PYTHONML313 = new SiteBuildRuntime('python-ml-3.13');
        }
        return self::$PYTHONML313;
    }
    public static function DENO121(): SiteBuildRuntime
    {
        if (!isset(self::$DENO121)) {
            self::$DENO121 = new SiteBuildRuntime('deno-1.21');
        }
        return self::$DENO121;
    }
    public static function DENO124(): SiteBuildRuntime
    {
        if (!isset(self::$DENO124)) {
            self::$DENO124 = new SiteBuildRuntime('deno-1.24');
        }
        return self::$DENO124;
    }
    public static function DENO135(): SiteBuildRuntime
    {
        if (!isset(self::$DENO135)) {
            self::$DENO135 = new SiteBuildRuntime('deno-1.35');
        }
        return self::$DENO135;
    }
    public static function DENO140(): SiteBuildRuntime
    {
        if (!isset(self::$DENO140)) {
            self::$DENO140 = new SiteBuildRuntime('deno-1.40');
        }
        return self::$DENO140;
    }
    public static function DENO146(): SiteBuildRuntime
    {
        if (!isset(self::$DENO146)) {
            self::$DENO146 = new SiteBuildRuntime('deno-1.46');
        }
        return self::$DENO146;
    }
    public static function DENO20(): SiteBuildRuntime
    {
        if (!isset(self::$DENO20)) {
            self::$DENO20 = new SiteBuildRuntime('deno-2.0');
        }
        return self::$DENO20;
    }
    public static function DENO25(): SiteBuildRuntime
    {
        if (!isset(self::$DENO25)) {
            self::$DENO25 = new SiteBuildRuntime('deno-2.5');
        }
        return self::$DENO25;
    }
    public static function DENO26(): SiteBuildRuntime
    {
        if (!isset(self::$DENO26)) {
            self::$DENO26 = new SiteBuildRuntime('deno-2.6');
        }
        return self::$DENO26;
    }
    public static function DART215(): SiteBuildRuntime
    {
        if (!isset(self::$DART215)) {
            self::$DART215 = new SiteBuildRuntime('dart-2.15');
        }
        return self::$DART215;
    }
    public static function DART216(): SiteBuildRuntime
    {
        if (!isset(self::$DART216)) {
            self::$DART216 = new SiteBuildRuntime('dart-2.16');
        }
        return self::$DART216;
    }
    public static function DART217(): SiteBuildRuntime
    {
        if (!isset(self::$DART217)) {
            self::$DART217 = new SiteBuildRuntime('dart-2.17');
        }
        return self::$DART217;
    }
    public static function DART218(): SiteBuildRuntime
    {
        if (!isset(self::$DART218)) {
            self::$DART218 = new SiteBuildRuntime('dart-2.18');
        }
        return self::$DART218;
    }
    public static function DART219(): SiteBuildRuntime
    {
        if (!isset(self::$DART219)) {
            self::$DART219 = new SiteBuildRuntime('dart-2.19');
        }
        return self::$DART219;
    }
    public static function DART30(): SiteBuildRuntime
    {
        if (!isset(self::$DART30)) {
            self::$DART30 = new SiteBuildRuntime('dart-3.0');
        }
        return self::$DART30;
    }
    public static function DART31(): SiteBuildRuntime
    {
        if (!isset(self::$DART31)) {
            self::$DART31 = new SiteBuildRuntime('dart-3.1');
        }
        return self::$DART31;
    }
    public static function DART33(): SiteBuildRuntime
    {
        if (!isset(self::$DART33)) {
            self::$DART33 = new SiteBuildRuntime('dart-3.3');
        }
        return self::$DART33;
    }
    public static function DART35(): SiteBuildRuntime
    {
        if (!isset(self::$DART35)) {
            self::$DART35 = new SiteBuildRuntime('dart-3.5');
        }
        return self::$DART35;
    }
    public static function DART38(): SiteBuildRuntime
    {
        if (!isset(self::$DART38)) {
            self::$DART38 = new SiteBuildRuntime('dart-3.8');
        }
        return self::$DART38;
    }
    public static function DART39(): SiteBuildRuntime
    {
        if (!isset(self::$DART39)) {
            self::$DART39 = new SiteBuildRuntime('dart-3.9');
        }
        return self::$DART39;
    }
    public static function DART310(): SiteBuildRuntime
    {
        if (!isset(self::$DART310)) {
            self::$DART310 = new SiteBuildRuntime('dart-3.10');
        }
        return self::$DART310;
    }
    public static function DART311(): SiteBuildRuntime
    {
        if (!isset(self::$DART311)) {
            self::$DART311 = new SiteBuildRuntime('dart-3.11');
        }
        return self::$DART311;
    }
    public static function DART312(): SiteBuildRuntime
    {
        if (!isset(self::$DART312)) {
            self::$DART312 = new SiteBuildRuntime('dart-3.12');
        }
        return self::$DART312;
    }
    public static function DOTNET60(): SiteBuildRuntime
    {
        if (!isset(self::$DOTNET60)) {
            self::$DOTNET60 = new SiteBuildRuntime('dotnet-6.0');
        }
        return self::$DOTNET60;
    }
    public static function DOTNET70(): SiteBuildRuntime
    {
        if (!isset(self::$DOTNET70)) {
            self::$DOTNET70 = new SiteBuildRuntime('dotnet-7.0');
        }
        return self::$DOTNET70;
    }
    public static function DOTNET80(): SiteBuildRuntime
    {
        if (!isset(self::$DOTNET80)) {
            self::$DOTNET80 = new SiteBuildRuntime('dotnet-8.0');
        }
        return self::$DOTNET80;
    }
    public static function DOTNET10(): SiteBuildRuntime
    {
        if (!isset(self::$DOTNET10)) {
            self::$DOTNET10 = new SiteBuildRuntime('dotnet-10');
        }
        return self::$DOTNET10;
    }
    public static function JAVA80(): SiteBuildRuntime
    {
        if (!isset(self::$JAVA80)) {
            self::$JAVA80 = new SiteBuildRuntime('java-8.0');
        }
        return self::$JAVA80;
    }
    public static function JAVA110(): SiteBuildRuntime
    {
        if (!isset(self::$JAVA110)) {
            self::$JAVA110 = new SiteBuildRuntime('java-11.0');
        }
        return self::$JAVA110;
    }
    public static function JAVA170(): SiteBuildRuntime
    {
        if (!isset(self::$JAVA170)) {
            self::$JAVA170 = new SiteBuildRuntime('java-17.0');
        }
        return self::$JAVA170;
    }
    public static function JAVA180(): SiteBuildRuntime
    {
        if (!isset(self::$JAVA180)) {
            self::$JAVA180 = new SiteBuildRuntime('java-18.0');
        }
        return self::$JAVA180;
    }
    public static function JAVA210(): SiteBuildRuntime
    {
        if (!isset(self::$JAVA210)) {
            self::$JAVA210 = new SiteBuildRuntime('java-21.0');
        }
        return self::$JAVA210;
    }
    public static function JAVA22(): SiteBuildRuntime
    {
        if (!isset(self::$JAVA22)) {
            self::$JAVA22 = new SiteBuildRuntime('java-22');
        }
        return self::$JAVA22;
    }
    public static function JAVA25(): SiteBuildRuntime
    {
        if (!isset(self::$JAVA25)) {
            self::$JAVA25 = new SiteBuildRuntime('java-25');
        }
        return self::$JAVA25;
    }
    public static function SWIFT55(): SiteBuildRuntime
    {
        if (!isset(self::$SWIFT55)) {
            self::$SWIFT55 = new SiteBuildRuntime('swift-5.5');
        }
        return self::$SWIFT55;
    }
    public static function SWIFT58(): SiteBuildRuntime
    {
        if (!isset(self::$SWIFT58)) {
            self::$SWIFT58 = new SiteBuildRuntime('swift-5.8');
        }
        return self::$SWIFT58;
    }
    public static function SWIFT59(): SiteBuildRuntime
    {
        if (!isset(self::$SWIFT59)) {
            self::$SWIFT59 = new SiteBuildRuntime('swift-5.9');
        }
        return self::$SWIFT59;
    }
    public static function SWIFT510(): SiteBuildRuntime
    {
        if (!isset(self::$SWIFT510)) {
            self::$SWIFT510 = new SiteBuildRuntime('swift-5.10');
        }
        return self::$SWIFT510;
    }
    public static function SWIFT62(): SiteBuildRuntime
    {
        if (!isset(self::$SWIFT62)) {
            self::$SWIFT62 = new SiteBuildRuntime('swift-6.2');
        }
        return self::$SWIFT62;
    }
    public static function KOTLIN16(): SiteBuildRuntime
    {
        if (!isset(self::$KOTLIN16)) {
            self::$KOTLIN16 = new SiteBuildRuntime('kotlin-1.6');
        }
        return self::$KOTLIN16;
    }
    public static function KOTLIN18(): SiteBuildRuntime
    {
        if (!isset(self::$KOTLIN18)) {
            self::$KOTLIN18 = new SiteBuildRuntime('kotlin-1.8');
        }
        return self::$KOTLIN18;
    }
    public static function KOTLIN19(): SiteBuildRuntime
    {
        if (!isset(self::$KOTLIN19)) {
            self::$KOTLIN19 = new SiteBuildRuntime('kotlin-1.9');
        }
        return self::$KOTLIN19;
    }
    public static function KOTLIN20(): SiteBuildRuntime
    {
        if (!isset(self::$KOTLIN20)) {
            self::$KOTLIN20 = new SiteBuildRuntime('kotlin-2.0');
        }
        return self::$KOTLIN20;
    }
    public static function KOTLIN23(): SiteBuildRuntime
    {
        if (!isset(self::$KOTLIN23)) {
            self::$KOTLIN23 = new SiteBuildRuntime('kotlin-2.3');
        }
        return self::$KOTLIN23;
    }
    public static function CPP17(): SiteBuildRuntime
    {
        if (!isset(self::$CPP17)) {
            self::$CPP17 = new SiteBuildRuntime('cpp-17');
        }
        return self::$CPP17;
    }
    public static function CPP20(): SiteBuildRuntime
    {
        if (!isset(self::$CPP20)) {
            self::$CPP20 = new SiteBuildRuntime('cpp-20');
        }
        return self::$CPP20;
    }
    public static function BUN10(): SiteBuildRuntime
    {
        if (!isset(self::$BUN10)) {
            self::$BUN10 = new SiteBuildRuntime('bun-1.0');
        }
        return self::$BUN10;
    }
    public static function BUN11(): SiteBuildRuntime
    {
        if (!isset(self::$BUN11)) {
            self::$BUN11 = new SiteBuildRuntime('bun-1.1');
        }
        return self::$BUN11;
    }
    public static function BUN12(): SiteBuildRuntime
    {
        if (!isset(self::$BUN12)) {
            self::$BUN12 = new SiteBuildRuntime('bun-1.2');
        }
        return self::$BUN12;
    }
    public static function BUN13(): SiteBuildRuntime
    {
        if (!isset(self::$BUN13)) {
            self::$BUN13 = new SiteBuildRuntime('bun-1.3');
        }
        return self::$BUN13;
    }
    public static function GO123(): SiteBuildRuntime
    {
        if (!isset(self::$GO123)) {
            self::$GO123 = new SiteBuildRuntime('go-1.23');
        }
        return self::$GO123;
    }
    public static function GO124(): SiteBuildRuntime
    {
        if (!isset(self::$GO124)) {
            self::$GO124 = new SiteBuildRuntime('go-1.24');
        }
        return self::$GO124;
    }
    public static function GO125(): SiteBuildRuntime
    {
        if (!isset(self::$GO125)) {
            self::$GO125 = new SiteBuildRuntime('go-1.25');
        }
        return self::$GO125;
    }
    public static function GO126(): SiteBuildRuntime
    {
        if (!isset(self::$GO126)) {
            self::$GO126 = new SiteBuildRuntime('go-1.26');
        }
        return self::$GO126;
    }
    public static function RUST183(): SiteBuildRuntime
    {
        if (!isset(self::$RUST183)) {
            self::$RUST183 = new SiteBuildRuntime('rust-1.83');
        }
        return self::$RUST183;
    }
    public static function STATIC1(): SiteBuildRuntime
    {
        if (!isset(self::$STATIC1)) {
            self::$STATIC1 = new SiteBuildRuntime('static-1');
        }
        return self::$STATIC1;
    }
    public static function FLUTTER324(): SiteBuildRuntime
    {
        if (!isset(self::$FLUTTER324)) {
            self::$FLUTTER324 = new SiteBuildRuntime('flutter-3.24');
        }
        return self::$FLUTTER324;
    }
    public static function FLUTTER327(): SiteBuildRuntime
    {
        if (!isset(self::$FLUTTER327)) {
            self::$FLUTTER327 = new SiteBuildRuntime('flutter-3.27');
        }
        return self::$FLUTTER327;
    }
    public static function FLUTTER329(): SiteBuildRuntime
    {
        if (!isset(self::$FLUTTER329)) {
            self::$FLUTTER329 = new SiteBuildRuntime('flutter-3.29');
        }
        return self::$FLUTTER329;
    }
    public static function FLUTTER332(): SiteBuildRuntime
    {
        if (!isset(self::$FLUTTER332)) {
            self::$FLUTTER332 = new SiteBuildRuntime('flutter-3.32');
        }
        return self::$FLUTTER332;
    }
    public static function FLUTTER335(): SiteBuildRuntime
    {
        if (!isset(self::$FLUTTER335)) {
            self::$FLUTTER335 = new SiteBuildRuntime('flutter-3.35');
        }
        return self::$FLUTTER335;
    }
    public static function FLUTTER338(): SiteBuildRuntime
    {
        if (!isset(self::$FLUTTER338)) {
            self::$FLUTTER338 = new SiteBuildRuntime('flutter-3.38');
        }
        return self::$FLUTTER338;
    }
    public static function FLUTTER341(): SiteBuildRuntime
    {
        if (!isset(self::$FLUTTER341)) {
            self::$FLUTTER341 = new SiteBuildRuntime('flutter-3.41');
        }
        return self::$FLUTTER341;
    }
    public static function FLUTTER344(): SiteBuildRuntime
    {
        if (!isset(self::$FLUTTER344)) {
            self::$FLUTTER344 = new SiteBuildRuntime('flutter-3.44');
        }
        return self::$FLUTTER344;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'node-14.5' => self::NODE145(),
            'node-16.0' => self::NODE160(),
            'node-18.0' => self::NODE180(),
            'node-19.0' => self::NODE190(),
            'node-20.0' => self::NODE200(),
            'node-21.0' => self::NODE210(),
            'node-22' => self::NODE22(),
            'node-23' => self::NODE23(),
            'node-24' => self::NODE24(),
            'node-25' => self::NODE25(),
            'php-8.0' => self::PHP80(),
            'php-8.1' => self::PHP81(),
            'php-8.2' => self::PHP82(),
            'php-8.3' => self::PHP83(),
            'php-8.4' => self::PHP84(),
            'ruby-3.0' => self::RUBY30(),
            'ruby-3.1' => self::RUBY31(),
            'ruby-3.2' => self::RUBY32(),
            'ruby-3.3' => self::RUBY33(),
            'ruby-3.4' => self::RUBY34(),
            'ruby-4.0' => self::RUBY40(),
            'python-3.8' => self::PYTHON38(),
            'python-3.9' => self::PYTHON39(),
            'python-3.10' => self::PYTHON310(),
            'python-3.11' => self::PYTHON311(),
            'python-3.12' => self::PYTHON312(),
            'python-3.13' => self::PYTHON313(),
            'python-3.14' => self::PYTHON314(),
            'python-ml-3.11' => self::PYTHONML311(),
            'python-ml-3.12' => self::PYTHONML312(),
            'python-ml-3.13' => self::PYTHONML313(),
            'deno-1.21' => self::DENO121(),
            'deno-1.24' => self::DENO124(),
            'deno-1.35' => self::DENO135(),
            'deno-1.40' => self::DENO140(),
            'deno-1.46' => self::DENO146(),
            'deno-2.0' => self::DENO20(),
            'deno-2.5' => self::DENO25(),
            'deno-2.6' => self::DENO26(),
            'dart-2.15' => self::DART215(),
            'dart-2.16' => self::DART216(),
            'dart-2.17' => self::DART217(),
            'dart-2.18' => self::DART218(),
            'dart-2.19' => self::DART219(),
            'dart-3.0' => self::DART30(),
            'dart-3.1' => self::DART31(),
            'dart-3.3' => self::DART33(),
            'dart-3.5' => self::DART35(),
            'dart-3.8' => self::DART38(),
            'dart-3.9' => self::DART39(),
            'dart-3.10' => self::DART310(),
            'dart-3.11' => self::DART311(),
            'dart-3.12' => self::DART312(),
            'dotnet-6.0' => self::DOTNET60(),
            'dotnet-7.0' => self::DOTNET70(),
            'dotnet-8.0' => self::DOTNET80(),
            'dotnet-10' => self::DOTNET10(),
            'java-8.0' => self::JAVA80(),
            'java-11.0' => self::JAVA110(),
            'java-17.0' => self::JAVA170(),
            'java-18.0' => self::JAVA180(),
            'java-21.0' => self::JAVA210(),
            'java-22' => self::JAVA22(),
            'java-25' => self::JAVA25(),
            'swift-5.5' => self::SWIFT55(),
            'swift-5.8' => self::SWIFT58(),
            'swift-5.9' => self::SWIFT59(),
            'swift-5.10' => self::SWIFT510(),
            'swift-6.2' => self::SWIFT62(),
            'kotlin-1.6' => self::KOTLIN16(),
            'kotlin-1.8' => self::KOTLIN18(),
            'kotlin-1.9' => self::KOTLIN19(),
            'kotlin-2.0' => self::KOTLIN20(),
            'kotlin-2.3' => self::KOTLIN23(),
            'cpp-17' => self::CPP17(),
            'cpp-20' => self::CPP20(),
            'bun-1.0' => self::BUN10(),
            'bun-1.1' => self::BUN11(),
            'bun-1.2' => self::BUN12(),
            'bun-1.3' => self::BUN13(),
            'go-1.23' => self::GO123(),
            'go-1.24' => self::GO124(),
            'go-1.25' => self::GO125(),
            'go-1.26' => self::GO126(),
            'rust-1.83' => self::RUST183(),
            'static-1' => self::STATIC1(),
            'flutter-3.24' => self::FLUTTER324(),
            'flutter-3.27' => self::FLUTTER327(),
            'flutter-3.29' => self::FLUTTER329(),
            'flutter-3.32' => self::FLUTTER332(),
            'flutter-3.35' => self::FLUTTER335(),
            'flutter-3.38' => self::FLUTTER338(),
            'flutter-3.41' => self::FLUTTER341(),
            'flutter-3.44' => self::FLUTTER344(),
            default => throw new \InvalidArgumentException('Unknown SiteBuildRuntime value: ' . $value),
        };
    }
}
