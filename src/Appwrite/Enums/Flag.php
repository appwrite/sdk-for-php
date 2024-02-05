<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Flag implements JsonSerializable
{
    private static Flag $AFGHANISTAN;
    private static Flag $ANGOLA;
    private static Flag $ALBANIA;
    private static Flag $ANDORRA;
    private static Flag $UNITED_ARAB_EMIRATES;
    private static Flag $ARGENTINA;
    private static Flag $ARMENIA;
    private static Flag $ANTIGUAAND_BARBUDA;
    private static Flag $AUSTRALIA;
    private static Flag $AUSTRIA;
    private static Flag $AZERBAIJAN;
    private static Flag $BURUNDI;
    private static Flag $BELGIUM;
    private static Flag $BENIN;
    private static Flag $BURKINA_FASO;
    private static Flag $BANGLADESH;
    private static Flag $BULGARIA;
    private static Flag $BAHRAIN;
    private static Flag $BAHAMAS;
    private static Flag $BOSNIAAND_HERZEGOVINA;
    private static Flag $BELARUS;
    private static Flag $BELIZE;
    private static Flag $BOLIVIA;
    private static Flag $BRAZIL;
    private static Flag $BARBADOS;
    private static Flag $BRUNEI_DARUSSALAM;
    private static Flag $BHUTAN;
    private static Flag $BOTSWANA;
    private static Flag $CENTRAL_AFRICAN_REPUBLIC;
    private static Flag $CANADA;
    private static Flag $SWITZERLAND;
    private static Flag $CHILE;
    private static Flag $CHINA;
    private static Flag $CTED_IVOIRE;
    private static Flag $CAMEROON;
    private static Flag $DEMOCRATIC_REPUBLICOFTHE_CONGO;
    private static Flag $REPUBLICOFTHE_CONGO;
    private static Flag $COLOMBIA;
    private static Flag $COMOROS;
    private static Flag $CAPE_VERDE;
    private static Flag $COSTA_RICA;
    private static Flag $CUBA;
    private static Flag $CYPRUS;
    private static Flag $CZECH_REPUBLIC;
    private static Flag $GERMANY;
    private static Flag $DJIBOUTI;
    private static Flag $DOMINICA;
    private static Flag $DENMARK;
    private static Flag $DOMINICAN_REPUBLIC;
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
    private static Flag $MICRONESIA_FEDERATED_STATESOF;
    private static Flag $GABON;
    private static Flag $UNITED_KINGDOM;
    private static Flag $GEORGIA;
    private static Flag $GHANA;
    private static Flag $GUINEA;
    private static Flag $GAMBIA;
    private static Flag $GUINEA_BISSAU;
    private static Flag $EQUATORIAL_GUINEA;
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
    private static Flag $IRAN_ISLAMIC_REPUBLICOF;
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
    private static Flag $SAINT_KITTSAND_NEVIS;
    private static Flag $SOUTH_KOREA;
    private static Flag $KUWAIT;
    private static Flag $LAO_PEOPLES_DEMOCRATIC_REPUBLIC;
    private static Flag $LEBANON;
    private static Flag $LIBERIA;
    private static Flag $LIBYA;
    private static Flag $SAINT_LUCIA;
    private static Flag $LIECHTENSTEIN;
    private static Flag $SRI_LANKA;
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
    private static Flag $MARSHALL_ISLANDS;
    private static Flag $NORTH_MACEDONIA;
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
    private static Flag $NEW_ZEALAND;
    private static Flag $OMAN;
    private static Flag $PAKISTAN;
    private static Flag $PANAMA;
    private static Flag $PERU;
    private static Flag $PHILIPPINES;
    private static Flag $PALAU;
    private static Flag $PAPUA_NEW_GUINEA;
    private static Flag $POLAND;
    private static Flag $NORTH_KOREA;
    private static Flag $PORTUGAL;
    private static Flag $PARAGUAY;
    private static Flag $QATAR;
    private static Flag $ROMANIA;
    private static Flag $RUSSIA;
    private static Flag $RWANDA;
    private static Flag $SAUDI_ARABIA;
    private static Flag $SUDAN;
    private static Flag $SENEGAL;
    private static Flag $SINGAPORE;
    private static Flag $SOLOMON_ISLANDS;
    private static Flag $SIERRA_LEONE;
    private static Flag $EL_SALVADOR;
    private static Flag $SAN_MARINO;
    private static Flag $SOMALIA;
    private static Flag $SERBIA;
    private static Flag $SOUTH_SUDAN;
    private static Flag $SAO_TOMEAND_PRINCIPE;
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
    private static Flag $TIMOR_LESTE;
    private static Flag $TONGA;
    private static Flag $TRINIDADAND_TOBAGO;
    private static Flag $TUNISIA;
    private static Flag $TURKEY;
    private static Flag $TUVALU;
    private static Flag $TANZANIA;
    private static Flag $UGANDA;
    private static Flag $UKRAINE;
    private static Flag $URUGUAY;
    private static Flag $UNITED_STATES;
    private static Flag $UZBEKISTAN;
    private static Flag $VATICAN_CITY;
    private static Flag $SAINT_VINCENTANDTHE_GRENADINES;
    private static Flag $VENEZUELA;
    private static Flag $VIETNAM;
    private static Flag $VANUATU;
    private static Flag $SAMOA;
    private static Flag $YEMEN;
    private static Flag $SOUTH_AFRICA;
    private static Flag $ZAMBIA;
    private static Flag $ZIMBABWE;

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

    public static function AFGHANISTAN(): Flag
    {
        if (!isset(self::$AFGHANISTAN)) {
            self::$AFGHANISTAN = new Flag('af');
        }
        return self::$AFGHANISTAN;
    }
    public static function ANGOLA(): Flag
    {
        if (!isset(self::$ANGOLA)) {
            self::$ANGOLA = new Flag('ao');
        }
        return self::$ANGOLA;
    }
    public static function ALBANIA(): Flag
    {
        if (!isset(self::$ALBANIA)) {
            self::$ALBANIA = new Flag('al');
        }
        return self::$ALBANIA;
    }
    public static function ANDORRA(): Flag
    {
        if (!isset(self::$ANDORRA)) {
            self::$ANDORRA = new Flag('ad');
        }
        return self::$ANDORRA;
    }
    public static function UNITED_ARAB_EMIRATES(): Flag
    {
        if (!isset(self::$UNITED_ARAB_EMIRATES)) {
            self::$UNITED_ARAB_EMIRATES = new Flag('ae');
        }
        return self::$UNITED_ARAB_EMIRATES;
    }
    public static function ARGENTINA(): Flag
    {
        if (!isset(self::$ARGENTINA)) {
            self::$ARGENTINA = new Flag('ar');
        }
        return self::$ARGENTINA;
    }
    public static function ARMENIA(): Flag
    {
        if (!isset(self::$ARMENIA)) {
            self::$ARMENIA = new Flag('am');
        }
        return self::$ARMENIA;
    }
    public static function ANTIGUAAND_BARBUDA(): Flag
    {
        if (!isset(self::$ANTIGUAAND_BARBUDA)) {
            self::$ANTIGUAAND_BARBUDA = new Flag('ag');
        }
        return self::$ANTIGUAAND_BARBUDA;
    }
    public static function AUSTRALIA(): Flag
    {
        if (!isset(self::$AUSTRALIA)) {
            self::$AUSTRALIA = new Flag('au');
        }
        return self::$AUSTRALIA;
    }
    public static function AUSTRIA(): Flag
    {
        if (!isset(self::$AUSTRIA)) {
            self::$AUSTRIA = new Flag('at');
        }
        return self::$AUSTRIA;
    }
    public static function AZERBAIJAN(): Flag
    {
        if (!isset(self::$AZERBAIJAN)) {
            self::$AZERBAIJAN = new Flag('az');
        }
        return self::$AZERBAIJAN;
    }
    public static function BURUNDI(): Flag
    {
        if (!isset(self::$BURUNDI)) {
            self::$BURUNDI = new Flag('bi');
        }
        return self::$BURUNDI;
    }
    public static function BELGIUM(): Flag
    {
        if (!isset(self::$BELGIUM)) {
            self::$BELGIUM = new Flag('be');
        }
        return self::$BELGIUM;
    }
    public static function BENIN(): Flag
    {
        if (!isset(self::$BENIN)) {
            self::$BENIN = new Flag('bj');
        }
        return self::$BENIN;
    }
    public static function BURKINA_FASO(): Flag
    {
        if (!isset(self::$BURKINA_FASO)) {
            self::$BURKINA_FASO = new Flag('bf');
        }
        return self::$BURKINA_FASO;
    }
    public static function BANGLADESH(): Flag
    {
        if (!isset(self::$BANGLADESH)) {
            self::$BANGLADESH = new Flag('bd');
        }
        return self::$BANGLADESH;
    }
    public static function BULGARIA(): Flag
    {
        if (!isset(self::$BULGARIA)) {
            self::$BULGARIA = new Flag('bg');
        }
        return self::$BULGARIA;
    }
    public static function BAHRAIN(): Flag
    {
        if (!isset(self::$BAHRAIN)) {
            self::$BAHRAIN = new Flag('bh');
        }
        return self::$BAHRAIN;
    }
    public static function BAHAMAS(): Flag
    {
        if (!isset(self::$BAHAMAS)) {
            self::$BAHAMAS = new Flag('bs');
        }
        return self::$BAHAMAS;
    }
    public static function BOSNIAAND_HERZEGOVINA(): Flag
    {
        if (!isset(self::$BOSNIAAND_HERZEGOVINA)) {
            self::$BOSNIAAND_HERZEGOVINA = new Flag('ba');
        }
        return self::$BOSNIAAND_HERZEGOVINA;
    }
    public static function BELARUS(): Flag
    {
        if (!isset(self::$BELARUS)) {
            self::$BELARUS = new Flag('by');
        }
        return self::$BELARUS;
    }
    public static function BELIZE(): Flag
    {
        if (!isset(self::$BELIZE)) {
            self::$BELIZE = new Flag('bz');
        }
        return self::$BELIZE;
    }
    public static function BOLIVIA(): Flag
    {
        if (!isset(self::$BOLIVIA)) {
            self::$BOLIVIA = new Flag('bo');
        }
        return self::$BOLIVIA;
    }
    public static function BRAZIL(): Flag
    {
        if (!isset(self::$BRAZIL)) {
            self::$BRAZIL = new Flag('br');
        }
        return self::$BRAZIL;
    }
    public static function BARBADOS(): Flag
    {
        if (!isset(self::$BARBADOS)) {
            self::$BARBADOS = new Flag('bb');
        }
        return self::$BARBADOS;
    }
    public static function BRUNEI_DARUSSALAM(): Flag
    {
        if (!isset(self::$BRUNEI_DARUSSALAM)) {
            self::$BRUNEI_DARUSSALAM = new Flag('bn');
        }
        return self::$BRUNEI_DARUSSALAM;
    }
    public static function BHUTAN(): Flag
    {
        if (!isset(self::$BHUTAN)) {
            self::$BHUTAN = new Flag('bt');
        }
        return self::$BHUTAN;
    }
    public static function BOTSWANA(): Flag
    {
        if (!isset(self::$BOTSWANA)) {
            self::$BOTSWANA = new Flag('bw');
        }
        return self::$BOTSWANA;
    }
    public static function CENTRAL_AFRICAN_REPUBLIC(): Flag
    {
        if (!isset(self::$CENTRAL_AFRICAN_REPUBLIC)) {
            self::$CENTRAL_AFRICAN_REPUBLIC = new Flag('cf');
        }
        return self::$CENTRAL_AFRICAN_REPUBLIC;
    }
    public static function CANADA(): Flag
    {
        if (!isset(self::$CANADA)) {
            self::$CANADA = new Flag('ca');
        }
        return self::$CANADA;
    }
    public static function SWITZERLAND(): Flag
    {
        if (!isset(self::$SWITZERLAND)) {
            self::$SWITZERLAND = new Flag('ch');
        }
        return self::$SWITZERLAND;
    }
    public static function CHILE(): Flag
    {
        if (!isset(self::$CHILE)) {
            self::$CHILE = new Flag('cl');
        }
        return self::$CHILE;
    }
    public static function CHINA(): Flag
    {
        if (!isset(self::$CHINA)) {
            self::$CHINA = new Flag('cn');
        }
        return self::$CHINA;
    }
    public static function CTED_IVOIRE(): Flag
    {
        if (!isset(self::$CTED_IVOIRE)) {
            self::$CTED_IVOIRE = new Flag('ci');
        }
        return self::$CTED_IVOIRE;
    }
    public static function CAMEROON(): Flag
    {
        if (!isset(self::$CAMEROON)) {
            self::$CAMEROON = new Flag('cm');
        }
        return self::$CAMEROON;
    }
    public static function DEMOCRATIC_REPUBLICOFTHE_CONGO(): Flag
    {
        if (!isset(self::$DEMOCRATIC_REPUBLICOFTHE_CONGO)) {
            self::$DEMOCRATIC_REPUBLICOFTHE_CONGO = new Flag('cd');
        }
        return self::$DEMOCRATIC_REPUBLICOFTHE_CONGO;
    }
    public static function REPUBLICOFTHE_CONGO(): Flag
    {
        if (!isset(self::$REPUBLICOFTHE_CONGO)) {
            self::$REPUBLICOFTHE_CONGO = new Flag('cg');
        }
        return self::$REPUBLICOFTHE_CONGO;
    }
    public static function COLOMBIA(): Flag
    {
        if (!isset(self::$COLOMBIA)) {
            self::$COLOMBIA = new Flag('co');
        }
        return self::$COLOMBIA;
    }
    public static function COMOROS(): Flag
    {
        if (!isset(self::$COMOROS)) {
            self::$COMOROS = new Flag('km');
        }
        return self::$COMOROS;
    }
    public static function CAPE_VERDE(): Flag
    {
        if (!isset(self::$CAPE_VERDE)) {
            self::$CAPE_VERDE = new Flag('cv');
        }
        return self::$CAPE_VERDE;
    }
    public static function COSTA_RICA(): Flag
    {
        if (!isset(self::$COSTA_RICA)) {
            self::$COSTA_RICA = new Flag('cr');
        }
        return self::$COSTA_RICA;
    }
    public static function CUBA(): Flag
    {
        if (!isset(self::$CUBA)) {
            self::$CUBA = new Flag('cu');
        }
        return self::$CUBA;
    }
    public static function CYPRUS(): Flag
    {
        if (!isset(self::$CYPRUS)) {
            self::$CYPRUS = new Flag('cy');
        }
        return self::$CYPRUS;
    }
    public static function CZECH_REPUBLIC(): Flag
    {
        if (!isset(self::$CZECH_REPUBLIC)) {
            self::$CZECH_REPUBLIC = new Flag('cz');
        }
        return self::$CZECH_REPUBLIC;
    }
    public static function GERMANY(): Flag
    {
        if (!isset(self::$GERMANY)) {
            self::$GERMANY = new Flag('de');
        }
        return self::$GERMANY;
    }
    public static function DJIBOUTI(): Flag
    {
        if (!isset(self::$DJIBOUTI)) {
            self::$DJIBOUTI = new Flag('dj');
        }
        return self::$DJIBOUTI;
    }
    public static function DOMINICA(): Flag
    {
        if (!isset(self::$DOMINICA)) {
            self::$DOMINICA = new Flag('dm');
        }
        return self::$DOMINICA;
    }
    public static function DENMARK(): Flag
    {
        if (!isset(self::$DENMARK)) {
            self::$DENMARK = new Flag('dk');
        }
        return self::$DENMARK;
    }
    public static function DOMINICAN_REPUBLIC(): Flag
    {
        if (!isset(self::$DOMINICAN_REPUBLIC)) {
            self::$DOMINICAN_REPUBLIC = new Flag('do');
        }
        return self::$DOMINICAN_REPUBLIC;
    }
    public static function ALGERIA(): Flag
    {
        if (!isset(self::$ALGERIA)) {
            self::$ALGERIA = new Flag('dz');
        }
        return self::$ALGERIA;
    }
    public static function ECUADOR(): Flag
    {
        if (!isset(self::$ECUADOR)) {
            self::$ECUADOR = new Flag('ec');
        }
        return self::$ECUADOR;
    }
    public static function EGYPT(): Flag
    {
        if (!isset(self::$EGYPT)) {
            self::$EGYPT = new Flag('eg');
        }
        return self::$EGYPT;
    }
    public static function ERITREA(): Flag
    {
        if (!isset(self::$ERITREA)) {
            self::$ERITREA = new Flag('er');
        }
        return self::$ERITREA;
    }
    public static function SPAIN(): Flag
    {
        if (!isset(self::$SPAIN)) {
            self::$SPAIN = new Flag('es');
        }
        return self::$SPAIN;
    }
    public static function ESTONIA(): Flag
    {
        if (!isset(self::$ESTONIA)) {
            self::$ESTONIA = new Flag('ee');
        }
        return self::$ESTONIA;
    }
    public static function ETHIOPIA(): Flag
    {
        if (!isset(self::$ETHIOPIA)) {
            self::$ETHIOPIA = new Flag('et');
        }
        return self::$ETHIOPIA;
    }
    public static function FINLAND(): Flag
    {
        if (!isset(self::$FINLAND)) {
            self::$FINLAND = new Flag('fi');
        }
        return self::$FINLAND;
    }
    public static function FIJI(): Flag
    {
        if (!isset(self::$FIJI)) {
            self::$FIJI = new Flag('fj');
        }
        return self::$FIJI;
    }
    public static function FRANCE(): Flag
    {
        if (!isset(self::$FRANCE)) {
            self::$FRANCE = new Flag('fr');
        }
        return self::$FRANCE;
    }
    public static function MICRONESIA_FEDERATED_STATESOF(): Flag
    {
        if (!isset(self::$MICRONESIA_FEDERATED_STATESOF)) {
            self::$MICRONESIA_FEDERATED_STATESOF = new Flag('fm');
        }
        return self::$MICRONESIA_FEDERATED_STATESOF;
    }
    public static function GABON(): Flag
    {
        if (!isset(self::$GABON)) {
            self::$GABON = new Flag('ga');
        }
        return self::$GABON;
    }
    public static function UNITED_KINGDOM(): Flag
    {
        if (!isset(self::$UNITED_KINGDOM)) {
            self::$UNITED_KINGDOM = new Flag('gb');
        }
        return self::$UNITED_KINGDOM;
    }
    public static function GEORGIA(): Flag
    {
        if (!isset(self::$GEORGIA)) {
            self::$GEORGIA = new Flag('ge');
        }
        return self::$GEORGIA;
    }
    public static function GHANA(): Flag
    {
        if (!isset(self::$GHANA)) {
            self::$GHANA = new Flag('gh');
        }
        return self::$GHANA;
    }
    public static function GUINEA(): Flag
    {
        if (!isset(self::$GUINEA)) {
            self::$GUINEA = new Flag('gn');
        }
        return self::$GUINEA;
    }
    public static function GAMBIA(): Flag
    {
        if (!isset(self::$GAMBIA)) {
            self::$GAMBIA = new Flag('gm');
        }
        return self::$GAMBIA;
    }
    public static function GUINEA_BISSAU(): Flag
    {
        if (!isset(self::$GUINEA_BISSAU)) {
            self::$GUINEA_BISSAU = new Flag('gw');
        }
        return self::$GUINEA_BISSAU;
    }
    public static function EQUATORIAL_GUINEA(): Flag
    {
        if (!isset(self::$EQUATORIAL_GUINEA)) {
            self::$EQUATORIAL_GUINEA = new Flag('gq');
        }
        return self::$EQUATORIAL_GUINEA;
    }
    public static function GREECE(): Flag
    {
        if (!isset(self::$GREECE)) {
            self::$GREECE = new Flag('gr');
        }
        return self::$GREECE;
    }
    public static function GRENADA(): Flag
    {
        if (!isset(self::$GRENADA)) {
            self::$GRENADA = new Flag('gd');
        }
        return self::$GRENADA;
    }
    public static function GUATEMALA(): Flag
    {
        if (!isset(self::$GUATEMALA)) {
            self::$GUATEMALA = new Flag('gt');
        }
        return self::$GUATEMALA;
    }
    public static function GUYANA(): Flag
    {
        if (!isset(self::$GUYANA)) {
            self::$GUYANA = new Flag('gy');
        }
        return self::$GUYANA;
    }
    public static function HONDURAS(): Flag
    {
        if (!isset(self::$HONDURAS)) {
            self::$HONDURAS = new Flag('hn');
        }
        return self::$HONDURAS;
    }
    public static function CROATIA(): Flag
    {
        if (!isset(self::$CROATIA)) {
            self::$CROATIA = new Flag('hr');
        }
        return self::$CROATIA;
    }
    public static function HAITI(): Flag
    {
        if (!isset(self::$HAITI)) {
            self::$HAITI = new Flag('ht');
        }
        return self::$HAITI;
    }
    public static function HUNGARY(): Flag
    {
        if (!isset(self::$HUNGARY)) {
            self::$HUNGARY = new Flag('hu');
        }
        return self::$HUNGARY;
    }
    public static function INDONESIA(): Flag
    {
        if (!isset(self::$INDONESIA)) {
            self::$INDONESIA = new Flag('id');
        }
        return self::$INDONESIA;
    }
    public static function INDIA(): Flag
    {
        if (!isset(self::$INDIA)) {
            self::$INDIA = new Flag('in');
        }
        return self::$INDIA;
    }
    public static function IRELAND(): Flag
    {
        if (!isset(self::$IRELAND)) {
            self::$IRELAND = new Flag('ie');
        }
        return self::$IRELAND;
    }
    public static function IRAN_ISLAMIC_REPUBLICOF(): Flag
    {
        if (!isset(self::$IRAN_ISLAMIC_REPUBLICOF)) {
            self::$IRAN_ISLAMIC_REPUBLICOF = new Flag('ir');
        }
        return self::$IRAN_ISLAMIC_REPUBLICOF;
    }
    public static function IRAQ(): Flag
    {
        if (!isset(self::$IRAQ)) {
            self::$IRAQ = new Flag('iq');
        }
        return self::$IRAQ;
    }
    public static function ICELAND(): Flag
    {
        if (!isset(self::$ICELAND)) {
            self::$ICELAND = new Flag('is');
        }
        return self::$ICELAND;
    }
    public static function ISRAEL(): Flag
    {
        if (!isset(self::$ISRAEL)) {
            self::$ISRAEL = new Flag('il');
        }
        return self::$ISRAEL;
    }
    public static function ITALY(): Flag
    {
        if (!isset(self::$ITALY)) {
            self::$ITALY = new Flag('it');
        }
        return self::$ITALY;
    }
    public static function JAMAICA(): Flag
    {
        if (!isset(self::$JAMAICA)) {
            self::$JAMAICA = new Flag('jm');
        }
        return self::$JAMAICA;
    }
    public static function JORDAN(): Flag
    {
        if (!isset(self::$JORDAN)) {
            self::$JORDAN = new Flag('jo');
        }
        return self::$JORDAN;
    }
    public static function JAPAN(): Flag
    {
        if (!isset(self::$JAPAN)) {
            self::$JAPAN = new Flag('jp');
        }
        return self::$JAPAN;
    }
    public static function KAZAKHSTAN(): Flag
    {
        if (!isset(self::$KAZAKHSTAN)) {
            self::$KAZAKHSTAN = new Flag('kz');
        }
        return self::$KAZAKHSTAN;
    }
    public static function KENYA(): Flag
    {
        if (!isset(self::$KENYA)) {
            self::$KENYA = new Flag('ke');
        }
        return self::$KENYA;
    }
    public static function KYRGYZSTAN(): Flag
    {
        if (!isset(self::$KYRGYZSTAN)) {
            self::$KYRGYZSTAN = new Flag('kg');
        }
        return self::$KYRGYZSTAN;
    }
    public static function CAMBODIA(): Flag
    {
        if (!isset(self::$CAMBODIA)) {
            self::$CAMBODIA = new Flag('kh');
        }
        return self::$CAMBODIA;
    }
    public static function KIRIBATI(): Flag
    {
        if (!isset(self::$KIRIBATI)) {
            self::$KIRIBATI = new Flag('ki');
        }
        return self::$KIRIBATI;
    }
    public static function SAINT_KITTSAND_NEVIS(): Flag
    {
        if (!isset(self::$SAINT_KITTSAND_NEVIS)) {
            self::$SAINT_KITTSAND_NEVIS = new Flag('kn');
        }
        return self::$SAINT_KITTSAND_NEVIS;
    }
    public static function SOUTH_KOREA(): Flag
    {
        if (!isset(self::$SOUTH_KOREA)) {
            self::$SOUTH_KOREA = new Flag('kr');
        }
        return self::$SOUTH_KOREA;
    }
    public static function KUWAIT(): Flag
    {
        if (!isset(self::$KUWAIT)) {
            self::$KUWAIT = new Flag('kw');
        }
        return self::$KUWAIT;
    }
    public static function LAO_PEOPLES_DEMOCRATIC_REPUBLIC(): Flag
    {
        if (!isset(self::$LAO_PEOPLES_DEMOCRATIC_REPUBLIC)) {
            self::$LAO_PEOPLES_DEMOCRATIC_REPUBLIC = new Flag('la');
        }
        return self::$LAO_PEOPLES_DEMOCRATIC_REPUBLIC;
    }
    public static function LEBANON(): Flag
    {
        if (!isset(self::$LEBANON)) {
            self::$LEBANON = new Flag('lb');
        }
        return self::$LEBANON;
    }
    public static function LIBERIA(): Flag
    {
        if (!isset(self::$LIBERIA)) {
            self::$LIBERIA = new Flag('lr');
        }
        return self::$LIBERIA;
    }
    public static function LIBYA(): Flag
    {
        if (!isset(self::$LIBYA)) {
            self::$LIBYA = new Flag('ly');
        }
        return self::$LIBYA;
    }
    public static function SAINT_LUCIA(): Flag
    {
        if (!isset(self::$SAINT_LUCIA)) {
            self::$SAINT_LUCIA = new Flag('lc');
        }
        return self::$SAINT_LUCIA;
    }
    public static function LIECHTENSTEIN(): Flag
    {
        if (!isset(self::$LIECHTENSTEIN)) {
            self::$LIECHTENSTEIN = new Flag('li');
        }
        return self::$LIECHTENSTEIN;
    }
    public static function SRI_LANKA(): Flag
    {
        if (!isset(self::$SRI_LANKA)) {
            self::$SRI_LANKA = new Flag('lk');
        }
        return self::$SRI_LANKA;
    }
    public static function LESOTHO(): Flag
    {
        if (!isset(self::$LESOTHO)) {
            self::$LESOTHO = new Flag('ls');
        }
        return self::$LESOTHO;
    }
    public static function LITHUANIA(): Flag
    {
        if (!isset(self::$LITHUANIA)) {
            self::$LITHUANIA = new Flag('lt');
        }
        return self::$LITHUANIA;
    }
    public static function LUXEMBOURG(): Flag
    {
        if (!isset(self::$LUXEMBOURG)) {
            self::$LUXEMBOURG = new Flag('lu');
        }
        return self::$LUXEMBOURG;
    }
    public static function LATVIA(): Flag
    {
        if (!isset(self::$LATVIA)) {
            self::$LATVIA = new Flag('lv');
        }
        return self::$LATVIA;
    }
    public static function MOROCCO(): Flag
    {
        if (!isset(self::$MOROCCO)) {
            self::$MOROCCO = new Flag('ma');
        }
        return self::$MOROCCO;
    }
    public static function MONACO(): Flag
    {
        if (!isset(self::$MONACO)) {
            self::$MONACO = new Flag('mc');
        }
        return self::$MONACO;
    }
    public static function MOLDOVA(): Flag
    {
        if (!isset(self::$MOLDOVA)) {
            self::$MOLDOVA = new Flag('md');
        }
        return self::$MOLDOVA;
    }
    public static function MADAGASCAR(): Flag
    {
        if (!isset(self::$MADAGASCAR)) {
            self::$MADAGASCAR = new Flag('mg');
        }
        return self::$MADAGASCAR;
    }
    public static function MALDIVES(): Flag
    {
        if (!isset(self::$MALDIVES)) {
            self::$MALDIVES = new Flag('mv');
        }
        return self::$MALDIVES;
    }
    public static function MEXICO(): Flag
    {
        if (!isset(self::$MEXICO)) {
            self::$MEXICO = new Flag('mx');
        }
        return self::$MEXICO;
    }
    public static function MARSHALL_ISLANDS(): Flag
    {
        if (!isset(self::$MARSHALL_ISLANDS)) {
            self::$MARSHALL_ISLANDS = new Flag('mh');
        }
        return self::$MARSHALL_ISLANDS;
    }
    public static function NORTH_MACEDONIA(): Flag
    {
        if (!isset(self::$NORTH_MACEDONIA)) {
            self::$NORTH_MACEDONIA = new Flag('mk');
        }
        return self::$NORTH_MACEDONIA;
    }
    public static function MALI(): Flag
    {
        if (!isset(self::$MALI)) {
            self::$MALI = new Flag('ml');
        }
        return self::$MALI;
    }
    public static function MALTA(): Flag
    {
        if (!isset(self::$MALTA)) {
            self::$MALTA = new Flag('mt');
        }
        return self::$MALTA;
    }
    public static function MYANMAR(): Flag
    {
        if (!isset(self::$MYANMAR)) {
            self::$MYANMAR = new Flag('mm');
        }
        return self::$MYANMAR;
    }
    public static function MONTENEGRO(): Flag
    {
        if (!isset(self::$MONTENEGRO)) {
            self::$MONTENEGRO = new Flag('me');
        }
        return self::$MONTENEGRO;
    }
    public static function MONGOLIA(): Flag
    {
        if (!isset(self::$MONGOLIA)) {
            self::$MONGOLIA = new Flag('mn');
        }
        return self::$MONGOLIA;
    }
    public static function MOZAMBIQUE(): Flag
    {
        if (!isset(self::$MOZAMBIQUE)) {
            self::$MOZAMBIQUE = new Flag('mz');
        }
        return self::$MOZAMBIQUE;
    }
    public static function MAURITANIA(): Flag
    {
        if (!isset(self::$MAURITANIA)) {
            self::$MAURITANIA = new Flag('mr');
        }
        return self::$MAURITANIA;
    }
    public static function MAURITIUS(): Flag
    {
        if (!isset(self::$MAURITIUS)) {
            self::$MAURITIUS = new Flag('mu');
        }
        return self::$MAURITIUS;
    }
    public static function MALAWI(): Flag
    {
        if (!isset(self::$MALAWI)) {
            self::$MALAWI = new Flag('mw');
        }
        return self::$MALAWI;
    }
    public static function MALAYSIA(): Flag
    {
        if (!isset(self::$MALAYSIA)) {
            self::$MALAYSIA = new Flag('my');
        }
        return self::$MALAYSIA;
    }
    public static function NAMIBIA(): Flag
    {
        if (!isset(self::$NAMIBIA)) {
            self::$NAMIBIA = new Flag('na');
        }
        return self::$NAMIBIA;
    }
    public static function NIGER(): Flag
    {
        if (!isset(self::$NIGER)) {
            self::$NIGER = new Flag('ne');
        }
        return self::$NIGER;
    }
    public static function NIGERIA(): Flag
    {
        if (!isset(self::$NIGERIA)) {
            self::$NIGERIA = new Flag('ng');
        }
        return self::$NIGERIA;
    }
    public static function NICARAGUA(): Flag
    {
        if (!isset(self::$NICARAGUA)) {
            self::$NICARAGUA = new Flag('ni');
        }
        return self::$NICARAGUA;
    }
    public static function NETHERLANDS(): Flag
    {
        if (!isset(self::$NETHERLANDS)) {
            self::$NETHERLANDS = new Flag('nl');
        }
        return self::$NETHERLANDS;
    }
    public static function NORWAY(): Flag
    {
        if (!isset(self::$NORWAY)) {
            self::$NORWAY = new Flag('no');
        }
        return self::$NORWAY;
    }
    public static function NEPAL(): Flag
    {
        if (!isset(self::$NEPAL)) {
            self::$NEPAL = new Flag('np');
        }
        return self::$NEPAL;
    }
    public static function NAURU(): Flag
    {
        if (!isset(self::$NAURU)) {
            self::$NAURU = new Flag('nr');
        }
        return self::$NAURU;
    }
    public static function NEW_ZEALAND(): Flag
    {
        if (!isset(self::$NEW_ZEALAND)) {
            self::$NEW_ZEALAND = new Flag('nz');
        }
        return self::$NEW_ZEALAND;
    }
    public static function OMAN(): Flag
    {
        if (!isset(self::$OMAN)) {
            self::$OMAN = new Flag('om');
        }
        return self::$OMAN;
    }
    public static function PAKISTAN(): Flag
    {
        if (!isset(self::$PAKISTAN)) {
            self::$PAKISTAN = new Flag('pk');
        }
        return self::$PAKISTAN;
    }
    public static function PANAMA(): Flag
    {
        if (!isset(self::$PANAMA)) {
            self::$PANAMA = new Flag('pa');
        }
        return self::$PANAMA;
    }
    public static function PERU(): Flag
    {
        if (!isset(self::$PERU)) {
            self::$PERU = new Flag('pe');
        }
        return self::$PERU;
    }
    public static function PHILIPPINES(): Flag
    {
        if (!isset(self::$PHILIPPINES)) {
            self::$PHILIPPINES = new Flag('ph');
        }
        return self::$PHILIPPINES;
    }
    public static function PALAU(): Flag
    {
        if (!isset(self::$PALAU)) {
            self::$PALAU = new Flag('pw');
        }
        return self::$PALAU;
    }
    public static function PAPUA_NEW_GUINEA(): Flag
    {
        if (!isset(self::$PAPUA_NEW_GUINEA)) {
            self::$PAPUA_NEW_GUINEA = new Flag('pg');
        }
        return self::$PAPUA_NEW_GUINEA;
    }
    public static function POLAND(): Flag
    {
        if (!isset(self::$POLAND)) {
            self::$POLAND = new Flag('pl');
        }
        return self::$POLAND;
    }
    public static function NORTH_KOREA(): Flag
    {
        if (!isset(self::$NORTH_KOREA)) {
            self::$NORTH_KOREA = new Flag('kp');
        }
        return self::$NORTH_KOREA;
    }
    public static function PORTUGAL(): Flag
    {
        if (!isset(self::$PORTUGAL)) {
            self::$PORTUGAL = new Flag('pt');
        }
        return self::$PORTUGAL;
    }
    public static function PARAGUAY(): Flag
    {
        if (!isset(self::$PARAGUAY)) {
            self::$PARAGUAY = new Flag('py');
        }
        return self::$PARAGUAY;
    }
    public static function QATAR(): Flag
    {
        if (!isset(self::$QATAR)) {
            self::$QATAR = new Flag('qa');
        }
        return self::$QATAR;
    }
    public static function ROMANIA(): Flag
    {
        if (!isset(self::$ROMANIA)) {
            self::$ROMANIA = new Flag('ro');
        }
        return self::$ROMANIA;
    }
    public static function RUSSIA(): Flag
    {
        if (!isset(self::$RUSSIA)) {
            self::$RUSSIA = new Flag('ru');
        }
        return self::$RUSSIA;
    }
    public static function RWANDA(): Flag
    {
        if (!isset(self::$RWANDA)) {
            self::$RWANDA = new Flag('rw');
        }
        return self::$RWANDA;
    }
    public static function SAUDI_ARABIA(): Flag
    {
        if (!isset(self::$SAUDI_ARABIA)) {
            self::$SAUDI_ARABIA = new Flag('sa');
        }
        return self::$SAUDI_ARABIA;
    }
    public static function SUDAN(): Flag
    {
        if (!isset(self::$SUDAN)) {
            self::$SUDAN = new Flag('sd');
        }
        return self::$SUDAN;
    }
    public static function SENEGAL(): Flag
    {
        if (!isset(self::$SENEGAL)) {
            self::$SENEGAL = new Flag('sn');
        }
        return self::$SENEGAL;
    }
    public static function SINGAPORE(): Flag
    {
        if (!isset(self::$SINGAPORE)) {
            self::$SINGAPORE = new Flag('sg');
        }
        return self::$SINGAPORE;
    }
    public static function SOLOMON_ISLANDS(): Flag
    {
        if (!isset(self::$SOLOMON_ISLANDS)) {
            self::$SOLOMON_ISLANDS = new Flag('sb');
        }
        return self::$SOLOMON_ISLANDS;
    }
    public static function SIERRA_LEONE(): Flag
    {
        if (!isset(self::$SIERRA_LEONE)) {
            self::$SIERRA_LEONE = new Flag('sl');
        }
        return self::$SIERRA_LEONE;
    }
    public static function EL_SALVADOR(): Flag
    {
        if (!isset(self::$EL_SALVADOR)) {
            self::$EL_SALVADOR = new Flag('sv');
        }
        return self::$EL_SALVADOR;
    }
    public static function SAN_MARINO(): Flag
    {
        if (!isset(self::$SAN_MARINO)) {
            self::$SAN_MARINO = new Flag('sm');
        }
        return self::$SAN_MARINO;
    }
    public static function SOMALIA(): Flag
    {
        if (!isset(self::$SOMALIA)) {
            self::$SOMALIA = new Flag('so');
        }
        return self::$SOMALIA;
    }
    public static function SERBIA(): Flag
    {
        if (!isset(self::$SERBIA)) {
            self::$SERBIA = new Flag('rs');
        }
        return self::$SERBIA;
    }
    public static function SOUTH_SUDAN(): Flag
    {
        if (!isset(self::$SOUTH_SUDAN)) {
            self::$SOUTH_SUDAN = new Flag('ss');
        }
        return self::$SOUTH_SUDAN;
    }
    public static function SAO_TOMEAND_PRINCIPE(): Flag
    {
        if (!isset(self::$SAO_TOMEAND_PRINCIPE)) {
            self::$SAO_TOMEAND_PRINCIPE = new Flag('st');
        }
        return self::$SAO_TOMEAND_PRINCIPE;
    }
    public static function SURINAME(): Flag
    {
        if (!isset(self::$SURINAME)) {
            self::$SURINAME = new Flag('sr');
        }
        return self::$SURINAME;
    }
    public static function SLOVAKIA(): Flag
    {
        if (!isset(self::$SLOVAKIA)) {
            self::$SLOVAKIA = new Flag('sk');
        }
        return self::$SLOVAKIA;
    }
    public static function SLOVENIA(): Flag
    {
        if (!isset(self::$SLOVENIA)) {
            self::$SLOVENIA = new Flag('si');
        }
        return self::$SLOVENIA;
    }
    public static function SWEDEN(): Flag
    {
        if (!isset(self::$SWEDEN)) {
            self::$SWEDEN = new Flag('se');
        }
        return self::$SWEDEN;
    }
    public static function ESWATINI(): Flag
    {
        if (!isset(self::$ESWATINI)) {
            self::$ESWATINI = new Flag('sz');
        }
        return self::$ESWATINI;
    }
    public static function SEYCHELLES(): Flag
    {
        if (!isset(self::$SEYCHELLES)) {
            self::$SEYCHELLES = new Flag('sc');
        }
        return self::$SEYCHELLES;
    }
    public static function SYRIA(): Flag
    {
        if (!isset(self::$SYRIA)) {
            self::$SYRIA = new Flag('sy');
        }
        return self::$SYRIA;
    }
    public static function CHAD(): Flag
    {
        if (!isset(self::$CHAD)) {
            self::$CHAD = new Flag('td');
        }
        return self::$CHAD;
    }
    public static function TOGO(): Flag
    {
        if (!isset(self::$TOGO)) {
            self::$TOGO = new Flag('tg');
        }
        return self::$TOGO;
    }
    public static function THAILAND(): Flag
    {
        if (!isset(self::$THAILAND)) {
            self::$THAILAND = new Flag('th');
        }
        return self::$THAILAND;
    }
    public static function TAJIKISTAN(): Flag
    {
        if (!isset(self::$TAJIKISTAN)) {
            self::$TAJIKISTAN = new Flag('tj');
        }
        return self::$TAJIKISTAN;
    }
    public static function TURKMENISTAN(): Flag
    {
        if (!isset(self::$TURKMENISTAN)) {
            self::$TURKMENISTAN = new Flag('tm');
        }
        return self::$TURKMENISTAN;
    }
    public static function TIMOR_LESTE(): Flag
    {
        if (!isset(self::$TIMOR_LESTE)) {
            self::$TIMOR_LESTE = new Flag('tl');
        }
        return self::$TIMOR_LESTE;
    }
    public static function TONGA(): Flag
    {
        if (!isset(self::$TONGA)) {
            self::$TONGA = new Flag('to');
        }
        return self::$TONGA;
    }
    public static function TRINIDADAND_TOBAGO(): Flag
    {
        if (!isset(self::$TRINIDADAND_TOBAGO)) {
            self::$TRINIDADAND_TOBAGO = new Flag('tt');
        }
        return self::$TRINIDADAND_TOBAGO;
    }
    public static function TUNISIA(): Flag
    {
        if (!isset(self::$TUNISIA)) {
            self::$TUNISIA = new Flag('tn');
        }
        return self::$TUNISIA;
    }
    public static function TURKEY(): Flag
    {
        if (!isset(self::$TURKEY)) {
            self::$TURKEY = new Flag('tr');
        }
        return self::$TURKEY;
    }
    public static function TUVALU(): Flag
    {
        if (!isset(self::$TUVALU)) {
            self::$TUVALU = new Flag('tv');
        }
        return self::$TUVALU;
    }
    public static function TANZANIA(): Flag
    {
        if (!isset(self::$TANZANIA)) {
            self::$TANZANIA = new Flag('tz');
        }
        return self::$TANZANIA;
    }
    public static function UGANDA(): Flag
    {
        if (!isset(self::$UGANDA)) {
            self::$UGANDA = new Flag('ug');
        }
        return self::$UGANDA;
    }
    public static function UKRAINE(): Flag
    {
        if (!isset(self::$UKRAINE)) {
            self::$UKRAINE = new Flag('ua');
        }
        return self::$UKRAINE;
    }
    public static function URUGUAY(): Flag
    {
        if (!isset(self::$URUGUAY)) {
            self::$URUGUAY = new Flag('uy');
        }
        return self::$URUGUAY;
    }
    public static function UNITED_STATES(): Flag
    {
        if (!isset(self::$UNITED_STATES)) {
            self::$UNITED_STATES = new Flag('us');
        }
        return self::$UNITED_STATES;
    }
    public static function UZBEKISTAN(): Flag
    {
        if (!isset(self::$UZBEKISTAN)) {
            self::$UZBEKISTAN = new Flag('uz');
        }
        return self::$UZBEKISTAN;
    }
    public static function VATICAN_CITY(): Flag
    {
        if (!isset(self::$VATICAN_CITY)) {
            self::$VATICAN_CITY = new Flag('va');
        }
        return self::$VATICAN_CITY;
    }
    public static function SAINT_VINCENTANDTHE_GRENADINES(): Flag
    {
        if (!isset(self::$SAINT_VINCENTANDTHE_GRENADINES)) {
            self::$SAINT_VINCENTANDTHE_GRENADINES = new Flag('vc');
        }
        return self::$SAINT_VINCENTANDTHE_GRENADINES;
    }
    public static function VENEZUELA(): Flag
    {
        if (!isset(self::$VENEZUELA)) {
            self::$VENEZUELA = new Flag('ve');
        }
        return self::$VENEZUELA;
    }
    public static function VIETNAM(): Flag
    {
        if (!isset(self::$VIETNAM)) {
            self::$VIETNAM = new Flag('vn');
        }
        return self::$VIETNAM;
    }
    public static function VANUATU(): Flag
    {
        if (!isset(self::$VANUATU)) {
            self::$VANUATU = new Flag('vu');
        }
        return self::$VANUATU;
    }
    public static function SAMOA(): Flag
    {
        if (!isset(self::$SAMOA)) {
            self::$SAMOA = new Flag('ws');
        }
        return self::$SAMOA;
    }
    public static function YEMEN(): Flag
    {
        if (!isset(self::$YEMEN)) {
            self::$YEMEN = new Flag('ye');
        }
        return self::$YEMEN;
    }
    public static function SOUTH_AFRICA(): Flag
    {
        if (!isset(self::$SOUTH_AFRICA)) {
            self::$SOUTH_AFRICA = new Flag('za');
        }
        return self::$SOUTH_AFRICA;
    }
    public static function ZAMBIA(): Flag
    {
        if (!isset(self::$ZAMBIA)) {
            self::$ZAMBIA = new Flag('zm');
        }
        return self::$ZAMBIA;
    }
    public static function ZIMBABWE(): Flag
    {
        if (!isset(self::$ZIMBABWE)) {
            self::$ZIMBABWE = new Flag('zw');
        }
        return self::$ZIMBABWE;
    }
}