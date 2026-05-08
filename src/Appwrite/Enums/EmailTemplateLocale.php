<?php

namespace Appwrite\Enums;

use JsonSerializable;

class EmailTemplateLocale implements JsonSerializable
{
    private static EmailTemplateLocale $AF;
    private static EmailTemplateLocale $ARAE;
    private static EmailTemplateLocale $ARBH;
    private static EmailTemplateLocale $ARDZ;
    private static EmailTemplateLocale $AREG;
    private static EmailTemplateLocale $ARIQ;
    private static EmailTemplateLocale $ARJO;
    private static EmailTemplateLocale $ARKW;
    private static EmailTemplateLocale $ARLB;
    private static EmailTemplateLocale $ARLY;
    private static EmailTemplateLocale $ARMA;
    private static EmailTemplateLocale $AROM;
    private static EmailTemplateLocale $ARQA;
    private static EmailTemplateLocale $ARSA;
    private static EmailTemplateLocale $ARSY;
    private static EmailTemplateLocale $ARTN;
    private static EmailTemplateLocale $ARYE;
    private static EmailTemplateLocale $AS;
    private static EmailTemplateLocale $AZ;
    private static EmailTemplateLocale $BE;
    private static EmailTemplateLocale $BG;
    private static EmailTemplateLocale $BH;
    private static EmailTemplateLocale $BN;
    private static EmailTemplateLocale $BS;
    private static EmailTemplateLocale $CA;
    private static EmailTemplateLocale $CS;
    private static EmailTemplateLocale $CY;
    private static EmailTemplateLocale $DA;
    private static EmailTemplateLocale $DE;
    private static EmailTemplateLocale $DEAT;
    private static EmailTemplateLocale $DECH;
    private static EmailTemplateLocale $DELI;
    private static EmailTemplateLocale $DELU;
    private static EmailTemplateLocale $EL;
    private static EmailTemplateLocale $EN;
    private static EmailTemplateLocale $ENAU;
    private static EmailTemplateLocale $ENBZ;
    private static EmailTemplateLocale $ENCA;
    private static EmailTemplateLocale $ENGB;
    private static EmailTemplateLocale $ENIE;
    private static EmailTemplateLocale $ENJM;
    private static EmailTemplateLocale $ENNZ;
    private static EmailTemplateLocale $ENTT;
    private static EmailTemplateLocale $ENUS;
    private static EmailTemplateLocale $ENZA;
    private static EmailTemplateLocale $EO;
    private static EmailTemplateLocale $ES;
    private static EmailTemplateLocale $ESAR;
    private static EmailTemplateLocale $ESBO;
    private static EmailTemplateLocale $ESCL;
    private static EmailTemplateLocale $ESCO;
    private static EmailTemplateLocale $ESCR;
    private static EmailTemplateLocale $ESDO;
    private static EmailTemplateLocale $ESEC;
    private static EmailTemplateLocale $ESGT;
    private static EmailTemplateLocale $ESHN;
    private static EmailTemplateLocale $ESMX;
    private static EmailTemplateLocale $ESNI;
    private static EmailTemplateLocale $ESPA;
    private static EmailTemplateLocale $ESPE;
    private static EmailTemplateLocale $ESPR;
    private static EmailTemplateLocale $ESPY;
    private static EmailTemplateLocale $ESSV;
    private static EmailTemplateLocale $ESUY;
    private static EmailTemplateLocale $ESVE;
    private static EmailTemplateLocale $ET;
    private static EmailTemplateLocale $EU;
    private static EmailTemplateLocale $FA;
    private static EmailTemplateLocale $FI;
    private static EmailTemplateLocale $FO;
    private static EmailTemplateLocale $FR;
    private static EmailTemplateLocale $FRBE;
    private static EmailTemplateLocale $FRCA;
    private static EmailTemplateLocale $FRCH;
    private static EmailTemplateLocale $FRLU;
    private static EmailTemplateLocale $GA;
    private static EmailTemplateLocale $GD;
    private static EmailTemplateLocale $HE;
    private static EmailTemplateLocale $HI;
    private static EmailTemplateLocale $HR;
    private static EmailTemplateLocale $HU;
    private static EmailTemplateLocale $ID;
    private static EmailTemplateLocale $IS;
    private static EmailTemplateLocale $IT;
    private static EmailTemplateLocale $ITCH;
    private static EmailTemplateLocale $JA;
    private static EmailTemplateLocale $JI;
    private static EmailTemplateLocale $KO;
    private static EmailTemplateLocale $KU;
    private static EmailTemplateLocale $LT;
    private static EmailTemplateLocale $LV;
    private static EmailTemplateLocale $MK;
    private static EmailTemplateLocale $ML;
    private static EmailTemplateLocale $MS;
    private static EmailTemplateLocale $MT;
    private static EmailTemplateLocale $NB;
    private static EmailTemplateLocale $NE;
    private static EmailTemplateLocale $NL;
    private static EmailTemplateLocale $NLBE;
    private static EmailTemplateLocale $NN;
    private static EmailTemplateLocale $NO;
    private static EmailTemplateLocale $PA;
    private static EmailTemplateLocale $PL;
    private static EmailTemplateLocale $PT;
    private static EmailTemplateLocale $PTBR;
    private static EmailTemplateLocale $RM;
    private static EmailTemplateLocale $RO;
    private static EmailTemplateLocale $ROMD;
    private static EmailTemplateLocale $RU;
    private static EmailTemplateLocale $RUMD;
    private static EmailTemplateLocale $SB;
    private static EmailTemplateLocale $SK;
    private static EmailTemplateLocale $SL;
    private static EmailTemplateLocale $SQ;
    private static EmailTemplateLocale $SR;
    private static EmailTemplateLocale $SV;
    private static EmailTemplateLocale $SVFI;
    private static EmailTemplateLocale $TH;
    private static EmailTemplateLocale $TN;
    private static EmailTemplateLocale $TR;
    private static EmailTemplateLocale $TS;
    private static EmailTemplateLocale $UA;
    private static EmailTemplateLocale $UR;
    private static EmailTemplateLocale $VE;
    private static EmailTemplateLocale $VI;
    private static EmailTemplateLocale $XH;
    private static EmailTemplateLocale $ZHCN;
    private static EmailTemplateLocale $ZHHK;
    private static EmailTemplateLocale $ZHSG;
    private static EmailTemplateLocale $ZHTW;
    private static EmailTemplateLocale $ZU;

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

    public static function AF(): EmailTemplateLocale
    {
        if (!isset(self::$AF)) {
            self::$AF = new EmailTemplateLocale('af');
        }
        return self::$AF;
    }
    public static function ARAE(): EmailTemplateLocale
    {
        if (!isset(self::$ARAE)) {
            self::$ARAE = new EmailTemplateLocale('ar-ae');
        }
        return self::$ARAE;
    }
    public static function ARBH(): EmailTemplateLocale
    {
        if (!isset(self::$ARBH)) {
            self::$ARBH = new EmailTemplateLocale('ar-bh');
        }
        return self::$ARBH;
    }
    public static function ARDZ(): EmailTemplateLocale
    {
        if (!isset(self::$ARDZ)) {
            self::$ARDZ = new EmailTemplateLocale('ar-dz');
        }
        return self::$ARDZ;
    }
    public static function AREG(): EmailTemplateLocale
    {
        if (!isset(self::$AREG)) {
            self::$AREG = new EmailTemplateLocale('ar-eg');
        }
        return self::$AREG;
    }
    public static function ARIQ(): EmailTemplateLocale
    {
        if (!isset(self::$ARIQ)) {
            self::$ARIQ = new EmailTemplateLocale('ar-iq');
        }
        return self::$ARIQ;
    }
    public static function ARJO(): EmailTemplateLocale
    {
        if (!isset(self::$ARJO)) {
            self::$ARJO = new EmailTemplateLocale('ar-jo');
        }
        return self::$ARJO;
    }
    public static function ARKW(): EmailTemplateLocale
    {
        if (!isset(self::$ARKW)) {
            self::$ARKW = new EmailTemplateLocale('ar-kw');
        }
        return self::$ARKW;
    }
    public static function ARLB(): EmailTemplateLocale
    {
        if (!isset(self::$ARLB)) {
            self::$ARLB = new EmailTemplateLocale('ar-lb');
        }
        return self::$ARLB;
    }
    public static function ARLY(): EmailTemplateLocale
    {
        if (!isset(self::$ARLY)) {
            self::$ARLY = new EmailTemplateLocale('ar-ly');
        }
        return self::$ARLY;
    }
    public static function ARMA(): EmailTemplateLocale
    {
        if (!isset(self::$ARMA)) {
            self::$ARMA = new EmailTemplateLocale('ar-ma');
        }
        return self::$ARMA;
    }
    public static function AROM(): EmailTemplateLocale
    {
        if (!isset(self::$AROM)) {
            self::$AROM = new EmailTemplateLocale('ar-om');
        }
        return self::$AROM;
    }
    public static function ARQA(): EmailTemplateLocale
    {
        if (!isset(self::$ARQA)) {
            self::$ARQA = new EmailTemplateLocale('ar-qa');
        }
        return self::$ARQA;
    }
    public static function ARSA(): EmailTemplateLocale
    {
        if (!isset(self::$ARSA)) {
            self::$ARSA = new EmailTemplateLocale('ar-sa');
        }
        return self::$ARSA;
    }
    public static function ARSY(): EmailTemplateLocale
    {
        if (!isset(self::$ARSY)) {
            self::$ARSY = new EmailTemplateLocale('ar-sy');
        }
        return self::$ARSY;
    }
    public static function ARTN(): EmailTemplateLocale
    {
        if (!isset(self::$ARTN)) {
            self::$ARTN = new EmailTemplateLocale('ar-tn');
        }
        return self::$ARTN;
    }
    public static function ARYE(): EmailTemplateLocale
    {
        if (!isset(self::$ARYE)) {
            self::$ARYE = new EmailTemplateLocale('ar-ye');
        }
        return self::$ARYE;
    }
    public static function AS(): EmailTemplateLocale
    {
        if (!isset(self::$AS)) {
            self::$AS = new EmailTemplateLocale('as');
        }
        return self::$AS;
    }
    public static function AZ(): EmailTemplateLocale
    {
        if (!isset(self::$AZ)) {
            self::$AZ = new EmailTemplateLocale('az');
        }
        return self::$AZ;
    }
    public static function BE(): EmailTemplateLocale
    {
        if (!isset(self::$BE)) {
            self::$BE = new EmailTemplateLocale('be');
        }
        return self::$BE;
    }
    public static function BG(): EmailTemplateLocale
    {
        if (!isset(self::$BG)) {
            self::$BG = new EmailTemplateLocale('bg');
        }
        return self::$BG;
    }
    public static function BH(): EmailTemplateLocale
    {
        if (!isset(self::$BH)) {
            self::$BH = new EmailTemplateLocale('bh');
        }
        return self::$BH;
    }
    public static function BN(): EmailTemplateLocale
    {
        if (!isset(self::$BN)) {
            self::$BN = new EmailTemplateLocale('bn');
        }
        return self::$BN;
    }
    public static function BS(): EmailTemplateLocale
    {
        if (!isset(self::$BS)) {
            self::$BS = new EmailTemplateLocale('bs');
        }
        return self::$BS;
    }
    public static function CA(): EmailTemplateLocale
    {
        if (!isset(self::$CA)) {
            self::$CA = new EmailTemplateLocale('ca');
        }
        return self::$CA;
    }
    public static function CS(): EmailTemplateLocale
    {
        if (!isset(self::$CS)) {
            self::$CS = new EmailTemplateLocale('cs');
        }
        return self::$CS;
    }
    public static function CY(): EmailTemplateLocale
    {
        if (!isset(self::$CY)) {
            self::$CY = new EmailTemplateLocale('cy');
        }
        return self::$CY;
    }
    public static function DA(): EmailTemplateLocale
    {
        if (!isset(self::$DA)) {
            self::$DA = new EmailTemplateLocale('da');
        }
        return self::$DA;
    }
    public static function DE(): EmailTemplateLocale
    {
        if (!isset(self::$DE)) {
            self::$DE = new EmailTemplateLocale('de');
        }
        return self::$DE;
    }
    public static function DEAT(): EmailTemplateLocale
    {
        if (!isset(self::$DEAT)) {
            self::$DEAT = new EmailTemplateLocale('de-at');
        }
        return self::$DEAT;
    }
    public static function DECH(): EmailTemplateLocale
    {
        if (!isset(self::$DECH)) {
            self::$DECH = new EmailTemplateLocale('de-ch');
        }
        return self::$DECH;
    }
    public static function DELI(): EmailTemplateLocale
    {
        if (!isset(self::$DELI)) {
            self::$DELI = new EmailTemplateLocale('de-li');
        }
        return self::$DELI;
    }
    public static function DELU(): EmailTemplateLocale
    {
        if (!isset(self::$DELU)) {
            self::$DELU = new EmailTemplateLocale('de-lu');
        }
        return self::$DELU;
    }
    public static function EL(): EmailTemplateLocale
    {
        if (!isset(self::$EL)) {
            self::$EL = new EmailTemplateLocale('el');
        }
        return self::$EL;
    }
    public static function EN(): EmailTemplateLocale
    {
        if (!isset(self::$EN)) {
            self::$EN = new EmailTemplateLocale('en');
        }
        return self::$EN;
    }
    public static function ENAU(): EmailTemplateLocale
    {
        if (!isset(self::$ENAU)) {
            self::$ENAU = new EmailTemplateLocale('en-au');
        }
        return self::$ENAU;
    }
    public static function ENBZ(): EmailTemplateLocale
    {
        if (!isset(self::$ENBZ)) {
            self::$ENBZ = new EmailTemplateLocale('en-bz');
        }
        return self::$ENBZ;
    }
    public static function ENCA(): EmailTemplateLocale
    {
        if (!isset(self::$ENCA)) {
            self::$ENCA = new EmailTemplateLocale('en-ca');
        }
        return self::$ENCA;
    }
    public static function ENGB(): EmailTemplateLocale
    {
        if (!isset(self::$ENGB)) {
            self::$ENGB = new EmailTemplateLocale('en-gb');
        }
        return self::$ENGB;
    }
    public static function ENIE(): EmailTemplateLocale
    {
        if (!isset(self::$ENIE)) {
            self::$ENIE = new EmailTemplateLocale('en-ie');
        }
        return self::$ENIE;
    }
    public static function ENJM(): EmailTemplateLocale
    {
        if (!isset(self::$ENJM)) {
            self::$ENJM = new EmailTemplateLocale('en-jm');
        }
        return self::$ENJM;
    }
    public static function ENNZ(): EmailTemplateLocale
    {
        if (!isset(self::$ENNZ)) {
            self::$ENNZ = new EmailTemplateLocale('en-nz');
        }
        return self::$ENNZ;
    }
    public static function ENTT(): EmailTemplateLocale
    {
        if (!isset(self::$ENTT)) {
            self::$ENTT = new EmailTemplateLocale('en-tt');
        }
        return self::$ENTT;
    }
    public static function ENUS(): EmailTemplateLocale
    {
        if (!isset(self::$ENUS)) {
            self::$ENUS = new EmailTemplateLocale('en-us');
        }
        return self::$ENUS;
    }
    public static function ENZA(): EmailTemplateLocale
    {
        if (!isset(self::$ENZA)) {
            self::$ENZA = new EmailTemplateLocale('en-za');
        }
        return self::$ENZA;
    }
    public static function EO(): EmailTemplateLocale
    {
        if (!isset(self::$EO)) {
            self::$EO = new EmailTemplateLocale('eo');
        }
        return self::$EO;
    }
    public static function ES(): EmailTemplateLocale
    {
        if (!isset(self::$ES)) {
            self::$ES = new EmailTemplateLocale('es');
        }
        return self::$ES;
    }
    public static function ESAR(): EmailTemplateLocale
    {
        if (!isset(self::$ESAR)) {
            self::$ESAR = new EmailTemplateLocale('es-ar');
        }
        return self::$ESAR;
    }
    public static function ESBO(): EmailTemplateLocale
    {
        if (!isset(self::$ESBO)) {
            self::$ESBO = new EmailTemplateLocale('es-bo');
        }
        return self::$ESBO;
    }
    public static function ESCL(): EmailTemplateLocale
    {
        if (!isset(self::$ESCL)) {
            self::$ESCL = new EmailTemplateLocale('es-cl');
        }
        return self::$ESCL;
    }
    public static function ESCO(): EmailTemplateLocale
    {
        if (!isset(self::$ESCO)) {
            self::$ESCO = new EmailTemplateLocale('es-co');
        }
        return self::$ESCO;
    }
    public static function ESCR(): EmailTemplateLocale
    {
        if (!isset(self::$ESCR)) {
            self::$ESCR = new EmailTemplateLocale('es-cr');
        }
        return self::$ESCR;
    }
    public static function ESDO(): EmailTemplateLocale
    {
        if (!isset(self::$ESDO)) {
            self::$ESDO = new EmailTemplateLocale('es-do');
        }
        return self::$ESDO;
    }
    public static function ESEC(): EmailTemplateLocale
    {
        if (!isset(self::$ESEC)) {
            self::$ESEC = new EmailTemplateLocale('es-ec');
        }
        return self::$ESEC;
    }
    public static function ESGT(): EmailTemplateLocale
    {
        if (!isset(self::$ESGT)) {
            self::$ESGT = new EmailTemplateLocale('es-gt');
        }
        return self::$ESGT;
    }
    public static function ESHN(): EmailTemplateLocale
    {
        if (!isset(self::$ESHN)) {
            self::$ESHN = new EmailTemplateLocale('es-hn');
        }
        return self::$ESHN;
    }
    public static function ESMX(): EmailTemplateLocale
    {
        if (!isset(self::$ESMX)) {
            self::$ESMX = new EmailTemplateLocale('es-mx');
        }
        return self::$ESMX;
    }
    public static function ESNI(): EmailTemplateLocale
    {
        if (!isset(self::$ESNI)) {
            self::$ESNI = new EmailTemplateLocale('es-ni');
        }
        return self::$ESNI;
    }
    public static function ESPA(): EmailTemplateLocale
    {
        if (!isset(self::$ESPA)) {
            self::$ESPA = new EmailTemplateLocale('es-pa');
        }
        return self::$ESPA;
    }
    public static function ESPE(): EmailTemplateLocale
    {
        if (!isset(self::$ESPE)) {
            self::$ESPE = new EmailTemplateLocale('es-pe');
        }
        return self::$ESPE;
    }
    public static function ESPR(): EmailTemplateLocale
    {
        if (!isset(self::$ESPR)) {
            self::$ESPR = new EmailTemplateLocale('es-pr');
        }
        return self::$ESPR;
    }
    public static function ESPY(): EmailTemplateLocale
    {
        if (!isset(self::$ESPY)) {
            self::$ESPY = new EmailTemplateLocale('es-py');
        }
        return self::$ESPY;
    }
    public static function ESSV(): EmailTemplateLocale
    {
        if (!isset(self::$ESSV)) {
            self::$ESSV = new EmailTemplateLocale('es-sv');
        }
        return self::$ESSV;
    }
    public static function ESUY(): EmailTemplateLocale
    {
        if (!isset(self::$ESUY)) {
            self::$ESUY = new EmailTemplateLocale('es-uy');
        }
        return self::$ESUY;
    }
    public static function ESVE(): EmailTemplateLocale
    {
        if (!isset(self::$ESVE)) {
            self::$ESVE = new EmailTemplateLocale('es-ve');
        }
        return self::$ESVE;
    }
    public static function ET(): EmailTemplateLocale
    {
        if (!isset(self::$ET)) {
            self::$ET = new EmailTemplateLocale('et');
        }
        return self::$ET;
    }
    public static function EU(): EmailTemplateLocale
    {
        if (!isset(self::$EU)) {
            self::$EU = new EmailTemplateLocale('eu');
        }
        return self::$EU;
    }
    public static function FA(): EmailTemplateLocale
    {
        if (!isset(self::$FA)) {
            self::$FA = new EmailTemplateLocale('fa');
        }
        return self::$FA;
    }
    public static function FI(): EmailTemplateLocale
    {
        if (!isset(self::$FI)) {
            self::$FI = new EmailTemplateLocale('fi');
        }
        return self::$FI;
    }
    public static function FO(): EmailTemplateLocale
    {
        if (!isset(self::$FO)) {
            self::$FO = new EmailTemplateLocale('fo');
        }
        return self::$FO;
    }
    public static function FR(): EmailTemplateLocale
    {
        if (!isset(self::$FR)) {
            self::$FR = new EmailTemplateLocale('fr');
        }
        return self::$FR;
    }
    public static function FRBE(): EmailTemplateLocale
    {
        if (!isset(self::$FRBE)) {
            self::$FRBE = new EmailTemplateLocale('fr-be');
        }
        return self::$FRBE;
    }
    public static function FRCA(): EmailTemplateLocale
    {
        if (!isset(self::$FRCA)) {
            self::$FRCA = new EmailTemplateLocale('fr-ca');
        }
        return self::$FRCA;
    }
    public static function FRCH(): EmailTemplateLocale
    {
        if (!isset(self::$FRCH)) {
            self::$FRCH = new EmailTemplateLocale('fr-ch');
        }
        return self::$FRCH;
    }
    public static function FRLU(): EmailTemplateLocale
    {
        if (!isset(self::$FRLU)) {
            self::$FRLU = new EmailTemplateLocale('fr-lu');
        }
        return self::$FRLU;
    }
    public static function GA(): EmailTemplateLocale
    {
        if (!isset(self::$GA)) {
            self::$GA = new EmailTemplateLocale('ga');
        }
        return self::$GA;
    }
    public static function GD(): EmailTemplateLocale
    {
        if (!isset(self::$GD)) {
            self::$GD = new EmailTemplateLocale('gd');
        }
        return self::$GD;
    }
    public static function HE(): EmailTemplateLocale
    {
        if (!isset(self::$HE)) {
            self::$HE = new EmailTemplateLocale('he');
        }
        return self::$HE;
    }
    public static function HI(): EmailTemplateLocale
    {
        if (!isset(self::$HI)) {
            self::$HI = new EmailTemplateLocale('hi');
        }
        return self::$HI;
    }
    public static function HR(): EmailTemplateLocale
    {
        if (!isset(self::$HR)) {
            self::$HR = new EmailTemplateLocale('hr');
        }
        return self::$HR;
    }
    public static function HU(): EmailTemplateLocale
    {
        if (!isset(self::$HU)) {
            self::$HU = new EmailTemplateLocale('hu');
        }
        return self::$HU;
    }
    public static function ID(): EmailTemplateLocale
    {
        if (!isset(self::$ID)) {
            self::$ID = new EmailTemplateLocale('id');
        }
        return self::$ID;
    }
    public static function IS(): EmailTemplateLocale
    {
        if (!isset(self::$IS)) {
            self::$IS = new EmailTemplateLocale('is');
        }
        return self::$IS;
    }
    public static function IT(): EmailTemplateLocale
    {
        if (!isset(self::$IT)) {
            self::$IT = new EmailTemplateLocale('it');
        }
        return self::$IT;
    }
    public static function ITCH(): EmailTemplateLocale
    {
        if (!isset(self::$ITCH)) {
            self::$ITCH = new EmailTemplateLocale('it-ch');
        }
        return self::$ITCH;
    }
    public static function JA(): EmailTemplateLocale
    {
        if (!isset(self::$JA)) {
            self::$JA = new EmailTemplateLocale('ja');
        }
        return self::$JA;
    }
    public static function JI(): EmailTemplateLocale
    {
        if (!isset(self::$JI)) {
            self::$JI = new EmailTemplateLocale('ji');
        }
        return self::$JI;
    }
    public static function KO(): EmailTemplateLocale
    {
        if (!isset(self::$KO)) {
            self::$KO = new EmailTemplateLocale('ko');
        }
        return self::$KO;
    }
    public static function KU(): EmailTemplateLocale
    {
        if (!isset(self::$KU)) {
            self::$KU = new EmailTemplateLocale('ku');
        }
        return self::$KU;
    }
    public static function LT(): EmailTemplateLocale
    {
        if (!isset(self::$LT)) {
            self::$LT = new EmailTemplateLocale('lt');
        }
        return self::$LT;
    }
    public static function LV(): EmailTemplateLocale
    {
        if (!isset(self::$LV)) {
            self::$LV = new EmailTemplateLocale('lv');
        }
        return self::$LV;
    }
    public static function MK(): EmailTemplateLocale
    {
        if (!isset(self::$MK)) {
            self::$MK = new EmailTemplateLocale('mk');
        }
        return self::$MK;
    }
    public static function ML(): EmailTemplateLocale
    {
        if (!isset(self::$ML)) {
            self::$ML = new EmailTemplateLocale('ml');
        }
        return self::$ML;
    }
    public static function MS(): EmailTemplateLocale
    {
        if (!isset(self::$MS)) {
            self::$MS = new EmailTemplateLocale('ms');
        }
        return self::$MS;
    }
    public static function MT(): EmailTemplateLocale
    {
        if (!isset(self::$MT)) {
            self::$MT = new EmailTemplateLocale('mt');
        }
        return self::$MT;
    }
    public static function NB(): EmailTemplateLocale
    {
        if (!isset(self::$NB)) {
            self::$NB = new EmailTemplateLocale('nb');
        }
        return self::$NB;
    }
    public static function NE(): EmailTemplateLocale
    {
        if (!isset(self::$NE)) {
            self::$NE = new EmailTemplateLocale('ne');
        }
        return self::$NE;
    }
    public static function NL(): EmailTemplateLocale
    {
        if (!isset(self::$NL)) {
            self::$NL = new EmailTemplateLocale('nl');
        }
        return self::$NL;
    }
    public static function NLBE(): EmailTemplateLocale
    {
        if (!isset(self::$NLBE)) {
            self::$NLBE = new EmailTemplateLocale('nl-be');
        }
        return self::$NLBE;
    }
    public static function NN(): EmailTemplateLocale
    {
        if (!isset(self::$NN)) {
            self::$NN = new EmailTemplateLocale('nn');
        }
        return self::$NN;
    }
    public static function NO(): EmailTemplateLocale
    {
        if (!isset(self::$NO)) {
            self::$NO = new EmailTemplateLocale('no');
        }
        return self::$NO;
    }
    public static function PA(): EmailTemplateLocale
    {
        if (!isset(self::$PA)) {
            self::$PA = new EmailTemplateLocale('pa');
        }
        return self::$PA;
    }
    public static function PL(): EmailTemplateLocale
    {
        if (!isset(self::$PL)) {
            self::$PL = new EmailTemplateLocale('pl');
        }
        return self::$PL;
    }
    public static function PT(): EmailTemplateLocale
    {
        if (!isset(self::$PT)) {
            self::$PT = new EmailTemplateLocale('pt');
        }
        return self::$PT;
    }
    public static function PTBR(): EmailTemplateLocale
    {
        if (!isset(self::$PTBR)) {
            self::$PTBR = new EmailTemplateLocale('pt-br');
        }
        return self::$PTBR;
    }
    public static function RM(): EmailTemplateLocale
    {
        if (!isset(self::$RM)) {
            self::$RM = new EmailTemplateLocale('rm');
        }
        return self::$RM;
    }
    public static function RO(): EmailTemplateLocale
    {
        if (!isset(self::$RO)) {
            self::$RO = new EmailTemplateLocale('ro');
        }
        return self::$RO;
    }
    public static function ROMD(): EmailTemplateLocale
    {
        if (!isset(self::$ROMD)) {
            self::$ROMD = new EmailTemplateLocale('ro-md');
        }
        return self::$ROMD;
    }
    public static function RU(): EmailTemplateLocale
    {
        if (!isset(self::$RU)) {
            self::$RU = new EmailTemplateLocale('ru');
        }
        return self::$RU;
    }
    public static function RUMD(): EmailTemplateLocale
    {
        if (!isset(self::$RUMD)) {
            self::$RUMD = new EmailTemplateLocale('ru-md');
        }
        return self::$RUMD;
    }
    public static function SB(): EmailTemplateLocale
    {
        if (!isset(self::$SB)) {
            self::$SB = new EmailTemplateLocale('sb');
        }
        return self::$SB;
    }
    public static function SK(): EmailTemplateLocale
    {
        if (!isset(self::$SK)) {
            self::$SK = new EmailTemplateLocale('sk');
        }
        return self::$SK;
    }
    public static function SL(): EmailTemplateLocale
    {
        if (!isset(self::$SL)) {
            self::$SL = new EmailTemplateLocale('sl');
        }
        return self::$SL;
    }
    public static function SQ(): EmailTemplateLocale
    {
        if (!isset(self::$SQ)) {
            self::$SQ = new EmailTemplateLocale('sq');
        }
        return self::$SQ;
    }
    public static function SR(): EmailTemplateLocale
    {
        if (!isset(self::$SR)) {
            self::$SR = new EmailTemplateLocale('sr');
        }
        return self::$SR;
    }
    public static function SV(): EmailTemplateLocale
    {
        if (!isset(self::$SV)) {
            self::$SV = new EmailTemplateLocale('sv');
        }
        return self::$SV;
    }
    public static function SVFI(): EmailTemplateLocale
    {
        if (!isset(self::$SVFI)) {
            self::$SVFI = new EmailTemplateLocale('sv-fi');
        }
        return self::$SVFI;
    }
    public static function TH(): EmailTemplateLocale
    {
        if (!isset(self::$TH)) {
            self::$TH = new EmailTemplateLocale('th');
        }
        return self::$TH;
    }
    public static function TN(): EmailTemplateLocale
    {
        if (!isset(self::$TN)) {
            self::$TN = new EmailTemplateLocale('tn');
        }
        return self::$TN;
    }
    public static function TR(): EmailTemplateLocale
    {
        if (!isset(self::$TR)) {
            self::$TR = new EmailTemplateLocale('tr');
        }
        return self::$TR;
    }
    public static function TS(): EmailTemplateLocale
    {
        if (!isset(self::$TS)) {
            self::$TS = new EmailTemplateLocale('ts');
        }
        return self::$TS;
    }
    public static function UA(): EmailTemplateLocale
    {
        if (!isset(self::$UA)) {
            self::$UA = new EmailTemplateLocale('ua');
        }
        return self::$UA;
    }
    public static function UR(): EmailTemplateLocale
    {
        if (!isset(self::$UR)) {
            self::$UR = new EmailTemplateLocale('ur');
        }
        return self::$UR;
    }
    public static function VE(): EmailTemplateLocale
    {
        if (!isset(self::$VE)) {
            self::$VE = new EmailTemplateLocale('ve');
        }
        return self::$VE;
    }
    public static function VI(): EmailTemplateLocale
    {
        if (!isset(self::$VI)) {
            self::$VI = new EmailTemplateLocale('vi');
        }
        return self::$VI;
    }
    public static function XH(): EmailTemplateLocale
    {
        if (!isset(self::$XH)) {
            self::$XH = new EmailTemplateLocale('xh');
        }
        return self::$XH;
    }
    public static function ZHCN(): EmailTemplateLocale
    {
        if (!isset(self::$ZHCN)) {
            self::$ZHCN = new EmailTemplateLocale('zh-cn');
        }
        return self::$ZHCN;
    }
    public static function ZHHK(): EmailTemplateLocale
    {
        if (!isset(self::$ZHHK)) {
            self::$ZHHK = new EmailTemplateLocale('zh-hk');
        }
        return self::$ZHHK;
    }
    public static function ZHSG(): EmailTemplateLocale
    {
        if (!isset(self::$ZHSG)) {
            self::$ZHSG = new EmailTemplateLocale('zh-sg');
        }
        return self::$ZHSG;
    }
    public static function ZHTW(): EmailTemplateLocale
    {
        if (!isset(self::$ZHTW)) {
            self::$ZHTW = new EmailTemplateLocale('zh-tw');
        }
        return self::$ZHTW;
    }
    public static function ZU(): EmailTemplateLocale
    {
        if (!isset(self::$ZU)) {
            self::$ZU = new EmailTemplateLocale('zu');
        }
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
            default => throw new \InvalidArgumentException('Unknown EmailTemplateLocale value: ' . $value),
        };
    }
}
