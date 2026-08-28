<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProjectEmailTemplateLocale implements JsonSerializable, Stringable
{
    private static ProjectEmailTemplateLocale $AF;
    private static ProjectEmailTemplateLocale $ARAE;
    private static ProjectEmailTemplateLocale $ARBH;
    private static ProjectEmailTemplateLocale $ARDZ;
    private static ProjectEmailTemplateLocale $AREG;
    private static ProjectEmailTemplateLocale $ARIQ;
    private static ProjectEmailTemplateLocale $ARJO;
    private static ProjectEmailTemplateLocale $ARKW;
    private static ProjectEmailTemplateLocale $ARLB;
    private static ProjectEmailTemplateLocale $ARLY;
    private static ProjectEmailTemplateLocale $ARMA;
    private static ProjectEmailTemplateLocale $AROM;
    private static ProjectEmailTemplateLocale $ARQA;
    private static ProjectEmailTemplateLocale $ARSA;
    private static ProjectEmailTemplateLocale $ARSY;
    private static ProjectEmailTemplateLocale $ARTN;
    private static ProjectEmailTemplateLocale $ARYE;
    private static ProjectEmailTemplateLocale $AS;
    private static ProjectEmailTemplateLocale $AZ;
    private static ProjectEmailTemplateLocale $BE;
    private static ProjectEmailTemplateLocale $BG;
    private static ProjectEmailTemplateLocale $BH;
    private static ProjectEmailTemplateLocale $BN;
    private static ProjectEmailTemplateLocale $BS;
    private static ProjectEmailTemplateLocale $CA;
    private static ProjectEmailTemplateLocale $CS;
    private static ProjectEmailTemplateLocale $CY;
    private static ProjectEmailTemplateLocale $DA;
    private static ProjectEmailTemplateLocale $DE;
    private static ProjectEmailTemplateLocale $DEAT;
    private static ProjectEmailTemplateLocale $DECH;
    private static ProjectEmailTemplateLocale $DELI;
    private static ProjectEmailTemplateLocale $DELU;
    private static ProjectEmailTemplateLocale $EL;
    private static ProjectEmailTemplateLocale $EN;
    private static ProjectEmailTemplateLocale $ENAU;
    private static ProjectEmailTemplateLocale $ENBZ;
    private static ProjectEmailTemplateLocale $ENCA;
    private static ProjectEmailTemplateLocale $ENGB;
    private static ProjectEmailTemplateLocale $ENIE;
    private static ProjectEmailTemplateLocale $ENJM;
    private static ProjectEmailTemplateLocale $ENNZ;
    private static ProjectEmailTemplateLocale $ENTT;
    private static ProjectEmailTemplateLocale $ENUS;
    private static ProjectEmailTemplateLocale $ENZA;
    private static ProjectEmailTemplateLocale $EO;
    private static ProjectEmailTemplateLocale $ES;
    private static ProjectEmailTemplateLocale $ESAR;
    private static ProjectEmailTemplateLocale $ESBO;
    private static ProjectEmailTemplateLocale $ESCL;
    private static ProjectEmailTemplateLocale $ESCO;
    private static ProjectEmailTemplateLocale $ESCR;
    private static ProjectEmailTemplateLocale $ESDO;
    private static ProjectEmailTemplateLocale $ESEC;
    private static ProjectEmailTemplateLocale $ESGT;
    private static ProjectEmailTemplateLocale $ESHN;
    private static ProjectEmailTemplateLocale $ESMX;
    private static ProjectEmailTemplateLocale $ESNI;
    private static ProjectEmailTemplateLocale $ESPA;
    private static ProjectEmailTemplateLocale $ESPE;
    private static ProjectEmailTemplateLocale $ESPR;
    private static ProjectEmailTemplateLocale $ESPY;
    private static ProjectEmailTemplateLocale $ESSV;
    private static ProjectEmailTemplateLocale $ESUY;
    private static ProjectEmailTemplateLocale $ESVE;
    private static ProjectEmailTemplateLocale $ET;
    private static ProjectEmailTemplateLocale $EU;
    private static ProjectEmailTemplateLocale $FA;
    private static ProjectEmailTemplateLocale $FI;
    private static ProjectEmailTemplateLocale $FO;
    private static ProjectEmailTemplateLocale $FR;
    private static ProjectEmailTemplateLocale $FRBE;
    private static ProjectEmailTemplateLocale $FRCA;
    private static ProjectEmailTemplateLocale $FRCH;
    private static ProjectEmailTemplateLocale $FRLU;
    private static ProjectEmailTemplateLocale $GA;
    private static ProjectEmailTemplateLocale $GD;
    private static ProjectEmailTemplateLocale $HE;
    private static ProjectEmailTemplateLocale $HI;
    private static ProjectEmailTemplateLocale $HR;
    private static ProjectEmailTemplateLocale $HU;
    private static ProjectEmailTemplateLocale $ID;
    private static ProjectEmailTemplateLocale $IS;
    private static ProjectEmailTemplateLocale $IT;
    private static ProjectEmailTemplateLocale $ITCH;
    private static ProjectEmailTemplateLocale $JA;
    private static ProjectEmailTemplateLocale $JI;
    private static ProjectEmailTemplateLocale $KO;
    private static ProjectEmailTemplateLocale $KU;
    private static ProjectEmailTemplateLocale $LT;
    private static ProjectEmailTemplateLocale $LV;
    private static ProjectEmailTemplateLocale $MK;
    private static ProjectEmailTemplateLocale $ML;
    private static ProjectEmailTemplateLocale $MS;
    private static ProjectEmailTemplateLocale $MT;
    private static ProjectEmailTemplateLocale $NB;
    private static ProjectEmailTemplateLocale $NE;
    private static ProjectEmailTemplateLocale $NL;
    private static ProjectEmailTemplateLocale $NLBE;
    private static ProjectEmailTemplateLocale $NN;
    private static ProjectEmailTemplateLocale $NO;
    private static ProjectEmailTemplateLocale $PA;
    private static ProjectEmailTemplateLocale $PL;
    private static ProjectEmailTemplateLocale $PT;
    private static ProjectEmailTemplateLocale $PTBR;
    private static ProjectEmailTemplateLocale $RM;
    private static ProjectEmailTemplateLocale $RO;
    private static ProjectEmailTemplateLocale $ROMD;
    private static ProjectEmailTemplateLocale $RU;
    private static ProjectEmailTemplateLocale $RUMD;
    private static ProjectEmailTemplateLocale $SB;
    private static ProjectEmailTemplateLocale $SK;
    private static ProjectEmailTemplateLocale $SL;
    private static ProjectEmailTemplateLocale $SQ;
    private static ProjectEmailTemplateLocale $SR;
    private static ProjectEmailTemplateLocale $SV;
    private static ProjectEmailTemplateLocale $SVFI;
    private static ProjectEmailTemplateLocale $TH;
    private static ProjectEmailTemplateLocale $TN;
    private static ProjectEmailTemplateLocale $TR;
    private static ProjectEmailTemplateLocale $TS;
    private static ProjectEmailTemplateLocale $UA;
    private static ProjectEmailTemplateLocale $UR;
    private static ProjectEmailTemplateLocale $VE;
    private static ProjectEmailTemplateLocale $VI;
    private static ProjectEmailTemplateLocale $XH;
    private static ProjectEmailTemplateLocale $ZHCN;
    private static ProjectEmailTemplateLocale $ZHHK;
    private static ProjectEmailTemplateLocale $ZHSG;
    private static ProjectEmailTemplateLocale $ZHTW;
    private static ProjectEmailTemplateLocale $ZU;

    private function __construct(private readonly string $value)
    {
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public static function AF(): ProjectEmailTemplateLocale
    {
        self::$AF ??= new ProjectEmailTemplateLocale('af');

        return self::$AF;
    }
    public static function ARAE(): ProjectEmailTemplateLocale
    {
        self::$ARAE ??= new ProjectEmailTemplateLocale('ar-ae');

        return self::$ARAE;
    }
    public static function ARBH(): ProjectEmailTemplateLocale
    {
        self::$ARBH ??= new ProjectEmailTemplateLocale('ar-bh');

        return self::$ARBH;
    }
    public static function ARDZ(): ProjectEmailTemplateLocale
    {
        self::$ARDZ ??= new ProjectEmailTemplateLocale('ar-dz');

        return self::$ARDZ;
    }
    public static function AREG(): ProjectEmailTemplateLocale
    {
        self::$AREG ??= new ProjectEmailTemplateLocale('ar-eg');

        return self::$AREG;
    }
    public static function ARIQ(): ProjectEmailTemplateLocale
    {
        self::$ARIQ ??= new ProjectEmailTemplateLocale('ar-iq');

        return self::$ARIQ;
    }
    public static function ARJO(): ProjectEmailTemplateLocale
    {
        self::$ARJO ??= new ProjectEmailTemplateLocale('ar-jo');

        return self::$ARJO;
    }
    public static function ARKW(): ProjectEmailTemplateLocale
    {
        self::$ARKW ??= new ProjectEmailTemplateLocale('ar-kw');

        return self::$ARKW;
    }
    public static function ARLB(): ProjectEmailTemplateLocale
    {
        self::$ARLB ??= new ProjectEmailTemplateLocale('ar-lb');

        return self::$ARLB;
    }
    public static function ARLY(): ProjectEmailTemplateLocale
    {
        self::$ARLY ??= new ProjectEmailTemplateLocale('ar-ly');

        return self::$ARLY;
    }
    public static function ARMA(): ProjectEmailTemplateLocale
    {
        self::$ARMA ??= new ProjectEmailTemplateLocale('ar-ma');

        return self::$ARMA;
    }
    public static function AROM(): ProjectEmailTemplateLocale
    {
        self::$AROM ??= new ProjectEmailTemplateLocale('ar-om');

        return self::$AROM;
    }
    public static function ARQA(): ProjectEmailTemplateLocale
    {
        self::$ARQA ??= new ProjectEmailTemplateLocale('ar-qa');

        return self::$ARQA;
    }
    public static function ARSA(): ProjectEmailTemplateLocale
    {
        self::$ARSA ??= new ProjectEmailTemplateLocale('ar-sa');

        return self::$ARSA;
    }
    public static function ARSY(): ProjectEmailTemplateLocale
    {
        self::$ARSY ??= new ProjectEmailTemplateLocale('ar-sy');

        return self::$ARSY;
    }
    public static function ARTN(): ProjectEmailTemplateLocale
    {
        self::$ARTN ??= new ProjectEmailTemplateLocale('ar-tn');

        return self::$ARTN;
    }
    public static function ARYE(): ProjectEmailTemplateLocale
    {
        self::$ARYE ??= new ProjectEmailTemplateLocale('ar-ye');

        return self::$ARYE;
    }
    public static function AS(): ProjectEmailTemplateLocale
    {
        self::$AS ??= new ProjectEmailTemplateLocale('as');

        return self::$AS;
    }
    public static function AZ(): ProjectEmailTemplateLocale
    {
        self::$AZ ??= new ProjectEmailTemplateLocale('az');

        return self::$AZ;
    }
    public static function BE(): ProjectEmailTemplateLocale
    {
        self::$BE ??= new ProjectEmailTemplateLocale('be');

        return self::$BE;
    }
    public static function BG(): ProjectEmailTemplateLocale
    {
        self::$BG ??= new ProjectEmailTemplateLocale('bg');

        return self::$BG;
    }
    public static function BH(): ProjectEmailTemplateLocale
    {
        self::$BH ??= new ProjectEmailTemplateLocale('bh');

        return self::$BH;
    }
    public static function BN(): ProjectEmailTemplateLocale
    {
        self::$BN ??= new ProjectEmailTemplateLocale('bn');

        return self::$BN;
    }
    public static function BS(): ProjectEmailTemplateLocale
    {
        self::$BS ??= new ProjectEmailTemplateLocale('bs');

        return self::$BS;
    }
    public static function CA(): ProjectEmailTemplateLocale
    {
        self::$CA ??= new ProjectEmailTemplateLocale('ca');

        return self::$CA;
    }
    public static function CS(): ProjectEmailTemplateLocale
    {
        self::$CS ??= new ProjectEmailTemplateLocale('cs');

        return self::$CS;
    }
    public static function CY(): ProjectEmailTemplateLocale
    {
        self::$CY ??= new ProjectEmailTemplateLocale('cy');

        return self::$CY;
    }
    public static function DA(): ProjectEmailTemplateLocale
    {
        self::$DA ??= new ProjectEmailTemplateLocale('da');

        return self::$DA;
    }
    public static function DE(): ProjectEmailTemplateLocale
    {
        self::$DE ??= new ProjectEmailTemplateLocale('de');

        return self::$DE;
    }
    public static function DEAT(): ProjectEmailTemplateLocale
    {
        self::$DEAT ??= new ProjectEmailTemplateLocale('de-at');

        return self::$DEAT;
    }
    public static function DECH(): ProjectEmailTemplateLocale
    {
        self::$DECH ??= new ProjectEmailTemplateLocale('de-ch');

        return self::$DECH;
    }
    public static function DELI(): ProjectEmailTemplateLocale
    {
        self::$DELI ??= new ProjectEmailTemplateLocale('de-li');

        return self::$DELI;
    }
    public static function DELU(): ProjectEmailTemplateLocale
    {
        self::$DELU ??= new ProjectEmailTemplateLocale('de-lu');

        return self::$DELU;
    }
    public static function EL(): ProjectEmailTemplateLocale
    {
        self::$EL ??= new ProjectEmailTemplateLocale('el');

        return self::$EL;
    }
    public static function EN(): ProjectEmailTemplateLocale
    {
        self::$EN ??= new ProjectEmailTemplateLocale('en');

        return self::$EN;
    }
    public static function ENAU(): ProjectEmailTemplateLocale
    {
        self::$ENAU ??= new ProjectEmailTemplateLocale('en-au');

        return self::$ENAU;
    }
    public static function ENBZ(): ProjectEmailTemplateLocale
    {
        self::$ENBZ ??= new ProjectEmailTemplateLocale('en-bz');

        return self::$ENBZ;
    }
    public static function ENCA(): ProjectEmailTemplateLocale
    {
        self::$ENCA ??= new ProjectEmailTemplateLocale('en-ca');

        return self::$ENCA;
    }
    public static function ENGB(): ProjectEmailTemplateLocale
    {
        self::$ENGB ??= new ProjectEmailTemplateLocale('en-gb');

        return self::$ENGB;
    }
    public static function ENIE(): ProjectEmailTemplateLocale
    {
        self::$ENIE ??= new ProjectEmailTemplateLocale('en-ie');

        return self::$ENIE;
    }
    public static function ENJM(): ProjectEmailTemplateLocale
    {
        self::$ENJM ??= new ProjectEmailTemplateLocale('en-jm');

        return self::$ENJM;
    }
    public static function ENNZ(): ProjectEmailTemplateLocale
    {
        self::$ENNZ ??= new ProjectEmailTemplateLocale('en-nz');

        return self::$ENNZ;
    }
    public static function ENTT(): ProjectEmailTemplateLocale
    {
        self::$ENTT ??= new ProjectEmailTemplateLocale('en-tt');

        return self::$ENTT;
    }
    public static function ENUS(): ProjectEmailTemplateLocale
    {
        self::$ENUS ??= new ProjectEmailTemplateLocale('en-us');

        return self::$ENUS;
    }
    public static function ENZA(): ProjectEmailTemplateLocale
    {
        self::$ENZA ??= new ProjectEmailTemplateLocale('en-za');

        return self::$ENZA;
    }
    public static function EO(): ProjectEmailTemplateLocale
    {
        self::$EO ??= new ProjectEmailTemplateLocale('eo');

        return self::$EO;
    }
    public static function ES(): ProjectEmailTemplateLocale
    {
        self::$ES ??= new ProjectEmailTemplateLocale('es');

        return self::$ES;
    }
    public static function ESAR(): ProjectEmailTemplateLocale
    {
        self::$ESAR ??= new ProjectEmailTemplateLocale('es-ar');

        return self::$ESAR;
    }
    public static function ESBO(): ProjectEmailTemplateLocale
    {
        self::$ESBO ??= new ProjectEmailTemplateLocale('es-bo');

        return self::$ESBO;
    }
    public static function ESCL(): ProjectEmailTemplateLocale
    {
        self::$ESCL ??= new ProjectEmailTemplateLocale('es-cl');

        return self::$ESCL;
    }
    public static function ESCO(): ProjectEmailTemplateLocale
    {
        self::$ESCO ??= new ProjectEmailTemplateLocale('es-co');

        return self::$ESCO;
    }
    public static function ESCR(): ProjectEmailTemplateLocale
    {
        self::$ESCR ??= new ProjectEmailTemplateLocale('es-cr');

        return self::$ESCR;
    }
    public static function ESDO(): ProjectEmailTemplateLocale
    {
        self::$ESDO ??= new ProjectEmailTemplateLocale('es-do');

        return self::$ESDO;
    }
    public static function ESEC(): ProjectEmailTemplateLocale
    {
        self::$ESEC ??= new ProjectEmailTemplateLocale('es-ec');

        return self::$ESEC;
    }
    public static function ESGT(): ProjectEmailTemplateLocale
    {
        self::$ESGT ??= new ProjectEmailTemplateLocale('es-gt');

        return self::$ESGT;
    }
    public static function ESHN(): ProjectEmailTemplateLocale
    {
        self::$ESHN ??= new ProjectEmailTemplateLocale('es-hn');

        return self::$ESHN;
    }
    public static function ESMX(): ProjectEmailTemplateLocale
    {
        self::$ESMX ??= new ProjectEmailTemplateLocale('es-mx');

        return self::$ESMX;
    }
    public static function ESNI(): ProjectEmailTemplateLocale
    {
        self::$ESNI ??= new ProjectEmailTemplateLocale('es-ni');

        return self::$ESNI;
    }
    public static function ESPA(): ProjectEmailTemplateLocale
    {
        self::$ESPA ??= new ProjectEmailTemplateLocale('es-pa');

        return self::$ESPA;
    }
    public static function ESPE(): ProjectEmailTemplateLocale
    {
        self::$ESPE ??= new ProjectEmailTemplateLocale('es-pe');

        return self::$ESPE;
    }
    public static function ESPR(): ProjectEmailTemplateLocale
    {
        self::$ESPR ??= new ProjectEmailTemplateLocale('es-pr');

        return self::$ESPR;
    }
    public static function ESPY(): ProjectEmailTemplateLocale
    {
        self::$ESPY ??= new ProjectEmailTemplateLocale('es-py');

        return self::$ESPY;
    }
    public static function ESSV(): ProjectEmailTemplateLocale
    {
        self::$ESSV ??= new ProjectEmailTemplateLocale('es-sv');

        return self::$ESSV;
    }
    public static function ESUY(): ProjectEmailTemplateLocale
    {
        self::$ESUY ??= new ProjectEmailTemplateLocale('es-uy');

        return self::$ESUY;
    }
    public static function ESVE(): ProjectEmailTemplateLocale
    {
        self::$ESVE ??= new ProjectEmailTemplateLocale('es-ve');

        return self::$ESVE;
    }
    public static function ET(): ProjectEmailTemplateLocale
    {
        self::$ET ??= new ProjectEmailTemplateLocale('et');

        return self::$ET;
    }
    public static function EU(): ProjectEmailTemplateLocale
    {
        self::$EU ??= new ProjectEmailTemplateLocale('eu');

        return self::$EU;
    }
    public static function FA(): ProjectEmailTemplateLocale
    {
        self::$FA ??= new ProjectEmailTemplateLocale('fa');

        return self::$FA;
    }
    public static function FI(): ProjectEmailTemplateLocale
    {
        self::$FI ??= new ProjectEmailTemplateLocale('fi');

        return self::$FI;
    }
    public static function FO(): ProjectEmailTemplateLocale
    {
        self::$FO ??= new ProjectEmailTemplateLocale('fo');

        return self::$FO;
    }
    public static function FR(): ProjectEmailTemplateLocale
    {
        self::$FR ??= new ProjectEmailTemplateLocale('fr');

        return self::$FR;
    }
    public static function FRBE(): ProjectEmailTemplateLocale
    {
        self::$FRBE ??= new ProjectEmailTemplateLocale('fr-be');

        return self::$FRBE;
    }
    public static function FRCA(): ProjectEmailTemplateLocale
    {
        self::$FRCA ??= new ProjectEmailTemplateLocale('fr-ca');

        return self::$FRCA;
    }
    public static function FRCH(): ProjectEmailTemplateLocale
    {
        self::$FRCH ??= new ProjectEmailTemplateLocale('fr-ch');

        return self::$FRCH;
    }
    public static function FRLU(): ProjectEmailTemplateLocale
    {
        self::$FRLU ??= new ProjectEmailTemplateLocale('fr-lu');

        return self::$FRLU;
    }
    public static function GA(): ProjectEmailTemplateLocale
    {
        self::$GA ??= new ProjectEmailTemplateLocale('ga');

        return self::$GA;
    }
    public static function GD(): ProjectEmailTemplateLocale
    {
        self::$GD ??= new ProjectEmailTemplateLocale('gd');

        return self::$GD;
    }
    public static function HE(): ProjectEmailTemplateLocale
    {
        self::$HE ??= new ProjectEmailTemplateLocale('he');

        return self::$HE;
    }
    public static function HI(): ProjectEmailTemplateLocale
    {
        self::$HI ??= new ProjectEmailTemplateLocale('hi');

        return self::$HI;
    }
    public static function HR(): ProjectEmailTemplateLocale
    {
        self::$HR ??= new ProjectEmailTemplateLocale('hr');

        return self::$HR;
    }
    public static function HU(): ProjectEmailTemplateLocale
    {
        self::$HU ??= new ProjectEmailTemplateLocale('hu');

        return self::$HU;
    }
    public static function ID(): ProjectEmailTemplateLocale
    {
        self::$ID ??= new ProjectEmailTemplateLocale('id');

        return self::$ID;
    }
    public static function IS(): ProjectEmailTemplateLocale
    {
        self::$IS ??= new ProjectEmailTemplateLocale('is');

        return self::$IS;
    }
    public static function IT(): ProjectEmailTemplateLocale
    {
        self::$IT ??= new ProjectEmailTemplateLocale('it');

        return self::$IT;
    }
    public static function ITCH(): ProjectEmailTemplateLocale
    {
        self::$ITCH ??= new ProjectEmailTemplateLocale('it-ch');

        return self::$ITCH;
    }
    public static function JA(): ProjectEmailTemplateLocale
    {
        self::$JA ??= new ProjectEmailTemplateLocale('ja');

        return self::$JA;
    }
    public static function JI(): ProjectEmailTemplateLocale
    {
        self::$JI ??= new ProjectEmailTemplateLocale('ji');

        return self::$JI;
    }
    public static function KO(): ProjectEmailTemplateLocale
    {
        self::$KO ??= new ProjectEmailTemplateLocale('ko');

        return self::$KO;
    }
    public static function KU(): ProjectEmailTemplateLocale
    {
        self::$KU ??= new ProjectEmailTemplateLocale('ku');

        return self::$KU;
    }
    public static function LT(): ProjectEmailTemplateLocale
    {
        self::$LT ??= new ProjectEmailTemplateLocale('lt');

        return self::$LT;
    }
    public static function LV(): ProjectEmailTemplateLocale
    {
        self::$LV ??= new ProjectEmailTemplateLocale('lv');

        return self::$LV;
    }
    public static function MK(): ProjectEmailTemplateLocale
    {
        self::$MK ??= new ProjectEmailTemplateLocale('mk');

        return self::$MK;
    }
    public static function ML(): ProjectEmailTemplateLocale
    {
        self::$ML ??= new ProjectEmailTemplateLocale('ml');

        return self::$ML;
    }
    public static function MS(): ProjectEmailTemplateLocale
    {
        self::$MS ??= new ProjectEmailTemplateLocale('ms');

        return self::$MS;
    }
    public static function MT(): ProjectEmailTemplateLocale
    {
        self::$MT ??= new ProjectEmailTemplateLocale('mt');

        return self::$MT;
    }
    public static function NB(): ProjectEmailTemplateLocale
    {
        self::$NB ??= new ProjectEmailTemplateLocale('nb');

        return self::$NB;
    }
    public static function NE(): ProjectEmailTemplateLocale
    {
        self::$NE ??= new ProjectEmailTemplateLocale('ne');

        return self::$NE;
    }
    public static function NL(): ProjectEmailTemplateLocale
    {
        self::$NL ??= new ProjectEmailTemplateLocale('nl');

        return self::$NL;
    }
    public static function NLBE(): ProjectEmailTemplateLocale
    {
        self::$NLBE ??= new ProjectEmailTemplateLocale('nl-be');

        return self::$NLBE;
    }
    public static function NN(): ProjectEmailTemplateLocale
    {
        self::$NN ??= new ProjectEmailTemplateLocale('nn');

        return self::$NN;
    }
    public static function NO(): ProjectEmailTemplateLocale
    {
        self::$NO ??= new ProjectEmailTemplateLocale('no');

        return self::$NO;
    }
    public static function PA(): ProjectEmailTemplateLocale
    {
        self::$PA ??= new ProjectEmailTemplateLocale('pa');

        return self::$PA;
    }
    public static function PL(): ProjectEmailTemplateLocale
    {
        self::$PL ??= new ProjectEmailTemplateLocale('pl');

        return self::$PL;
    }
    public static function PT(): ProjectEmailTemplateLocale
    {
        self::$PT ??= new ProjectEmailTemplateLocale('pt');

        return self::$PT;
    }
    public static function PTBR(): ProjectEmailTemplateLocale
    {
        self::$PTBR ??= new ProjectEmailTemplateLocale('pt-br');

        return self::$PTBR;
    }
    public static function RM(): ProjectEmailTemplateLocale
    {
        self::$RM ??= new ProjectEmailTemplateLocale('rm');

        return self::$RM;
    }
    public static function RO(): ProjectEmailTemplateLocale
    {
        self::$RO ??= new ProjectEmailTemplateLocale('ro');

        return self::$RO;
    }
    public static function ROMD(): ProjectEmailTemplateLocale
    {
        self::$ROMD ??= new ProjectEmailTemplateLocale('ro-md');

        return self::$ROMD;
    }
    public static function RU(): ProjectEmailTemplateLocale
    {
        self::$RU ??= new ProjectEmailTemplateLocale('ru');

        return self::$RU;
    }
    public static function RUMD(): ProjectEmailTemplateLocale
    {
        self::$RUMD ??= new ProjectEmailTemplateLocale('ru-md');

        return self::$RUMD;
    }
    public static function SB(): ProjectEmailTemplateLocale
    {
        self::$SB ??= new ProjectEmailTemplateLocale('sb');

        return self::$SB;
    }
    public static function SK(): ProjectEmailTemplateLocale
    {
        self::$SK ??= new ProjectEmailTemplateLocale('sk');

        return self::$SK;
    }
    public static function SL(): ProjectEmailTemplateLocale
    {
        self::$SL ??= new ProjectEmailTemplateLocale('sl');

        return self::$SL;
    }
    public static function SQ(): ProjectEmailTemplateLocale
    {
        self::$SQ ??= new ProjectEmailTemplateLocale('sq');

        return self::$SQ;
    }
    public static function SR(): ProjectEmailTemplateLocale
    {
        self::$SR ??= new ProjectEmailTemplateLocale('sr');

        return self::$SR;
    }
    public static function SV(): ProjectEmailTemplateLocale
    {
        self::$SV ??= new ProjectEmailTemplateLocale('sv');

        return self::$SV;
    }
    public static function SVFI(): ProjectEmailTemplateLocale
    {
        self::$SVFI ??= new ProjectEmailTemplateLocale('sv-fi');

        return self::$SVFI;
    }
    public static function TH(): ProjectEmailTemplateLocale
    {
        self::$TH ??= new ProjectEmailTemplateLocale('th');

        return self::$TH;
    }
    public static function TN(): ProjectEmailTemplateLocale
    {
        self::$TN ??= new ProjectEmailTemplateLocale('tn');

        return self::$TN;
    }
    public static function TR(): ProjectEmailTemplateLocale
    {
        self::$TR ??= new ProjectEmailTemplateLocale('tr');

        return self::$TR;
    }
    public static function TS(): ProjectEmailTemplateLocale
    {
        self::$TS ??= new ProjectEmailTemplateLocale('ts');

        return self::$TS;
    }
    public static function UA(): ProjectEmailTemplateLocale
    {
        self::$UA ??= new ProjectEmailTemplateLocale('ua');

        return self::$UA;
    }
    public static function UR(): ProjectEmailTemplateLocale
    {
        self::$UR ??= new ProjectEmailTemplateLocale('ur');

        return self::$UR;
    }
    public static function VE(): ProjectEmailTemplateLocale
    {
        self::$VE ??= new ProjectEmailTemplateLocale('ve');

        return self::$VE;
    }
    public static function VI(): ProjectEmailTemplateLocale
    {
        self::$VI ??= new ProjectEmailTemplateLocale('vi');

        return self::$VI;
    }
    public static function XH(): ProjectEmailTemplateLocale
    {
        self::$XH ??= new ProjectEmailTemplateLocale('xh');

        return self::$XH;
    }
    public static function ZHCN(): ProjectEmailTemplateLocale
    {
        self::$ZHCN ??= new ProjectEmailTemplateLocale('zh-cn');

        return self::$ZHCN;
    }
    public static function ZHHK(): ProjectEmailTemplateLocale
    {
        self::$ZHHK ??= new ProjectEmailTemplateLocale('zh-hk');

        return self::$ZHHK;
    }
    public static function ZHSG(): ProjectEmailTemplateLocale
    {
        self::$ZHSG ??= new ProjectEmailTemplateLocale('zh-sg');

        return self::$ZHSG;
    }
    public static function ZHTW(): ProjectEmailTemplateLocale
    {
        self::$ZHTW ??= new ProjectEmailTemplateLocale('zh-tw');

        return self::$ZHTW;
    }
    public static function ZU(): ProjectEmailTemplateLocale
    {
        self::$ZU ??= new ProjectEmailTemplateLocale('zu');

        return self::$ZU;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'af' => self::AF(),
            'ar-ae' => self::ARAE(),
            'ar-bh' => self::ARBH(),
            'ar-dz' => self::ARDZ(),
            'ar-eg' => self::AREG(),
            'ar-iq' => self::ARIQ(),
            'ar-jo' => self::ARJO(),
            'ar-kw' => self::ARKW(),
            'ar-lb' => self::ARLB(),
            'ar-ly' => self::ARLY(),
            'ar-ma' => self::ARMA(),
            'ar-om' => self::AROM(),
            'ar-qa' => self::ARQA(),
            'ar-sa' => self::ARSA(),
            'ar-sy' => self::ARSY(),
            'ar-tn' => self::ARTN(),
            'ar-ye' => self::ARYE(),
            'as' => self::AS(),
            'az' => self::AZ(),
            'be' => self::BE(),
            'bg' => self::BG(),
            'bh' => self::BH(),
            'bn' => self::BN(),
            'bs' => self::BS(),
            'ca' => self::CA(),
            'cs' => self::CS(),
            'cy' => self::CY(),
            'da' => self::DA(),
            'de' => self::DE(),
            'de-at' => self::DEAT(),
            'de-ch' => self::DECH(),
            'de-li' => self::DELI(),
            'de-lu' => self::DELU(),
            'el' => self::EL(),
            'en' => self::EN(),
            'en-au' => self::ENAU(),
            'en-bz' => self::ENBZ(),
            'en-ca' => self::ENCA(),
            'en-gb' => self::ENGB(),
            'en-ie' => self::ENIE(),
            'en-jm' => self::ENJM(),
            'en-nz' => self::ENNZ(),
            'en-tt' => self::ENTT(),
            'en-us' => self::ENUS(),
            'en-za' => self::ENZA(),
            'eo' => self::EO(),
            'es' => self::ES(),
            'es-ar' => self::ESAR(),
            'es-bo' => self::ESBO(),
            'es-cl' => self::ESCL(),
            'es-co' => self::ESCO(),
            'es-cr' => self::ESCR(),
            'es-do' => self::ESDO(),
            'es-ec' => self::ESEC(),
            'es-gt' => self::ESGT(),
            'es-hn' => self::ESHN(),
            'es-mx' => self::ESMX(),
            'es-ni' => self::ESNI(),
            'es-pa' => self::ESPA(),
            'es-pe' => self::ESPE(),
            'es-pr' => self::ESPR(),
            'es-py' => self::ESPY(),
            'es-sv' => self::ESSV(),
            'es-uy' => self::ESUY(),
            'es-ve' => self::ESVE(),
            'et' => self::ET(),
            'eu' => self::EU(),
            'fa' => self::FA(),
            'fi' => self::FI(),
            'fo' => self::FO(),
            'fr' => self::FR(),
            'fr-be' => self::FRBE(),
            'fr-ca' => self::FRCA(),
            'fr-ch' => self::FRCH(),
            'fr-lu' => self::FRLU(),
            'ga' => self::GA(),
            'gd' => self::GD(),
            'he' => self::HE(),
            'hi' => self::HI(),
            'hr' => self::HR(),
            'hu' => self::HU(),
            'id' => self::ID(),
            'is' => self::IS(),
            'it' => self::IT(),
            'it-ch' => self::ITCH(),
            'ja' => self::JA(),
            'ji' => self::JI(),
            'ko' => self::KO(),
            'ku' => self::KU(),
            'lt' => self::LT(),
            'lv' => self::LV(),
            'mk' => self::MK(),
            'ml' => self::ML(),
            'ms' => self::MS(),
            'mt' => self::MT(),
            'nb' => self::NB(),
            'ne' => self::NE(),
            'nl' => self::NL(),
            'nl-be' => self::NLBE(),
            'nn' => self::NN(),
            'no' => self::NO(),
            'pa' => self::PA(),
            'pl' => self::PL(),
            'pt' => self::PT(),
            'pt-br' => self::PTBR(),
            'rm' => self::RM(),
            'ro' => self::RO(),
            'ro-md' => self::ROMD(),
            'ru' => self::RU(),
            'ru-md' => self::RUMD(),
            'sb' => self::SB(),
            'sk' => self::SK(),
            'sl' => self::SL(),
            'sq' => self::SQ(),
            'sr' => self::SR(),
            'sv' => self::SV(),
            'sv-fi' => self::SVFI(),
            'th' => self::TH(),
            'tn' => self::TN(),
            'tr' => self::TR(),
            'ts' => self::TS(),
            'ua' => self::UA(),
            'ur' => self::UR(),
            've' => self::VE(),
            'vi' => self::VI(),
            'xh' => self::XH(),
            'zh-cn' => self::ZHCN(),
            'zh-hk' => self::ZHHK(),
            'zh-sg' => self::ZHSG(),
            'zh-tw' => self::ZHTW(),
            'zu' => self::ZU(),
            default => throw new \InvalidArgumentException('Unknown ProjectEmailTemplateLocale value: ' . $value),
        };
    }
}
