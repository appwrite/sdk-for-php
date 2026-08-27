<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class Flag implements JsonSerializable, Stringable
{
    private static Flag $AFGHANISTAN;
    private static Flag $ANGOLA;
    private static Flag $ALBANIA;
    private static Flag $ANDORRA;
    private static Flag $UNITEDARABEMIRATES;
    private static Flag $ARGENTINA;
    private static Flag $ARMENIA;
    private static Flag $ANTIGUAANDBARBUDA;
    private static Flag $AUSTRALIA;
    private static Flag $AUSTRIA;
    private static Flag $AZERBAIJAN;
    private static Flag $BURUNDI;
    private static Flag $BELGIUM;
    private static Flag $BENIN;
    private static Flag $BURKINAFASO;
    private static Flag $BANGLADESH;
    private static Flag $BULGARIA;
    private static Flag $BAHRAIN;
    private static Flag $BAHAMAS;
    private static Flag $BOSNIAANDHERZEGOVINA;
    private static Flag $BELARUS;
    private static Flag $BELIZE;
    private static Flag $BOLIVIA;
    private static Flag $BRAZIL;
    private static Flag $BARBADOS;
    private static Flag $BRUNEIDARUSSALAM;
    private static Flag $BHUTAN;
    private static Flag $BOTSWANA;
    private static Flag $CENTRALAFRICANREPUBLIC;
    private static Flag $CANADA;
    private static Flag $SWITZERLAND;
    private static Flag $CHILE;
    private static Flag $CHINA;
    private static Flag $CTEDIVOIRE;
    private static Flag $CAMEROON;
    private static Flag $DEMOCRATICREPUBLICOFTHECONGO;
    private static Flag $REPUBLICOFTHECONGO;
    private static Flag $COLOMBIA;
    private static Flag $COMOROS;
    private static Flag $CAPEVERDE;
    private static Flag $COSTARICA;
    private static Flag $CUBA;
    private static Flag $CYPRUS;
    private static Flag $CZECHREPUBLIC;
    private static Flag $GERMANY;
    private static Flag $DJIBOUTI;
    private static Flag $DOMINICA;
    private static Flag $DENMARK;
    private static Flag $DOMINICANREPUBLIC;
    private static Flag $ALGERIA;
    private static Flag $ECUADOR;
    private static Flag $EGYPT;
    private static Flag $ERITREA;
    private static Flag $SPAIN;
    private static Flag $ESTONIA;
    private static Flag $ETHIOPIA;
    private static Flag $FINLAND;
    private static Flag $FIJI;
    private static Flag $FRANCE;
    private static Flag $MICRONESIAFEDERATEDSTATESOF;
    private static Flag $GABON;
    private static Flag $UNITEDKINGDOM;
    private static Flag $GEORGIA;
    private static Flag $GHANA;
    private static Flag $GUINEA;
    private static Flag $GAMBIA;
    private static Flag $GUINEABISSAU;
    private static Flag $EQUATORIALGUINEA;
    private static Flag $GREECE;
    private static Flag $GRENADA;
    private static Flag $GUATEMALA;
    private static Flag $GUYANA;
    private static Flag $HONDURAS;
    private static Flag $CROATIA;
    private static Flag $HAITI;
    private static Flag $HUNGARY;
    private static Flag $INDONESIA;
    private static Flag $INDIA;
    private static Flag $IRELAND;
    private static Flag $IRANISLAMICREPUBLICOF;
    private static Flag $IRAQ;
    private static Flag $ICELAND;
    private static Flag $ISRAEL;
    private static Flag $ITALY;
    private static Flag $JAMAICA;
    private static Flag $JORDAN;
    private static Flag $JAPAN;
    private static Flag $KAZAKHSTAN;
    private static Flag $KENYA;
    private static Flag $KYRGYZSTAN;
    private static Flag $CAMBODIA;
    private static Flag $KIRIBATI;
    private static Flag $SAINTKITTSANDNEVIS;
    private static Flag $SOUTHKOREA;
    private static Flag $KUWAIT;
    private static Flag $LAOPEOPLESDEMOCRATICREPUBLIC;
    private static Flag $LEBANON;
    private static Flag $LIBERIA;
    private static Flag $LIBYA;
    private static Flag $SAINTLUCIA;
    private static Flag $LIECHTENSTEIN;
    private static Flag $SRILANKA;
    private static Flag $LESOTHO;
    private static Flag $LITHUANIA;
    private static Flag $LUXEMBOURG;
    private static Flag $LATVIA;
    private static Flag $MOROCCO;
    private static Flag $MONACO;
    private static Flag $MOLDOVA;
    private static Flag $MADAGASCAR;
    private static Flag $MALDIVES;
    private static Flag $MEXICO;
    private static Flag $MARSHALLISLANDS;
    private static Flag $NORTHMACEDONIA;
    private static Flag $MALI;
    private static Flag $MALTA;
    private static Flag $MYANMAR;
    private static Flag $MONTENEGRO;
    private static Flag $MONGOLIA;
    private static Flag $MOZAMBIQUE;
    private static Flag $MAURITANIA;
    private static Flag $MAURITIUS;
    private static Flag $MALAWI;
    private static Flag $MALAYSIA;
    private static Flag $NAMIBIA;
    private static Flag $NIGER;
    private static Flag $NIGERIA;
    private static Flag $NICARAGUA;
    private static Flag $NETHERLANDS;
    private static Flag $NORWAY;
    private static Flag $NEPAL;
    private static Flag $NAURU;
    private static Flag $NEWZEALAND;
    private static Flag $OMAN;
    private static Flag $PAKISTAN;
    private static Flag $PANAMA;
    private static Flag $PERU;
    private static Flag $PHILIPPINES;
    private static Flag $PALAU;
    private static Flag $PAPUANEWGUINEA;
    private static Flag $POLAND;
    private static Flag $FRENCHPOLYNESIA;
    private static Flag $NORTHKOREA;
    private static Flag $PORTUGAL;
    private static Flag $PARAGUAY;
    private static Flag $QATAR;
    private static Flag $ROMANIA;
    private static Flag $RUSSIA;
    private static Flag $RWANDA;
    private static Flag $SAUDIARABIA;
    private static Flag $SUDAN;
    private static Flag $SENEGAL;
    private static Flag $SINGAPORE;
    private static Flag $SOLOMONISLANDS;
    private static Flag $SIERRALEONE;
    private static Flag $ELSALVADOR;
    private static Flag $SANMARINO;
    private static Flag $SOMALIA;
    private static Flag $SERBIA;
    private static Flag $SOUTHSUDAN;
    private static Flag $SAOTOMEANDPRINCIPE;
    private static Flag $SURINAME;
    private static Flag $SLOVAKIA;
    private static Flag $SLOVENIA;
    private static Flag $SWEDEN;
    private static Flag $ESWATINI;
    private static Flag $SEYCHELLES;
    private static Flag $SYRIA;
    private static Flag $CHAD;
    private static Flag $TOGO;
    private static Flag $THAILAND;
    private static Flag $TAJIKISTAN;
    private static Flag $TURKMENISTAN;
    private static Flag $TIMORLESTE;
    private static Flag $TONGA;
    private static Flag $TRINIDADANDTOBAGO;
    private static Flag $TUNISIA;
    private static Flag $TURKEY;
    private static Flag $TUVALU;
    private static Flag $TANZANIA;
    private static Flag $UGANDA;
    private static Flag $UKRAINE;
    private static Flag $URUGUAY;
    private static Flag $UNITEDSTATES;
    private static Flag $UZBEKISTAN;
    private static Flag $VATICANCITY;
    private static Flag $SAINTVINCENTANDTHEGRENADINES;
    private static Flag $VENEZUELA;
    private static Flag $VIETNAM;
    private static Flag $VANUATU;
    private static Flag $SAMOA;
    private static Flag $YEMEN;
    private static Flag $SOUTHAFRICA;
    private static Flag $ZAMBIA;
    private static Flag $ZIMBABWE;

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

    public static function AFGHANISTAN(): Flag
    {
        self::$AFGHANISTAN ??= new Flag('af');

        return self::$AFGHANISTAN;
    }
    public static function ANGOLA(): Flag
    {
        self::$ANGOLA ??= new Flag('ao');

        return self::$ANGOLA;
    }
    public static function ALBANIA(): Flag
    {
        self::$ALBANIA ??= new Flag('al');

        return self::$ALBANIA;
    }
    public static function ANDORRA(): Flag
    {
        self::$ANDORRA ??= new Flag('ad');

        return self::$ANDORRA;
    }
    public static function UNITEDARABEMIRATES(): Flag
    {
        self::$UNITEDARABEMIRATES ??= new Flag('ae');

        return self::$UNITEDARABEMIRATES;
    }
    public static function ARGENTINA(): Flag
    {
        self::$ARGENTINA ??= new Flag('ar');

        return self::$ARGENTINA;
    }
    public static function ARMENIA(): Flag
    {
        self::$ARMENIA ??= new Flag('am');

        return self::$ARMENIA;
    }
    public static function ANTIGUAANDBARBUDA(): Flag
    {
        self::$ANTIGUAANDBARBUDA ??= new Flag('ag');

        return self::$ANTIGUAANDBARBUDA;
    }
    public static function AUSTRALIA(): Flag
    {
        self::$AUSTRALIA ??= new Flag('au');

        return self::$AUSTRALIA;
    }
    public static function AUSTRIA(): Flag
    {
        self::$AUSTRIA ??= new Flag('at');

        return self::$AUSTRIA;
    }
    public static function AZERBAIJAN(): Flag
    {
        self::$AZERBAIJAN ??= new Flag('az');

        return self::$AZERBAIJAN;
    }
    public static function BURUNDI(): Flag
    {
        self::$BURUNDI ??= new Flag('bi');

        return self::$BURUNDI;
    }
    public static function BELGIUM(): Flag
    {
        self::$BELGIUM ??= new Flag('be');

        return self::$BELGIUM;
    }
    public static function BENIN(): Flag
    {
        self::$BENIN ??= new Flag('bj');

        return self::$BENIN;
    }
    public static function BURKINAFASO(): Flag
    {
        self::$BURKINAFASO ??= new Flag('bf');

        return self::$BURKINAFASO;
    }
    public static function BANGLADESH(): Flag
    {
        self::$BANGLADESH ??= new Flag('bd');

        return self::$BANGLADESH;
    }
    public static function BULGARIA(): Flag
    {
        self::$BULGARIA ??= new Flag('bg');

        return self::$BULGARIA;
    }
    public static function BAHRAIN(): Flag
    {
        self::$BAHRAIN ??= new Flag('bh');

        return self::$BAHRAIN;
    }
    public static function BAHAMAS(): Flag
    {
        self::$BAHAMAS ??= new Flag('bs');

        return self::$BAHAMAS;
    }
    public static function BOSNIAANDHERZEGOVINA(): Flag
    {
        self::$BOSNIAANDHERZEGOVINA ??= new Flag('ba');

        return self::$BOSNIAANDHERZEGOVINA;
    }
    public static function BELARUS(): Flag
    {
        self::$BELARUS ??= new Flag('by');

        return self::$BELARUS;
    }
    public static function BELIZE(): Flag
    {
        self::$BELIZE ??= new Flag('bz');

        return self::$BELIZE;
    }
    public static function BOLIVIA(): Flag
    {
        self::$BOLIVIA ??= new Flag('bo');

        return self::$BOLIVIA;
    }
    public static function BRAZIL(): Flag
    {
        self::$BRAZIL ??= new Flag('br');

        return self::$BRAZIL;
    }
    public static function BARBADOS(): Flag
    {
        self::$BARBADOS ??= new Flag('bb');

        return self::$BARBADOS;
    }
    public static function BRUNEIDARUSSALAM(): Flag
    {
        self::$BRUNEIDARUSSALAM ??= new Flag('bn');

        return self::$BRUNEIDARUSSALAM;
    }
    public static function BHUTAN(): Flag
    {
        self::$BHUTAN ??= new Flag('bt');

        return self::$BHUTAN;
    }
    public static function BOTSWANA(): Flag
    {
        self::$BOTSWANA ??= new Flag('bw');

        return self::$BOTSWANA;
    }
    public static function CENTRALAFRICANREPUBLIC(): Flag
    {
        self::$CENTRALAFRICANREPUBLIC ??= new Flag('cf');

        return self::$CENTRALAFRICANREPUBLIC;
    }
    public static function CANADA(): Flag
    {
        self::$CANADA ??= new Flag('ca');

        return self::$CANADA;
    }
    public static function SWITZERLAND(): Flag
    {
        self::$SWITZERLAND ??= new Flag('ch');

        return self::$SWITZERLAND;
    }
    public static function CHILE(): Flag
    {
        self::$CHILE ??= new Flag('cl');

        return self::$CHILE;
    }
    public static function CHINA(): Flag
    {
        self::$CHINA ??= new Flag('cn');

        return self::$CHINA;
    }
    public static function CTEDIVOIRE(): Flag
    {
        self::$CTEDIVOIRE ??= new Flag('ci');

        return self::$CTEDIVOIRE;
    }
    public static function CAMEROON(): Flag
    {
        self::$CAMEROON ??= new Flag('cm');

        return self::$CAMEROON;
    }
    public static function DEMOCRATICREPUBLICOFTHECONGO(): Flag
    {
        self::$DEMOCRATICREPUBLICOFTHECONGO ??= new Flag('cd');

        return self::$DEMOCRATICREPUBLICOFTHECONGO;
    }
    public static function REPUBLICOFTHECONGO(): Flag
    {
        self::$REPUBLICOFTHECONGO ??= new Flag('cg');

        return self::$REPUBLICOFTHECONGO;
    }
    public static function COLOMBIA(): Flag
    {
        self::$COLOMBIA ??= new Flag('co');

        return self::$COLOMBIA;
    }
    public static function COMOROS(): Flag
    {
        self::$COMOROS ??= new Flag('km');

        return self::$COMOROS;
    }
    public static function CAPEVERDE(): Flag
    {
        self::$CAPEVERDE ??= new Flag('cv');

        return self::$CAPEVERDE;
    }
    public static function COSTARICA(): Flag
    {
        self::$COSTARICA ??= new Flag('cr');

        return self::$COSTARICA;
    }
    public static function CUBA(): Flag
    {
        self::$CUBA ??= new Flag('cu');

        return self::$CUBA;
    }
    public static function CYPRUS(): Flag
    {
        self::$CYPRUS ??= new Flag('cy');

        return self::$CYPRUS;
    }
    public static function CZECHREPUBLIC(): Flag
    {
        self::$CZECHREPUBLIC ??= new Flag('cz');

        return self::$CZECHREPUBLIC;
    }
    public static function GERMANY(): Flag
    {
        self::$GERMANY ??= new Flag('de');

        return self::$GERMANY;
    }
    public static function DJIBOUTI(): Flag
    {
        self::$DJIBOUTI ??= new Flag('dj');

        return self::$DJIBOUTI;
    }
    public static function DOMINICA(): Flag
    {
        self::$DOMINICA ??= new Flag('dm');

        return self::$DOMINICA;
    }
    public static function DENMARK(): Flag
    {
        self::$DENMARK ??= new Flag('dk');

        return self::$DENMARK;
    }
    public static function DOMINICANREPUBLIC(): Flag
    {
        self::$DOMINICANREPUBLIC ??= new Flag('do');

        return self::$DOMINICANREPUBLIC;
    }
    public static function ALGERIA(): Flag
    {
        self::$ALGERIA ??= new Flag('dz');

        return self::$ALGERIA;
    }
    public static function ECUADOR(): Flag
    {
        self::$ECUADOR ??= new Flag('ec');

        return self::$ECUADOR;
    }
    public static function EGYPT(): Flag
    {
        self::$EGYPT ??= new Flag('eg');

        return self::$EGYPT;
    }
    public static function ERITREA(): Flag
    {
        self::$ERITREA ??= new Flag('er');

        return self::$ERITREA;
    }
    public static function SPAIN(): Flag
    {
        self::$SPAIN ??= new Flag('es');

        return self::$SPAIN;
    }
    public static function ESTONIA(): Flag
    {
        self::$ESTONIA ??= new Flag('ee');

        return self::$ESTONIA;
    }
    public static function ETHIOPIA(): Flag
    {
        self::$ETHIOPIA ??= new Flag('et');

        return self::$ETHIOPIA;
    }
    public static function FINLAND(): Flag
    {
        self::$FINLAND ??= new Flag('fi');

        return self::$FINLAND;
    }
    public static function FIJI(): Flag
    {
        self::$FIJI ??= new Flag('fj');

        return self::$FIJI;
    }
    public static function FRANCE(): Flag
    {
        self::$FRANCE ??= new Flag('fr');

        return self::$FRANCE;
    }
    public static function MICRONESIAFEDERATEDSTATESOF(): Flag
    {
        self::$MICRONESIAFEDERATEDSTATESOF ??= new Flag('fm');

        return self::$MICRONESIAFEDERATEDSTATESOF;
    }
    public static function GABON(): Flag
    {
        self::$GABON ??= new Flag('ga');

        return self::$GABON;
    }
    public static function UNITEDKINGDOM(): Flag
    {
        self::$UNITEDKINGDOM ??= new Flag('gb');

        return self::$UNITEDKINGDOM;
    }
    public static function GEORGIA(): Flag
    {
        self::$GEORGIA ??= new Flag('ge');

        return self::$GEORGIA;
    }
    public static function GHANA(): Flag
    {
        self::$GHANA ??= new Flag('gh');

        return self::$GHANA;
    }
    public static function GUINEA(): Flag
    {
        self::$GUINEA ??= new Flag('gn');

        return self::$GUINEA;
    }
    public static function GAMBIA(): Flag
    {
        self::$GAMBIA ??= new Flag('gm');

        return self::$GAMBIA;
    }
    public static function GUINEABISSAU(): Flag
    {
        self::$GUINEABISSAU ??= new Flag('gw');

        return self::$GUINEABISSAU;
    }
    public static function EQUATORIALGUINEA(): Flag
    {
        self::$EQUATORIALGUINEA ??= new Flag('gq');

        return self::$EQUATORIALGUINEA;
    }
    public static function GREECE(): Flag
    {
        self::$GREECE ??= new Flag('gr');

        return self::$GREECE;
    }
    public static function GRENADA(): Flag
    {
        self::$GRENADA ??= new Flag('gd');

        return self::$GRENADA;
    }
    public static function GUATEMALA(): Flag
    {
        self::$GUATEMALA ??= new Flag('gt');

        return self::$GUATEMALA;
    }
    public static function GUYANA(): Flag
    {
        self::$GUYANA ??= new Flag('gy');

        return self::$GUYANA;
    }
    public static function HONDURAS(): Flag
    {
        self::$HONDURAS ??= new Flag('hn');

        return self::$HONDURAS;
    }
    public static function CROATIA(): Flag
    {
        self::$CROATIA ??= new Flag('hr');

        return self::$CROATIA;
    }
    public static function HAITI(): Flag
    {
        self::$HAITI ??= new Flag('ht');

        return self::$HAITI;
    }
    public static function HUNGARY(): Flag
    {
        self::$HUNGARY ??= new Flag('hu');

        return self::$HUNGARY;
    }
    public static function INDONESIA(): Flag
    {
        self::$INDONESIA ??= new Flag('id');

        return self::$INDONESIA;
    }
    public static function INDIA(): Flag
    {
        self::$INDIA ??= new Flag('in');

        return self::$INDIA;
    }
    public static function IRELAND(): Flag
    {
        self::$IRELAND ??= new Flag('ie');

        return self::$IRELAND;
    }
    public static function IRANISLAMICREPUBLICOF(): Flag
    {
        self::$IRANISLAMICREPUBLICOF ??= new Flag('ir');

        return self::$IRANISLAMICREPUBLICOF;
    }
    public static function IRAQ(): Flag
    {
        self::$IRAQ ??= new Flag('iq');

        return self::$IRAQ;
    }
    public static function ICELAND(): Flag
    {
        self::$ICELAND ??= new Flag('is');

        return self::$ICELAND;
    }
    public static function ISRAEL(): Flag
    {
        self::$ISRAEL ??= new Flag('il');

        return self::$ISRAEL;
    }
    public static function ITALY(): Flag
    {
        self::$ITALY ??= new Flag('it');

        return self::$ITALY;
    }
    public static function JAMAICA(): Flag
    {
        self::$JAMAICA ??= new Flag('jm');

        return self::$JAMAICA;
    }
    public static function JORDAN(): Flag
    {
        self::$JORDAN ??= new Flag('jo');

        return self::$JORDAN;
    }
    public static function JAPAN(): Flag
    {
        self::$JAPAN ??= new Flag('jp');

        return self::$JAPAN;
    }
    public static function KAZAKHSTAN(): Flag
    {
        self::$KAZAKHSTAN ??= new Flag('kz');

        return self::$KAZAKHSTAN;
    }
    public static function KENYA(): Flag
    {
        self::$KENYA ??= new Flag('ke');

        return self::$KENYA;
    }
    public static function KYRGYZSTAN(): Flag
    {
        self::$KYRGYZSTAN ??= new Flag('kg');

        return self::$KYRGYZSTAN;
    }
    public static function CAMBODIA(): Flag
    {
        self::$CAMBODIA ??= new Flag('kh');

        return self::$CAMBODIA;
    }
    public static function KIRIBATI(): Flag
    {
        self::$KIRIBATI ??= new Flag('ki');

        return self::$KIRIBATI;
    }
    public static function SAINTKITTSANDNEVIS(): Flag
    {
        self::$SAINTKITTSANDNEVIS ??= new Flag('kn');

        return self::$SAINTKITTSANDNEVIS;
    }
    public static function SOUTHKOREA(): Flag
    {
        self::$SOUTHKOREA ??= new Flag('kr');

        return self::$SOUTHKOREA;
    }
    public static function KUWAIT(): Flag
    {
        self::$KUWAIT ??= new Flag('kw');

        return self::$KUWAIT;
    }
    public static function LAOPEOPLESDEMOCRATICREPUBLIC(): Flag
    {
        self::$LAOPEOPLESDEMOCRATICREPUBLIC ??= new Flag('la');

        return self::$LAOPEOPLESDEMOCRATICREPUBLIC;
    }
    public static function LEBANON(): Flag
    {
        self::$LEBANON ??= new Flag('lb');

        return self::$LEBANON;
    }
    public static function LIBERIA(): Flag
    {
        self::$LIBERIA ??= new Flag('lr');

        return self::$LIBERIA;
    }
    public static function LIBYA(): Flag
    {
        self::$LIBYA ??= new Flag('ly');

        return self::$LIBYA;
    }
    public static function SAINTLUCIA(): Flag
    {
        self::$SAINTLUCIA ??= new Flag('lc');

        return self::$SAINTLUCIA;
    }
    public static function LIECHTENSTEIN(): Flag
    {
        self::$LIECHTENSTEIN ??= new Flag('li');

        return self::$LIECHTENSTEIN;
    }
    public static function SRILANKA(): Flag
    {
        self::$SRILANKA ??= new Flag('lk');

        return self::$SRILANKA;
    }
    public static function LESOTHO(): Flag
    {
        self::$LESOTHO ??= new Flag('ls');

        return self::$LESOTHO;
    }
    public static function LITHUANIA(): Flag
    {
        self::$LITHUANIA ??= new Flag('lt');

        return self::$LITHUANIA;
    }
    public static function LUXEMBOURG(): Flag
    {
        self::$LUXEMBOURG ??= new Flag('lu');

        return self::$LUXEMBOURG;
    }
    public static function LATVIA(): Flag
    {
        self::$LATVIA ??= new Flag('lv');

        return self::$LATVIA;
    }
    public static function MOROCCO(): Flag
    {
        self::$MOROCCO ??= new Flag('ma');

        return self::$MOROCCO;
    }
    public static function MONACO(): Flag
    {
        self::$MONACO ??= new Flag('mc');

        return self::$MONACO;
    }
    public static function MOLDOVA(): Flag
    {
        self::$MOLDOVA ??= new Flag('md');

        return self::$MOLDOVA;
    }
    public static function MADAGASCAR(): Flag
    {
        self::$MADAGASCAR ??= new Flag('mg');

        return self::$MADAGASCAR;
    }
    public static function MALDIVES(): Flag
    {
        self::$MALDIVES ??= new Flag('mv');

        return self::$MALDIVES;
    }
    public static function MEXICO(): Flag
    {
        self::$MEXICO ??= new Flag('mx');

        return self::$MEXICO;
    }
    public static function MARSHALLISLANDS(): Flag
    {
        self::$MARSHALLISLANDS ??= new Flag('mh');

        return self::$MARSHALLISLANDS;
    }
    public static function NORTHMACEDONIA(): Flag
    {
        self::$NORTHMACEDONIA ??= new Flag('mk');

        return self::$NORTHMACEDONIA;
    }
    public static function MALI(): Flag
    {
        self::$MALI ??= new Flag('ml');

        return self::$MALI;
    }
    public static function MALTA(): Flag
    {
        self::$MALTA ??= new Flag('mt');

        return self::$MALTA;
    }
    public static function MYANMAR(): Flag
    {
        self::$MYANMAR ??= new Flag('mm');

        return self::$MYANMAR;
    }
    public static function MONTENEGRO(): Flag
    {
        self::$MONTENEGRO ??= new Flag('me');

        return self::$MONTENEGRO;
    }
    public static function MONGOLIA(): Flag
    {
        self::$MONGOLIA ??= new Flag('mn');

        return self::$MONGOLIA;
    }
    public static function MOZAMBIQUE(): Flag
    {
        self::$MOZAMBIQUE ??= new Flag('mz');

        return self::$MOZAMBIQUE;
    }
    public static function MAURITANIA(): Flag
    {
        self::$MAURITANIA ??= new Flag('mr');

        return self::$MAURITANIA;
    }
    public static function MAURITIUS(): Flag
    {
        self::$MAURITIUS ??= new Flag('mu');

        return self::$MAURITIUS;
    }
    public static function MALAWI(): Flag
    {
        self::$MALAWI ??= new Flag('mw');

        return self::$MALAWI;
    }
    public static function MALAYSIA(): Flag
    {
        self::$MALAYSIA ??= new Flag('my');

        return self::$MALAYSIA;
    }
    public static function NAMIBIA(): Flag
    {
        self::$NAMIBIA ??= new Flag('na');

        return self::$NAMIBIA;
    }
    public static function NIGER(): Flag
    {
        self::$NIGER ??= new Flag('ne');

        return self::$NIGER;
    }
    public static function NIGERIA(): Flag
    {
        self::$NIGERIA ??= new Flag('ng');

        return self::$NIGERIA;
    }
    public static function NICARAGUA(): Flag
    {
        self::$NICARAGUA ??= new Flag('ni');

        return self::$NICARAGUA;
    }
    public static function NETHERLANDS(): Flag
    {
        self::$NETHERLANDS ??= new Flag('nl');

        return self::$NETHERLANDS;
    }
    public static function NORWAY(): Flag
    {
        self::$NORWAY ??= new Flag('no');

        return self::$NORWAY;
    }
    public static function NEPAL(): Flag
    {
        self::$NEPAL ??= new Flag('np');

        return self::$NEPAL;
    }
    public static function NAURU(): Flag
    {
        self::$NAURU ??= new Flag('nr');

        return self::$NAURU;
    }
    public static function NEWZEALAND(): Flag
    {
        self::$NEWZEALAND ??= new Flag('nz');

        return self::$NEWZEALAND;
    }
    public static function OMAN(): Flag
    {
        self::$OMAN ??= new Flag('om');

        return self::$OMAN;
    }
    public static function PAKISTAN(): Flag
    {
        self::$PAKISTAN ??= new Flag('pk');

        return self::$PAKISTAN;
    }
    public static function PANAMA(): Flag
    {
        self::$PANAMA ??= new Flag('pa');

        return self::$PANAMA;
    }
    public static function PERU(): Flag
    {
        self::$PERU ??= new Flag('pe');

        return self::$PERU;
    }
    public static function PHILIPPINES(): Flag
    {
        self::$PHILIPPINES ??= new Flag('ph');

        return self::$PHILIPPINES;
    }
    public static function PALAU(): Flag
    {
        self::$PALAU ??= new Flag('pw');

        return self::$PALAU;
    }
    public static function PAPUANEWGUINEA(): Flag
    {
        self::$PAPUANEWGUINEA ??= new Flag('pg');

        return self::$PAPUANEWGUINEA;
    }
    public static function POLAND(): Flag
    {
        self::$POLAND ??= new Flag('pl');

        return self::$POLAND;
    }
    public static function FRENCHPOLYNESIA(): Flag
    {
        self::$FRENCHPOLYNESIA ??= new Flag('pf');

        return self::$FRENCHPOLYNESIA;
    }
    public static function NORTHKOREA(): Flag
    {
        self::$NORTHKOREA ??= new Flag('kp');

        return self::$NORTHKOREA;
    }
    public static function PORTUGAL(): Flag
    {
        self::$PORTUGAL ??= new Flag('pt');

        return self::$PORTUGAL;
    }
    public static function PARAGUAY(): Flag
    {
        self::$PARAGUAY ??= new Flag('py');

        return self::$PARAGUAY;
    }
    public static function QATAR(): Flag
    {
        self::$QATAR ??= new Flag('qa');

        return self::$QATAR;
    }
    public static function ROMANIA(): Flag
    {
        self::$ROMANIA ??= new Flag('ro');

        return self::$ROMANIA;
    }
    public static function RUSSIA(): Flag
    {
        self::$RUSSIA ??= new Flag('ru');

        return self::$RUSSIA;
    }
    public static function RWANDA(): Flag
    {
        self::$RWANDA ??= new Flag('rw');

        return self::$RWANDA;
    }
    public static function SAUDIARABIA(): Flag
    {
        self::$SAUDIARABIA ??= new Flag('sa');

        return self::$SAUDIARABIA;
    }
    public static function SUDAN(): Flag
    {
        self::$SUDAN ??= new Flag('sd');

        return self::$SUDAN;
    }
    public static function SENEGAL(): Flag
    {
        self::$SENEGAL ??= new Flag('sn');

        return self::$SENEGAL;
    }
    public static function SINGAPORE(): Flag
    {
        self::$SINGAPORE ??= new Flag('sg');

        return self::$SINGAPORE;
    }
    public static function SOLOMONISLANDS(): Flag
    {
        self::$SOLOMONISLANDS ??= new Flag('sb');

        return self::$SOLOMONISLANDS;
    }
    public static function SIERRALEONE(): Flag
    {
        self::$SIERRALEONE ??= new Flag('sl');

        return self::$SIERRALEONE;
    }
    public static function ELSALVADOR(): Flag
    {
        self::$ELSALVADOR ??= new Flag('sv');

        return self::$ELSALVADOR;
    }
    public static function SANMARINO(): Flag
    {
        self::$SANMARINO ??= new Flag('sm');

        return self::$SANMARINO;
    }
    public static function SOMALIA(): Flag
    {
        self::$SOMALIA ??= new Flag('so');

        return self::$SOMALIA;
    }
    public static function SERBIA(): Flag
    {
        self::$SERBIA ??= new Flag('rs');

        return self::$SERBIA;
    }
    public static function SOUTHSUDAN(): Flag
    {
        self::$SOUTHSUDAN ??= new Flag('ss');

        return self::$SOUTHSUDAN;
    }
    public static function SAOTOMEANDPRINCIPE(): Flag
    {
        self::$SAOTOMEANDPRINCIPE ??= new Flag('st');

        return self::$SAOTOMEANDPRINCIPE;
    }
    public static function SURINAME(): Flag
    {
        self::$SURINAME ??= new Flag('sr');

        return self::$SURINAME;
    }
    public static function SLOVAKIA(): Flag
    {
        self::$SLOVAKIA ??= new Flag('sk');

        return self::$SLOVAKIA;
    }
    public static function SLOVENIA(): Flag
    {
        self::$SLOVENIA ??= new Flag('si');

        return self::$SLOVENIA;
    }
    public static function SWEDEN(): Flag
    {
        self::$SWEDEN ??= new Flag('se');

        return self::$SWEDEN;
    }
    public static function ESWATINI(): Flag
    {
        self::$ESWATINI ??= new Flag('sz');

        return self::$ESWATINI;
    }
    public static function SEYCHELLES(): Flag
    {
        self::$SEYCHELLES ??= new Flag('sc');

        return self::$SEYCHELLES;
    }
    public static function SYRIA(): Flag
    {
        self::$SYRIA ??= new Flag('sy');

        return self::$SYRIA;
    }
    public static function CHAD(): Flag
    {
        self::$CHAD ??= new Flag('td');

        return self::$CHAD;
    }
    public static function TOGO(): Flag
    {
        self::$TOGO ??= new Flag('tg');

        return self::$TOGO;
    }
    public static function THAILAND(): Flag
    {
        self::$THAILAND ??= new Flag('th');

        return self::$THAILAND;
    }
    public static function TAJIKISTAN(): Flag
    {
        self::$TAJIKISTAN ??= new Flag('tj');

        return self::$TAJIKISTAN;
    }
    public static function TURKMENISTAN(): Flag
    {
        self::$TURKMENISTAN ??= new Flag('tm');

        return self::$TURKMENISTAN;
    }
    public static function TIMORLESTE(): Flag
    {
        self::$TIMORLESTE ??= new Flag('tl');

        return self::$TIMORLESTE;
    }
    public static function TONGA(): Flag
    {
        self::$TONGA ??= new Flag('to');

        return self::$TONGA;
    }
    public static function TRINIDADANDTOBAGO(): Flag
    {
        self::$TRINIDADANDTOBAGO ??= new Flag('tt');

        return self::$TRINIDADANDTOBAGO;
    }
    public static function TUNISIA(): Flag
    {
        self::$TUNISIA ??= new Flag('tn');

        return self::$TUNISIA;
    }
    public static function TURKEY(): Flag
    {
        self::$TURKEY ??= new Flag('tr');

        return self::$TURKEY;
    }
    public static function TUVALU(): Flag
    {
        self::$TUVALU ??= new Flag('tv');

        return self::$TUVALU;
    }
    public static function TANZANIA(): Flag
    {
        self::$TANZANIA ??= new Flag('tz');

        return self::$TANZANIA;
    }
    public static function UGANDA(): Flag
    {
        self::$UGANDA ??= new Flag('ug');

        return self::$UGANDA;
    }
    public static function UKRAINE(): Flag
    {
        self::$UKRAINE ??= new Flag('ua');

        return self::$UKRAINE;
    }
    public static function URUGUAY(): Flag
    {
        self::$URUGUAY ??= new Flag('uy');

        return self::$URUGUAY;
    }
    public static function UNITEDSTATES(): Flag
    {
        self::$UNITEDSTATES ??= new Flag('us');

        return self::$UNITEDSTATES;
    }
    public static function UZBEKISTAN(): Flag
    {
        self::$UZBEKISTAN ??= new Flag('uz');

        return self::$UZBEKISTAN;
    }
    public static function VATICANCITY(): Flag
    {
        self::$VATICANCITY ??= new Flag('va');

        return self::$VATICANCITY;
    }
    public static function SAINTVINCENTANDTHEGRENADINES(): Flag
    {
        self::$SAINTVINCENTANDTHEGRENADINES ??= new Flag('vc');

        return self::$SAINTVINCENTANDTHEGRENADINES;
    }
    public static function VENEZUELA(): Flag
    {
        self::$VENEZUELA ??= new Flag('ve');

        return self::$VENEZUELA;
    }
    public static function VIETNAM(): Flag
    {
        self::$VIETNAM ??= new Flag('vn');

        return self::$VIETNAM;
    }
    public static function VANUATU(): Flag
    {
        self::$VANUATU ??= new Flag('vu');

        return self::$VANUATU;
    }
    public static function SAMOA(): Flag
    {
        self::$SAMOA ??= new Flag('ws');

        return self::$SAMOA;
    }
    public static function YEMEN(): Flag
    {
        self::$YEMEN ??= new Flag('ye');

        return self::$YEMEN;
    }
    public static function SOUTHAFRICA(): Flag
    {
        self::$SOUTHAFRICA ??= new Flag('za');

        return self::$SOUTHAFRICA;
    }
    public static function ZAMBIA(): Flag
    {
        self::$ZAMBIA ??= new Flag('zm');

        return self::$ZAMBIA;
    }
    public static function ZIMBABWE(): Flag
    {
        self::$ZIMBABWE ??= new Flag('zw');

        return self::$ZIMBABWE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'af' => self::AFGHANISTAN(),
            'ao' => self::ANGOLA(),
            'al' => self::ALBANIA(),
            'ad' => self::ANDORRA(),
            'ae' => self::UNITEDARABEMIRATES(),
            'ar' => self::ARGENTINA(),
            'am' => self::ARMENIA(),
            'ag' => self::ANTIGUAANDBARBUDA(),
            'au' => self::AUSTRALIA(),
            'at' => self::AUSTRIA(),
            'az' => self::AZERBAIJAN(),
            'bi' => self::BURUNDI(),
            'be' => self::BELGIUM(),
            'bj' => self::BENIN(),
            'bf' => self::BURKINAFASO(),
            'bd' => self::BANGLADESH(),
            'bg' => self::BULGARIA(),
            'bh' => self::BAHRAIN(),
            'bs' => self::BAHAMAS(),
            'ba' => self::BOSNIAANDHERZEGOVINA(),
            'by' => self::BELARUS(),
            'bz' => self::BELIZE(),
            'bo' => self::BOLIVIA(),
            'br' => self::BRAZIL(),
            'bb' => self::BARBADOS(),
            'bn' => self::BRUNEIDARUSSALAM(),
            'bt' => self::BHUTAN(),
            'bw' => self::BOTSWANA(),
            'cf' => self::CENTRALAFRICANREPUBLIC(),
            'ca' => self::CANADA(),
            'ch' => self::SWITZERLAND(),
            'cl' => self::CHILE(),
            'cn' => self::CHINA(),
            'ci' => self::CTEDIVOIRE(),
            'cm' => self::CAMEROON(),
            'cd' => self::DEMOCRATICREPUBLICOFTHECONGO(),
            'cg' => self::REPUBLICOFTHECONGO(),
            'co' => self::COLOMBIA(),
            'km' => self::COMOROS(),
            'cv' => self::CAPEVERDE(),
            'cr' => self::COSTARICA(),
            'cu' => self::CUBA(),
            'cy' => self::CYPRUS(),
            'cz' => self::CZECHREPUBLIC(),
            'de' => self::GERMANY(),
            'dj' => self::DJIBOUTI(),
            'dm' => self::DOMINICA(),
            'dk' => self::DENMARK(),
            'do' => self::DOMINICANREPUBLIC(),
            'dz' => self::ALGERIA(),
            'ec' => self::ECUADOR(),
            'eg' => self::EGYPT(),
            'er' => self::ERITREA(),
            'es' => self::SPAIN(),
            'ee' => self::ESTONIA(),
            'et' => self::ETHIOPIA(),
            'fi' => self::FINLAND(),
            'fj' => self::FIJI(),
            'fr' => self::FRANCE(),
            'fm' => self::MICRONESIAFEDERATEDSTATESOF(),
            'ga' => self::GABON(),
            'gb' => self::UNITEDKINGDOM(),
            'ge' => self::GEORGIA(),
            'gh' => self::GHANA(),
            'gn' => self::GUINEA(),
            'gm' => self::GAMBIA(),
            'gw' => self::GUINEABISSAU(),
            'gq' => self::EQUATORIALGUINEA(),
            'gr' => self::GREECE(),
            'gd' => self::GRENADA(),
            'gt' => self::GUATEMALA(),
            'gy' => self::GUYANA(),
            'hn' => self::HONDURAS(),
            'hr' => self::CROATIA(),
            'ht' => self::HAITI(),
            'hu' => self::HUNGARY(),
            'id' => self::INDONESIA(),
            'in' => self::INDIA(),
            'ie' => self::IRELAND(),
            'ir' => self::IRANISLAMICREPUBLICOF(),
            'iq' => self::IRAQ(),
            'is' => self::ICELAND(),
            'il' => self::ISRAEL(),
            'it' => self::ITALY(),
            'jm' => self::JAMAICA(),
            'jo' => self::JORDAN(),
            'jp' => self::JAPAN(),
            'kz' => self::KAZAKHSTAN(),
            'ke' => self::KENYA(),
            'kg' => self::KYRGYZSTAN(),
            'kh' => self::CAMBODIA(),
            'ki' => self::KIRIBATI(),
            'kn' => self::SAINTKITTSANDNEVIS(),
            'kr' => self::SOUTHKOREA(),
            'kw' => self::KUWAIT(),
            'la' => self::LAOPEOPLESDEMOCRATICREPUBLIC(),
            'lb' => self::LEBANON(),
            'lr' => self::LIBERIA(),
            'ly' => self::LIBYA(),
            'lc' => self::SAINTLUCIA(),
            'li' => self::LIECHTENSTEIN(),
            'lk' => self::SRILANKA(),
            'ls' => self::LESOTHO(),
            'lt' => self::LITHUANIA(),
            'lu' => self::LUXEMBOURG(),
            'lv' => self::LATVIA(),
            'ma' => self::MOROCCO(),
            'mc' => self::MONACO(),
            'md' => self::MOLDOVA(),
            'mg' => self::MADAGASCAR(),
            'mv' => self::MALDIVES(),
            'mx' => self::MEXICO(),
            'mh' => self::MARSHALLISLANDS(),
            'mk' => self::NORTHMACEDONIA(),
            'ml' => self::MALI(),
            'mt' => self::MALTA(),
            'mm' => self::MYANMAR(),
            'me' => self::MONTENEGRO(),
            'mn' => self::MONGOLIA(),
            'mz' => self::MOZAMBIQUE(),
            'mr' => self::MAURITANIA(),
            'mu' => self::MAURITIUS(),
            'mw' => self::MALAWI(),
            'my' => self::MALAYSIA(),
            'na' => self::NAMIBIA(),
            'ne' => self::NIGER(),
            'ng' => self::NIGERIA(),
            'ni' => self::NICARAGUA(),
            'nl' => self::NETHERLANDS(),
            'no' => self::NORWAY(),
            'np' => self::NEPAL(),
            'nr' => self::NAURU(),
            'nz' => self::NEWZEALAND(),
            'om' => self::OMAN(),
            'pk' => self::PAKISTAN(),
            'pa' => self::PANAMA(),
            'pe' => self::PERU(),
            'ph' => self::PHILIPPINES(),
            'pw' => self::PALAU(),
            'pg' => self::PAPUANEWGUINEA(),
            'pl' => self::POLAND(),
            'pf' => self::FRENCHPOLYNESIA(),
            'kp' => self::NORTHKOREA(),
            'pt' => self::PORTUGAL(),
            'py' => self::PARAGUAY(),
            'qa' => self::QATAR(),
            'ro' => self::ROMANIA(),
            'ru' => self::RUSSIA(),
            'rw' => self::RWANDA(),
            'sa' => self::SAUDIARABIA(),
            'sd' => self::SUDAN(),
            'sn' => self::SENEGAL(),
            'sg' => self::SINGAPORE(),
            'sb' => self::SOLOMONISLANDS(),
            'sl' => self::SIERRALEONE(),
            'sv' => self::ELSALVADOR(),
            'sm' => self::SANMARINO(),
            'so' => self::SOMALIA(),
            'rs' => self::SERBIA(),
            'ss' => self::SOUTHSUDAN(),
            'st' => self::SAOTOMEANDPRINCIPE(),
            'sr' => self::SURINAME(),
            'sk' => self::SLOVAKIA(),
            'si' => self::SLOVENIA(),
            'se' => self::SWEDEN(),
            'sz' => self::ESWATINI(),
            'sc' => self::SEYCHELLES(),
            'sy' => self::SYRIA(),
            'td' => self::CHAD(),
            'tg' => self::TOGO(),
            'th' => self::THAILAND(),
            'tj' => self::TAJIKISTAN(),
            'tm' => self::TURKMENISTAN(),
            'tl' => self::TIMORLESTE(),
            'to' => self::TONGA(),
            'tt' => self::TRINIDADANDTOBAGO(),
            'tn' => self::TUNISIA(),
            'tr' => self::TURKEY(),
            'tv' => self::TUVALU(),
            'tz' => self::TANZANIA(),
            'ug' => self::UGANDA(),
            'ua' => self::UKRAINE(),
            'uy' => self::URUGUAY(),
            'us' => self::UNITEDSTATES(),
            'uz' => self::UZBEKISTAN(),
            'va' => self::VATICANCITY(),
            'vc' => self::SAINTVINCENTANDTHEGRENADINES(),
            've' => self::VENEZUELA(),
            'vn' => self::VIETNAM(),
            'vu' => self::VANUATU(),
            'ws' => self::SAMOA(),
            'ye' => self::YEMEN(),
            'za' => self::SOUTHAFRICA(),
            'zm' => self::ZAMBIA(),
            'zw' => self::ZIMBABWE(),
            default => throw new \InvalidArgumentException('Unknown Flag value: ' . $value),
        };
    }
}
