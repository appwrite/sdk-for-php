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
    private static Runtime $NODE22;
    private static Runtime $NODE23;
    private static Runtime $NODE24;
    private static Runtime $NODE25;
    private static Runtime $PHP80;
    private static Runtime $PHP81;
    private static Runtime $PHP82;
    private static Runtime $PHP83;
    private static Runtime $PHP84;
    private static Runtime $RUBY30;
    private static Runtime $RUBY31;
    private static Runtime $RUBY32;
    private static Runtime $RUBY33;
    private static Runtime $RUBY34;
    private static Runtime $RUBY40;
    private static Runtime $PYTHON38;
    private static Runtime $PYTHON39;
    private static Runtime $PYTHON310;
    private static Runtime $PYTHON311;
    private static Runtime $PYTHON312;
    private static Runtime $PYTHON313;
    private static Runtime $PYTHON314;
    private static Runtime $PYTHONML311;
    private static Runtime $PYTHONML312;
    private static Runtime $PYTHONML313;
    private static Runtime $DENO140;
    private static Runtime $DENO146;
    private static Runtime $DENO20;
    private static Runtime $DENO25;
    private static Runtime $DENO26;
    private static Runtime $DART215;
    private static Runtime $DART216;
    private static Runtime $DART217;
    private static Runtime $DART218;
    private static Runtime $DART219;
    private static Runtime $DART30;
    private static Runtime $DART31;
    private static Runtime $DART33;
    private static Runtime $DART35;
    private static Runtime $DART38;
    private static Runtime $DART39;
    private static Runtime $DART310;
    private static Runtime $DOTNET60;
    private static Runtime $DOTNET70;
    private static Runtime $DOTNET80;
    private static Runtime $DOTNET10;
    private static Runtime $JAVA80;
    private static Runtime $JAVA110;
    private static Runtime $JAVA170;
    private static Runtime $JAVA180;
    private static Runtime $JAVA210;
    private static Runtime $JAVA22;
    private static Runtime $JAVA25;
    private static Runtime $SWIFT55;
    private static Runtime $SWIFT58;
    private static Runtime $SWIFT59;
    private static Runtime $SWIFT510;
    private static Runtime $SWIFT62;
    private static Runtime $KOTLIN16;
    private static Runtime $KOTLIN18;
    private static Runtime $KOTLIN19;
    private static Runtime $KOTLIN20;
    private static Runtime $KOTLIN23;
    private static Runtime $CPP17;
    private static Runtime $CPP20;
    private static Runtime $BUN10;
    private static Runtime $BUN11;
    private static Runtime $BUN12;
    private static Runtime $BUN13;
    private static Runtime $GO123;
    private static Runtime $GO124;
    private static Runtime $GO125;
    private static Runtime $GO126;
    private static Runtime $STATIC1;
    private static Runtime $FLUTTER324;
    private static Runtime $FLUTTER327;
    private static Runtime $FLUTTER329;
    private static Runtime $FLUTTER332;
    private static Runtime $FLUTTER335;
    private static Runtime $FLUTTER338;
    private static Runtime $NODE145RC;
    private static Runtime $NODE160RC;
    private static Runtime $NODE180RC;
    private static Runtime $NODE190RC;
    private static Runtime $NODE200RC;
    private static Runtime $NODE210RC;
    private static Runtime $NODE22RC;
    private static Runtime $NODE23RC;
    private static Runtime $NODE24RC;
    private static Runtime $NODE25RC;
    private static Runtime $PHP80RC;
    private static Runtime $PHP81RC;
    private static Runtime $PHP82RC;
    private static Runtime $PHP83RC;
    private static Runtime $PHP84RC;
    private static Runtime $RUBY30RC;
    private static Runtime $RUBY31RC;
    private static Runtime $RUBY32RC;
    private static Runtime $RUBY33RC;
    private static Runtime $RUBY34RC;
    private static Runtime $RUBY40RC;
    private static Runtime $PYTHON38RC;
    private static Runtime $PYTHON39RC;
    private static Runtime $PYTHON310RC;
    private static Runtime $PYTHON311RC;
    private static Runtime $PYTHON312RC;
    private static Runtime $PYTHON313RC;
    private static Runtime $PYTHON314RC;
    private static Runtime $PYTHONML311RC;
    private static Runtime $PYTHONML312RC;
    private static Runtime $PYTHONML313RC;
    private static Runtime $DENO140RC;
    private static Runtime $DENO146RC;
    private static Runtime $DENO20RC;
    private static Runtime $DENO25RC;
    private static Runtime $DENO26RC;
    private static Runtime $DART215RC;
    private static Runtime $DART216RC;
    private static Runtime $DART217RC;
    private static Runtime $DART218RC;
    private static Runtime $DART219RC;
    private static Runtime $DART30RC;
    private static Runtime $DART31RC;
    private static Runtime $DART33RC;
    private static Runtime $DART35RC;
    private static Runtime $DART38RC;
    private static Runtime $DART39RC;
    private static Runtime $DART310RC;
    private static Runtime $DOTNET60RC;
    private static Runtime $DOTNET70RC;
    private static Runtime $DOTNET80RC;
    private static Runtime $DOTNET10RC;
    private static Runtime $JAVA80RC;
    private static Runtime $JAVA110RC;
    private static Runtime $JAVA170RC;
    private static Runtime $JAVA180RC;
    private static Runtime $JAVA210RC;
    private static Runtime $JAVA22RC;
    private static Runtime $JAVA25RC;
    private static Runtime $SWIFT55RC;
    private static Runtime $SWIFT58RC;
    private static Runtime $SWIFT59RC;
    private static Runtime $SWIFT510RC;
    private static Runtime $SWIFT62RC;
    private static Runtime $KOTLIN16RC;
    private static Runtime $KOTLIN18RC;
    private static Runtime $KOTLIN19RC;
    private static Runtime $KOTLIN20RC;
    private static Runtime $KOTLIN23RC;
    private static Runtime $CPP17RC;
    private static Runtime $CPP20RC;
    private static Runtime $BUN10RC;
    private static Runtime $BUN11RC;
    private static Runtime $BUN12RC;
    private static Runtime $BUN13RC;
    private static Runtime $GO123RC;
    private static Runtime $GO124RC;
    private static Runtime $GO125RC;
    private static Runtime $GO126RC;
    private static Runtime $STATIC1RC;
    private static Runtime $FLUTTER324RC;
    private static Runtime $FLUTTER327RC;
    private static Runtime $FLUTTER329RC;
    private static Runtime $FLUTTER332RC;
    private static Runtime $FLUTTER335RC;
    private static Runtime $FLUTTER338RC;

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
    public static function NODE22(): Runtime
    {
        if (!isset(self::$NODE22)) {
            self::$NODE22 = new Runtime('node-22');
        }
        return self::$NODE22;
    }
    public static function NODE23(): Runtime
    {
        if (!isset(self::$NODE23)) {
            self::$NODE23 = new Runtime('node-23');
        }
        return self::$NODE23;
    }
    public static function NODE24(): Runtime
    {
        if (!isset(self::$NODE24)) {
            self::$NODE24 = new Runtime('node-24');
        }
        return self::$NODE24;
    }
    public static function NODE25(): Runtime
    {
        if (!isset(self::$NODE25)) {
            self::$NODE25 = new Runtime('node-25');
        }
        return self::$NODE25;
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
    public static function PHP84(): Runtime
    {
        if (!isset(self::$PHP84)) {
            self::$PHP84 = new Runtime('php-8.4');
        }
        return self::$PHP84;
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
    public static function RUBY34(): Runtime
    {
        if (!isset(self::$RUBY34)) {
            self::$RUBY34 = new Runtime('ruby-3.4');
        }
        return self::$RUBY34;
    }
    public static function RUBY40(): Runtime
    {
        if (!isset(self::$RUBY40)) {
            self::$RUBY40 = new Runtime('ruby-4.0');
        }
        return self::$RUBY40;
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
    public static function PYTHON313(): Runtime
    {
        if (!isset(self::$PYTHON313)) {
            self::$PYTHON313 = new Runtime('python-3.13');
        }
        return self::$PYTHON313;
    }
    public static function PYTHON314(): Runtime
    {
        if (!isset(self::$PYTHON314)) {
            self::$PYTHON314 = new Runtime('python-3.14');
        }
        return self::$PYTHON314;
    }
    public static function PYTHONML311(): Runtime
    {
        if (!isset(self::$PYTHONML311)) {
            self::$PYTHONML311 = new Runtime('python-ml-3.11');
        }
        return self::$PYTHONML311;
    }
    public static function PYTHONML312(): Runtime
    {
        if (!isset(self::$PYTHONML312)) {
            self::$PYTHONML312 = new Runtime('python-ml-3.12');
        }
        return self::$PYTHONML312;
    }
    public static function PYTHONML313(): Runtime
    {
        if (!isset(self::$PYTHONML313)) {
            self::$PYTHONML313 = new Runtime('python-ml-3.13');
        }
        return self::$PYTHONML313;
    }
    public static function DENO140(): Runtime
    {
        if (!isset(self::$DENO140)) {
            self::$DENO140 = new Runtime('deno-1.40');
        }
        return self::$DENO140;
    }
    public static function DENO146(): Runtime
    {
        if (!isset(self::$DENO146)) {
            self::$DENO146 = new Runtime('deno-1.46');
        }
        return self::$DENO146;
    }
    public static function DENO20(): Runtime
    {
        if (!isset(self::$DENO20)) {
            self::$DENO20 = new Runtime('deno-2.0');
        }
        return self::$DENO20;
    }
    public static function DENO25(): Runtime
    {
        if (!isset(self::$DENO25)) {
            self::$DENO25 = new Runtime('deno-2.5');
        }
        return self::$DENO25;
    }
    public static function DENO26(): Runtime
    {
        if (!isset(self::$DENO26)) {
            self::$DENO26 = new Runtime('deno-2.6');
        }
        return self::$DENO26;
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
    public static function DART219(): Runtime
    {
        if (!isset(self::$DART219)) {
            self::$DART219 = new Runtime('dart-2.19');
        }
        return self::$DART219;
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
    public static function DART35(): Runtime
    {
        if (!isset(self::$DART35)) {
            self::$DART35 = new Runtime('dart-3.5');
        }
        return self::$DART35;
    }
    public static function DART38(): Runtime
    {
        if (!isset(self::$DART38)) {
            self::$DART38 = new Runtime('dart-3.8');
        }
        return self::$DART38;
    }
    public static function DART39(): Runtime
    {
        if (!isset(self::$DART39)) {
            self::$DART39 = new Runtime('dart-3.9');
        }
        return self::$DART39;
    }
    public static function DART310(): Runtime
    {
        if (!isset(self::$DART310)) {
            self::$DART310 = new Runtime('dart-3.10');
        }
        return self::$DART310;
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
    public static function DOTNET80(): Runtime
    {
        if (!isset(self::$DOTNET80)) {
            self::$DOTNET80 = new Runtime('dotnet-8.0');
        }
        return self::$DOTNET80;
    }
    public static function DOTNET10(): Runtime
    {
        if (!isset(self::$DOTNET10)) {
            self::$DOTNET10 = new Runtime('dotnet-10');
        }
        return self::$DOTNET10;
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
    public static function JAVA22(): Runtime
    {
        if (!isset(self::$JAVA22)) {
            self::$JAVA22 = new Runtime('java-22');
        }
        return self::$JAVA22;
    }
    public static function JAVA25(): Runtime
    {
        if (!isset(self::$JAVA25)) {
            self::$JAVA25 = new Runtime('java-25');
        }
        return self::$JAVA25;
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
    public static function SWIFT510(): Runtime
    {
        if (!isset(self::$SWIFT510)) {
            self::$SWIFT510 = new Runtime('swift-5.10');
        }
        return self::$SWIFT510;
    }
    public static function SWIFT62(): Runtime
    {
        if (!isset(self::$SWIFT62)) {
            self::$SWIFT62 = new Runtime('swift-6.2');
        }
        return self::$SWIFT62;
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
    public static function KOTLIN20(): Runtime
    {
        if (!isset(self::$KOTLIN20)) {
            self::$KOTLIN20 = new Runtime('kotlin-2.0');
        }
        return self::$KOTLIN20;
    }
    public static function KOTLIN23(): Runtime
    {
        if (!isset(self::$KOTLIN23)) {
            self::$KOTLIN23 = new Runtime('kotlin-2.3');
        }
        return self::$KOTLIN23;
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
    public static function BUN11(): Runtime
    {
        if (!isset(self::$BUN11)) {
            self::$BUN11 = new Runtime('bun-1.1');
        }
        return self::$BUN11;
    }
    public static function BUN12(): Runtime
    {
        if (!isset(self::$BUN12)) {
            self::$BUN12 = new Runtime('bun-1.2');
        }
        return self::$BUN12;
    }
    public static function BUN13(): Runtime
    {
        if (!isset(self::$BUN13)) {
            self::$BUN13 = new Runtime('bun-1.3');
        }
        return self::$BUN13;
    }
    public static function GO123(): Runtime
    {
        if (!isset(self::$GO123)) {
            self::$GO123 = new Runtime('go-1.23');
        }
        return self::$GO123;
    }
    public static function GO124(): Runtime
    {
        if (!isset(self::$GO124)) {
            self::$GO124 = new Runtime('go-1.24');
        }
        return self::$GO124;
    }
    public static function GO125(): Runtime
    {
        if (!isset(self::$GO125)) {
            self::$GO125 = new Runtime('go-1.25');
        }
        return self::$GO125;
    }
    public static function GO126(): Runtime
    {
        if (!isset(self::$GO126)) {
            self::$GO126 = new Runtime('go-1.26');
        }
        return self::$GO126;
    }
    public static function STATIC1(): Runtime
    {
        if (!isset(self::$STATIC1)) {
            self::$STATIC1 = new Runtime('static-1');
        }
        return self::$STATIC1;
    }
    public static function FLUTTER324(): Runtime
    {
        if (!isset(self::$FLUTTER324)) {
            self::$FLUTTER324 = new Runtime('flutter-3.24');
        }
        return self::$FLUTTER324;
    }
    public static function FLUTTER327(): Runtime
    {
        if (!isset(self::$FLUTTER327)) {
            self::$FLUTTER327 = new Runtime('flutter-3.27');
        }
        return self::$FLUTTER327;
    }
    public static function FLUTTER329(): Runtime
    {
        if (!isset(self::$FLUTTER329)) {
            self::$FLUTTER329 = new Runtime('flutter-3.29');
        }
        return self::$FLUTTER329;
    }
    public static function FLUTTER332(): Runtime
    {
        if (!isset(self::$FLUTTER332)) {
            self::$FLUTTER332 = new Runtime('flutter-3.32');
        }
        return self::$FLUTTER332;
    }
    public static function FLUTTER335(): Runtime
    {
        if (!isset(self::$FLUTTER335)) {
            self::$FLUTTER335 = new Runtime('flutter-3.35');
        }
        return self::$FLUTTER335;
    }
    public static function FLUTTER338(): Runtime
    {
        if (!isset(self::$FLUTTER338)) {
            self::$FLUTTER338 = new Runtime('flutter-3.38');
        }
        return self::$FLUTTER338;
    }
    public static function NODE145RC(): Runtime
    {
        if (!isset(self::$NODE145RC)) {
            self::$NODE145RC = new Runtime('node-14.5-rc');
        }
        return self::$NODE145RC;
    }
    public static function NODE160RC(): Runtime
    {
        if (!isset(self::$NODE160RC)) {
            self::$NODE160RC = new Runtime('node-16.0-rc');
        }
        return self::$NODE160RC;
    }
    public static function NODE180RC(): Runtime
    {
        if (!isset(self::$NODE180RC)) {
            self::$NODE180RC = new Runtime('node-18.0-rc');
        }
        return self::$NODE180RC;
    }
    public static function NODE190RC(): Runtime
    {
        if (!isset(self::$NODE190RC)) {
            self::$NODE190RC = new Runtime('node-19.0-rc');
        }
        return self::$NODE190RC;
    }
    public static function NODE200RC(): Runtime
    {
        if (!isset(self::$NODE200RC)) {
            self::$NODE200RC = new Runtime('node-20.0-rc');
        }
        return self::$NODE200RC;
    }
    public static function NODE210RC(): Runtime
    {
        if (!isset(self::$NODE210RC)) {
            self::$NODE210RC = new Runtime('node-21.0-rc');
        }
        return self::$NODE210RC;
    }
    public static function NODE22RC(): Runtime
    {
        if (!isset(self::$NODE22RC)) {
            self::$NODE22RC = new Runtime('node-22-rc');
        }
        return self::$NODE22RC;
    }
    public static function NODE23RC(): Runtime
    {
        if (!isset(self::$NODE23RC)) {
            self::$NODE23RC = new Runtime('node-23-rc');
        }
        return self::$NODE23RC;
    }
    public static function NODE24RC(): Runtime
    {
        if (!isset(self::$NODE24RC)) {
            self::$NODE24RC = new Runtime('node-24-rc');
        }
        return self::$NODE24RC;
    }
    public static function NODE25RC(): Runtime
    {
        if (!isset(self::$NODE25RC)) {
            self::$NODE25RC = new Runtime('node-25-rc');
        }
        return self::$NODE25RC;
    }
    public static function PHP80RC(): Runtime
    {
        if (!isset(self::$PHP80RC)) {
            self::$PHP80RC = new Runtime('php-8.0-rc');
        }
        return self::$PHP80RC;
    }
    public static function PHP81RC(): Runtime
    {
        if (!isset(self::$PHP81RC)) {
            self::$PHP81RC = new Runtime('php-8.1-rc');
        }
        return self::$PHP81RC;
    }
    public static function PHP82RC(): Runtime
    {
        if (!isset(self::$PHP82RC)) {
            self::$PHP82RC = new Runtime('php-8.2-rc');
        }
        return self::$PHP82RC;
    }
    public static function PHP83RC(): Runtime
    {
        if (!isset(self::$PHP83RC)) {
            self::$PHP83RC = new Runtime('php-8.3-rc');
        }
        return self::$PHP83RC;
    }
    public static function PHP84RC(): Runtime
    {
        if (!isset(self::$PHP84RC)) {
            self::$PHP84RC = new Runtime('php-8.4-rc');
        }
        return self::$PHP84RC;
    }
    public static function RUBY30RC(): Runtime
    {
        if (!isset(self::$RUBY30RC)) {
            self::$RUBY30RC = new Runtime('ruby-3.0-rc');
        }
        return self::$RUBY30RC;
    }
    public static function RUBY31RC(): Runtime
    {
        if (!isset(self::$RUBY31RC)) {
            self::$RUBY31RC = new Runtime('ruby-3.1-rc');
        }
        return self::$RUBY31RC;
    }
    public static function RUBY32RC(): Runtime
    {
        if (!isset(self::$RUBY32RC)) {
            self::$RUBY32RC = new Runtime('ruby-3.2-rc');
        }
        return self::$RUBY32RC;
    }
    public static function RUBY33RC(): Runtime
    {
        if (!isset(self::$RUBY33RC)) {
            self::$RUBY33RC = new Runtime('ruby-3.3-rc');
        }
        return self::$RUBY33RC;
    }
    public static function RUBY34RC(): Runtime
    {
        if (!isset(self::$RUBY34RC)) {
            self::$RUBY34RC = new Runtime('ruby-3.4-rc');
        }
        return self::$RUBY34RC;
    }
    public static function RUBY40RC(): Runtime
    {
        if (!isset(self::$RUBY40RC)) {
            self::$RUBY40RC = new Runtime('ruby-4.0-rc');
        }
        return self::$RUBY40RC;
    }
    public static function PYTHON38RC(): Runtime
    {
        if (!isset(self::$PYTHON38RC)) {
            self::$PYTHON38RC = new Runtime('python-3.8-rc');
        }
        return self::$PYTHON38RC;
    }
    public static function PYTHON39RC(): Runtime
    {
        if (!isset(self::$PYTHON39RC)) {
            self::$PYTHON39RC = new Runtime('python-3.9-rc');
        }
        return self::$PYTHON39RC;
    }
    public static function PYTHON310RC(): Runtime
    {
        if (!isset(self::$PYTHON310RC)) {
            self::$PYTHON310RC = new Runtime('python-3.10-rc');
        }
        return self::$PYTHON310RC;
    }
    public static function PYTHON311RC(): Runtime
    {
        if (!isset(self::$PYTHON311RC)) {
            self::$PYTHON311RC = new Runtime('python-3.11-rc');
        }
        return self::$PYTHON311RC;
    }
    public static function PYTHON312RC(): Runtime
    {
        if (!isset(self::$PYTHON312RC)) {
            self::$PYTHON312RC = new Runtime('python-3.12-rc');
        }
        return self::$PYTHON312RC;
    }
    public static function PYTHON313RC(): Runtime
    {
        if (!isset(self::$PYTHON313RC)) {
            self::$PYTHON313RC = new Runtime('python-3.13-rc');
        }
        return self::$PYTHON313RC;
    }
    public static function PYTHON314RC(): Runtime
    {
        if (!isset(self::$PYTHON314RC)) {
            self::$PYTHON314RC = new Runtime('python-3.14-rc');
        }
        return self::$PYTHON314RC;
    }
    public static function PYTHONML311RC(): Runtime
    {
        if (!isset(self::$PYTHONML311RC)) {
            self::$PYTHONML311RC = new Runtime('python-ml-3.11-rc');
        }
        return self::$PYTHONML311RC;
    }
    public static function PYTHONML312RC(): Runtime
    {
        if (!isset(self::$PYTHONML312RC)) {
            self::$PYTHONML312RC = new Runtime('python-ml-3.12-rc');
        }
        return self::$PYTHONML312RC;
    }
    public static function PYTHONML313RC(): Runtime
    {
        if (!isset(self::$PYTHONML313RC)) {
            self::$PYTHONML313RC = new Runtime('python-ml-3.13-rc');
        }
        return self::$PYTHONML313RC;
    }
    public static function DENO140RC(): Runtime
    {
        if (!isset(self::$DENO140RC)) {
            self::$DENO140RC = new Runtime('deno-1.40-rc');
        }
        return self::$DENO140RC;
    }
    public static function DENO146RC(): Runtime
    {
        if (!isset(self::$DENO146RC)) {
            self::$DENO146RC = new Runtime('deno-1.46-rc');
        }
        return self::$DENO146RC;
    }
    public static function DENO20RC(): Runtime
    {
        if (!isset(self::$DENO20RC)) {
            self::$DENO20RC = new Runtime('deno-2.0-rc');
        }
        return self::$DENO20RC;
    }
    public static function DENO25RC(): Runtime
    {
        if (!isset(self::$DENO25RC)) {
            self::$DENO25RC = new Runtime('deno-2.5-rc');
        }
        return self::$DENO25RC;
    }
    public static function DENO26RC(): Runtime
    {
        if (!isset(self::$DENO26RC)) {
            self::$DENO26RC = new Runtime('deno-2.6-rc');
        }
        return self::$DENO26RC;
    }
    public static function DART215RC(): Runtime
    {
        if (!isset(self::$DART215RC)) {
            self::$DART215RC = new Runtime('dart-2.15-rc');
        }
        return self::$DART215RC;
    }
    public static function DART216RC(): Runtime
    {
        if (!isset(self::$DART216RC)) {
            self::$DART216RC = new Runtime('dart-2.16-rc');
        }
        return self::$DART216RC;
    }
    public static function DART217RC(): Runtime
    {
        if (!isset(self::$DART217RC)) {
            self::$DART217RC = new Runtime('dart-2.17-rc');
        }
        return self::$DART217RC;
    }
    public static function DART218RC(): Runtime
    {
        if (!isset(self::$DART218RC)) {
            self::$DART218RC = new Runtime('dart-2.18-rc');
        }
        return self::$DART218RC;
    }
    public static function DART219RC(): Runtime
    {
        if (!isset(self::$DART219RC)) {
            self::$DART219RC = new Runtime('dart-2.19-rc');
        }
        return self::$DART219RC;
    }
    public static function DART30RC(): Runtime
    {
        if (!isset(self::$DART30RC)) {
            self::$DART30RC = new Runtime('dart-3.0-rc');
        }
        return self::$DART30RC;
    }
    public static function DART31RC(): Runtime
    {
        if (!isset(self::$DART31RC)) {
            self::$DART31RC = new Runtime('dart-3.1-rc');
        }
        return self::$DART31RC;
    }
    public static function DART33RC(): Runtime
    {
        if (!isset(self::$DART33RC)) {
            self::$DART33RC = new Runtime('dart-3.3-rc');
        }
        return self::$DART33RC;
    }
    public static function DART35RC(): Runtime
    {
        if (!isset(self::$DART35RC)) {
            self::$DART35RC = new Runtime('dart-3.5-rc');
        }
        return self::$DART35RC;
    }
    public static function DART38RC(): Runtime
    {
        if (!isset(self::$DART38RC)) {
            self::$DART38RC = new Runtime('dart-3.8-rc');
        }
        return self::$DART38RC;
    }
    public static function DART39RC(): Runtime
    {
        if (!isset(self::$DART39RC)) {
            self::$DART39RC = new Runtime('dart-3.9-rc');
        }
        return self::$DART39RC;
    }
    public static function DART310RC(): Runtime
    {
        if (!isset(self::$DART310RC)) {
            self::$DART310RC = new Runtime('dart-3.10-rc');
        }
        return self::$DART310RC;
    }
    public static function DOTNET60RC(): Runtime
    {
        if (!isset(self::$DOTNET60RC)) {
            self::$DOTNET60RC = new Runtime('dotnet-6.0-rc');
        }
        return self::$DOTNET60RC;
    }
    public static function DOTNET70RC(): Runtime
    {
        if (!isset(self::$DOTNET70RC)) {
            self::$DOTNET70RC = new Runtime('dotnet-7.0-rc');
        }
        return self::$DOTNET70RC;
    }
    public static function DOTNET80RC(): Runtime
    {
        if (!isset(self::$DOTNET80RC)) {
            self::$DOTNET80RC = new Runtime('dotnet-8.0-rc');
        }
        return self::$DOTNET80RC;
    }
    public static function DOTNET10RC(): Runtime
    {
        if (!isset(self::$DOTNET10RC)) {
            self::$DOTNET10RC = new Runtime('dotnet-10-rc');
        }
        return self::$DOTNET10RC;
    }
    public static function JAVA80RC(): Runtime
    {
        if (!isset(self::$JAVA80RC)) {
            self::$JAVA80RC = new Runtime('java-8.0-rc');
        }
        return self::$JAVA80RC;
    }
    public static function JAVA110RC(): Runtime
    {
        if (!isset(self::$JAVA110RC)) {
            self::$JAVA110RC = new Runtime('java-11.0-rc');
        }
        return self::$JAVA110RC;
    }
    public static function JAVA170RC(): Runtime
    {
        if (!isset(self::$JAVA170RC)) {
            self::$JAVA170RC = new Runtime('java-17.0-rc');
        }
        return self::$JAVA170RC;
    }
    public static function JAVA180RC(): Runtime
    {
        if (!isset(self::$JAVA180RC)) {
            self::$JAVA180RC = new Runtime('java-18.0-rc');
        }
        return self::$JAVA180RC;
    }
    public static function JAVA210RC(): Runtime
    {
        if (!isset(self::$JAVA210RC)) {
            self::$JAVA210RC = new Runtime('java-21.0-rc');
        }
        return self::$JAVA210RC;
    }
    public static function JAVA22RC(): Runtime
    {
        if (!isset(self::$JAVA22RC)) {
            self::$JAVA22RC = new Runtime('java-22-rc');
        }
        return self::$JAVA22RC;
    }
    public static function JAVA25RC(): Runtime
    {
        if (!isset(self::$JAVA25RC)) {
            self::$JAVA25RC = new Runtime('java-25-rc');
        }
        return self::$JAVA25RC;
    }
    public static function SWIFT55RC(): Runtime
    {
        if (!isset(self::$SWIFT55RC)) {
            self::$SWIFT55RC = new Runtime('swift-5.5-rc');
        }
        return self::$SWIFT55RC;
    }
    public static function SWIFT58RC(): Runtime
    {
        if (!isset(self::$SWIFT58RC)) {
            self::$SWIFT58RC = new Runtime('swift-5.8-rc');
        }
        return self::$SWIFT58RC;
    }
    public static function SWIFT59RC(): Runtime
    {
        if (!isset(self::$SWIFT59RC)) {
            self::$SWIFT59RC = new Runtime('swift-5.9-rc');
        }
        return self::$SWIFT59RC;
    }
    public static function SWIFT510RC(): Runtime
    {
        if (!isset(self::$SWIFT510RC)) {
            self::$SWIFT510RC = new Runtime('swift-5.10-rc');
        }
        return self::$SWIFT510RC;
    }
    public static function SWIFT62RC(): Runtime
    {
        if (!isset(self::$SWIFT62RC)) {
            self::$SWIFT62RC = new Runtime('swift-6.2-rc');
        }
        return self::$SWIFT62RC;
    }
    public static function KOTLIN16RC(): Runtime
    {
        if (!isset(self::$KOTLIN16RC)) {
            self::$KOTLIN16RC = new Runtime('kotlin-1.6-rc');
        }
        return self::$KOTLIN16RC;
    }
    public static function KOTLIN18RC(): Runtime
    {
        if (!isset(self::$KOTLIN18RC)) {
            self::$KOTLIN18RC = new Runtime('kotlin-1.8-rc');
        }
        return self::$KOTLIN18RC;
    }
    public static function KOTLIN19RC(): Runtime
    {
        if (!isset(self::$KOTLIN19RC)) {
            self::$KOTLIN19RC = new Runtime('kotlin-1.9-rc');
        }
        return self::$KOTLIN19RC;
    }
    public static function KOTLIN20RC(): Runtime
    {
        if (!isset(self::$KOTLIN20RC)) {
            self::$KOTLIN20RC = new Runtime('kotlin-2.0-rc');
        }
        return self::$KOTLIN20RC;
    }
    public static function KOTLIN23RC(): Runtime
    {
        if (!isset(self::$KOTLIN23RC)) {
            self::$KOTLIN23RC = new Runtime('kotlin-2.3-rc');
        }
        return self::$KOTLIN23RC;
    }
    public static function CPP17RC(): Runtime
    {
        if (!isset(self::$CPP17RC)) {
            self::$CPP17RC = new Runtime('cpp-17-rc');
        }
        return self::$CPP17RC;
    }
    public static function CPP20RC(): Runtime
    {
        if (!isset(self::$CPP20RC)) {
            self::$CPP20RC = new Runtime('cpp-20-rc');
        }
        return self::$CPP20RC;
    }
    public static function BUN10RC(): Runtime
    {
        if (!isset(self::$BUN10RC)) {
            self::$BUN10RC = new Runtime('bun-1.0-rc');
        }
        return self::$BUN10RC;
    }
    public static function BUN11RC(): Runtime
    {
        if (!isset(self::$BUN11RC)) {
            self::$BUN11RC = new Runtime('bun-1.1-rc');
        }
        return self::$BUN11RC;
    }
    public static function BUN12RC(): Runtime
    {
        if (!isset(self::$BUN12RC)) {
            self::$BUN12RC = new Runtime('bun-1.2-rc');
        }
        return self::$BUN12RC;
    }
    public static function BUN13RC(): Runtime
    {
        if (!isset(self::$BUN13RC)) {
            self::$BUN13RC = new Runtime('bun-1.3-rc');
        }
        return self::$BUN13RC;
    }
    public static function GO123RC(): Runtime
    {
        if (!isset(self::$GO123RC)) {
            self::$GO123RC = new Runtime('go-1.23-rc');
        }
        return self::$GO123RC;
    }
    public static function GO124RC(): Runtime
    {
        if (!isset(self::$GO124RC)) {
            self::$GO124RC = new Runtime('go-1.24-rc');
        }
        return self::$GO124RC;
    }
    public static function GO125RC(): Runtime
    {
        if (!isset(self::$GO125RC)) {
            self::$GO125RC = new Runtime('go-1.25-rc');
        }
        return self::$GO125RC;
    }
    public static function GO126RC(): Runtime
    {
        if (!isset(self::$GO126RC)) {
            self::$GO126RC = new Runtime('go-1.26-rc');
        }
        return self::$GO126RC;
    }
    public static function STATIC1RC(): Runtime
    {
        if (!isset(self::$STATIC1RC)) {
            self::$STATIC1RC = new Runtime('static-1-rc');
        }
        return self::$STATIC1RC;
    }
    public static function FLUTTER324RC(): Runtime
    {
        if (!isset(self::$FLUTTER324RC)) {
            self::$FLUTTER324RC = new Runtime('flutter-3.24-rc');
        }
        return self::$FLUTTER324RC;
    }
    public static function FLUTTER327RC(): Runtime
    {
        if (!isset(self::$FLUTTER327RC)) {
            self::$FLUTTER327RC = new Runtime('flutter-3.27-rc');
        }
        return self::$FLUTTER327RC;
    }
    public static function FLUTTER329RC(): Runtime
    {
        if (!isset(self::$FLUTTER329RC)) {
            self::$FLUTTER329RC = new Runtime('flutter-3.29-rc');
        }
        return self::$FLUTTER329RC;
    }
    public static function FLUTTER332RC(): Runtime
    {
        if (!isset(self::$FLUTTER332RC)) {
            self::$FLUTTER332RC = new Runtime('flutter-3.32-rc');
        }
        return self::$FLUTTER332RC;
    }
    public static function FLUTTER335RC(): Runtime
    {
        if (!isset(self::$FLUTTER335RC)) {
            self::$FLUTTER335RC = new Runtime('flutter-3.35-rc');
        }
        return self::$FLUTTER335RC;
    }
    public static function FLUTTER338RC(): Runtime
    {
        if (!isset(self::$FLUTTER338RC)) {
            self::$FLUTTER338RC = new Runtime('flutter-3.38-rc');
        }
        return self::$FLUTTER338RC;
    }
}