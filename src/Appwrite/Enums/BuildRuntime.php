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
    private static BuildRuntime $NODE23;
    private static BuildRuntime $NODE24;
    private static BuildRuntime $NODE25;
    private static BuildRuntime $PHP80;
    private static BuildRuntime $PHP81;
    private static BuildRuntime $PHP82;
    private static BuildRuntime $PHP83;
    private static BuildRuntime $PHP84;
    private static BuildRuntime $RUBY30;
    private static BuildRuntime $RUBY31;
    private static BuildRuntime $RUBY32;
    private static BuildRuntime $RUBY33;
    private static BuildRuntime $RUBY34;
    private static BuildRuntime $RUBY40;
    private static BuildRuntime $PYTHON38;
    private static BuildRuntime $PYTHON39;
    private static BuildRuntime $PYTHON310;
    private static BuildRuntime $PYTHON311;
    private static BuildRuntime $PYTHON312;
    private static BuildRuntime $PYTHON313;
    private static BuildRuntime $PYTHON314;
    private static BuildRuntime $PYTHONML311;
    private static BuildRuntime $PYTHONML312;
    private static BuildRuntime $PYTHONML313;
    private static BuildRuntime $DENO140;
    private static BuildRuntime $DENO146;
    private static BuildRuntime $DENO20;
    private static BuildRuntime $DENO25;
    private static BuildRuntime $DENO26;
    private static BuildRuntime $DART215;
    private static BuildRuntime $DART216;
    private static BuildRuntime $DART217;
    private static BuildRuntime $DART218;
    private static BuildRuntime $DART219;
    private static BuildRuntime $DART30;
    private static BuildRuntime $DART31;
    private static BuildRuntime $DART33;
    private static BuildRuntime $DART35;
    private static BuildRuntime $DART38;
    private static BuildRuntime $DART39;
    private static BuildRuntime $DART310;
    private static BuildRuntime $DOTNET60;
    private static BuildRuntime $DOTNET70;
    private static BuildRuntime $DOTNET80;
    private static BuildRuntime $DOTNET10;
    private static BuildRuntime $JAVA80;
    private static BuildRuntime $JAVA110;
    private static BuildRuntime $JAVA170;
    private static BuildRuntime $JAVA180;
    private static BuildRuntime $JAVA210;
    private static BuildRuntime $JAVA22;
    private static BuildRuntime $JAVA25;
    private static BuildRuntime $SWIFT55;
    private static BuildRuntime $SWIFT58;
    private static BuildRuntime $SWIFT59;
    private static BuildRuntime $SWIFT510;
    private static BuildRuntime $SWIFT62;
    private static BuildRuntime $KOTLIN16;
    private static BuildRuntime $KOTLIN18;
    private static BuildRuntime $KOTLIN19;
    private static BuildRuntime $KOTLIN20;
    private static BuildRuntime $KOTLIN23;
    private static BuildRuntime $CPP17;
    private static BuildRuntime $CPP20;
    private static BuildRuntime $BUN10;
    private static BuildRuntime $BUN11;
    private static BuildRuntime $BUN12;
    private static BuildRuntime $BUN13;
    private static BuildRuntime $GO123;
    private static BuildRuntime $GO124;
    private static BuildRuntime $GO125;
    private static BuildRuntime $GO126;
    private static BuildRuntime $STATIC1;
    private static BuildRuntime $FLUTTER324;
    private static BuildRuntime $FLUTTER327;
    private static BuildRuntime $FLUTTER329;
    private static BuildRuntime $FLUTTER332;
    private static BuildRuntime $FLUTTER335;
    private static BuildRuntime $FLUTTER338;
    private static BuildRuntime $NODE145RC;
    private static BuildRuntime $NODE160RC;
    private static BuildRuntime $NODE180RC;
    private static BuildRuntime $NODE190RC;
    private static BuildRuntime $NODE200RC;
    private static BuildRuntime $NODE210RC;
    private static BuildRuntime $NODE22RC;
    private static BuildRuntime $NODE23RC;
    private static BuildRuntime $NODE24RC;
    private static BuildRuntime $NODE25RC;
    private static BuildRuntime $PHP80RC;
    private static BuildRuntime $PHP81RC;
    private static BuildRuntime $PHP82RC;
    private static BuildRuntime $PHP83RC;
    private static BuildRuntime $PHP84RC;
    private static BuildRuntime $RUBY30RC;
    private static BuildRuntime $RUBY31RC;
    private static BuildRuntime $RUBY32RC;
    private static BuildRuntime $RUBY33RC;
    private static BuildRuntime $RUBY34RC;
    private static BuildRuntime $RUBY40RC;
    private static BuildRuntime $PYTHON38RC;
    private static BuildRuntime $PYTHON39RC;
    private static BuildRuntime $PYTHON310RC;
    private static BuildRuntime $PYTHON311RC;
    private static BuildRuntime $PYTHON312RC;
    private static BuildRuntime $PYTHON313RC;
    private static BuildRuntime $PYTHON314RC;
    private static BuildRuntime $PYTHONML311RC;
    private static BuildRuntime $PYTHONML312RC;
    private static BuildRuntime $PYTHONML313RC;
    private static BuildRuntime $DENO140RC;
    private static BuildRuntime $DENO146RC;
    private static BuildRuntime $DENO20RC;
    private static BuildRuntime $DENO25RC;
    private static BuildRuntime $DENO26RC;
    private static BuildRuntime $DART215RC;
    private static BuildRuntime $DART216RC;
    private static BuildRuntime $DART217RC;
    private static BuildRuntime $DART218RC;
    private static BuildRuntime $DART219RC;
    private static BuildRuntime $DART30RC;
    private static BuildRuntime $DART31RC;
    private static BuildRuntime $DART33RC;
    private static BuildRuntime $DART35RC;
    private static BuildRuntime $DART38RC;
    private static BuildRuntime $DART39RC;
    private static BuildRuntime $DART310RC;
    private static BuildRuntime $DOTNET60RC;
    private static BuildRuntime $DOTNET70RC;
    private static BuildRuntime $DOTNET80RC;
    private static BuildRuntime $DOTNET10RC;
    private static BuildRuntime $JAVA80RC;
    private static BuildRuntime $JAVA110RC;
    private static BuildRuntime $JAVA170RC;
    private static BuildRuntime $JAVA180RC;
    private static BuildRuntime $JAVA210RC;
    private static BuildRuntime $JAVA22RC;
    private static BuildRuntime $JAVA25RC;
    private static BuildRuntime $SWIFT55RC;
    private static BuildRuntime $SWIFT58RC;
    private static BuildRuntime $SWIFT59RC;
    private static BuildRuntime $SWIFT510RC;
    private static BuildRuntime $SWIFT62RC;
    private static BuildRuntime $KOTLIN16RC;
    private static BuildRuntime $KOTLIN18RC;
    private static BuildRuntime $KOTLIN19RC;
    private static BuildRuntime $KOTLIN20RC;
    private static BuildRuntime $KOTLIN23RC;
    private static BuildRuntime $CPP17RC;
    private static BuildRuntime $CPP20RC;
    private static BuildRuntime $BUN10RC;
    private static BuildRuntime $BUN11RC;
    private static BuildRuntime $BUN12RC;
    private static BuildRuntime $BUN13RC;
    private static BuildRuntime $GO123RC;
    private static BuildRuntime $GO124RC;
    private static BuildRuntime $GO125RC;
    private static BuildRuntime $GO126RC;
    private static BuildRuntime $STATIC1RC;
    private static BuildRuntime $FLUTTER324RC;
    private static BuildRuntime $FLUTTER327RC;
    private static BuildRuntime $FLUTTER329RC;
    private static BuildRuntime $FLUTTER332RC;
    private static BuildRuntime $FLUTTER335RC;
    private static BuildRuntime $FLUTTER338RC;

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
    public static function NODE23(): BuildRuntime
    {
        if (!isset(self::$NODE23)) {
            self::$NODE23 = new BuildRuntime('node-23');
        }
        return self::$NODE23;
    }
    public static function NODE24(): BuildRuntime
    {
        if (!isset(self::$NODE24)) {
            self::$NODE24 = new BuildRuntime('node-24');
        }
        return self::$NODE24;
    }
    public static function NODE25(): BuildRuntime
    {
        if (!isset(self::$NODE25)) {
            self::$NODE25 = new BuildRuntime('node-25');
        }
        return self::$NODE25;
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
    public static function PHP84(): BuildRuntime
    {
        if (!isset(self::$PHP84)) {
            self::$PHP84 = new BuildRuntime('php-8.4');
        }
        return self::$PHP84;
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
    public static function RUBY34(): BuildRuntime
    {
        if (!isset(self::$RUBY34)) {
            self::$RUBY34 = new BuildRuntime('ruby-3.4');
        }
        return self::$RUBY34;
    }
    public static function RUBY40(): BuildRuntime
    {
        if (!isset(self::$RUBY40)) {
            self::$RUBY40 = new BuildRuntime('ruby-4.0');
        }
        return self::$RUBY40;
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
    public static function PYTHON313(): BuildRuntime
    {
        if (!isset(self::$PYTHON313)) {
            self::$PYTHON313 = new BuildRuntime('python-3.13');
        }
        return self::$PYTHON313;
    }
    public static function PYTHON314(): BuildRuntime
    {
        if (!isset(self::$PYTHON314)) {
            self::$PYTHON314 = new BuildRuntime('python-3.14');
        }
        return self::$PYTHON314;
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
    public static function PYTHONML313(): BuildRuntime
    {
        if (!isset(self::$PYTHONML313)) {
            self::$PYTHONML313 = new BuildRuntime('python-ml-3.13');
        }
        return self::$PYTHONML313;
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
    public static function DENO25(): BuildRuntime
    {
        if (!isset(self::$DENO25)) {
            self::$DENO25 = new BuildRuntime('deno-2.5');
        }
        return self::$DENO25;
    }
    public static function DENO26(): BuildRuntime
    {
        if (!isset(self::$DENO26)) {
            self::$DENO26 = new BuildRuntime('deno-2.6');
        }
        return self::$DENO26;
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
    public static function DART38(): BuildRuntime
    {
        if (!isset(self::$DART38)) {
            self::$DART38 = new BuildRuntime('dart-3.8');
        }
        return self::$DART38;
    }
    public static function DART39(): BuildRuntime
    {
        if (!isset(self::$DART39)) {
            self::$DART39 = new BuildRuntime('dart-3.9');
        }
        return self::$DART39;
    }
    public static function DART310(): BuildRuntime
    {
        if (!isset(self::$DART310)) {
            self::$DART310 = new BuildRuntime('dart-3.10');
        }
        return self::$DART310;
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
    public static function DOTNET10(): BuildRuntime
    {
        if (!isset(self::$DOTNET10)) {
            self::$DOTNET10 = new BuildRuntime('dotnet-10');
        }
        return self::$DOTNET10;
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
    public static function JAVA25(): BuildRuntime
    {
        if (!isset(self::$JAVA25)) {
            self::$JAVA25 = new BuildRuntime('java-25');
        }
        return self::$JAVA25;
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
    public static function SWIFT62(): BuildRuntime
    {
        if (!isset(self::$SWIFT62)) {
            self::$SWIFT62 = new BuildRuntime('swift-6.2');
        }
        return self::$SWIFT62;
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
    public static function KOTLIN23(): BuildRuntime
    {
        if (!isset(self::$KOTLIN23)) {
            self::$KOTLIN23 = new BuildRuntime('kotlin-2.3');
        }
        return self::$KOTLIN23;
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
    public static function BUN12(): BuildRuntime
    {
        if (!isset(self::$BUN12)) {
            self::$BUN12 = new BuildRuntime('bun-1.2');
        }
        return self::$BUN12;
    }
    public static function BUN13(): BuildRuntime
    {
        if (!isset(self::$BUN13)) {
            self::$BUN13 = new BuildRuntime('bun-1.3');
        }
        return self::$BUN13;
    }
    public static function GO123(): BuildRuntime
    {
        if (!isset(self::$GO123)) {
            self::$GO123 = new BuildRuntime('go-1.23');
        }
        return self::$GO123;
    }
    public static function GO124(): BuildRuntime
    {
        if (!isset(self::$GO124)) {
            self::$GO124 = new BuildRuntime('go-1.24');
        }
        return self::$GO124;
    }
    public static function GO125(): BuildRuntime
    {
        if (!isset(self::$GO125)) {
            self::$GO125 = new BuildRuntime('go-1.25');
        }
        return self::$GO125;
    }
    public static function GO126(): BuildRuntime
    {
        if (!isset(self::$GO126)) {
            self::$GO126 = new BuildRuntime('go-1.26');
        }
        return self::$GO126;
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
    public static function FLUTTER332(): BuildRuntime
    {
        if (!isset(self::$FLUTTER332)) {
            self::$FLUTTER332 = new BuildRuntime('flutter-3.32');
        }
        return self::$FLUTTER332;
    }
    public static function FLUTTER335(): BuildRuntime
    {
        if (!isset(self::$FLUTTER335)) {
            self::$FLUTTER335 = new BuildRuntime('flutter-3.35');
        }
        return self::$FLUTTER335;
    }
    public static function FLUTTER338(): BuildRuntime
    {
        if (!isset(self::$FLUTTER338)) {
            self::$FLUTTER338 = new BuildRuntime('flutter-3.38');
        }
        return self::$FLUTTER338;
    }
    public static function NODE145RC(): BuildRuntime
    {
        if (!isset(self::$NODE145RC)) {
            self::$NODE145RC = new BuildRuntime('node-14.5-rc');
        }
        return self::$NODE145RC;
    }
    public static function NODE160RC(): BuildRuntime
    {
        if (!isset(self::$NODE160RC)) {
            self::$NODE160RC = new BuildRuntime('node-16.0-rc');
        }
        return self::$NODE160RC;
    }
    public static function NODE180RC(): BuildRuntime
    {
        if (!isset(self::$NODE180RC)) {
            self::$NODE180RC = new BuildRuntime('node-18.0-rc');
        }
        return self::$NODE180RC;
    }
    public static function NODE190RC(): BuildRuntime
    {
        if (!isset(self::$NODE190RC)) {
            self::$NODE190RC = new BuildRuntime('node-19.0-rc');
        }
        return self::$NODE190RC;
    }
    public static function NODE200RC(): BuildRuntime
    {
        if (!isset(self::$NODE200RC)) {
            self::$NODE200RC = new BuildRuntime('node-20.0-rc');
        }
        return self::$NODE200RC;
    }
    public static function NODE210RC(): BuildRuntime
    {
        if (!isset(self::$NODE210RC)) {
            self::$NODE210RC = new BuildRuntime('node-21.0-rc');
        }
        return self::$NODE210RC;
    }
    public static function NODE22RC(): BuildRuntime
    {
        if (!isset(self::$NODE22RC)) {
            self::$NODE22RC = new BuildRuntime('node-22-rc');
        }
        return self::$NODE22RC;
    }
    public static function NODE23RC(): BuildRuntime
    {
        if (!isset(self::$NODE23RC)) {
            self::$NODE23RC = new BuildRuntime('node-23-rc');
        }
        return self::$NODE23RC;
    }
    public static function NODE24RC(): BuildRuntime
    {
        if (!isset(self::$NODE24RC)) {
            self::$NODE24RC = new BuildRuntime('node-24-rc');
        }
        return self::$NODE24RC;
    }
    public static function NODE25RC(): BuildRuntime
    {
        if (!isset(self::$NODE25RC)) {
            self::$NODE25RC = new BuildRuntime('node-25-rc');
        }
        return self::$NODE25RC;
    }
    public static function PHP80RC(): BuildRuntime
    {
        if (!isset(self::$PHP80RC)) {
            self::$PHP80RC = new BuildRuntime('php-8.0-rc');
        }
        return self::$PHP80RC;
    }
    public static function PHP81RC(): BuildRuntime
    {
        if (!isset(self::$PHP81RC)) {
            self::$PHP81RC = new BuildRuntime('php-8.1-rc');
        }
        return self::$PHP81RC;
    }
    public static function PHP82RC(): BuildRuntime
    {
        if (!isset(self::$PHP82RC)) {
            self::$PHP82RC = new BuildRuntime('php-8.2-rc');
        }
        return self::$PHP82RC;
    }
    public static function PHP83RC(): BuildRuntime
    {
        if (!isset(self::$PHP83RC)) {
            self::$PHP83RC = new BuildRuntime('php-8.3-rc');
        }
        return self::$PHP83RC;
    }
    public static function PHP84RC(): BuildRuntime
    {
        if (!isset(self::$PHP84RC)) {
            self::$PHP84RC = new BuildRuntime('php-8.4-rc');
        }
        return self::$PHP84RC;
    }
    public static function RUBY30RC(): BuildRuntime
    {
        if (!isset(self::$RUBY30RC)) {
            self::$RUBY30RC = new BuildRuntime('ruby-3.0-rc');
        }
        return self::$RUBY30RC;
    }
    public static function RUBY31RC(): BuildRuntime
    {
        if (!isset(self::$RUBY31RC)) {
            self::$RUBY31RC = new BuildRuntime('ruby-3.1-rc');
        }
        return self::$RUBY31RC;
    }
    public static function RUBY32RC(): BuildRuntime
    {
        if (!isset(self::$RUBY32RC)) {
            self::$RUBY32RC = new BuildRuntime('ruby-3.2-rc');
        }
        return self::$RUBY32RC;
    }
    public static function RUBY33RC(): BuildRuntime
    {
        if (!isset(self::$RUBY33RC)) {
            self::$RUBY33RC = new BuildRuntime('ruby-3.3-rc');
        }
        return self::$RUBY33RC;
    }
    public static function RUBY34RC(): BuildRuntime
    {
        if (!isset(self::$RUBY34RC)) {
            self::$RUBY34RC = new BuildRuntime('ruby-3.4-rc');
        }
        return self::$RUBY34RC;
    }
    public static function RUBY40RC(): BuildRuntime
    {
        if (!isset(self::$RUBY40RC)) {
            self::$RUBY40RC = new BuildRuntime('ruby-4.0-rc');
        }
        return self::$RUBY40RC;
    }
    public static function PYTHON38RC(): BuildRuntime
    {
        if (!isset(self::$PYTHON38RC)) {
            self::$PYTHON38RC = new BuildRuntime('python-3.8-rc');
        }
        return self::$PYTHON38RC;
    }
    public static function PYTHON39RC(): BuildRuntime
    {
        if (!isset(self::$PYTHON39RC)) {
            self::$PYTHON39RC = new BuildRuntime('python-3.9-rc');
        }
        return self::$PYTHON39RC;
    }
    public static function PYTHON310RC(): BuildRuntime
    {
        if (!isset(self::$PYTHON310RC)) {
            self::$PYTHON310RC = new BuildRuntime('python-3.10-rc');
        }
        return self::$PYTHON310RC;
    }
    public static function PYTHON311RC(): BuildRuntime
    {
        if (!isset(self::$PYTHON311RC)) {
            self::$PYTHON311RC = new BuildRuntime('python-3.11-rc');
        }
        return self::$PYTHON311RC;
    }
    public static function PYTHON312RC(): BuildRuntime
    {
        if (!isset(self::$PYTHON312RC)) {
            self::$PYTHON312RC = new BuildRuntime('python-3.12-rc');
        }
        return self::$PYTHON312RC;
    }
    public static function PYTHON313RC(): BuildRuntime
    {
        if (!isset(self::$PYTHON313RC)) {
            self::$PYTHON313RC = new BuildRuntime('python-3.13-rc');
        }
        return self::$PYTHON313RC;
    }
    public static function PYTHON314RC(): BuildRuntime
    {
        if (!isset(self::$PYTHON314RC)) {
            self::$PYTHON314RC = new BuildRuntime('python-3.14-rc');
        }
        return self::$PYTHON314RC;
    }
    public static function PYTHONML311RC(): BuildRuntime
    {
        if (!isset(self::$PYTHONML311RC)) {
            self::$PYTHONML311RC = new BuildRuntime('python-ml-3.11-rc');
        }
        return self::$PYTHONML311RC;
    }
    public static function PYTHONML312RC(): BuildRuntime
    {
        if (!isset(self::$PYTHONML312RC)) {
            self::$PYTHONML312RC = new BuildRuntime('python-ml-3.12-rc');
        }
        return self::$PYTHONML312RC;
    }
    public static function PYTHONML313RC(): BuildRuntime
    {
        if (!isset(self::$PYTHONML313RC)) {
            self::$PYTHONML313RC = new BuildRuntime('python-ml-3.13-rc');
        }
        return self::$PYTHONML313RC;
    }
    public static function DENO140RC(): BuildRuntime
    {
        if (!isset(self::$DENO140RC)) {
            self::$DENO140RC = new BuildRuntime('deno-1.40-rc');
        }
        return self::$DENO140RC;
    }
    public static function DENO146RC(): BuildRuntime
    {
        if (!isset(self::$DENO146RC)) {
            self::$DENO146RC = new BuildRuntime('deno-1.46-rc');
        }
        return self::$DENO146RC;
    }
    public static function DENO20RC(): BuildRuntime
    {
        if (!isset(self::$DENO20RC)) {
            self::$DENO20RC = new BuildRuntime('deno-2.0-rc');
        }
        return self::$DENO20RC;
    }
    public static function DENO25RC(): BuildRuntime
    {
        if (!isset(self::$DENO25RC)) {
            self::$DENO25RC = new BuildRuntime('deno-2.5-rc');
        }
        return self::$DENO25RC;
    }
    public static function DENO26RC(): BuildRuntime
    {
        if (!isset(self::$DENO26RC)) {
            self::$DENO26RC = new BuildRuntime('deno-2.6-rc');
        }
        return self::$DENO26RC;
    }
    public static function DART215RC(): BuildRuntime
    {
        if (!isset(self::$DART215RC)) {
            self::$DART215RC = new BuildRuntime('dart-2.15-rc');
        }
        return self::$DART215RC;
    }
    public static function DART216RC(): BuildRuntime
    {
        if (!isset(self::$DART216RC)) {
            self::$DART216RC = new BuildRuntime('dart-2.16-rc');
        }
        return self::$DART216RC;
    }
    public static function DART217RC(): BuildRuntime
    {
        if (!isset(self::$DART217RC)) {
            self::$DART217RC = new BuildRuntime('dart-2.17-rc');
        }
        return self::$DART217RC;
    }
    public static function DART218RC(): BuildRuntime
    {
        if (!isset(self::$DART218RC)) {
            self::$DART218RC = new BuildRuntime('dart-2.18-rc');
        }
        return self::$DART218RC;
    }
    public static function DART219RC(): BuildRuntime
    {
        if (!isset(self::$DART219RC)) {
            self::$DART219RC = new BuildRuntime('dart-2.19-rc');
        }
        return self::$DART219RC;
    }
    public static function DART30RC(): BuildRuntime
    {
        if (!isset(self::$DART30RC)) {
            self::$DART30RC = new BuildRuntime('dart-3.0-rc');
        }
        return self::$DART30RC;
    }
    public static function DART31RC(): BuildRuntime
    {
        if (!isset(self::$DART31RC)) {
            self::$DART31RC = new BuildRuntime('dart-3.1-rc');
        }
        return self::$DART31RC;
    }
    public static function DART33RC(): BuildRuntime
    {
        if (!isset(self::$DART33RC)) {
            self::$DART33RC = new BuildRuntime('dart-3.3-rc');
        }
        return self::$DART33RC;
    }
    public static function DART35RC(): BuildRuntime
    {
        if (!isset(self::$DART35RC)) {
            self::$DART35RC = new BuildRuntime('dart-3.5-rc');
        }
        return self::$DART35RC;
    }
    public static function DART38RC(): BuildRuntime
    {
        if (!isset(self::$DART38RC)) {
            self::$DART38RC = new BuildRuntime('dart-3.8-rc');
        }
        return self::$DART38RC;
    }
    public static function DART39RC(): BuildRuntime
    {
        if (!isset(self::$DART39RC)) {
            self::$DART39RC = new BuildRuntime('dart-3.9-rc');
        }
        return self::$DART39RC;
    }
    public static function DART310RC(): BuildRuntime
    {
        if (!isset(self::$DART310RC)) {
            self::$DART310RC = new BuildRuntime('dart-3.10-rc');
        }
        return self::$DART310RC;
    }
    public static function DOTNET60RC(): BuildRuntime
    {
        if (!isset(self::$DOTNET60RC)) {
            self::$DOTNET60RC = new BuildRuntime('dotnet-6.0-rc');
        }
        return self::$DOTNET60RC;
    }
    public static function DOTNET70RC(): BuildRuntime
    {
        if (!isset(self::$DOTNET70RC)) {
            self::$DOTNET70RC = new BuildRuntime('dotnet-7.0-rc');
        }
        return self::$DOTNET70RC;
    }
    public static function DOTNET80RC(): BuildRuntime
    {
        if (!isset(self::$DOTNET80RC)) {
            self::$DOTNET80RC = new BuildRuntime('dotnet-8.0-rc');
        }
        return self::$DOTNET80RC;
    }
    public static function DOTNET10RC(): BuildRuntime
    {
        if (!isset(self::$DOTNET10RC)) {
            self::$DOTNET10RC = new BuildRuntime('dotnet-10-rc');
        }
        return self::$DOTNET10RC;
    }
    public static function JAVA80RC(): BuildRuntime
    {
        if (!isset(self::$JAVA80RC)) {
            self::$JAVA80RC = new BuildRuntime('java-8.0-rc');
        }
        return self::$JAVA80RC;
    }
    public static function JAVA110RC(): BuildRuntime
    {
        if (!isset(self::$JAVA110RC)) {
            self::$JAVA110RC = new BuildRuntime('java-11.0-rc');
        }
        return self::$JAVA110RC;
    }
    public static function JAVA170RC(): BuildRuntime
    {
        if (!isset(self::$JAVA170RC)) {
            self::$JAVA170RC = new BuildRuntime('java-17.0-rc');
        }
        return self::$JAVA170RC;
    }
    public static function JAVA180RC(): BuildRuntime
    {
        if (!isset(self::$JAVA180RC)) {
            self::$JAVA180RC = new BuildRuntime('java-18.0-rc');
        }
        return self::$JAVA180RC;
    }
    public static function JAVA210RC(): BuildRuntime
    {
        if (!isset(self::$JAVA210RC)) {
            self::$JAVA210RC = new BuildRuntime('java-21.0-rc');
        }
        return self::$JAVA210RC;
    }
    public static function JAVA22RC(): BuildRuntime
    {
        if (!isset(self::$JAVA22RC)) {
            self::$JAVA22RC = new BuildRuntime('java-22-rc');
        }
        return self::$JAVA22RC;
    }
    public static function JAVA25RC(): BuildRuntime
    {
        if (!isset(self::$JAVA25RC)) {
            self::$JAVA25RC = new BuildRuntime('java-25-rc');
        }
        return self::$JAVA25RC;
    }
    public static function SWIFT55RC(): BuildRuntime
    {
        if (!isset(self::$SWIFT55RC)) {
            self::$SWIFT55RC = new BuildRuntime('swift-5.5-rc');
        }
        return self::$SWIFT55RC;
    }
    public static function SWIFT58RC(): BuildRuntime
    {
        if (!isset(self::$SWIFT58RC)) {
            self::$SWIFT58RC = new BuildRuntime('swift-5.8-rc');
        }
        return self::$SWIFT58RC;
    }
    public static function SWIFT59RC(): BuildRuntime
    {
        if (!isset(self::$SWIFT59RC)) {
            self::$SWIFT59RC = new BuildRuntime('swift-5.9-rc');
        }
        return self::$SWIFT59RC;
    }
    public static function SWIFT510RC(): BuildRuntime
    {
        if (!isset(self::$SWIFT510RC)) {
            self::$SWIFT510RC = new BuildRuntime('swift-5.10-rc');
        }
        return self::$SWIFT510RC;
    }
    public static function SWIFT62RC(): BuildRuntime
    {
        if (!isset(self::$SWIFT62RC)) {
            self::$SWIFT62RC = new BuildRuntime('swift-6.2-rc');
        }
        return self::$SWIFT62RC;
    }
    public static function KOTLIN16RC(): BuildRuntime
    {
        if (!isset(self::$KOTLIN16RC)) {
            self::$KOTLIN16RC = new BuildRuntime('kotlin-1.6-rc');
        }
        return self::$KOTLIN16RC;
    }
    public static function KOTLIN18RC(): BuildRuntime
    {
        if (!isset(self::$KOTLIN18RC)) {
            self::$KOTLIN18RC = new BuildRuntime('kotlin-1.8-rc');
        }
        return self::$KOTLIN18RC;
    }
    public static function KOTLIN19RC(): BuildRuntime
    {
        if (!isset(self::$KOTLIN19RC)) {
            self::$KOTLIN19RC = new BuildRuntime('kotlin-1.9-rc');
        }
        return self::$KOTLIN19RC;
    }
    public static function KOTLIN20RC(): BuildRuntime
    {
        if (!isset(self::$KOTLIN20RC)) {
            self::$KOTLIN20RC = new BuildRuntime('kotlin-2.0-rc');
        }
        return self::$KOTLIN20RC;
    }
    public static function KOTLIN23RC(): BuildRuntime
    {
        if (!isset(self::$KOTLIN23RC)) {
            self::$KOTLIN23RC = new BuildRuntime('kotlin-2.3-rc');
        }
        return self::$KOTLIN23RC;
    }
    public static function CPP17RC(): BuildRuntime
    {
        if (!isset(self::$CPP17RC)) {
            self::$CPP17RC = new BuildRuntime('cpp-17-rc');
        }
        return self::$CPP17RC;
    }
    public static function CPP20RC(): BuildRuntime
    {
        if (!isset(self::$CPP20RC)) {
            self::$CPP20RC = new BuildRuntime('cpp-20-rc');
        }
        return self::$CPP20RC;
    }
    public static function BUN10RC(): BuildRuntime
    {
        if (!isset(self::$BUN10RC)) {
            self::$BUN10RC = new BuildRuntime('bun-1.0-rc');
        }
        return self::$BUN10RC;
    }
    public static function BUN11RC(): BuildRuntime
    {
        if (!isset(self::$BUN11RC)) {
            self::$BUN11RC = new BuildRuntime('bun-1.1-rc');
        }
        return self::$BUN11RC;
    }
    public static function BUN12RC(): BuildRuntime
    {
        if (!isset(self::$BUN12RC)) {
            self::$BUN12RC = new BuildRuntime('bun-1.2-rc');
        }
        return self::$BUN12RC;
    }
    public static function BUN13RC(): BuildRuntime
    {
        if (!isset(self::$BUN13RC)) {
            self::$BUN13RC = new BuildRuntime('bun-1.3-rc');
        }
        return self::$BUN13RC;
    }
    public static function GO123RC(): BuildRuntime
    {
        if (!isset(self::$GO123RC)) {
            self::$GO123RC = new BuildRuntime('go-1.23-rc');
        }
        return self::$GO123RC;
    }
    public static function GO124RC(): BuildRuntime
    {
        if (!isset(self::$GO124RC)) {
            self::$GO124RC = new BuildRuntime('go-1.24-rc');
        }
        return self::$GO124RC;
    }
    public static function GO125RC(): BuildRuntime
    {
        if (!isset(self::$GO125RC)) {
            self::$GO125RC = new BuildRuntime('go-1.25-rc');
        }
        return self::$GO125RC;
    }
    public static function GO126RC(): BuildRuntime
    {
        if (!isset(self::$GO126RC)) {
            self::$GO126RC = new BuildRuntime('go-1.26-rc');
        }
        return self::$GO126RC;
    }
    public static function STATIC1RC(): BuildRuntime
    {
        if (!isset(self::$STATIC1RC)) {
            self::$STATIC1RC = new BuildRuntime('static-1-rc');
        }
        return self::$STATIC1RC;
    }
    public static function FLUTTER324RC(): BuildRuntime
    {
        if (!isset(self::$FLUTTER324RC)) {
            self::$FLUTTER324RC = new BuildRuntime('flutter-3.24-rc');
        }
        return self::$FLUTTER324RC;
    }
    public static function FLUTTER327RC(): BuildRuntime
    {
        if (!isset(self::$FLUTTER327RC)) {
            self::$FLUTTER327RC = new BuildRuntime('flutter-3.27-rc');
        }
        return self::$FLUTTER327RC;
    }
    public static function FLUTTER329RC(): BuildRuntime
    {
        if (!isset(self::$FLUTTER329RC)) {
            self::$FLUTTER329RC = new BuildRuntime('flutter-3.29-rc');
        }
        return self::$FLUTTER329RC;
    }
    public static function FLUTTER332RC(): BuildRuntime
    {
        if (!isset(self::$FLUTTER332RC)) {
            self::$FLUTTER332RC = new BuildRuntime('flutter-3.32-rc');
        }
        return self::$FLUTTER332RC;
    }
    public static function FLUTTER335RC(): BuildRuntime
    {
        if (!isset(self::$FLUTTER335RC)) {
            self::$FLUTTER335RC = new BuildRuntime('flutter-3.35-rc');
        }
        return self::$FLUTTER335RC;
    }
    public static function FLUTTER338RC(): BuildRuntime
    {
        if (!isset(self::$FLUTTER338RC)) {
            self::$FLUTTER338RC = new BuildRuntime('flutter-3.38-rc');
        }
        return self::$FLUTTER338RC;
    }
}