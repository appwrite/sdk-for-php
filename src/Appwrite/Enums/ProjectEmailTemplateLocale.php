<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProjectEmailTemplateLocale implements JsonSerializable
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

    public static function AF(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$AF)) {
            self::$AF = new ProjectEmailTemplateLocale('af');
        }
        return self::$AF;
    }
    public static function ARAE(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ARAE)) {
            self::$ARAE = new ProjectEmailTemplateLocale('ar-ae');
        }
        return self::$ARAE;
    }
    public static function ARBH(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ARBH)) {
            self::$ARBH = new ProjectEmailTemplateLocale('ar-bh');
        }
        return self::$ARBH;
    }
    public static function ARDZ(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ARDZ)) {
            self::$ARDZ = new ProjectEmailTemplateLocale('ar-dz');
        }
        return self::$ARDZ;
    }
    public static function AREG(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$AREG)) {
            self::$AREG = new ProjectEmailTemplateLocale('ar-eg');
        }
        return self::$AREG;
    }
    public static function ARIQ(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ARIQ)) {
            self::$ARIQ = new ProjectEmailTemplateLocale('ar-iq');
        }
        return self::$ARIQ;
    }
    public static function ARJO(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ARJO)) {
            self::$ARJO = new ProjectEmailTemplateLocale('ar-jo');
        }
        return self::$ARJO;
    }
    public static function ARKW(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ARKW)) {
            self::$ARKW = new ProjectEmailTemplateLocale('ar-kw');
        }
        return self::$ARKW;
    }
    public static function ARLB(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ARLB)) {
            self::$ARLB = new ProjectEmailTemplateLocale('ar-lb');
        }
        return self::$ARLB;
    }
    public static function ARLY(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ARLY)) {
            self::$ARLY = new ProjectEmailTemplateLocale('ar-ly');
        }
        return self::$ARLY;
    }
    public static function ARMA(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ARMA)) {
            self::$ARMA = new ProjectEmailTemplateLocale('ar-ma');
        }
        return self::$ARMA;
    }
    public static function AROM(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$AROM)) {
            self::$AROM = new ProjectEmailTemplateLocale('ar-om');
        }
        return self::$AROM;
    }
    public static function ARQA(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ARQA)) {
            self::$ARQA = new ProjectEmailTemplateLocale('ar-qa');
        }
        return self::$ARQA;
    }
    public static function ARSA(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ARSA)) {
            self::$ARSA = new ProjectEmailTemplateLocale('ar-sa');
        }
        return self::$ARSA;
    }
    public static function ARSY(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ARSY)) {
            self::$ARSY = new ProjectEmailTemplateLocale('ar-sy');
        }
        return self::$ARSY;
    }
    public static function ARTN(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ARTN)) {
            self::$ARTN = new ProjectEmailTemplateLocale('ar-tn');
        }
        return self::$ARTN;
    }
    public static function ARYE(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ARYE)) {
            self::$ARYE = new ProjectEmailTemplateLocale('ar-ye');
        }
        return self::$ARYE;
    }
    public static function AS(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$AS)) {
            self::$AS = new ProjectEmailTemplateLocale('as');
        }
        return self::$AS;
    }
    public static function AZ(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$AZ)) {
            self::$AZ = new ProjectEmailTemplateLocale('az');
        }
        return self::$AZ;
    }
    public static function BE(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$BE)) {
            self::$BE = new ProjectEmailTemplateLocale('be');
        }
        return self::$BE;
    }
    public static function BG(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$BG)) {
            self::$BG = new ProjectEmailTemplateLocale('bg');
        }
        return self::$BG;
    }
    public static function BH(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$BH)) {
            self::$BH = new ProjectEmailTemplateLocale('bh');
        }
        return self::$BH;
    }
    public static function BN(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$BN)) {
            self::$BN = new ProjectEmailTemplateLocale('bn');
        }
        return self::$BN;
    }
    public static function BS(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$BS)) {
            self::$BS = new ProjectEmailTemplateLocale('bs');
        }
        return self::$BS;
    }
    public static function CA(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$CA)) {
            self::$CA = new ProjectEmailTemplateLocale('ca');
        }
        return self::$CA;
    }
    public static function CS(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$CS)) {
            self::$CS = new ProjectEmailTemplateLocale('cs');
        }
        return self::$CS;
    }
    public static function CY(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$CY)) {
            self::$CY = new ProjectEmailTemplateLocale('cy');
        }
        return self::$CY;
    }
    public static function DA(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$DA)) {
            self::$DA = new ProjectEmailTemplateLocale('da');
        }
        return self::$DA;
    }
    public static function DE(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$DE)) {
            self::$DE = new ProjectEmailTemplateLocale('de');
        }
        return self::$DE;
    }
    public static function DEAT(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$DEAT)) {
            self::$DEAT = new ProjectEmailTemplateLocale('de-at');
        }
        return self::$DEAT;
    }
    public static function DECH(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$DECH)) {
            self::$DECH = new ProjectEmailTemplateLocale('de-ch');
        }
        return self::$DECH;
    }
    public static function DELI(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$DELI)) {
            self::$DELI = new ProjectEmailTemplateLocale('de-li');
        }
        return self::$DELI;
    }
    public static function DELU(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$DELU)) {
            self::$DELU = new ProjectEmailTemplateLocale('de-lu');
        }
        return self::$DELU;
    }
    public static function EL(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$EL)) {
            self::$EL = new ProjectEmailTemplateLocale('el');
        }
        return self::$EL;
    }
    public static function EN(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$EN)) {
            self::$EN = new ProjectEmailTemplateLocale('en');
        }
        return self::$EN;
    }
    public static function ENAU(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ENAU)) {
            self::$ENAU = new ProjectEmailTemplateLocale('en-au');
        }
        return self::$ENAU;
    }
    public static function ENBZ(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ENBZ)) {
            self::$ENBZ = new ProjectEmailTemplateLocale('en-bz');
        }
        return self::$ENBZ;
    }
    public static function ENCA(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ENCA)) {
            self::$ENCA = new ProjectEmailTemplateLocale('en-ca');
        }
        return self::$ENCA;
    }
    public static function ENGB(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ENGB)) {
            self::$ENGB = new ProjectEmailTemplateLocale('en-gb');
        }
        return self::$ENGB;
    }
    public static function ENIE(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ENIE)) {
            self::$ENIE = new ProjectEmailTemplateLocale('en-ie');
        }
        return self::$ENIE;
    }
    public static function ENJM(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ENJM)) {
            self::$ENJM = new ProjectEmailTemplateLocale('en-jm');
        }
        return self::$ENJM;
    }
    public static function ENNZ(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ENNZ)) {
            self::$ENNZ = new ProjectEmailTemplateLocale('en-nz');
        }
        return self::$ENNZ;
    }
    public static function ENTT(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ENTT)) {
            self::$ENTT = new ProjectEmailTemplateLocale('en-tt');
        }
        return self::$ENTT;
    }
    public static function ENUS(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ENUS)) {
            self::$ENUS = new ProjectEmailTemplateLocale('en-us');
        }
        return self::$ENUS;
    }
    public static function ENZA(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ENZA)) {
            self::$ENZA = new ProjectEmailTemplateLocale('en-za');
        }
        return self::$ENZA;
    }
    public static function EO(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$EO)) {
            self::$EO = new ProjectEmailTemplateLocale('eo');
        }
        return self::$EO;
    }
    public static function ES(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ES)) {
            self::$ES = new ProjectEmailTemplateLocale('es');
        }
        return self::$ES;
    }
    public static function ESAR(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESAR)) {
            self::$ESAR = new ProjectEmailTemplateLocale('es-ar');
        }
        return self::$ESAR;
    }
    public static function ESBO(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESBO)) {
            self::$ESBO = new ProjectEmailTemplateLocale('es-bo');
        }
        return self::$ESBO;
    }
    public static function ESCL(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESCL)) {
            self::$ESCL = new ProjectEmailTemplateLocale('es-cl');
        }
        return self::$ESCL;
    }
    public static function ESCO(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESCO)) {
            self::$ESCO = new ProjectEmailTemplateLocale('es-co');
        }
        return self::$ESCO;
    }
    public static function ESCR(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESCR)) {
            self::$ESCR = new ProjectEmailTemplateLocale('es-cr');
        }
        return self::$ESCR;
    }
    public static function ESDO(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESDO)) {
            self::$ESDO = new ProjectEmailTemplateLocale('es-do');
        }
        return self::$ESDO;
    }
    public static function ESEC(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESEC)) {
            self::$ESEC = new ProjectEmailTemplateLocale('es-ec');
        }
        return self::$ESEC;
    }
    public static function ESGT(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESGT)) {
            self::$ESGT = new ProjectEmailTemplateLocale('es-gt');
        }
        return self::$ESGT;
    }
    public static function ESHN(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESHN)) {
            self::$ESHN = new ProjectEmailTemplateLocale('es-hn');
        }
        return self::$ESHN;
    }
    public static function ESMX(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESMX)) {
            self::$ESMX = new ProjectEmailTemplateLocale('es-mx');
        }
        return self::$ESMX;
    }
    public static function ESNI(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESNI)) {
            self::$ESNI = new ProjectEmailTemplateLocale('es-ni');
        }
        return self::$ESNI;
    }
    public static function ESPA(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESPA)) {
            self::$ESPA = new ProjectEmailTemplateLocale('es-pa');
        }
        return self::$ESPA;
    }
    public static function ESPE(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESPE)) {
            self::$ESPE = new ProjectEmailTemplateLocale('es-pe');
        }
        return self::$ESPE;
    }
    public static function ESPR(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESPR)) {
            self::$ESPR = new ProjectEmailTemplateLocale('es-pr');
        }
        return self::$ESPR;
    }
    public static function ESPY(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESPY)) {
            self::$ESPY = new ProjectEmailTemplateLocale('es-py');
        }
        return self::$ESPY;
    }
    public static function ESSV(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESSV)) {
            self::$ESSV = new ProjectEmailTemplateLocale('es-sv');
        }
        return self::$ESSV;
    }
    public static function ESUY(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESUY)) {
            self::$ESUY = new ProjectEmailTemplateLocale('es-uy');
        }
        return self::$ESUY;
    }
    public static function ESVE(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ESVE)) {
            self::$ESVE = new ProjectEmailTemplateLocale('es-ve');
        }
        return self::$ESVE;
    }
    public static function ET(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ET)) {
            self::$ET = new ProjectEmailTemplateLocale('et');
        }
        return self::$ET;
    }
    public static function EU(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$EU)) {
            self::$EU = new ProjectEmailTemplateLocale('eu');
        }
        return self::$EU;
    }
    public static function FA(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$FA)) {
            self::$FA = new ProjectEmailTemplateLocale('fa');
        }
        return self::$FA;
    }
    public static function FI(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$FI)) {
            self::$FI = new ProjectEmailTemplateLocale('fi');
        }
        return self::$FI;
    }
    public static function FO(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$FO)) {
            self::$FO = new ProjectEmailTemplateLocale('fo');
        }
        return self::$FO;
    }
    public static function FR(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$FR)) {
            self::$FR = new ProjectEmailTemplateLocale('fr');
        }
        return self::$FR;
    }
    public static function FRBE(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$FRBE)) {
            self::$FRBE = new ProjectEmailTemplateLocale('fr-be');
        }
        return self::$FRBE;
    }
    public static function FRCA(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$FRCA)) {
            self::$FRCA = new ProjectEmailTemplateLocale('fr-ca');
        }
        return self::$FRCA;
    }
    public static function FRCH(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$FRCH)) {
            self::$FRCH = new ProjectEmailTemplateLocale('fr-ch');
        }
        return self::$FRCH;
    }
    public static function FRLU(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$FRLU)) {
            self::$FRLU = new ProjectEmailTemplateLocale('fr-lu');
        }
        return self::$FRLU;
    }
    public static function GA(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$GA)) {
            self::$GA = new ProjectEmailTemplateLocale('ga');
        }
        return self::$GA;
    }
    public static function GD(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$GD)) {
            self::$GD = new ProjectEmailTemplateLocale('gd');
        }
        return self::$GD;
    }
    public static function HE(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$HE)) {
            self::$HE = new ProjectEmailTemplateLocale('he');
        }
        return self::$HE;
    }
    public static function HI(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$HI)) {
            self::$HI = new ProjectEmailTemplateLocale('hi');
        }
        return self::$HI;
    }
    public static function HR(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$HR)) {
            self::$HR = new ProjectEmailTemplateLocale('hr');
        }
        return self::$HR;
    }
    public static function HU(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$HU)) {
            self::$HU = new ProjectEmailTemplateLocale('hu');
        }
        return self::$HU;
    }
    public static function ID(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ID)) {
            self::$ID = new ProjectEmailTemplateLocale('id');
        }
        return self::$ID;
    }
    public static function IS(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$IS)) {
            self::$IS = new ProjectEmailTemplateLocale('is');
        }
        return self::$IS;
    }
    public static function IT(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$IT)) {
            self::$IT = new ProjectEmailTemplateLocale('it');
        }
        return self::$IT;
    }
    public static function ITCH(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ITCH)) {
            self::$ITCH = new ProjectEmailTemplateLocale('it-ch');
        }
        return self::$ITCH;
    }
    public static function JA(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$JA)) {
            self::$JA = new ProjectEmailTemplateLocale('ja');
        }
        return self::$JA;
    }
    public static function JI(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$JI)) {
            self::$JI = new ProjectEmailTemplateLocale('ji');
        }
        return self::$JI;
    }
    public static function KO(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$KO)) {
            self::$KO = new ProjectEmailTemplateLocale('ko');
        }
        return self::$KO;
    }
    public static function KU(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$KU)) {
            self::$KU = new ProjectEmailTemplateLocale('ku');
        }
        return self::$KU;
    }
    public static function LT(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$LT)) {
            self::$LT = new ProjectEmailTemplateLocale('lt');
        }
        return self::$LT;
    }
    public static function LV(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$LV)) {
            self::$LV = new ProjectEmailTemplateLocale('lv');
        }
        return self::$LV;
    }
    public static function MK(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$MK)) {
            self::$MK = new ProjectEmailTemplateLocale('mk');
        }
        return self::$MK;
    }
    public static function ML(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ML)) {
            self::$ML = new ProjectEmailTemplateLocale('ml');
        }
        return self::$ML;
    }
    public static function MS(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$MS)) {
            self::$MS = new ProjectEmailTemplateLocale('ms');
        }
        return self::$MS;
    }
    public static function MT(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$MT)) {
            self::$MT = new ProjectEmailTemplateLocale('mt');
        }
        return self::$MT;
    }
    public static function NB(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$NB)) {
            self::$NB = new ProjectEmailTemplateLocale('nb');
        }
        return self::$NB;
    }
    public static function NE(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$NE)) {
            self::$NE = new ProjectEmailTemplateLocale('ne');
        }
        return self::$NE;
    }
    public static function NL(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$NL)) {
            self::$NL = new ProjectEmailTemplateLocale('nl');
        }
        return self::$NL;
    }
    public static function NLBE(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$NLBE)) {
            self::$NLBE = new ProjectEmailTemplateLocale('nl-be');
        }
        return self::$NLBE;
    }
    public static function NN(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$NN)) {
            self::$NN = new ProjectEmailTemplateLocale('nn');
        }
        return self::$NN;
    }
    public static function NO(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$NO)) {
            self::$NO = new ProjectEmailTemplateLocale('no');
        }
        return self::$NO;
    }
    public static function PA(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$PA)) {
            self::$PA = new ProjectEmailTemplateLocale('pa');
        }
        return self::$PA;
    }
    public static function PL(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$PL)) {
            self::$PL = new ProjectEmailTemplateLocale('pl');
        }
        return self::$PL;
    }
    public static function PT(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$PT)) {
            self::$PT = new ProjectEmailTemplateLocale('pt');
        }
        return self::$PT;
    }
    public static function PTBR(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$PTBR)) {
            self::$PTBR = new ProjectEmailTemplateLocale('pt-br');
        }
        return self::$PTBR;
    }
    public static function RM(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$RM)) {
            self::$RM = new ProjectEmailTemplateLocale('rm');
        }
        return self::$RM;
    }
    public static function RO(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$RO)) {
            self::$RO = new ProjectEmailTemplateLocale('ro');
        }
        return self::$RO;
    }
    public static function ROMD(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ROMD)) {
            self::$ROMD = new ProjectEmailTemplateLocale('ro-md');
        }
        return self::$ROMD;
    }
    public static function RU(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$RU)) {
            self::$RU = new ProjectEmailTemplateLocale('ru');
        }
        return self::$RU;
    }
    public static function RUMD(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$RUMD)) {
            self::$RUMD = new ProjectEmailTemplateLocale('ru-md');
        }
        return self::$RUMD;
    }
    public static function SB(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$SB)) {
            self::$SB = new ProjectEmailTemplateLocale('sb');
        }
        return self::$SB;
    }
    public static function SK(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$SK)) {
            self::$SK = new ProjectEmailTemplateLocale('sk');
        }
        return self::$SK;
    }
    public static function SL(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$SL)) {
            self::$SL = new ProjectEmailTemplateLocale('sl');
        }
        return self::$SL;
    }
    public static function SQ(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$SQ)) {
            self::$SQ = new ProjectEmailTemplateLocale('sq');
        }
        return self::$SQ;
    }
    public static function SR(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$SR)) {
            self::$SR = new ProjectEmailTemplateLocale('sr');
        }
        return self::$SR;
    }
    public static function SV(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$SV)) {
            self::$SV = new ProjectEmailTemplateLocale('sv');
        }
        return self::$SV;
    }
    public static function SVFI(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$SVFI)) {
            self::$SVFI = new ProjectEmailTemplateLocale('sv-fi');
        }
        return self::$SVFI;
    }
    public static function TH(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$TH)) {
            self::$TH = new ProjectEmailTemplateLocale('th');
        }
        return self::$TH;
    }
    public static function TN(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$TN)) {
            self::$TN = new ProjectEmailTemplateLocale('tn');
        }
        return self::$TN;
    }
    public static function TR(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$TR)) {
            self::$TR = new ProjectEmailTemplateLocale('tr');
        }
        return self::$TR;
    }
    public static function TS(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$TS)) {
            self::$TS = new ProjectEmailTemplateLocale('ts');
        }
        return self::$TS;
    }
    public static function UA(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$UA)) {
            self::$UA = new ProjectEmailTemplateLocale('ua');
        }
        return self::$UA;
    }
    public static function UR(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$UR)) {
            self::$UR = new ProjectEmailTemplateLocale('ur');
        }
        return self::$UR;
    }
    public static function VE(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$VE)) {
            self::$VE = new ProjectEmailTemplateLocale('ve');
        }
        return self::$VE;
    }
    public static function VI(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$VI)) {
            self::$VI = new ProjectEmailTemplateLocale('vi');
        }
        return self::$VI;
    }
    public static function XH(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$XH)) {
            self::$XH = new ProjectEmailTemplateLocale('xh');
        }
        return self::$XH;
    }
    public static function ZHCN(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ZHCN)) {
            self::$ZHCN = new ProjectEmailTemplateLocale('zh-cn');
        }
        return self::$ZHCN;
    }
    public static function ZHHK(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ZHHK)) {
            self::$ZHHK = new ProjectEmailTemplateLocale('zh-hk');
        }
        return self::$ZHHK;
    }
    public static function ZHSG(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ZHSG)) {
            self::$ZHSG = new ProjectEmailTemplateLocale('zh-sg');
        }
        return self::$ZHSG;
    }
    public static function ZHTW(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ZHTW)) {
            self::$ZHTW = new ProjectEmailTemplateLocale('zh-tw');
        }
        return self::$ZHTW;
    }
    public static function ZU(): ProjectEmailTemplateLocale
    {
        if (!isset(self::$ZU)) {
            self::$ZU = new ProjectEmailTemplateLocale('zu');
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
            default => throw new \InvalidArgumentException('Unknown ProjectEmailTemplateLocale value: ' . $value),
        };
    }
}
