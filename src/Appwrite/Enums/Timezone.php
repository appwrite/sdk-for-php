<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class Timezone implements JsonSerializable, Stringable
{
    private static Timezone $AFRICAABIDJAN;
    private static Timezone $AFRICAACCRA;
    private static Timezone $AFRICAADDISABABA;
    private static Timezone $AFRICAALGIERS;
    private static Timezone $AFRICAASMARA;
    private static Timezone $AFRICABAMAKO;
    private static Timezone $AFRICABANGUI;
    private static Timezone $AFRICABANJUL;
    private static Timezone $AFRICABISSAU;
    private static Timezone $AFRICABLANTYRE;
    private static Timezone $AFRICABRAZZAVILLE;
    private static Timezone $AFRICABUJUMBURA;
    private static Timezone $AFRICACAIRO;
    private static Timezone $AFRICACASABLANCA;
    private static Timezone $AFRICACEUTA;
    private static Timezone $AFRICACONAKRY;
    private static Timezone $AFRICADAKAR;
    private static Timezone $AFRICADARESSALAAM;
    private static Timezone $AFRICADJIBOUTI;
    private static Timezone $AFRICADOUALA;
    private static Timezone $AFRICAELAAIUN;
    private static Timezone $AFRICAFREETOWN;
    private static Timezone $AFRICAGABORONE;
    private static Timezone $AFRICAHARARE;
    private static Timezone $AFRICAJOHANNESBURG;
    private static Timezone $AFRICAJUBA;
    private static Timezone $AFRICAKAMPALA;
    private static Timezone $AFRICAKHARTOUM;
    private static Timezone $AFRICAKIGALI;
    private static Timezone $AFRICAKINSHASA;
    private static Timezone $AFRICALAGOS;
    private static Timezone $AFRICALIBREVILLE;
    private static Timezone $AFRICALOME;
    private static Timezone $AFRICALUANDA;
    private static Timezone $AFRICALUBUMBASHI;
    private static Timezone $AFRICALUSAKA;
    private static Timezone $AFRICAMALABO;
    private static Timezone $AFRICAMAPUTO;
    private static Timezone $AFRICAMASERU;
    private static Timezone $AFRICAMBABANE;
    private static Timezone $AFRICAMOGADISHU;
    private static Timezone $AFRICAMONROVIA;
    private static Timezone $AFRICANAIROBI;
    private static Timezone $AFRICANDJAMENA;
    private static Timezone $AFRICANIAMEY;
    private static Timezone $AFRICANOUAKCHOTT;
    private static Timezone $AFRICAOUAGADOUGOU;
    private static Timezone $AFRICAPORTONOVO;
    private static Timezone $AFRICASAOTOME;
    private static Timezone $AFRICATRIPOLI;
    private static Timezone $AFRICATUNIS;
    private static Timezone $AFRICAWINDHOEK;
    private static Timezone $AMERICAADAK;
    private static Timezone $AMERICAANCHORAGE;
    private static Timezone $AMERICAANGUILLA;
    private static Timezone $AMERICAANTIGUA;
    private static Timezone $AMERICAARAGUAINA;
    private static Timezone $AMERICAARGENTINABUENOSAIRES;
    private static Timezone $AMERICAARGENTINACATAMARCA;
    private static Timezone $AMERICAARGENTINACORDOBA;
    private static Timezone $AMERICAARGENTINAJUJUY;
    private static Timezone $AMERICAARGENTINALARIOJA;
    private static Timezone $AMERICAARGENTINAMENDOZA;
    private static Timezone $AMERICAARGENTINARIOGALLEGOS;
    private static Timezone $AMERICAARGENTINASALTA;
    private static Timezone $AMERICAARGENTINASANJUAN;
    private static Timezone $AMERICAARGENTINASANLUIS;
    private static Timezone $AMERICAARGENTINATUCUMAN;
    private static Timezone $AMERICAARGENTINAUSHUAIA;
    private static Timezone $AMERICAARUBA;
    private static Timezone $AMERICAASUNCION;
    private static Timezone $AMERICAATIKOKAN;
    private static Timezone $AMERICABAHIA;
    private static Timezone $AMERICABAHIABANDERAS;
    private static Timezone $AMERICABARBADOS;
    private static Timezone $AMERICABELEM;
    private static Timezone $AMERICABELIZE;
    private static Timezone $AMERICABLANCSABLON;
    private static Timezone $AMERICABOAVISTA;
    private static Timezone $AMERICABOGOTA;
    private static Timezone $AMERICABOISE;
    private static Timezone $AMERICACAMBRIDGEBAY;
    private static Timezone $AMERICACAMPOGRANDE;
    private static Timezone $AMERICACANCUN;
    private static Timezone $AMERICACARACAS;
    private static Timezone $AMERICACAYENNE;
    private static Timezone $AMERICACAYMAN;
    private static Timezone $AMERICACHICAGO;
    private static Timezone $AMERICACHIHUAHUA;
    private static Timezone $AMERICACIUDADJUAREZ;
    private static Timezone $AMERICACOSTARICA;
    private static Timezone $AMERICACOYHAIQUE;
    private static Timezone $AMERICACRESTON;
    private static Timezone $AMERICACUIABA;
    private static Timezone $AMERICACURACAO;
    private static Timezone $AMERICADANMARKSHAVN;
    private static Timezone $AMERICADAWSON;
    private static Timezone $AMERICADAWSONCREEK;
    private static Timezone $AMERICADENVER;
    private static Timezone $AMERICADETROIT;
    private static Timezone $AMERICADOMINICA;
    private static Timezone $AMERICAEDMONTON;
    private static Timezone $AMERICAEIRUNEPE;
    private static Timezone $AMERICAELSALVADOR;
    private static Timezone $AMERICAFORTNELSON;
    private static Timezone $AMERICAFORTALEZA;
    private static Timezone $AMERICAGLACEBAY;
    private static Timezone $AMERICAGOOSEBAY;
    private static Timezone $AMERICAGRANDTURK;
    private static Timezone $AMERICAGRENADA;
    private static Timezone $AMERICAGUADELOUPE;
    private static Timezone $AMERICAGUATEMALA;
    private static Timezone $AMERICAGUAYAQUIL;
    private static Timezone $AMERICAGUYANA;
    private static Timezone $AMERICAHALIFAX;
    private static Timezone $AMERICAHAVANA;
    private static Timezone $AMERICAHERMOSILLO;
    private static Timezone $AMERICAINDIANAINDIANAPOLIS;
    private static Timezone $AMERICAINDIANAKNOX;
    private static Timezone $AMERICAINDIANAMARENGO;
    private static Timezone $AMERICAINDIANAPETERSBURG;
    private static Timezone $AMERICAINDIANATELLCITY;
    private static Timezone $AMERICAINDIANAVEVAY;
    private static Timezone $AMERICAINDIANAVINCENNES;
    private static Timezone $AMERICAINDIANAWINAMAC;
    private static Timezone $AMERICAINUVIK;
    private static Timezone $AMERICAIQALUIT;
    private static Timezone $AMERICAJAMAICA;
    private static Timezone $AMERICAJUNEAU;
    private static Timezone $AMERICAKENTUCKYLOUISVILLE;
    private static Timezone $AMERICAKENTUCKYMONTICELLO;
    private static Timezone $AMERICAKRALENDIJK;
    private static Timezone $AMERICALAPAZ;
    private static Timezone $AMERICALIMA;
    private static Timezone $AMERICALOSANGELES;
    private static Timezone $AMERICALOWERPRINCES;
    private static Timezone $AMERICAMACEIO;
    private static Timezone $AMERICAMANAGUA;
    private static Timezone $AMERICAMANAUS;
    private static Timezone $AMERICAMARIGOT;
    private static Timezone $AMERICAMARTINIQUE;
    private static Timezone $AMERICAMATAMOROS;
    private static Timezone $AMERICAMAZATLAN;
    private static Timezone $AMERICAMENOMINEE;
    private static Timezone $AMERICAMERIDA;
    private static Timezone $AMERICAMETLAKATLA;
    private static Timezone $AMERICAMEXICOCITY;
    private static Timezone $AMERICAMIQUELON;
    private static Timezone $AMERICAMONCTON;
    private static Timezone $AMERICAMONTERREY;
    private static Timezone $AMERICAMONTEVIDEO;
    private static Timezone $AMERICAMONTSERRAT;
    private static Timezone $AMERICANASSAU;
    private static Timezone $AMERICANEWYORK;
    private static Timezone $AMERICANOME;
    private static Timezone $AMERICANORONHA;
    private static Timezone $AMERICANORTHDAKOTABEULAH;
    private static Timezone $AMERICANORTHDAKOTACENTER;
    private static Timezone $AMERICANORTHDAKOTANEWSALEM;
    private static Timezone $AMERICANUUK;
    private static Timezone $AMERICAOJINAGA;
    private static Timezone $AMERICAPANAMA;
    private static Timezone $AMERICAPARAMARIBO;
    private static Timezone $AMERICAPHOENIX;
    private static Timezone $AMERICAPORTAUPRINCE;
    private static Timezone $AMERICAPORTOFSPAIN;
    private static Timezone $AMERICAPORTOVELHO;
    private static Timezone $AMERICAPUERTORICO;
    private static Timezone $AMERICAPUNTAARENAS;
    private static Timezone $AMERICARANKININLET;
    private static Timezone $AMERICARECIFE;
    private static Timezone $AMERICAREGINA;
    private static Timezone $AMERICARESOLUTE;
    private static Timezone $AMERICARIOBRANCO;
    private static Timezone $AMERICASANTAREM;
    private static Timezone $AMERICASANTIAGO;
    private static Timezone $AMERICASANTODOMINGO;
    private static Timezone $AMERICASAOPAULO;
    private static Timezone $AMERICASCORESBYSUND;
    private static Timezone $AMERICASITKA;
    private static Timezone $AMERICASTBARTHELEMY;
    private static Timezone $AMERICASTJOHNS;
    private static Timezone $AMERICASTKITTS;
    private static Timezone $AMERICASTLUCIA;
    private static Timezone $AMERICASTTHOMAS;
    private static Timezone $AMERICASTVINCENT;
    private static Timezone $AMERICASWIFTCURRENT;
    private static Timezone $AMERICATEGUCIGALPA;
    private static Timezone $AMERICATHULE;
    private static Timezone $AMERICATIJUANA;
    private static Timezone $AMERICATORONTO;
    private static Timezone $AMERICATORTOLA;
    private static Timezone $AMERICAVANCOUVER;
    private static Timezone $AMERICAWHITEHORSE;
    private static Timezone $AMERICAWINNIPEG;
    private static Timezone $AMERICAYAKUTAT;
    private static Timezone $ANTARCTICACASEY;
    private static Timezone $ANTARCTICADAVIS;
    private static Timezone $ANTARCTICADUMONTDURVILLE;
    private static Timezone $ANTARCTICAMACQUARIE;
    private static Timezone $ANTARCTICAMAWSON;
    private static Timezone $ANTARCTICAMCMURDO;
    private static Timezone $ANTARCTICAPALMER;
    private static Timezone $ANTARCTICAROTHERA;
    private static Timezone $ANTARCTICASYOWA;
    private static Timezone $ANTARCTICATROLL;
    private static Timezone $ANTARCTICAVOSTOK;
    private static Timezone $ARCTICLONGYEARBYEN;
    private static Timezone $ASIAADEN;
    private static Timezone $ASIAALMATY;
    private static Timezone $ASIAAMMAN;
    private static Timezone $ASIAANADYR;
    private static Timezone $ASIAAQTAU;
    private static Timezone $ASIAAQTOBE;
    private static Timezone $ASIAASHGABAT;
    private static Timezone $ASIAATYRAU;
    private static Timezone $ASIABAGHDAD;
    private static Timezone $ASIABAHRAIN;
    private static Timezone $ASIABAKU;
    private static Timezone $ASIABANGKOK;
    private static Timezone $ASIABARNAUL;
    private static Timezone $ASIABEIRUT;
    private static Timezone $ASIABISHKEK;
    private static Timezone $ASIABRUNEI;
    private static Timezone $ASIACHITA;
    private static Timezone $ASIACOLOMBO;
    private static Timezone $ASIADAMASCUS;
    private static Timezone $ASIADHAKA;
    private static Timezone $ASIADILI;
    private static Timezone $ASIADUBAI;
    private static Timezone $ASIADUSHANBE;
    private static Timezone $ASIAFAMAGUSTA;
    private static Timezone $ASIAGAZA;
    private static Timezone $ASIAHEBRON;
    private static Timezone $ASIAHOCHIMINH;
    private static Timezone $ASIAHONGKONG;
    private static Timezone $ASIAHOVD;
    private static Timezone $ASIAIRKUTSK;
    private static Timezone $ASIAJAKARTA;
    private static Timezone $ASIAJAYAPURA;
    private static Timezone $ASIAJERUSALEM;
    private static Timezone $ASIAKABUL;
    private static Timezone $ASIAKAMCHATKA;
    private static Timezone $ASIAKARACHI;
    private static Timezone $ASIAKATHMANDU;
    private static Timezone $ASIAKHANDYGA;
    private static Timezone $ASIAKOLKATA;
    private static Timezone $ASIAKRASNOYARSK;
    private static Timezone $ASIAKUALALUMPUR;
    private static Timezone $ASIAKUCHING;
    private static Timezone $ASIAKUWAIT;
    private static Timezone $ASIAMACAU;
    private static Timezone $ASIAMAGADAN;
    private static Timezone $ASIAMAKASSAR;
    private static Timezone $ASIAMANILA;
    private static Timezone $ASIAMUSCAT;
    private static Timezone $ASIANICOSIA;
    private static Timezone $ASIANOVOKUZNETSK;
    private static Timezone $ASIANOVOSIBIRSK;
    private static Timezone $ASIAOMSK;
    private static Timezone $ASIAORAL;
    private static Timezone $ASIAPHNOMPENH;
    private static Timezone $ASIAPONTIANAK;
    private static Timezone $ASIAPYONGYANG;
    private static Timezone $ASIAQATAR;
    private static Timezone $ASIAQOSTANAY;
    private static Timezone $ASIAQYZYLORDA;
    private static Timezone $ASIARIYADH;
    private static Timezone $ASIASAKHALIN;
    private static Timezone $ASIASAMARKAND;
    private static Timezone $ASIASEOUL;
    private static Timezone $ASIASHANGHAI;
    private static Timezone $ASIASINGAPORE;
    private static Timezone $ASIASREDNEKOLYMSK;
    private static Timezone $ASIATAIPEI;
    private static Timezone $ASIATASHKENT;
    private static Timezone $ASIATBILISI;
    private static Timezone $ASIATEHRAN;
    private static Timezone $ASIATHIMPHU;
    private static Timezone $ASIATOKYO;
    private static Timezone $ASIATOMSK;
    private static Timezone $ASIAULAANBAATAR;
    private static Timezone $ASIAURUMQI;
    private static Timezone $ASIAUSTNERA;
    private static Timezone $ASIAVIENTIANE;
    private static Timezone $ASIAVLADIVOSTOK;
    private static Timezone $ASIAYAKUTSK;
    private static Timezone $ASIAYANGON;
    private static Timezone $ASIAYEKATERINBURG;
    private static Timezone $ASIAYEREVAN;
    private static Timezone $ATLANTICAZORES;
    private static Timezone $ATLANTICBERMUDA;
    private static Timezone $ATLANTICCANARY;
    private static Timezone $ATLANTICCAPEVERDE;
    private static Timezone $ATLANTICFAROE;
    private static Timezone $ATLANTICMADEIRA;
    private static Timezone $ATLANTICREYKJAVIK;
    private static Timezone $ATLANTICSOUTHGEORGIA;
    private static Timezone $ATLANTICSTHELENA;
    private static Timezone $ATLANTICSTANLEY;
    private static Timezone $AUSTRALIAADELAIDE;
    private static Timezone $AUSTRALIABRISBANE;
    private static Timezone $AUSTRALIABROKENHILL;
    private static Timezone $AUSTRALIADARWIN;
    private static Timezone $AUSTRALIAEUCLA;
    private static Timezone $AUSTRALIAHOBART;
    private static Timezone $AUSTRALIALINDEMAN;
    private static Timezone $AUSTRALIALORDHOWE;
    private static Timezone $AUSTRALIAMELBOURNE;
    private static Timezone $AUSTRALIAPERTH;
    private static Timezone $AUSTRALIASYDNEY;
    private static Timezone $EUROPEAMSTERDAM;
    private static Timezone $EUROPEANDORRA;
    private static Timezone $EUROPEASTRAKHAN;
    private static Timezone $EUROPEATHENS;
    private static Timezone $EUROPEBELGRADE;
    private static Timezone $EUROPEBERLIN;
    private static Timezone $EUROPEBRATISLAVA;
    private static Timezone $EUROPEBRUSSELS;
    private static Timezone $EUROPEBUCHAREST;
    private static Timezone $EUROPEBUDAPEST;
    private static Timezone $EUROPEBUSINGEN;
    private static Timezone $EUROPECHISINAU;
    private static Timezone $EUROPECOPENHAGEN;
    private static Timezone $EUROPEDUBLIN;
    private static Timezone $EUROPEGIBRALTAR;
    private static Timezone $EUROPEGUERNSEY;
    private static Timezone $EUROPEHELSINKI;
    private static Timezone $EUROPEISLEOFMAN;
    private static Timezone $EUROPEISTANBUL;
    private static Timezone $EUROPEJERSEY;
    private static Timezone $EUROPEKALININGRAD;
    private static Timezone $EUROPEKIROV;
    private static Timezone $EUROPEKYIV;
    private static Timezone $EUROPELISBON;
    private static Timezone $EUROPELJUBLJANA;
    private static Timezone $EUROPELONDON;
    private static Timezone $EUROPELUXEMBOURG;
    private static Timezone $EUROPEMADRID;
    private static Timezone $EUROPEMALTA;
    private static Timezone $EUROPEMARIEHAMN;
    private static Timezone $EUROPEMINSK;
    private static Timezone $EUROPEMONACO;
    private static Timezone $EUROPEMOSCOW;
    private static Timezone $EUROPEOSLO;
    private static Timezone $EUROPEPARIS;
    private static Timezone $EUROPEPODGORICA;
    private static Timezone $EUROPEPRAGUE;
    private static Timezone $EUROPERIGA;
    private static Timezone $EUROPEROME;
    private static Timezone $EUROPESAMARA;
    private static Timezone $EUROPESANMARINO;
    private static Timezone $EUROPESARAJEVO;
    private static Timezone $EUROPESARATOV;
    private static Timezone $EUROPESIMFEROPOL;
    private static Timezone $EUROPESKOPJE;
    private static Timezone $EUROPESOFIA;
    private static Timezone $EUROPESTOCKHOLM;
    private static Timezone $EUROPETALLINN;
    private static Timezone $EUROPETIRANE;
    private static Timezone $EUROPEULYANOVSK;
    private static Timezone $EUROPEVADUZ;
    private static Timezone $EUROPEVATICAN;
    private static Timezone $EUROPEVIENNA;
    private static Timezone $EUROPEVILNIUS;
    private static Timezone $EUROPEVOLGOGRAD;
    private static Timezone $EUROPEWARSAW;
    private static Timezone $EUROPEZAGREB;
    private static Timezone $EUROPEZURICH;
    private static Timezone $INDIANANTANANARIVO;
    private static Timezone $INDIANCHAGOS;
    private static Timezone $INDIANCHRISTMAS;
    private static Timezone $INDIANCOCOS;
    private static Timezone $INDIANCOMORO;
    private static Timezone $INDIANKERGUELEN;
    private static Timezone $INDIANMAHE;
    private static Timezone $INDIANMALDIVES;
    private static Timezone $INDIANMAURITIUS;
    private static Timezone $INDIANMAYOTTE;
    private static Timezone $INDIANREUNION;
    private static Timezone $PACIFICAPIA;
    private static Timezone $PACIFICAUCKLAND;
    private static Timezone $PACIFICBOUGAINVILLE;
    private static Timezone $PACIFICCHATHAM;
    private static Timezone $PACIFICCHUUK;
    private static Timezone $PACIFICEASTER;
    private static Timezone $PACIFICEFATE;
    private static Timezone $PACIFICFAKAOFO;
    private static Timezone $PACIFICFIJI;
    private static Timezone $PACIFICFUNAFUTI;
    private static Timezone $PACIFICGALAPAGOS;
    private static Timezone $PACIFICGAMBIER;
    private static Timezone $PACIFICGUADALCANAL;
    private static Timezone $PACIFICGUAM;
    private static Timezone $PACIFICHONOLULU;
    private static Timezone $PACIFICKANTON;
    private static Timezone $PACIFICKIRITIMATI;
    private static Timezone $PACIFICKOSRAE;
    private static Timezone $PACIFICKWAJALEIN;
    private static Timezone $PACIFICMAJURO;
    private static Timezone $PACIFICMARQUESAS;
    private static Timezone $PACIFICMIDWAY;
    private static Timezone $PACIFICNAURU;
    private static Timezone $PACIFICNIUE;
    private static Timezone $PACIFICNORFOLK;
    private static Timezone $PACIFICNOUMEA;
    private static Timezone $PACIFICPAGOPAGO;
    private static Timezone $PACIFICPALAU;
    private static Timezone $PACIFICPITCAIRN;
    private static Timezone $PACIFICPOHNPEI;
    private static Timezone $PACIFICPORTMORESBY;
    private static Timezone $PACIFICRAROTONGA;
    private static Timezone $PACIFICSAIPAN;
    private static Timezone $PACIFICTAHITI;
    private static Timezone $PACIFICTARAWA;
    private static Timezone $PACIFICTONGATAPU;
    private static Timezone $PACIFICWAKE;
    private static Timezone $PACIFICWALLIS;
    private static Timezone $UTC;

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

    public static function AFRICAABIDJAN(): Timezone
    {
        self::$AFRICAABIDJAN ??= new Timezone('africa/abidjan');

        return self::$AFRICAABIDJAN;
    }
    public static function AFRICAACCRA(): Timezone
    {
        self::$AFRICAACCRA ??= new Timezone('africa/accra');

        return self::$AFRICAACCRA;
    }
    public static function AFRICAADDISABABA(): Timezone
    {
        self::$AFRICAADDISABABA ??= new Timezone('africa/addis_ababa');

        return self::$AFRICAADDISABABA;
    }
    public static function AFRICAALGIERS(): Timezone
    {
        self::$AFRICAALGIERS ??= new Timezone('africa/algiers');

        return self::$AFRICAALGIERS;
    }
    public static function AFRICAASMARA(): Timezone
    {
        self::$AFRICAASMARA ??= new Timezone('africa/asmara');

        return self::$AFRICAASMARA;
    }
    public static function AFRICABAMAKO(): Timezone
    {
        self::$AFRICABAMAKO ??= new Timezone('africa/bamako');

        return self::$AFRICABAMAKO;
    }
    public static function AFRICABANGUI(): Timezone
    {
        self::$AFRICABANGUI ??= new Timezone('africa/bangui');

        return self::$AFRICABANGUI;
    }
    public static function AFRICABANJUL(): Timezone
    {
        self::$AFRICABANJUL ??= new Timezone('africa/banjul');

        return self::$AFRICABANJUL;
    }
    public static function AFRICABISSAU(): Timezone
    {
        self::$AFRICABISSAU ??= new Timezone('africa/bissau');

        return self::$AFRICABISSAU;
    }
    public static function AFRICABLANTYRE(): Timezone
    {
        self::$AFRICABLANTYRE ??= new Timezone('africa/blantyre');

        return self::$AFRICABLANTYRE;
    }
    public static function AFRICABRAZZAVILLE(): Timezone
    {
        self::$AFRICABRAZZAVILLE ??= new Timezone('africa/brazzaville');

        return self::$AFRICABRAZZAVILLE;
    }
    public static function AFRICABUJUMBURA(): Timezone
    {
        self::$AFRICABUJUMBURA ??= new Timezone('africa/bujumbura');

        return self::$AFRICABUJUMBURA;
    }
    public static function AFRICACAIRO(): Timezone
    {
        self::$AFRICACAIRO ??= new Timezone('africa/cairo');

        return self::$AFRICACAIRO;
    }
    public static function AFRICACASABLANCA(): Timezone
    {
        self::$AFRICACASABLANCA ??= new Timezone('africa/casablanca');

        return self::$AFRICACASABLANCA;
    }
    public static function AFRICACEUTA(): Timezone
    {
        self::$AFRICACEUTA ??= new Timezone('africa/ceuta');

        return self::$AFRICACEUTA;
    }
    public static function AFRICACONAKRY(): Timezone
    {
        self::$AFRICACONAKRY ??= new Timezone('africa/conakry');

        return self::$AFRICACONAKRY;
    }
    public static function AFRICADAKAR(): Timezone
    {
        self::$AFRICADAKAR ??= new Timezone('africa/dakar');

        return self::$AFRICADAKAR;
    }
    public static function AFRICADARESSALAAM(): Timezone
    {
        self::$AFRICADARESSALAAM ??= new Timezone('africa/dar_es_salaam');

        return self::$AFRICADARESSALAAM;
    }
    public static function AFRICADJIBOUTI(): Timezone
    {
        self::$AFRICADJIBOUTI ??= new Timezone('africa/djibouti');

        return self::$AFRICADJIBOUTI;
    }
    public static function AFRICADOUALA(): Timezone
    {
        self::$AFRICADOUALA ??= new Timezone('africa/douala');

        return self::$AFRICADOUALA;
    }
    public static function AFRICAELAAIUN(): Timezone
    {
        self::$AFRICAELAAIUN ??= new Timezone('africa/el_aaiun');

        return self::$AFRICAELAAIUN;
    }
    public static function AFRICAFREETOWN(): Timezone
    {
        self::$AFRICAFREETOWN ??= new Timezone('africa/freetown');

        return self::$AFRICAFREETOWN;
    }
    public static function AFRICAGABORONE(): Timezone
    {
        self::$AFRICAGABORONE ??= new Timezone('africa/gaborone');

        return self::$AFRICAGABORONE;
    }
    public static function AFRICAHARARE(): Timezone
    {
        self::$AFRICAHARARE ??= new Timezone('africa/harare');

        return self::$AFRICAHARARE;
    }
    public static function AFRICAJOHANNESBURG(): Timezone
    {
        self::$AFRICAJOHANNESBURG ??= new Timezone('africa/johannesburg');

        return self::$AFRICAJOHANNESBURG;
    }
    public static function AFRICAJUBA(): Timezone
    {
        self::$AFRICAJUBA ??= new Timezone('africa/juba');

        return self::$AFRICAJUBA;
    }
    public static function AFRICAKAMPALA(): Timezone
    {
        self::$AFRICAKAMPALA ??= new Timezone('africa/kampala');

        return self::$AFRICAKAMPALA;
    }
    public static function AFRICAKHARTOUM(): Timezone
    {
        self::$AFRICAKHARTOUM ??= new Timezone('africa/khartoum');

        return self::$AFRICAKHARTOUM;
    }
    public static function AFRICAKIGALI(): Timezone
    {
        self::$AFRICAKIGALI ??= new Timezone('africa/kigali');

        return self::$AFRICAKIGALI;
    }
    public static function AFRICAKINSHASA(): Timezone
    {
        self::$AFRICAKINSHASA ??= new Timezone('africa/kinshasa');

        return self::$AFRICAKINSHASA;
    }
    public static function AFRICALAGOS(): Timezone
    {
        self::$AFRICALAGOS ??= new Timezone('africa/lagos');

        return self::$AFRICALAGOS;
    }
    public static function AFRICALIBREVILLE(): Timezone
    {
        self::$AFRICALIBREVILLE ??= new Timezone('africa/libreville');

        return self::$AFRICALIBREVILLE;
    }
    public static function AFRICALOME(): Timezone
    {
        self::$AFRICALOME ??= new Timezone('africa/lome');

        return self::$AFRICALOME;
    }
    public static function AFRICALUANDA(): Timezone
    {
        self::$AFRICALUANDA ??= new Timezone('africa/luanda');

        return self::$AFRICALUANDA;
    }
    public static function AFRICALUBUMBASHI(): Timezone
    {
        self::$AFRICALUBUMBASHI ??= new Timezone('africa/lubumbashi');

        return self::$AFRICALUBUMBASHI;
    }
    public static function AFRICALUSAKA(): Timezone
    {
        self::$AFRICALUSAKA ??= new Timezone('africa/lusaka');

        return self::$AFRICALUSAKA;
    }
    public static function AFRICAMALABO(): Timezone
    {
        self::$AFRICAMALABO ??= new Timezone('africa/malabo');

        return self::$AFRICAMALABO;
    }
    public static function AFRICAMAPUTO(): Timezone
    {
        self::$AFRICAMAPUTO ??= new Timezone('africa/maputo');

        return self::$AFRICAMAPUTO;
    }
    public static function AFRICAMASERU(): Timezone
    {
        self::$AFRICAMASERU ??= new Timezone('africa/maseru');

        return self::$AFRICAMASERU;
    }
    public static function AFRICAMBABANE(): Timezone
    {
        self::$AFRICAMBABANE ??= new Timezone('africa/mbabane');

        return self::$AFRICAMBABANE;
    }
    public static function AFRICAMOGADISHU(): Timezone
    {
        self::$AFRICAMOGADISHU ??= new Timezone('africa/mogadishu');

        return self::$AFRICAMOGADISHU;
    }
    public static function AFRICAMONROVIA(): Timezone
    {
        self::$AFRICAMONROVIA ??= new Timezone('africa/monrovia');

        return self::$AFRICAMONROVIA;
    }
    public static function AFRICANAIROBI(): Timezone
    {
        self::$AFRICANAIROBI ??= new Timezone('africa/nairobi');

        return self::$AFRICANAIROBI;
    }
    public static function AFRICANDJAMENA(): Timezone
    {
        self::$AFRICANDJAMENA ??= new Timezone('africa/ndjamena');

        return self::$AFRICANDJAMENA;
    }
    public static function AFRICANIAMEY(): Timezone
    {
        self::$AFRICANIAMEY ??= new Timezone('africa/niamey');

        return self::$AFRICANIAMEY;
    }
    public static function AFRICANOUAKCHOTT(): Timezone
    {
        self::$AFRICANOUAKCHOTT ??= new Timezone('africa/nouakchott');

        return self::$AFRICANOUAKCHOTT;
    }
    public static function AFRICAOUAGADOUGOU(): Timezone
    {
        self::$AFRICAOUAGADOUGOU ??= new Timezone('africa/ouagadougou');

        return self::$AFRICAOUAGADOUGOU;
    }
    public static function AFRICAPORTONOVO(): Timezone
    {
        self::$AFRICAPORTONOVO ??= new Timezone('africa/porto-novo');

        return self::$AFRICAPORTONOVO;
    }
    public static function AFRICASAOTOME(): Timezone
    {
        self::$AFRICASAOTOME ??= new Timezone('africa/sao_tome');

        return self::$AFRICASAOTOME;
    }
    public static function AFRICATRIPOLI(): Timezone
    {
        self::$AFRICATRIPOLI ??= new Timezone('africa/tripoli');

        return self::$AFRICATRIPOLI;
    }
    public static function AFRICATUNIS(): Timezone
    {
        self::$AFRICATUNIS ??= new Timezone('africa/tunis');

        return self::$AFRICATUNIS;
    }
    public static function AFRICAWINDHOEK(): Timezone
    {
        self::$AFRICAWINDHOEK ??= new Timezone('africa/windhoek');

        return self::$AFRICAWINDHOEK;
    }
    public static function AMERICAADAK(): Timezone
    {
        self::$AMERICAADAK ??= new Timezone('america/adak');

        return self::$AMERICAADAK;
    }
    public static function AMERICAANCHORAGE(): Timezone
    {
        self::$AMERICAANCHORAGE ??= new Timezone('america/anchorage');

        return self::$AMERICAANCHORAGE;
    }
    public static function AMERICAANGUILLA(): Timezone
    {
        self::$AMERICAANGUILLA ??= new Timezone('america/anguilla');

        return self::$AMERICAANGUILLA;
    }
    public static function AMERICAANTIGUA(): Timezone
    {
        self::$AMERICAANTIGUA ??= new Timezone('america/antigua');

        return self::$AMERICAANTIGUA;
    }
    public static function AMERICAARAGUAINA(): Timezone
    {
        self::$AMERICAARAGUAINA ??= new Timezone('america/araguaina');

        return self::$AMERICAARAGUAINA;
    }
    public static function AMERICAARGENTINABUENOSAIRES(): Timezone
    {
        self::$AMERICAARGENTINABUENOSAIRES ??= new Timezone('america/argentina/buenos_aires');

        return self::$AMERICAARGENTINABUENOSAIRES;
    }
    public static function AMERICAARGENTINACATAMARCA(): Timezone
    {
        self::$AMERICAARGENTINACATAMARCA ??= new Timezone('america/argentina/catamarca');

        return self::$AMERICAARGENTINACATAMARCA;
    }
    public static function AMERICAARGENTINACORDOBA(): Timezone
    {
        self::$AMERICAARGENTINACORDOBA ??= new Timezone('america/argentina/cordoba');

        return self::$AMERICAARGENTINACORDOBA;
    }
    public static function AMERICAARGENTINAJUJUY(): Timezone
    {
        self::$AMERICAARGENTINAJUJUY ??= new Timezone('america/argentina/jujuy');

        return self::$AMERICAARGENTINAJUJUY;
    }
    public static function AMERICAARGENTINALARIOJA(): Timezone
    {
        self::$AMERICAARGENTINALARIOJA ??= new Timezone('america/argentina/la_rioja');

        return self::$AMERICAARGENTINALARIOJA;
    }
    public static function AMERICAARGENTINAMENDOZA(): Timezone
    {
        self::$AMERICAARGENTINAMENDOZA ??= new Timezone('america/argentina/mendoza');

        return self::$AMERICAARGENTINAMENDOZA;
    }
    public static function AMERICAARGENTINARIOGALLEGOS(): Timezone
    {
        self::$AMERICAARGENTINARIOGALLEGOS ??= new Timezone('america/argentina/rio_gallegos');

        return self::$AMERICAARGENTINARIOGALLEGOS;
    }
    public static function AMERICAARGENTINASALTA(): Timezone
    {
        self::$AMERICAARGENTINASALTA ??= new Timezone('america/argentina/salta');

        return self::$AMERICAARGENTINASALTA;
    }
    public static function AMERICAARGENTINASANJUAN(): Timezone
    {
        self::$AMERICAARGENTINASANJUAN ??= new Timezone('america/argentina/san_juan');

        return self::$AMERICAARGENTINASANJUAN;
    }
    public static function AMERICAARGENTINASANLUIS(): Timezone
    {
        self::$AMERICAARGENTINASANLUIS ??= new Timezone('america/argentina/san_luis');

        return self::$AMERICAARGENTINASANLUIS;
    }
    public static function AMERICAARGENTINATUCUMAN(): Timezone
    {
        self::$AMERICAARGENTINATUCUMAN ??= new Timezone('america/argentina/tucuman');

        return self::$AMERICAARGENTINATUCUMAN;
    }
    public static function AMERICAARGENTINAUSHUAIA(): Timezone
    {
        self::$AMERICAARGENTINAUSHUAIA ??= new Timezone('america/argentina/ushuaia');

        return self::$AMERICAARGENTINAUSHUAIA;
    }
    public static function AMERICAARUBA(): Timezone
    {
        self::$AMERICAARUBA ??= new Timezone('america/aruba');

        return self::$AMERICAARUBA;
    }
    public static function AMERICAASUNCION(): Timezone
    {
        self::$AMERICAASUNCION ??= new Timezone('america/asuncion');

        return self::$AMERICAASUNCION;
    }
    public static function AMERICAATIKOKAN(): Timezone
    {
        self::$AMERICAATIKOKAN ??= new Timezone('america/atikokan');

        return self::$AMERICAATIKOKAN;
    }
    public static function AMERICABAHIA(): Timezone
    {
        self::$AMERICABAHIA ??= new Timezone('america/bahia');

        return self::$AMERICABAHIA;
    }
    public static function AMERICABAHIABANDERAS(): Timezone
    {
        self::$AMERICABAHIABANDERAS ??= new Timezone('america/bahia_banderas');

        return self::$AMERICABAHIABANDERAS;
    }
    public static function AMERICABARBADOS(): Timezone
    {
        self::$AMERICABARBADOS ??= new Timezone('america/barbados');

        return self::$AMERICABARBADOS;
    }
    public static function AMERICABELEM(): Timezone
    {
        self::$AMERICABELEM ??= new Timezone('america/belem');

        return self::$AMERICABELEM;
    }
    public static function AMERICABELIZE(): Timezone
    {
        self::$AMERICABELIZE ??= new Timezone('america/belize');

        return self::$AMERICABELIZE;
    }
    public static function AMERICABLANCSABLON(): Timezone
    {
        self::$AMERICABLANCSABLON ??= new Timezone('america/blanc-sablon');

        return self::$AMERICABLANCSABLON;
    }
    public static function AMERICABOAVISTA(): Timezone
    {
        self::$AMERICABOAVISTA ??= new Timezone('america/boa_vista');

        return self::$AMERICABOAVISTA;
    }
    public static function AMERICABOGOTA(): Timezone
    {
        self::$AMERICABOGOTA ??= new Timezone('america/bogota');

        return self::$AMERICABOGOTA;
    }
    public static function AMERICABOISE(): Timezone
    {
        self::$AMERICABOISE ??= new Timezone('america/boise');

        return self::$AMERICABOISE;
    }
    public static function AMERICACAMBRIDGEBAY(): Timezone
    {
        self::$AMERICACAMBRIDGEBAY ??= new Timezone('america/cambridge_bay');

        return self::$AMERICACAMBRIDGEBAY;
    }
    public static function AMERICACAMPOGRANDE(): Timezone
    {
        self::$AMERICACAMPOGRANDE ??= new Timezone('america/campo_grande');

        return self::$AMERICACAMPOGRANDE;
    }
    public static function AMERICACANCUN(): Timezone
    {
        self::$AMERICACANCUN ??= new Timezone('america/cancun');

        return self::$AMERICACANCUN;
    }
    public static function AMERICACARACAS(): Timezone
    {
        self::$AMERICACARACAS ??= new Timezone('america/caracas');

        return self::$AMERICACARACAS;
    }
    public static function AMERICACAYENNE(): Timezone
    {
        self::$AMERICACAYENNE ??= new Timezone('america/cayenne');

        return self::$AMERICACAYENNE;
    }
    public static function AMERICACAYMAN(): Timezone
    {
        self::$AMERICACAYMAN ??= new Timezone('america/cayman');

        return self::$AMERICACAYMAN;
    }
    public static function AMERICACHICAGO(): Timezone
    {
        self::$AMERICACHICAGO ??= new Timezone('america/chicago');

        return self::$AMERICACHICAGO;
    }
    public static function AMERICACHIHUAHUA(): Timezone
    {
        self::$AMERICACHIHUAHUA ??= new Timezone('america/chihuahua');

        return self::$AMERICACHIHUAHUA;
    }
    public static function AMERICACIUDADJUAREZ(): Timezone
    {
        self::$AMERICACIUDADJUAREZ ??= new Timezone('america/ciudad_juarez');

        return self::$AMERICACIUDADJUAREZ;
    }
    public static function AMERICACOSTARICA(): Timezone
    {
        self::$AMERICACOSTARICA ??= new Timezone('america/costa_rica');

        return self::$AMERICACOSTARICA;
    }
    public static function AMERICACOYHAIQUE(): Timezone
    {
        self::$AMERICACOYHAIQUE ??= new Timezone('america/coyhaique');

        return self::$AMERICACOYHAIQUE;
    }
    public static function AMERICACRESTON(): Timezone
    {
        self::$AMERICACRESTON ??= new Timezone('america/creston');

        return self::$AMERICACRESTON;
    }
    public static function AMERICACUIABA(): Timezone
    {
        self::$AMERICACUIABA ??= new Timezone('america/cuiaba');

        return self::$AMERICACUIABA;
    }
    public static function AMERICACURACAO(): Timezone
    {
        self::$AMERICACURACAO ??= new Timezone('america/curacao');

        return self::$AMERICACURACAO;
    }
    public static function AMERICADANMARKSHAVN(): Timezone
    {
        self::$AMERICADANMARKSHAVN ??= new Timezone('america/danmarkshavn');

        return self::$AMERICADANMARKSHAVN;
    }
    public static function AMERICADAWSON(): Timezone
    {
        self::$AMERICADAWSON ??= new Timezone('america/dawson');

        return self::$AMERICADAWSON;
    }
    public static function AMERICADAWSONCREEK(): Timezone
    {
        self::$AMERICADAWSONCREEK ??= new Timezone('america/dawson_creek');

        return self::$AMERICADAWSONCREEK;
    }
    public static function AMERICADENVER(): Timezone
    {
        self::$AMERICADENVER ??= new Timezone('america/denver');

        return self::$AMERICADENVER;
    }
    public static function AMERICADETROIT(): Timezone
    {
        self::$AMERICADETROIT ??= new Timezone('america/detroit');

        return self::$AMERICADETROIT;
    }
    public static function AMERICADOMINICA(): Timezone
    {
        self::$AMERICADOMINICA ??= new Timezone('america/dominica');

        return self::$AMERICADOMINICA;
    }
    public static function AMERICAEDMONTON(): Timezone
    {
        self::$AMERICAEDMONTON ??= new Timezone('america/edmonton');

        return self::$AMERICAEDMONTON;
    }
    public static function AMERICAEIRUNEPE(): Timezone
    {
        self::$AMERICAEIRUNEPE ??= new Timezone('america/eirunepe');

        return self::$AMERICAEIRUNEPE;
    }
    public static function AMERICAELSALVADOR(): Timezone
    {
        self::$AMERICAELSALVADOR ??= new Timezone('america/el_salvador');

        return self::$AMERICAELSALVADOR;
    }
    public static function AMERICAFORTNELSON(): Timezone
    {
        self::$AMERICAFORTNELSON ??= new Timezone('america/fort_nelson');

        return self::$AMERICAFORTNELSON;
    }
    public static function AMERICAFORTALEZA(): Timezone
    {
        self::$AMERICAFORTALEZA ??= new Timezone('america/fortaleza');

        return self::$AMERICAFORTALEZA;
    }
    public static function AMERICAGLACEBAY(): Timezone
    {
        self::$AMERICAGLACEBAY ??= new Timezone('america/glace_bay');

        return self::$AMERICAGLACEBAY;
    }
    public static function AMERICAGOOSEBAY(): Timezone
    {
        self::$AMERICAGOOSEBAY ??= new Timezone('america/goose_bay');

        return self::$AMERICAGOOSEBAY;
    }
    public static function AMERICAGRANDTURK(): Timezone
    {
        self::$AMERICAGRANDTURK ??= new Timezone('america/grand_turk');

        return self::$AMERICAGRANDTURK;
    }
    public static function AMERICAGRENADA(): Timezone
    {
        self::$AMERICAGRENADA ??= new Timezone('america/grenada');

        return self::$AMERICAGRENADA;
    }
    public static function AMERICAGUADELOUPE(): Timezone
    {
        self::$AMERICAGUADELOUPE ??= new Timezone('america/guadeloupe');

        return self::$AMERICAGUADELOUPE;
    }
    public static function AMERICAGUATEMALA(): Timezone
    {
        self::$AMERICAGUATEMALA ??= new Timezone('america/guatemala');

        return self::$AMERICAGUATEMALA;
    }
    public static function AMERICAGUAYAQUIL(): Timezone
    {
        self::$AMERICAGUAYAQUIL ??= new Timezone('america/guayaquil');

        return self::$AMERICAGUAYAQUIL;
    }
    public static function AMERICAGUYANA(): Timezone
    {
        self::$AMERICAGUYANA ??= new Timezone('america/guyana');

        return self::$AMERICAGUYANA;
    }
    public static function AMERICAHALIFAX(): Timezone
    {
        self::$AMERICAHALIFAX ??= new Timezone('america/halifax');

        return self::$AMERICAHALIFAX;
    }
    public static function AMERICAHAVANA(): Timezone
    {
        self::$AMERICAHAVANA ??= new Timezone('america/havana');

        return self::$AMERICAHAVANA;
    }
    public static function AMERICAHERMOSILLO(): Timezone
    {
        self::$AMERICAHERMOSILLO ??= new Timezone('america/hermosillo');

        return self::$AMERICAHERMOSILLO;
    }
    public static function AMERICAINDIANAINDIANAPOLIS(): Timezone
    {
        self::$AMERICAINDIANAINDIANAPOLIS ??= new Timezone('america/indiana/indianapolis');

        return self::$AMERICAINDIANAINDIANAPOLIS;
    }
    public static function AMERICAINDIANAKNOX(): Timezone
    {
        self::$AMERICAINDIANAKNOX ??= new Timezone('america/indiana/knox');

        return self::$AMERICAINDIANAKNOX;
    }
    public static function AMERICAINDIANAMARENGO(): Timezone
    {
        self::$AMERICAINDIANAMARENGO ??= new Timezone('america/indiana/marengo');

        return self::$AMERICAINDIANAMARENGO;
    }
    public static function AMERICAINDIANAPETERSBURG(): Timezone
    {
        self::$AMERICAINDIANAPETERSBURG ??= new Timezone('america/indiana/petersburg');

        return self::$AMERICAINDIANAPETERSBURG;
    }
    public static function AMERICAINDIANATELLCITY(): Timezone
    {
        self::$AMERICAINDIANATELLCITY ??= new Timezone('america/indiana/tell_city');

        return self::$AMERICAINDIANATELLCITY;
    }
    public static function AMERICAINDIANAVEVAY(): Timezone
    {
        self::$AMERICAINDIANAVEVAY ??= new Timezone('america/indiana/vevay');

        return self::$AMERICAINDIANAVEVAY;
    }
    public static function AMERICAINDIANAVINCENNES(): Timezone
    {
        self::$AMERICAINDIANAVINCENNES ??= new Timezone('america/indiana/vincennes');

        return self::$AMERICAINDIANAVINCENNES;
    }
    public static function AMERICAINDIANAWINAMAC(): Timezone
    {
        self::$AMERICAINDIANAWINAMAC ??= new Timezone('america/indiana/winamac');

        return self::$AMERICAINDIANAWINAMAC;
    }
    public static function AMERICAINUVIK(): Timezone
    {
        self::$AMERICAINUVIK ??= new Timezone('america/inuvik');

        return self::$AMERICAINUVIK;
    }
    public static function AMERICAIQALUIT(): Timezone
    {
        self::$AMERICAIQALUIT ??= new Timezone('america/iqaluit');

        return self::$AMERICAIQALUIT;
    }
    public static function AMERICAJAMAICA(): Timezone
    {
        self::$AMERICAJAMAICA ??= new Timezone('america/jamaica');

        return self::$AMERICAJAMAICA;
    }
    public static function AMERICAJUNEAU(): Timezone
    {
        self::$AMERICAJUNEAU ??= new Timezone('america/juneau');

        return self::$AMERICAJUNEAU;
    }
    public static function AMERICAKENTUCKYLOUISVILLE(): Timezone
    {
        self::$AMERICAKENTUCKYLOUISVILLE ??= new Timezone('america/kentucky/louisville');

        return self::$AMERICAKENTUCKYLOUISVILLE;
    }
    public static function AMERICAKENTUCKYMONTICELLO(): Timezone
    {
        self::$AMERICAKENTUCKYMONTICELLO ??= new Timezone('america/kentucky/monticello');

        return self::$AMERICAKENTUCKYMONTICELLO;
    }
    public static function AMERICAKRALENDIJK(): Timezone
    {
        self::$AMERICAKRALENDIJK ??= new Timezone('america/kralendijk');

        return self::$AMERICAKRALENDIJK;
    }
    public static function AMERICALAPAZ(): Timezone
    {
        self::$AMERICALAPAZ ??= new Timezone('america/la_paz');

        return self::$AMERICALAPAZ;
    }
    public static function AMERICALIMA(): Timezone
    {
        self::$AMERICALIMA ??= new Timezone('america/lima');

        return self::$AMERICALIMA;
    }
    public static function AMERICALOSANGELES(): Timezone
    {
        self::$AMERICALOSANGELES ??= new Timezone('america/los_angeles');

        return self::$AMERICALOSANGELES;
    }
    public static function AMERICALOWERPRINCES(): Timezone
    {
        self::$AMERICALOWERPRINCES ??= new Timezone('america/lower_princes');

        return self::$AMERICALOWERPRINCES;
    }
    public static function AMERICAMACEIO(): Timezone
    {
        self::$AMERICAMACEIO ??= new Timezone('america/maceio');

        return self::$AMERICAMACEIO;
    }
    public static function AMERICAMANAGUA(): Timezone
    {
        self::$AMERICAMANAGUA ??= new Timezone('america/managua');

        return self::$AMERICAMANAGUA;
    }
    public static function AMERICAMANAUS(): Timezone
    {
        self::$AMERICAMANAUS ??= new Timezone('america/manaus');

        return self::$AMERICAMANAUS;
    }
    public static function AMERICAMARIGOT(): Timezone
    {
        self::$AMERICAMARIGOT ??= new Timezone('america/marigot');

        return self::$AMERICAMARIGOT;
    }
    public static function AMERICAMARTINIQUE(): Timezone
    {
        self::$AMERICAMARTINIQUE ??= new Timezone('america/martinique');

        return self::$AMERICAMARTINIQUE;
    }
    public static function AMERICAMATAMOROS(): Timezone
    {
        self::$AMERICAMATAMOROS ??= new Timezone('america/matamoros');

        return self::$AMERICAMATAMOROS;
    }
    public static function AMERICAMAZATLAN(): Timezone
    {
        self::$AMERICAMAZATLAN ??= new Timezone('america/mazatlan');

        return self::$AMERICAMAZATLAN;
    }
    public static function AMERICAMENOMINEE(): Timezone
    {
        self::$AMERICAMENOMINEE ??= new Timezone('america/menominee');

        return self::$AMERICAMENOMINEE;
    }
    public static function AMERICAMERIDA(): Timezone
    {
        self::$AMERICAMERIDA ??= new Timezone('america/merida');

        return self::$AMERICAMERIDA;
    }
    public static function AMERICAMETLAKATLA(): Timezone
    {
        self::$AMERICAMETLAKATLA ??= new Timezone('america/metlakatla');

        return self::$AMERICAMETLAKATLA;
    }
    public static function AMERICAMEXICOCITY(): Timezone
    {
        self::$AMERICAMEXICOCITY ??= new Timezone('america/mexico_city');

        return self::$AMERICAMEXICOCITY;
    }
    public static function AMERICAMIQUELON(): Timezone
    {
        self::$AMERICAMIQUELON ??= new Timezone('america/miquelon');

        return self::$AMERICAMIQUELON;
    }
    public static function AMERICAMONCTON(): Timezone
    {
        self::$AMERICAMONCTON ??= new Timezone('america/moncton');

        return self::$AMERICAMONCTON;
    }
    public static function AMERICAMONTERREY(): Timezone
    {
        self::$AMERICAMONTERREY ??= new Timezone('america/monterrey');

        return self::$AMERICAMONTERREY;
    }
    public static function AMERICAMONTEVIDEO(): Timezone
    {
        self::$AMERICAMONTEVIDEO ??= new Timezone('america/montevideo');

        return self::$AMERICAMONTEVIDEO;
    }
    public static function AMERICAMONTSERRAT(): Timezone
    {
        self::$AMERICAMONTSERRAT ??= new Timezone('america/montserrat');

        return self::$AMERICAMONTSERRAT;
    }
    public static function AMERICANASSAU(): Timezone
    {
        self::$AMERICANASSAU ??= new Timezone('america/nassau');

        return self::$AMERICANASSAU;
    }
    public static function AMERICANEWYORK(): Timezone
    {
        self::$AMERICANEWYORK ??= new Timezone('america/new_york');

        return self::$AMERICANEWYORK;
    }
    public static function AMERICANOME(): Timezone
    {
        self::$AMERICANOME ??= new Timezone('america/nome');

        return self::$AMERICANOME;
    }
    public static function AMERICANORONHA(): Timezone
    {
        self::$AMERICANORONHA ??= new Timezone('america/noronha');

        return self::$AMERICANORONHA;
    }
    public static function AMERICANORTHDAKOTABEULAH(): Timezone
    {
        self::$AMERICANORTHDAKOTABEULAH ??= new Timezone('america/north_dakota/beulah');

        return self::$AMERICANORTHDAKOTABEULAH;
    }
    public static function AMERICANORTHDAKOTACENTER(): Timezone
    {
        self::$AMERICANORTHDAKOTACENTER ??= new Timezone('america/north_dakota/center');

        return self::$AMERICANORTHDAKOTACENTER;
    }
    public static function AMERICANORTHDAKOTANEWSALEM(): Timezone
    {
        self::$AMERICANORTHDAKOTANEWSALEM ??= new Timezone('america/north_dakota/new_salem');

        return self::$AMERICANORTHDAKOTANEWSALEM;
    }
    public static function AMERICANUUK(): Timezone
    {
        self::$AMERICANUUK ??= new Timezone('america/nuuk');

        return self::$AMERICANUUK;
    }
    public static function AMERICAOJINAGA(): Timezone
    {
        self::$AMERICAOJINAGA ??= new Timezone('america/ojinaga');

        return self::$AMERICAOJINAGA;
    }
    public static function AMERICAPANAMA(): Timezone
    {
        self::$AMERICAPANAMA ??= new Timezone('america/panama');

        return self::$AMERICAPANAMA;
    }
    public static function AMERICAPARAMARIBO(): Timezone
    {
        self::$AMERICAPARAMARIBO ??= new Timezone('america/paramaribo');

        return self::$AMERICAPARAMARIBO;
    }
    public static function AMERICAPHOENIX(): Timezone
    {
        self::$AMERICAPHOENIX ??= new Timezone('america/phoenix');

        return self::$AMERICAPHOENIX;
    }
    public static function AMERICAPORTAUPRINCE(): Timezone
    {
        self::$AMERICAPORTAUPRINCE ??= new Timezone('america/port-au-prince');

        return self::$AMERICAPORTAUPRINCE;
    }
    public static function AMERICAPORTOFSPAIN(): Timezone
    {
        self::$AMERICAPORTOFSPAIN ??= new Timezone('america/port_of_spain');

        return self::$AMERICAPORTOFSPAIN;
    }
    public static function AMERICAPORTOVELHO(): Timezone
    {
        self::$AMERICAPORTOVELHO ??= new Timezone('america/porto_velho');

        return self::$AMERICAPORTOVELHO;
    }
    public static function AMERICAPUERTORICO(): Timezone
    {
        self::$AMERICAPUERTORICO ??= new Timezone('america/puerto_rico');

        return self::$AMERICAPUERTORICO;
    }
    public static function AMERICAPUNTAARENAS(): Timezone
    {
        self::$AMERICAPUNTAARENAS ??= new Timezone('america/punta_arenas');

        return self::$AMERICAPUNTAARENAS;
    }
    public static function AMERICARANKININLET(): Timezone
    {
        self::$AMERICARANKININLET ??= new Timezone('america/rankin_inlet');

        return self::$AMERICARANKININLET;
    }
    public static function AMERICARECIFE(): Timezone
    {
        self::$AMERICARECIFE ??= new Timezone('america/recife');

        return self::$AMERICARECIFE;
    }
    public static function AMERICAREGINA(): Timezone
    {
        self::$AMERICAREGINA ??= new Timezone('america/regina');

        return self::$AMERICAREGINA;
    }
    public static function AMERICARESOLUTE(): Timezone
    {
        self::$AMERICARESOLUTE ??= new Timezone('america/resolute');

        return self::$AMERICARESOLUTE;
    }
    public static function AMERICARIOBRANCO(): Timezone
    {
        self::$AMERICARIOBRANCO ??= new Timezone('america/rio_branco');

        return self::$AMERICARIOBRANCO;
    }
    public static function AMERICASANTAREM(): Timezone
    {
        self::$AMERICASANTAREM ??= new Timezone('america/santarem');

        return self::$AMERICASANTAREM;
    }
    public static function AMERICASANTIAGO(): Timezone
    {
        self::$AMERICASANTIAGO ??= new Timezone('america/santiago');

        return self::$AMERICASANTIAGO;
    }
    public static function AMERICASANTODOMINGO(): Timezone
    {
        self::$AMERICASANTODOMINGO ??= new Timezone('america/santo_domingo');

        return self::$AMERICASANTODOMINGO;
    }
    public static function AMERICASAOPAULO(): Timezone
    {
        self::$AMERICASAOPAULO ??= new Timezone('america/sao_paulo');

        return self::$AMERICASAOPAULO;
    }
    public static function AMERICASCORESBYSUND(): Timezone
    {
        self::$AMERICASCORESBYSUND ??= new Timezone('america/scoresbysund');

        return self::$AMERICASCORESBYSUND;
    }
    public static function AMERICASITKA(): Timezone
    {
        self::$AMERICASITKA ??= new Timezone('america/sitka');

        return self::$AMERICASITKA;
    }
    public static function AMERICASTBARTHELEMY(): Timezone
    {
        self::$AMERICASTBARTHELEMY ??= new Timezone('america/st_barthelemy');

        return self::$AMERICASTBARTHELEMY;
    }
    public static function AMERICASTJOHNS(): Timezone
    {
        self::$AMERICASTJOHNS ??= new Timezone('america/st_johns');

        return self::$AMERICASTJOHNS;
    }
    public static function AMERICASTKITTS(): Timezone
    {
        self::$AMERICASTKITTS ??= new Timezone('america/st_kitts');

        return self::$AMERICASTKITTS;
    }
    public static function AMERICASTLUCIA(): Timezone
    {
        self::$AMERICASTLUCIA ??= new Timezone('america/st_lucia');

        return self::$AMERICASTLUCIA;
    }
    public static function AMERICASTTHOMAS(): Timezone
    {
        self::$AMERICASTTHOMAS ??= new Timezone('america/st_thomas');

        return self::$AMERICASTTHOMAS;
    }
    public static function AMERICASTVINCENT(): Timezone
    {
        self::$AMERICASTVINCENT ??= new Timezone('america/st_vincent');

        return self::$AMERICASTVINCENT;
    }
    public static function AMERICASWIFTCURRENT(): Timezone
    {
        self::$AMERICASWIFTCURRENT ??= new Timezone('america/swift_current');

        return self::$AMERICASWIFTCURRENT;
    }
    public static function AMERICATEGUCIGALPA(): Timezone
    {
        self::$AMERICATEGUCIGALPA ??= new Timezone('america/tegucigalpa');

        return self::$AMERICATEGUCIGALPA;
    }
    public static function AMERICATHULE(): Timezone
    {
        self::$AMERICATHULE ??= new Timezone('america/thule');

        return self::$AMERICATHULE;
    }
    public static function AMERICATIJUANA(): Timezone
    {
        self::$AMERICATIJUANA ??= new Timezone('america/tijuana');

        return self::$AMERICATIJUANA;
    }
    public static function AMERICATORONTO(): Timezone
    {
        self::$AMERICATORONTO ??= new Timezone('america/toronto');

        return self::$AMERICATORONTO;
    }
    public static function AMERICATORTOLA(): Timezone
    {
        self::$AMERICATORTOLA ??= new Timezone('america/tortola');

        return self::$AMERICATORTOLA;
    }
    public static function AMERICAVANCOUVER(): Timezone
    {
        self::$AMERICAVANCOUVER ??= new Timezone('america/vancouver');

        return self::$AMERICAVANCOUVER;
    }
    public static function AMERICAWHITEHORSE(): Timezone
    {
        self::$AMERICAWHITEHORSE ??= new Timezone('america/whitehorse');

        return self::$AMERICAWHITEHORSE;
    }
    public static function AMERICAWINNIPEG(): Timezone
    {
        self::$AMERICAWINNIPEG ??= new Timezone('america/winnipeg');

        return self::$AMERICAWINNIPEG;
    }
    public static function AMERICAYAKUTAT(): Timezone
    {
        self::$AMERICAYAKUTAT ??= new Timezone('america/yakutat');

        return self::$AMERICAYAKUTAT;
    }
    public static function ANTARCTICACASEY(): Timezone
    {
        self::$ANTARCTICACASEY ??= new Timezone('antarctica/casey');

        return self::$ANTARCTICACASEY;
    }
    public static function ANTARCTICADAVIS(): Timezone
    {
        self::$ANTARCTICADAVIS ??= new Timezone('antarctica/davis');

        return self::$ANTARCTICADAVIS;
    }
    public static function ANTARCTICADUMONTDURVILLE(): Timezone
    {
        self::$ANTARCTICADUMONTDURVILLE ??= new Timezone('antarctica/dumontdurville');

        return self::$ANTARCTICADUMONTDURVILLE;
    }
    public static function ANTARCTICAMACQUARIE(): Timezone
    {
        self::$ANTARCTICAMACQUARIE ??= new Timezone('antarctica/macquarie');

        return self::$ANTARCTICAMACQUARIE;
    }
    public static function ANTARCTICAMAWSON(): Timezone
    {
        self::$ANTARCTICAMAWSON ??= new Timezone('antarctica/mawson');

        return self::$ANTARCTICAMAWSON;
    }
    public static function ANTARCTICAMCMURDO(): Timezone
    {
        self::$ANTARCTICAMCMURDO ??= new Timezone('antarctica/mcmurdo');

        return self::$ANTARCTICAMCMURDO;
    }
    public static function ANTARCTICAPALMER(): Timezone
    {
        self::$ANTARCTICAPALMER ??= new Timezone('antarctica/palmer');

        return self::$ANTARCTICAPALMER;
    }
    public static function ANTARCTICAROTHERA(): Timezone
    {
        self::$ANTARCTICAROTHERA ??= new Timezone('antarctica/rothera');

        return self::$ANTARCTICAROTHERA;
    }
    public static function ANTARCTICASYOWA(): Timezone
    {
        self::$ANTARCTICASYOWA ??= new Timezone('antarctica/syowa');

        return self::$ANTARCTICASYOWA;
    }
    public static function ANTARCTICATROLL(): Timezone
    {
        self::$ANTARCTICATROLL ??= new Timezone('antarctica/troll');

        return self::$ANTARCTICATROLL;
    }
    public static function ANTARCTICAVOSTOK(): Timezone
    {
        self::$ANTARCTICAVOSTOK ??= new Timezone('antarctica/vostok');

        return self::$ANTARCTICAVOSTOK;
    }
    public static function ARCTICLONGYEARBYEN(): Timezone
    {
        self::$ARCTICLONGYEARBYEN ??= new Timezone('arctic/longyearbyen');

        return self::$ARCTICLONGYEARBYEN;
    }
    public static function ASIAADEN(): Timezone
    {
        self::$ASIAADEN ??= new Timezone('asia/aden');

        return self::$ASIAADEN;
    }
    public static function ASIAALMATY(): Timezone
    {
        self::$ASIAALMATY ??= new Timezone('asia/almaty');

        return self::$ASIAALMATY;
    }
    public static function ASIAAMMAN(): Timezone
    {
        self::$ASIAAMMAN ??= new Timezone('asia/amman');

        return self::$ASIAAMMAN;
    }
    public static function ASIAANADYR(): Timezone
    {
        self::$ASIAANADYR ??= new Timezone('asia/anadyr');

        return self::$ASIAANADYR;
    }
    public static function ASIAAQTAU(): Timezone
    {
        self::$ASIAAQTAU ??= new Timezone('asia/aqtau');

        return self::$ASIAAQTAU;
    }
    public static function ASIAAQTOBE(): Timezone
    {
        self::$ASIAAQTOBE ??= new Timezone('asia/aqtobe');

        return self::$ASIAAQTOBE;
    }
    public static function ASIAASHGABAT(): Timezone
    {
        self::$ASIAASHGABAT ??= new Timezone('asia/ashgabat');

        return self::$ASIAASHGABAT;
    }
    public static function ASIAATYRAU(): Timezone
    {
        self::$ASIAATYRAU ??= new Timezone('asia/atyrau');

        return self::$ASIAATYRAU;
    }
    public static function ASIABAGHDAD(): Timezone
    {
        self::$ASIABAGHDAD ??= new Timezone('asia/baghdad');

        return self::$ASIABAGHDAD;
    }
    public static function ASIABAHRAIN(): Timezone
    {
        self::$ASIABAHRAIN ??= new Timezone('asia/bahrain');

        return self::$ASIABAHRAIN;
    }
    public static function ASIABAKU(): Timezone
    {
        self::$ASIABAKU ??= new Timezone('asia/baku');

        return self::$ASIABAKU;
    }
    public static function ASIABANGKOK(): Timezone
    {
        self::$ASIABANGKOK ??= new Timezone('asia/bangkok');

        return self::$ASIABANGKOK;
    }
    public static function ASIABARNAUL(): Timezone
    {
        self::$ASIABARNAUL ??= new Timezone('asia/barnaul');

        return self::$ASIABARNAUL;
    }
    public static function ASIABEIRUT(): Timezone
    {
        self::$ASIABEIRUT ??= new Timezone('asia/beirut');

        return self::$ASIABEIRUT;
    }
    public static function ASIABISHKEK(): Timezone
    {
        self::$ASIABISHKEK ??= new Timezone('asia/bishkek');

        return self::$ASIABISHKEK;
    }
    public static function ASIABRUNEI(): Timezone
    {
        self::$ASIABRUNEI ??= new Timezone('asia/brunei');

        return self::$ASIABRUNEI;
    }
    public static function ASIACHITA(): Timezone
    {
        self::$ASIACHITA ??= new Timezone('asia/chita');

        return self::$ASIACHITA;
    }
    public static function ASIACOLOMBO(): Timezone
    {
        self::$ASIACOLOMBO ??= new Timezone('asia/colombo');

        return self::$ASIACOLOMBO;
    }
    public static function ASIADAMASCUS(): Timezone
    {
        self::$ASIADAMASCUS ??= new Timezone('asia/damascus');

        return self::$ASIADAMASCUS;
    }
    public static function ASIADHAKA(): Timezone
    {
        self::$ASIADHAKA ??= new Timezone('asia/dhaka');

        return self::$ASIADHAKA;
    }
    public static function ASIADILI(): Timezone
    {
        self::$ASIADILI ??= new Timezone('asia/dili');

        return self::$ASIADILI;
    }
    public static function ASIADUBAI(): Timezone
    {
        self::$ASIADUBAI ??= new Timezone('asia/dubai');

        return self::$ASIADUBAI;
    }
    public static function ASIADUSHANBE(): Timezone
    {
        self::$ASIADUSHANBE ??= new Timezone('asia/dushanbe');

        return self::$ASIADUSHANBE;
    }
    public static function ASIAFAMAGUSTA(): Timezone
    {
        self::$ASIAFAMAGUSTA ??= new Timezone('asia/famagusta');

        return self::$ASIAFAMAGUSTA;
    }
    public static function ASIAGAZA(): Timezone
    {
        self::$ASIAGAZA ??= new Timezone('asia/gaza');

        return self::$ASIAGAZA;
    }
    public static function ASIAHEBRON(): Timezone
    {
        self::$ASIAHEBRON ??= new Timezone('asia/hebron');

        return self::$ASIAHEBRON;
    }
    public static function ASIAHOCHIMINH(): Timezone
    {
        self::$ASIAHOCHIMINH ??= new Timezone('asia/ho_chi_minh');

        return self::$ASIAHOCHIMINH;
    }
    public static function ASIAHONGKONG(): Timezone
    {
        self::$ASIAHONGKONG ??= new Timezone('asia/hong_kong');

        return self::$ASIAHONGKONG;
    }
    public static function ASIAHOVD(): Timezone
    {
        self::$ASIAHOVD ??= new Timezone('asia/hovd');

        return self::$ASIAHOVD;
    }
    public static function ASIAIRKUTSK(): Timezone
    {
        self::$ASIAIRKUTSK ??= new Timezone('asia/irkutsk');

        return self::$ASIAIRKUTSK;
    }
    public static function ASIAJAKARTA(): Timezone
    {
        self::$ASIAJAKARTA ??= new Timezone('asia/jakarta');

        return self::$ASIAJAKARTA;
    }
    public static function ASIAJAYAPURA(): Timezone
    {
        self::$ASIAJAYAPURA ??= new Timezone('asia/jayapura');

        return self::$ASIAJAYAPURA;
    }
    public static function ASIAJERUSALEM(): Timezone
    {
        self::$ASIAJERUSALEM ??= new Timezone('asia/jerusalem');

        return self::$ASIAJERUSALEM;
    }
    public static function ASIAKABUL(): Timezone
    {
        self::$ASIAKABUL ??= new Timezone('asia/kabul');

        return self::$ASIAKABUL;
    }
    public static function ASIAKAMCHATKA(): Timezone
    {
        self::$ASIAKAMCHATKA ??= new Timezone('asia/kamchatka');

        return self::$ASIAKAMCHATKA;
    }
    public static function ASIAKARACHI(): Timezone
    {
        self::$ASIAKARACHI ??= new Timezone('asia/karachi');

        return self::$ASIAKARACHI;
    }
    public static function ASIAKATHMANDU(): Timezone
    {
        self::$ASIAKATHMANDU ??= new Timezone('asia/kathmandu');

        return self::$ASIAKATHMANDU;
    }
    public static function ASIAKHANDYGA(): Timezone
    {
        self::$ASIAKHANDYGA ??= new Timezone('asia/khandyga');

        return self::$ASIAKHANDYGA;
    }
    public static function ASIAKOLKATA(): Timezone
    {
        self::$ASIAKOLKATA ??= new Timezone('asia/kolkata');

        return self::$ASIAKOLKATA;
    }
    public static function ASIAKRASNOYARSK(): Timezone
    {
        self::$ASIAKRASNOYARSK ??= new Timezone('asia/krasnoyarsk');

        return self::$ASIAKRASNOYARSK;
    }
    public static function ASIAKUALALUMPUR(): Timezone
    {
        self::$ASIAKUALALUMPUR ??= new Timezone('asia/kuala_lumpur');

        return self::$ASIAKUALALUMPUR;
    }
    public static function ASIAKUCHING(): Timezone
    {
        self::$ASIAKUCHING ??= new Timezone('asia/kuching');

        return self::$ASIAKUCHING;
    }
    public static function ASIAKUWAIT(): Timezone
    {
        self::$ASIAKUWAIT ??= new Timezone('asia/kuwait');

        return self::$ASIAKUWAIT;
    }
    public static function ASIAMACAU(): Timezone
    {
        self::$ASIAMACAU ??= new Timezone('asia/macau');

        return self::$ASIAMACAU;
    }
    public static function ASIAMAGADAN(): Timezone
    {
        self::$ASIAMAGADAN ??= new Timezone('asia/magadan');

        return self::$ASIAMAGADAN;
    }
    public static function ASIAMAKASSAR(): Timezone
    {
        self::$ASIAMAKASSAR ??= new Timezone('asia/makassar');

        return self::$ASIAMAKASSAR;
    }
    public static function ASIAMANILA(): Timezone
    {
        self::$ASIAMANILA ??= new Timezone('asia/manila');

        return self::$ASIAMANILA;
    }
    public static function ASIAMUSCAT(): Timezone
    {
        self::$ASIAMUSCAT ??= new Timezone('asia/muscat');

        return self::$ASIAMUSCAT;
    }
    public static function ASIANICOSIA(): Timezone
    {
        self::$ASIANICOSIA ??= new Timezone('asia/nicosia');

        return self::$ASIANICOSIA;
    }
    public static function ASIANOVOKUZNETSK(): Timezone
    {
        self::$ASIANOVOKUZNETSK ??= new Timezone('asia/novokuznetsk');

        return self::$ASIANOVOKUZNETSK;
    }
    public static function ASIANOVOSIBIRSK(): Timezone
    {
        self::$ASIANOVOSIBIRSK ??= new Timezone('asia/novosibirsk');

        return self::$ASIANOVOSIBIRSK;
    }
    public static function ASIAOMSK(): Timezone
    {
        self::$ASIAOMSK ??= new Timezone('asia/omsk');

        return self::$ASIAOMSK;
    }
    public static function ASIAORAL(): Timezone
    {
        self::$ASIAORAL ??= new Timezone('asia/oral');

        return self::$ASIAORAL;
    }
    public static function ASIAPHNOMPENH(): Timezone
    {
        self::$ASIAPHNOMPENH ??= new Timezone('asia/phnom_penh');

        return self::$ASIAPHNOMPENH;
    }
    public static function ASIAPONTIANAK(): Timezone
    {
        self::$ASIAPONTIANAK ??= new Timezone('asia/pontianak');

        return self::$ASIAPONTIANAK;
    }
    public static function ASIAPYONGYANG(): Timezone
    {
        self::$ASIAPYONGYANG ??= new Timezone('asia/pyongyang');

        return self::$ASIAPYONGYANG;
    }
    public static function ASIAQATAR(): Timezone
    {
        self::$ASIAQATAR ??= new Timezone('asia/qatar');

        return self::$ASIAQATAR;
    }
    public static function ASIAQOSTANAY(): Timezone
    {
        self::$ASIAQOSTANAY ??= new Timezone('asia/qostanay');

        return self::$ASIAQOSTANAY;
    }
    public static function ASIAQYZYLORDA(): Timezone
    {
        self::$ASIAQYZYLORDA ??= new Timezone('asia/qyzylorda');

        return self::$ASIAQYZYLORDA;
    }
    public static function ASIARIYADH(): Timezone
    {
        self::$ASIARIYADH ??= new Timezone('asia/riyadh');

        return self::$ASIARIYADH;
    }
    public static function ASIASAKHALIN(): Timezone
    {
        self::$ASIASAKHALIN ??= new Timezone('asia/sakhalin');

        return self::$ASIASAKHALIN;
    }
    public static function ASIASAMARKAND(): Timezone
    {
        self::$ASIASAMARKAND ??= new Timezone('asia/samarkand');

        return self::$ASIASAMARKAND;
    }
    public static function ASIASEOUL(): Timezone
    {
        self::$ASIASEOUL ??= new Timezone('asia/seoul');

        return self::$ASIASEOUL;
    }
    public static function ASIASHANGHAI(): Timezone
    {
        self::$ASIASHANGHAI ??= new Timezone('asia/shanghai');

        return self::$ASIASHANGHAI;
    }
    public static function ASIASINGAPORE(): Timezone
    {
        self::$ASIASINGAPORE ??= new Timezone('asia/singapore');

        return self::$ASIASINGAPORE;
    }
    public static function ASIASREDNEKOLYMSK(): Timezone
    {
        self::$ASIASREDNEKOLYMSK ??= new Timezone('asia/srednekolymsk');

        return self::$ASIASREDNEKOLYMSK;
    }
    public static function ASIATAIPEI(): Timezone
    {
        self::$ASIATAIPEI ??= new Timezone('asia/taipei');

        return self::$ASIATAIPEI;
    }
    public static function ASIATASHKENT(): Timezone
    {
        self::$ASIATASHKENT ??= new Timezone('asia/tashkent');

        return self::$ASIATASHKENT;
    }
    public static function ASIATBILISI(): Timezone
    {
        self::$ASIATBILISI ??= new Timezone('asia/tbilisi');

        return self::$ASIATBILISI;
    }
    public static function ASIATEHRAN(): Timezone
    {
        self::$ASIATEHRAN ??= new Timezone('asia/tehran');

        return self::$ASIATEHRAN;
    }
    public static function ASIATHIMPHU(): Timezone
    {
        self::$ASIATHIMPHU ??= new Timezone('asia/thimphu');

        return self::$ASIATHIMPHU;
    }
    public static function ASIATOKYO(): Timezone
    {
        self::$ASIATOKYO ??= new Timezone('asia/tokyo');

        return self::$ASIATOKYO;
    }
    public static function ASIATOMSK(): Timezone
    {
        self::$ASIATOMSK ??= new Timezone('asia/tomsk');

        return self::$ASIATOMSK;
    }
    public static function ASIAULAANBAATAR(): Timezone
    {
        self::$ASIAULAANBAATAR ??= new Timezone('asia/ulaanbaatar');

        return self::$ASIAULAANBAATAR;
    }
    public static function ASIAURUMQI(): Timezone
    {
        self::$ASIAURUMQI ??= new Timezone('asia/urumqi');

        return self::$ASIAURUMQI;
    }
    public static function ASIAUSTNERA(): Timezone
    {
        self::$ASIAUSTNERA ??= new Timezone('asia/ust-nera');

        return self::$ASIAUSTNERA;
    }
    public static function ASIAVIENTIANE(): Timezone
    {
        self::$ASIAVIENTIANE ??= new Timezone('asia/vientiane');

        return self::$ASIAVIENTIANE;
    }
    public static function ASIAVLADIVOSTOK(): Timezone
    {
        self::$ASIAVLADIVOSTOK ??= new Timezone('asia/vladivostok');

        return self::$ASIAVLADIVOSTOK;
    }
    public static function ASIAYAKUTSK(): Timezone
    {
        self::$ASIAYAKUTSK ??= new Timezone('asia/yakutsk');

        return self::$ASIAYAKUTSK;
    }
    public static function ASIAYANGON(): Timezone
    {
        self::$ASIAYANGON ??= new Timezone('asia/yangon');

        return self::$ASIAYANGON;
    }
    public static function ASIAYEKATERINBURG(): Timezone
    {
        self::$ASIAYEKATERINBURG ??= new Timezone('asia/yekaterinburg');

        return self::$ASIAYEKATERINBURG;
    }
    public static function ASIAYEREVAN(): Timezone
    {
        self::$ASIAYEREVAN ??= new Timezone('asia/yerevan');

        return self::$ASIAYEREVAN;
    }
    public static function ATLANTICAZORES(): Timezone
    {
        self::$ATLANTICAZORES ??= new Timezone('atlantic/azores');

        return self::$ATLANTICAZORES;
    }
    public static function ATLANTICBERMUDA(): Timezone
    {
        self::$ATLANTICBERMUDA ??= new Timezone('atlantic/bermuda');

        return self::$ATLANTICBERMUDA;
    }
    public static function ATLANTICCANARY(): Timezone
    {
        self::$ATLANTICCANARY ??= new Timezone('atlantic/canary');

        return self::$ATLANTICCANARY;
    }
    public static function ATLANTICCAPEVERDE(): Timezone
    {
        self::$ATLANTICCAPEVERDE ??= new Timezone('atlantic/cape_verde');

        return self::$ATLANTICCAPEVERDE;
    }
    public static function ATLANTICFAROE(): Timezone
    {
        self::$ATLANTICFAROE ??= new Timezone('atlantic/faroe');

        return self::$ATLANTICFAROE;
    }
    public static function ATLANTICMADEIRA(): Timezone
    {
        self::$ATLANTICMADEIRA ??= new Timezone('atlantic/madeira');

        return self::$ATLANTICMADEIRA;
    }
    public static function ATLANTICREYKJAVIK(): Timezone
    {
        self::$ATLANTICREYKJAVIK ??= new Timezone('atlantic/reykjavik');

        return self::$ATLANTICREYKJAVIK;
    }
    public static function ATLANTICSOUTHGEORGIA(): Timezone
    {
        self::$ATLANTICSOUTHGEORGIA ??= new Timezone('atlantic/south_georgia');

        return self::$ATLANTICSOUTHGEORGIA;
    }
    public static function ATLANTICSTHELENA(): Timezone
    {
        self::$ATLANTICSTHELENA ??= new Timezone('atlantic/st_helena');

        return self::$ATLANTICSTHELENA;
    }
    public static function ATLANTICSTANLEY(): Timezone
    {
        self::$ATLANTICSTANLEY ??= new Timezone('atlantic/stanley');

        return self::$ATLANTICSTANLEY;
    }
    public static function AUSTRALIAADELAIDE(): Timezone
    {
        self::$AUSTRALIAADELAIDE ??= new Timezone('australia/adelaide');

        return self::$AUSTRALIAADELAIDE;
    }
    public static function AUSTRALIABRISBANE(): Timezone
    {
        self::$AUSTRALIABRISBANE ??= new Timezone('australia/brisbane');

        return self::$AUSTRALIABRISBANE;
    }
    public static function AUSTRALIABROKENHILL(): Timezone
    {
        self::$AUSTRALIABROKENHILL ??= new Timezone('australia/broken_hill');

        return self::$AUSTRALIABROKENHILL;
    }
    public static function AUSTRALIADARWIN(): Timezone
    {
        self::$AUSTRALIADARWIN ??= new Timezone('australia/darwin');

        return self::$AUSTRALIADARWIN;
    }
    public static function AUSTRALIAEUCLA(): Timezone
    {
        self::$AUSTRALIAEUCLA ??= new Timezone('australia/eucla');

        return self::$AUSTRALIAEUCLA;
    }
    public static function AUSTRALIAHOBART(): Timezone
    {
        self::$AUSTRALIAHOBART ??= new Timezone('australia/hobart');

        return self::$AUSTRALIAHOBART;
    }
    public static function AUSTRALIALINDEMAN(): Timezone
    {
        self::$AUSTRALIALINDEMAN ??= new Timezone('australia/lindeman');

        return self::$AUSTRALIALINDEMAN;
    }
    public static function AUSTRALIALORDHOWE(): Timezone
    {
        self::$AUSTRALIALORDHOWE ??= new Timezone('australia/lord_howe');

        return self::$AUSTRALIALORDHOWE;
    }
    public static function AUSTRALIAMELBOURNE(): Timezone
    {
        self::$AUSTRALIAMELBOURNE ??= new Timezone('australia/melbourne');

        return self::$AUSTRALIAMELBOURNE;
    }
    public static function AUSTRALIAPERTH(): Timezone
    {
        self::$AUSTRALIAPERTH ??= new Timezone('australia/perth');

        return self::$AUSTRALIAPERTH;
    }
    public static function AUSTRALIASYDNEY(): Timezone
    {
        self::$AUSTRALIASYDNEY ??= new Timezone('australia/sydney');

        return self::$AUSTRALIASYDNEY;
    }
    public static function EUROPEAMSTERDAM(): Timezone
    {
        self::$EUROPEAMSTERDAM ??= new Timezone('europe/amsterdam');

        return self::$EUROPEAMSTERDAM;
    }
    public static function EUROPEANDORRA(): Timezone
    {
        self::$EUROPEANDORRA ??= new Timezone('europe/andorra');

        return self::$EUROPEANDORRA;
    }
    public static function EUROPEASTRAKHAN(): Timezone
    {
        self::$EUROPEASTRAKHAN ??= new Timezone('europe/astrakhan');

        return self::$EUROPEASTRAKHAN;
    }
    public static function EUROPEATHENS(): Timezone
    {
        self::$EUROPEATHENS ??= new Timezone('europe/athens');

        return self::$EUROPEATHENS;
    }
    public static function EUROPEBELGRADE(): Timezone
    {
        self::$EUROPEBELGRADE ??= new Timezone('europe/belgrade');

        return self::$EUROPEBELGRADE;
    }
    public static function EUROPEBERLIN(): Timezone
    {
        self::$EUROPEBERLIN ??= new Timezone('europe/berlin');

        return self::$EUROPEBERLIN;
    }
    public static function EUROPEBRATISLAVA(): Timezone
    {
        self::$EUROPEBRATISLAVA ??= new Timezone('europe/bratislava');

        return self::$EUROPEBRATISLAVA;
    }
    public static function EUROPEBRUSSELS(): Timezone
    {
        self::$EUROPEBRUSSELS ??= new Timezone('europe/brussels');

        return self::$EUROPEBRUSSELS;
    }
    public static function EUROPEBUCHAREST(): Timezone
    {
        self::$EUROPEBUCHAREST ??= new Timezone('europe/bucharest');

        return self::$EUROPEBUCHAREST;
    }
    public static function EUROPEBUDAPEST(): Timezone
    {
        self::$EUROPEBUDAPEST ??= new Timezone('europe/budapest');

        return self::$EUROPEBUDAPEST;
    }
    public static function EUROPEBUSINGEN(): Timezone
    {
        self::$EUROPEBUSINGEN ??= new Timezone('europe/busingen');

        return self::$EUROPEBUSINGEN;
    }
    public static function EUROPECHISINAU(): Timezone
    {
        self::$EUROPECHISINAU ??= new Timezone('europe/chisinau');

        return self::$EUROPECHISINAU;
    }
    public static function EUROPECOPENHAGEN(): Timezone
    {
        self::$EUROPECOPENHAGEN ??= new Timezone('europe/copenhagen');

        return self::$EUROPECOPENHAGEN;
    }
    public static function EUROPEDUBLIN(): Timezone
    {
        self::$EUROPEDUBLIN ??= new Timezone('europe/dublin');

        return self::$EUROPEDUBLIN;
    }
    public static function EUROPEGIBRALTAR(): Timezone
    {
        self::$EUROPEGIBRALTAR ??= new Timezone('europe/gibraltar');

        return self::$EUROPEGIBRALTAR;
    }
    public static function EUROPEGUERNSEY(): Timezone
    {
        self::$EUROPEGUERNSEY ??= new Timezone('europe/guernsey');

        return self::$EUROPEGUERNSEY;
    }
    public static function EUROPEHELSINKI(): Timezone
    {
        self::$EUROPEHELSINKI ??= new Timezone('europe/helsinki');

        return self::$EUROPEHELSINKI;
    }
    public static function EUROPEISLEOFMAN(): Timezone
    {
        self::$EUROPEISLEOFMAN ??= new Timezone('europe/isle_of_man');

        return self::$EUROPEISLEOFMAN;
    }
    public static function EUROPEISTANBUL(): Timezone
    {
        self::$EUROPEISTANBUL ??= new Timezone('europe/istanbul');

        return self::$EUROPEISTANBUL;
    }
    public static function EUROPEJERSEY(): Timezone
    {
        self::$EUROPEJERSEY ??= new Timezone('europe/jersey');

        return self::$EUROPEJERSEY;
    }
    public static function EUROPEKALININGRAD(): Timezone
    {
        self::$EUROPEKALININGRAD ??= new Timezone('europe/kaliningrad');

        return self::$EUROPEKALININGRAD;
    }
    public static function EUROPEKIROV(): Timezone
    {
        self::$EUROPEKIROV ??= new Timezone('europe/kirov');

        return self::$EUROPEKIROV;
    }
    public static function EUROPEKYIV(): Timezone
    {
        self::$EUROPEKYIV ??= new Timezone('europe/kyiv');

        return self::$EUROPEKYIV;
    }
    public static function EUROPELISBON(): Timezone
    {
        self::$EUROPELISBON ??= new Timezone('europe/lisbon');

        return self::$EUROPELISBON;
    }
    public static function EUROPELJUBLJANA(): Timezone
    {
        self::$EUROPELJUBLJANA ??= new Timezone('europe/ljubljana');

        return self::$EUROPELJUBLJANA;
    }
    public static function EUROPELONDON(): Timezone
    {
        self::$EUROPELONDON ??= new Timezone('europe/london');

        return self::$EUROPELONDON;
    }
    public static function EUROPELUXEMBOURG(): Timezone
    {
        self::$EUROPELUXEMBOURG ??= new Timezone('europe/luxembourg');

        return self::$EUROPELUXEMBOURG;
    }
    public static function EUROPEMADRID(): Timezone
    {
        self::$EUROPEMADRID ??= new Timezone('europe/madrid');

        return self::$EUROPEMADRID;
    }
    public static function EUROPEMALTA(): Timezone
    {
        self::$EUROPEMALTA ??= new Timezone('europe/malta');

        return self::$EUROPEMALTA;
    }
    public static function EUROPEMARIEHAMN(): Timezone
    {
        self::$EUROPEMARIEHAMN ??= new Timezone('europe/mariehamn');

        return self::$EUROPEMARIEHAMN;
    }
    public static function EUROPEMINSK(): Timezone
    {
        self::$EUROPEMINSK ??= new Timezone('europe/minsk');

        return self::$EUROPEMINSK;
    }
    public static function EUROPEMONACO(): Timezone
    {
        self::$EUROPEMONACO ??= new Timezone('europe/monaco');

        return self::$EUROPEMONACO;
    }
    public static function EUROPEMOSCOW(): Timezone
    {
        self::$EUROPEMOSCOW ??= new Timezone('europe/moscow');

        return self::$EUROPEMOSCOW;
    }
    public static function EUROPEOSLO(): Timezone
    {
        self::$EUROPEOSLO ??= new Timezone('europe/oslo');

        return self::$EUROPEOSLO;
    }
    public static function EUROPEPARIS(): Timezone
    {
        self::$EUROPEPARIS ??= new Timezone('europe/paris');

        return self::$EUROPEPARIS;
    }
    public static function EUROPEPODGORICA(): Timezone
    {
        self::$EUROPEPODGORICA ??= new Timezone('europe/podgorica');

        return self::$EUROPEPODGORICA;
    }
    public static function EUROPEPRAGUE(): Timezone
    {
        self::$EUROPEPRAGUE ??= new Timezone('europe/prague');

        return self::$EUROPEPRAGUE;
    }
    public static function EUROPERIGA(): Timezone
    {
        self::$EUROPERIGA ??= new Timezone('europe/riga');

        return self::$EUROPERIGA;
    }
    public static function EUROPEROME(): Timezone
    {
        self::$EUROPEROME ??= new Timezone('europe/rome');

        return self::$EUROPEROME;
    }
    public static function EUROPESAMARA(): Timezone
    {
        self::$EUROPESAMARA ??= new Timezone('europe/samara');

        return self::$EUROPESAMARA;
    }
    public static function EUROPESANMARINO(): Timezone
    {
        self::$EUROPESANMARINO ??= new Timezone('europe/san_marino');

        return self::$EUROPESANMARINO;
    }
    public static function EUROPESARAJEVO(): Timezone
    {
        self::$EUROPESARAJEVO ??= new Timezone('europe/sarajevo');

        return self::$EUROPESARAJEVO;
    }
    public static function EUROPESARATOV(): Timezone
    {
        self::$EUROPESARATOV ??= new Timezone('europe/saratov');

        return self::$EUROPESARATOV;
    }
    public static function EUROPESIMFEROPOL(): Timezone
    {
        self::$EUROPESIMFEROPOL ??= new Timezone('europe/simferopol');

        return self::$EUROPESIMFEROPOL;
    }
    public static function EUROPESKOPJE(): Timezone
    {
        self::$EUROPESKOPJE ??= new Timezone('europe/skopje');

        return self::$EUROPESKOPJE;
    }
    public static function EUROPESOFIA(): Timezone
    {
        self::$EUROPESOFIA ??= new Timezone('europe/sofia');

        return self::$EUROPESOFIA;
    }
    public static function EUROPESTOCKHOLM(): Timezone
    {
        self::$EUROPESTOCKHOLM ??= new Timezone('europe/stockholm');

        return self::$EUROPESTOCKHOLM;
    }
    public static function EUROPETALLINN(): Timezone
    {
        self::$EUROPETALLINN ??= new Timezone('europe/tallinn');

        return self::$EUROPETALLINN;
    }
    public static function EUROPETIRANE(): Timezone
    {
        self::$EUROPETIRANE ??= new Timezone('europe/tirane');

        return self::$EUROPETIRANE;
    }
    public static function EUROPEULYANOVSK(): Timezone
    {
        self::$EUROPEULYANOVSK ??= new Timezone('europe/ulyanovsk');

        return self::$EUROPEULYANOVSK;
    }
    public static function EUROPEVADUZ(): Timezone
    {
        self::$EUROPEVADUZ ??= new Timezone('europe/vaduz');

        return self::$EUROPEVADUZ;
    }
    public static function EUROPEVATICAN(): Timezone
    {
        self::$EUROPEVATICAN ??= new Timezone('europe/vatican');

        return self::$EUROPEVATICAN;
    }
    public static function EUROPEVIENNA(): Timezone
    {
        self::$EUROPEVIENNA ??= new Timezone('europe/vienna');

        return self::$EUROPEVIENNA;
    }
    public static function EUROPEVILNIUS(): Timezone
    {
        self::$EUROPEVILNIUS ??= new Timezone('europe/vilnius');

        return self::$EUROPEVILNIUS;
    }
    public static function EUROPEVOLGOGRAD(): Timezone
    {
        self::$EUROPEVOLGOGRAD ??= new Timezone('europe/volgograd');

        return self::$EUROPEVOLGOGRAD;
    }
    public static function EUROPEWARSAW(): Timezone
    {
        self::$EUROPEWARSAW ??= new Timezone('europe/warsaw');

        return self::$EUROPEWARSAW;
    }
    public static function EUROPEZAGREB(): Timezone
    {
        self::$EUROPEZAGREB ??= new Timezone('europe/zagreb');

        return self::$EUROPEZAGREB;
    }
    public static function EUROPEZURICH(): Timezone
    {
        self::$EUROPEZURICH ??= new Timezone('europe/zurich');

        return self::$EUROPEZURICH;
    }
    public static function INDIANANTANANARIVO(): Timezone
    {
        self::$INDIANANTANANARIVO ??= new Timezone('indian/antananarivo');

        return self::$INDIANANTANANARIVO;
    }
    public static function INDIANCHAGOS(): Timezone
    {
        self::$INDIANCHAGOS ??= new Timezone('indian/chagos');

        return self::$INDIANCHAGOS;
    }
    public static function INDIANCHRISTMAS(): Timezone
    {
        self::$INDIANCHRISTMAS ??= new Timezone('indian/christmas');

        return self::$INDIANCHRISTMAS;
    }
    public static function INDIANCOCOS(): Timezone
    {
        self::$INDIANCOCOS ??= new Timezone('indian/cocos');

        return self::$INDIANCOCOS;
    }
    public static function INDIANCOMORO(): Timezone
    {
        self::$INDIANCOMORO ??= new Timezone('indian/comoro');

        return self::$INDIANCOMORO;
    }
    public static function INDIANKERGUELEN(): Timezone
    {
        self::$INDIANKERGUELEN ??= new Timezone('indian/kerguelen');

        return self::$INDIANKERGUELEN;
    }
    public static function INDIANMAHE(): Timezone
    {
        self::$INDIANMAHE ??= new Timezone('indian/mahe');

        return self::$INDIANMAHE;
    }
    public static function INDIANMALDIVES(): Timezone
    {
        self::$INDIANMALDIVES ??= new Timezone('indian/maldives');

        return self::$INDIANMALDIVES;
    }
    public static function INDIANMAURITIUS(): Timezone
    {
        self::$INDIANMAURITIUS ??= new Timezone('indian/mauritius');

        return self::$INDIANMAURITIUS;
    }
    public static function INDIANMAYOTTE(): Timezone
    {
        self::$INDIANMAYOTTE ??= new Timezone('indian/mayotte');

        return self::$INDIANMAYOTTE;
    }
    public static function INDIANREUNION(): Timezone
    {
        self::$INDIANREUNION ??= new Timezone('indian/reunion');

        return self::$INDIANREUNION;
    }
    public static function PACIFICAPIA(): Timezone
    {
        self::$PACIFICAPIA ??= new Timezone('pacific/apia');

        return self::$PACIFICAPIA;
    }
    public static function PACIFICAUCKLAND(): Timezone
    {
        self::$PACIFICAUCKLAND ??= new Timezone('pacific/auckland');

        return self::$PACIFICAUCKLAND;
    }
    public static function PACIFICBOUGAINVILLE(): Timezone
    {
        self::$PACIFICBOUGAINVILLE ??= new Timezone('pacific/bougainville');

        return self::$PACIFICBOUGAINVILLE;
    }
    public static function PACIFICCHATHAM(): Timezone
    {
        self::$PACIFICCHATHAM ??= new Timezone('pacific/chatham');

        return self::$PACIFICCHATHAM;
    }
    public static function PACIFICCHUUK(): Timezone
    {
        self::$PACIFICCHUUK ??= new Timezone('pacific/chuuk');

        return self::$PACIFICCHUUK;
    }
    public static function PACIFICEASTER(): Timezone
    {
        self::$PACIFICEASTER ??= new Timezone('pacific/easter');

        return self::$PACIFICEASTER;
    }
    public static function PACIFICEFATE(): Timezone
    {
        self::$PACIFICEFATE ??= new Timezone('pacific/efate');

        return self::$PACIFICEFATE;
    }
    public static function PACIFICFAKAOFO(): Timezone
    {
        self::$PACIFICFAKAOFO ??= new Timezone('pacific/fakaofo');

        return self::$PACIFICFAKAOFO;
    }
    public static function PACIFICFIJI(): Timezone
    {
        self::$PACIFICFIJI ??= new Timezone('pacific/fiji');

        return self::$PACIFICFIJI;
    }
    public static function PACIFICFUNAFUTI(): Timezone
    {
        self::$PACIFICFUNAFUTI ??= new Timezone('pacific/funafuti');

        return self::$PACIFICFUNAFUTI;
    }
    public static function PACIFICGALAPAGOS(): Timezone
    {
        self::$PACIFICGALAPAGOS ??= new Timezone('pacific/galapagos');

        return self::$PACIFICGALAPAGOS;
    }
    public static function PACIFICGAMBIER(): Timezone
    {
        self::$PACIFICGAMBIER ??= new Timezone('pacific/gambier');

        return self::$PACIFICGAMBIER;
    }
    public static function PACIFICGUADALCANAL(): Timezone
    {
        self::$PACIFICGUADALCANAL ??= new Timezone('pacific/guadalcanal');

        return self::$PACIFICGUADALCANAL;
    }
    public static function PACIFICGUAM(): Timezone
    {
        self::$PACIFICGUAM ??= new Timezone('pacific/guam');

        return self::$PACIFICGUAM;
    }
    public static function PACIFICHONOLULU(): Timezone
    {
        self::$PACIFICHONOLULU ??= new Timezone('pacific/honolulu');

        return self::$PACIFICHONOLULU;
    }
    public static function PACIFICKANTON(): Timezone
    {
        self::$PACIFICKANTON ??= new Timezone('pacific/kanton');

        return self::$PACIFICKANTON;
    }
    public static function PACIFICKIRITIMATI(): Timezone
    {
        self::$PACIFICKIRITIMATI ??= new Timezone('pacific/kiritimati');

        return self::$PACIFICKIRITIMATI;
    }
    public static function PACIFICKOSRAE(): Timezone
    {
        self::$PACIFICKOSRAE ??= new Timezone('pacific/kosrae');

        return self::$PACIFICKOSRAE;
    }
    public static function PACIFICKWAJALEIN(): Timezone
    {
        self::$PACIFICKWAJALEIN ??= new Timezone('pacific/kwajalein');

        return self::$PACIFICKWAJALEIN;
    }
    public static function PACIFICMAJURO(): Timezone
    {
        self::$PACIFICMAJURO ??= new Timezone('pacific/majuro');

        return self::$PACIFICMAJURO;
    }
    public static function PACIFICMARQUESAS(): Timezone
    {
        self::$PACIFICMARQUESAS ??= new Timezone('pacific/marquesas');

        return self::$PACIFICMARQUESAS;
    }
    public static function PACIFICMIDWAY(): Timezone
    {
        self::$PACIFICMIDWAY ??= new Timezone('pacific/midway');

        return self::$PACIFICMIDWAY;
    }
    public static function PACIFICNAURU(): Timezone
    {
        self::$PACIFICNAURU ??= new Timezone('pacific/nauru');

        return self::$PACIFICNAURU;
    }
    public static function PACIFICNIUE(): Timezone
    {
        self::$PACIFICNIUE ??= new Timezone('pacific/niue');

        return self::$PACIFICNIUE;
    }
    public static function PACIFICNORFOLK(): Timezone
    {
        self::$PACIFICNORFOLK ??= new Timezone('pacific/norfolk');

        return self::$PACIFICNORFOLK;
    }
    public static function PACIFICNOUMEA(): Timezone
    {
        self::$PACIFICNOUMEA ??= new Timezone('pacific/noumea');

        return self::$PACIFICNOUMEA;
    }
    public static function PACIFICPAGOPAGO(): Timezone
    {
        self::$PACIFICPAGOPAGO ??= new Timezone('pacific/pago_pago');

        return self::$PACIFICPAGOPAGO;
    }
    public static function PACIFICPALAU(): Timezone
    {
        self::$PACIFICPALAU ??= new Timezone('pacific/palau');

        return self::$PACIFICPALAU;
    }
    public static function PACIFICPITCAIRN(): Timezone
    {
        self::$PACIFICPITCAIRN ??= new Timezone('pacific/pitcairn');

        return self::$PACIFICPITCAIRN;
    }
    public static function PACIFICPOHNPEI(): Timezone
    {
        self::$PACIFICPOHNPEI ??= new Timezone('pacific/pohnpei');

        return self::$PACIFICPOHNPEI;
    }
    public static function PACIFICPORTMORESBY(): Timezone
    {
        self::$PACIFICPORTMORESBY ??= new Timezone('pacific/port_moresby');

        return self::$PACIFICPORTMORESBY;
    }
    public static function PACIFICRAROTONGA(): Timezone
    {
        self::$PACIFICRAROTONGA ??= new Timezone('pacific/rarotonga');

        return self::$PACIFICRAROTONGA;
    }
    public static function PACIFICSAIPAN(): Timezone
    {
        self::$PACIFICSAIPAN ??= new Timezone('pacific/saipan');

        return self::$PACIFICSAIPAN;
    }
    public static function PACIFICTAHITI(): Timezone
    {
        self::$PACIFICTAHITI ??= new Timezone('pacific/tahiti');

        return self::$PACIFICTAHITI;
    }
    public static function PACIFICTARAWA(): Timezone
    {
        self::$PACIFICTARAWA ??= new Timezone('pacific/tarawa');

        return self::$PACIFICTARAWA;
    }
    public static function PACIFICTONGATAPU(): Timezone
    {
        self::$PACIFICTONGATAPU ??= new Timezone('pacific/tongatapu');

        return self::$PACIFICTONGATAPU;
    }
    public static function PACIFICWAKE(): Timezone
    {
        self::$PACIFICWAKE ??= new Timezone('pacific/wake');

        return self::$PACIFICWAKE;
    }
    public static function PACIFICWALLIS(): Timezone
    {
        self::$PACIFICWALLIS ??= new Timezone('pacific/wallis');

        return self::$PACIFICWALLIS;
    }
    public static function UTC(): Timezone
    {
        self::$UTC ??= new Timezone('utc');

        return self::$UTC;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'africa/abidjan' => self::AFRICAABIDJAN(),
            'africa/accra' => self::AFRICAACCRA(),
            'africa/addis_ababa' => self::AFRICAADDISABABA(),
            'africa/algiers' => self::AFRICAALGIERS(),
            'africa/asmara' => self::AFRICAASMARA(),
            'africa/bamako' => self::AFRICABAMAKO(),
            'africa/bangui' => self::AFRICABANGUI(),
            'africa/banjul' => self::AFRICABANJUL(),
            'africa/bissau' => self::AFRICABISSAU(),
            'africa/blantyre' => self::AFRICABLANTYRE(),
            'africa/brazzaville' => self::AFRICABRAZZAVILLE(),
            'africa/bujumbura' => self::AFRICABUJUMBURA(),
            'africa/cairo' => self::AFRICACAIRO(),
            'africa/casablanca' => self::AFRICACASABLANCA(),
            'africa/ceuta' => self::AFRICACEUTA(),
            'africa/conakry' => self::AFRICACONAKRY(),
            'africa/dakar' => self::AFRICADAKAR(),
            'africa/dar_es_salaam' => self::AFRICADARESSALAAM(),
            'africa/djibouti' => self::AFRICADJIBOUTI(),
            'africa/douala' => self::AFRICADOUALA(),
            'africa/el_aaiun' => self::AFRICAELAAIUN(),
            'africa/freetown' => self::AFRICAFREETOWN(),
            'africa/gaborone' => self::AFRICAGABORONE(),
            'africa/harare' => self::AFRICAHARARE(),
            'africa/johannesburg' => self::AFRICAJOHANNESBURG(),
            'africa/juba' => self::AFRICAJUBA(),
            'africa/kampala' => self::AFRICAKAMPALA(),
            'africa/khartoum' => self::AFRICAKHARTOUM(),
            'africa/kigali' => self::AFRICAKIGALI(),
            'africa/kinshasa' => self::AFRICAKINSHASA(),
            'africa/lagos' => self::AFRICALAGOS(),
            'africa/libreville' => self::AFRICALIBREVILLE(),
            'africa/lome' => self::AFRICALOME(),
            'africa/luanda' => self::AFRICALUANDA(),
            'africa/lubumbashi' => self::AFRICALUBUMBASHI(),
            'africa/lusaka' => self::AFRICALUSAKA(),
            'africa/malabo' => self::AFRICAMALABO(),
            'africa/maputo' => self::AFRICAMAPUTO(),
            'africa/maseru' => self::AFRICAMASERU(),
            'africa/mbabane' => self::AFRICAMBABANE(),
            'africa/mogadishu' => self::AFRICAMOGADISHU(),
            'africa/monrovia' => self::AFRICAMONROVIA(),
            'africa/nairobi' => self::AFRICANAIROBI(),
            'africa/ndjamena' => self::AFRICANDJAMENA(),
            'africa/niamey' => self::AFRICANIAMEY(),
            'africa/nouakchott' => self::AFRICANOUAKCHOTT(),
            'africa/ouagadougou' => self::AFRICAOUAGADOUGOU(),
            'africa/porto-novo' => self::AFRICAPORTONOVO(),
            'africa/sao_tome' => self::AFRICASAOTOME(),
            'africa/tripoli' => self::AFRICATRIPOLI(),
            'africa/tunis' => self::AFRICATUNIS(),
            'africa/windhoek' => self::AFRICAWINDHOEK(),
            'america/adak' => self::AMERICAADAK(),
            'america/anchorage' => self::AMERICAANCHORAGE(),
            'america/anguilla' => self::AMERICAANGUILLA(),
            'america/antigua' => self::AMERICAANTIGUA(),
            'america/araguaina' => self::AMERICAARAGUAINA(),
            'america/argentina/buenos_aires' => self::AMERICAARGENTINABUENOSAIRES(),
            'america/argentina/catamarca' => self::AMERICAARGENTINACATAMARCA(),
            'america/argentina/cordoba' => self::AMERICAARGENTINACORDOBA(),
            'america/argentina/jujuy' => self::AMERICAARGENTINAJUJUY(),
            'america/argentina/la_rioja' => self::AMERICAARGENTINALARIOJA(),
            'america/argentina/mendoza' => self::AMERICAARGENTINAMENDOZA(),
            'america/argentina/rio_gallegos' => self::AMERICAARGENTINARIOGALLEGOS(),
            'america/argentina/salta' => self::AMERICAARGENTINASALTA(),
            'america/argentina/san_juan' => self::AMERICAARGENTINASANJUAN(),
            'america/argentina/san_luis' => self::AMERICAARGENTINASANLUIS(),
            'america/argentina/tucuman' => self::AMERICAARGENTINATUCUMAN(),
            'america/argentina/ushuaia' => self::AMERICAARGENTINAUSHUAIA(),
            'america/aruba' => self::AMERICAARUBA(),
            'america/asuncion' => self::AMERICAASUNCION(),
            'america/atikokan' => self::AMERICAATIKOKAN(),
            'america/bahia' => self::AMERICABAHIA(),
            'america/bahia_banderas' => self::AMERICABAHIABANDERAS(),
            'america/barbados' => self::AMERICABARBADOS(),
            'america/belem' => self::AMERICABELEM(),
            'america/belize' => self::AMERICABELIZE(),
            'america/blanc-sablon' => self::AMERICABLANCSABLON(),
            'america/boa_vista' => self::AMERICABOAVISTA(),
            'america/bogota' => self::AMERICABOGOTA(),
            'america/boise' => self::AMERICABOISE(),
            'america/cambridge_bay' => self::AMERICACAMBRIDGEBAY(),
            'america/campo_grande' => self::AMERICACAMPOGRANDE(),
            'america/cancun' => self::AMERICACANCUN(),
            'america/caracas' => self::AMERICACARACAS(),
            'america/cayenne' => self::AMERICACAYENNE(),
            'america/cayman' => self::AMERICACAYMAN(),
            'america/chicago' => self::AMERICACHICAGO(),
            'america/chihuahua' => self::AMERICACHIHUAHUA(),
            'america/ciudad_juarez' => self::AMERICACIUDADJUAREZ(),
            'america/costa_rica' => self::AMERICACOSTARICA(),
            'america/coyhaique' => self::AMERICACOYHAIQUE(),
            'america/creston' => self::AMERICACRESTON(),
            'america/cuiaba' => self::AMERICACUIABA(),
            'america/curacao' => self::AMERICACURACAO(),
            'america/danmarkshavn' => self::AMERICADANMARKSHAVN(),
            'america/dawson' => self::AMERICADAWSON(),
            'america/dawson_creek' => self::AMERICADAWSONCREEK(),
            'america/denver' => self::AMERICADENVER(),
            'america/detroit' => self::AMERICADETROIT(),
            'america/dominica' => self::AMERICADOMINICA(),
            'america/edmonton' => self::AMERICAEDMONTON(),
            'america/eirunepe' => self::AMERICAEIRUNEPE(),
            'america/el_salvador' => self::AMERICAELSALVADOR(),
            'america/fort_nelson' => self::AMERICAFORTNELSON(),
            'america/fortaleza' => self::AMERICAFORTALEZA(),
            'america/glace_bay' => self::AMERICAGLACEBAY(),
            'america/goose_bay' => self::AMERICAGOOSEBAY(),
            'america/grand_turk' => self::AMERICAGRANDTURK(),
            'america/grenada' => self::AMERICAGRENADA(),
            'america/guadeloupe' => self::AMERICAGUADELOUPE(),
            'america/guatemala' => self::AMERICAGUATEMALA(),
            'america/guayaquil' => self::AMERICAGUAYAQUIL(),
            'america/guyana' => self::AMERICAGUYANA(),
            'america/halifax' => self::AMERICAHALIFAX(),
            'america/havana' => self::AMERICAHAVANA(),
            'america/hermosillo' => self::AMERICAHERMOSILLO(),
            'america/indiana/indianapolis' => self::AMERICAINDIANAINDIANAPOLIS(),
            'america/indiana/knox' => self::AMERICAINDIANAKNOX(),
            'america/indiana/marengo' => self::AMERICAINDIANAMARENGO(),
            'america/indiana/petersburg' => self::AMERICAINDIANAPETERSBURG(),
            'america/indiana/tell_city' => self::AMERICAINDIANATELLCITY(),
            'america/indiana/vevay' => self::AMERICAINDIANAVEVAY(),
            'america/indiana/vincennes' => self::AMERICAINDIANAVINCENNES(),
            'america/indiana/winamac' => self::AMERICAINDIANAWINAMAC(),
            'america/inuvik' => self::AMERICAINUVIK(),
            'america/iqaluit' => self::AMERICAIQALUIT(),
            'america/jamaica' => self::AMERICAJAMAICA(),
            'america/juneau' => self::AMERICAJUNEAU(),
            'america/kentucky/louisville' => self::AMERICAKENTUCKYLOUISVILLE(),
            'america/kentucky/monticello' => self::AMERICAKENTUCKYMONTICELLO(),
            'america/kralendijk' => self::AMERICAKRALENDIJK(),
            'america/la_paz' => self::AMERICALAPAZ(),
            'america/lima' => self::AMERICALIMA(),
            'america/los_angeles' => self::AMERICALOSANGELES(),
            'america/lower_princes' => self::AMERICALOWERPRINCES(),
            'america/maceio' => self::AMERICAMACEIO(),
            'america/managua' => self::AMERICAMANAGUA(),
            'america/manaus' => self::AMERICAMANAUS(),
            'america/marigot' => self::AMERICAMARIGOT(),
            'america/martinique' => self::AMERICAMARTINIQUE(),
            'america/matamoros' => self::AMERICAMATAMOROS(),
            'america/mazatlan' => self::AMERICAMAZATLAN(),
            'america/menominee' => self::AMERICAMENOMINEE(),
            'america/merida' => self::AMERICAMERIDA(),
            'america/metlakatla' => self::AMERICAMETLAKATLA(),
            'america/mexico_city' => self::AMERICAMEXICOCITY(),
            'america/miquelon' => self::AMERICAMIQUELON(),
            'america/moncton' => self::AMERICAMONCTON(),
            'america/monterrey' => self::AMERICAMONTERREY(),
            'america/montevideo' => self::AMERICAMONTEVIDEO(),
            'america/montserrat' => self::AMERICAMONTSERRAT(),
            'america/nassau' => self::AMERICANASSAU(),
            'america/new_york' => self::AMERICANEWYORK(),
            'america/nome' => self::AMERICANOME(),
            'america/noronha' => self::AMERICANORONHA(),
            'america/north_dakota/beulah' => self::AMERICANORTHDAKOTABEULAH(),
            'america/north_dakota/center' => self::AMERICANORTHDAKOTACENTER(),
            'america/north_dakota/new_salem' => self::AMERICANORTHDAKOTANEWSALEM(),
            'america/nuuk' => self::AMERICANUUK(),
            'america/ojinaga' => self::AMERICAOJINAGA(),
            'america/panama' => self::AMERICAPANAMA(),
            'america/paramaribo' => self::AMERICAPARAMARIBO(),
            'america/phoenix' => self::AMERICAPHOENIX(),
            'america/port-au-prince' => self::AMERICAPORTAUPRINCE(),
            'america/port_of_spain' => self::AMERICAPORTOFSPAIN(),
            'america/porto_velho' => self::AMERICAPORTOVELHO(),
            'america/puerto_rico' => self::AMERICAPUERTORICO(),
            'america/punta_arenas' => self::AMERICAPUNTAARENAS(),
            'america/rankin_inlet' => self::AMERICARANKININLET(),
            'america/recife' => self::AMERICARECIFE(),
            'america/regina' => self::AMERICAREGINA(),
            'america/resolute' => self::AMERICARESOLUTE(),
            'america/rio_branco' => self::AMERICARIOBRANCO(),
            'america/santarem' => self::AMERICASANTAREM(),
            'america/santiago' => self::AMERICASANTIAGO(),
            'america/santo_domingo' => self::AMERICASANTODOMINGO(),
            'america/sao_paulo' => self::AMERICASAOPAULO(),
            'america/scoresbysund' => self::AMERICASCORESBYSUND(),
            'america/sitka' => self::AMERICASITKA(),
            'america/st_barthelemy' => self::AMERICASTBARTHELEMY(),
            'america/st_johns' => self::AMERICASTJOHNS(),
            'america/st_kitts' => self::AMERICASTKITTS(),
            'america/st_lucia' => self::AMERICASTLUCIA(),
            'america/st_thomas' => self::AMERICASTTHOMAS(),
            'america/st_vincent' => self::AMERICASTVINCENT(),
            'america/swift_current' => self::AMERICASWIFTCURRENT(),
            'america/tegucigalpa' => self::AMERICATEGUCIGALPA(),
            'america/thule' => self::AMERICATHULE(),
            'america/tijuana' => self::AMERICATIJUANA(),
            'america/toronto' => self::AMERICATORONTO(),
            'america/tortola' => self::AMERICATORTOLA(),
            'america/vancouver' => self::AMERICAVANCOUVER(),
            'america/whitehorse' => self::AMERICAWHITEHORSE(),
            'america/winnipeg' => self::AMERICAWINNIPEG(),
            'america/yakutat' => self::AMERICAYAKUTAT(),
            'antarctica/casey' => self::ANTARCTICACASEY(),
            'antarctica/davis' => self::ANTARCTICADAVIS(),
            'antarctica/dumontdurville' => self::ANTARCTICADUMONTDURVILLE(),
            'antarctica/macquarie' => self::ANTARCTICAMACQUARIE(),
            'antarctica/mawson' => self::ANTARCTICAMAWSON(),
            'antarctica/mcmurdo' => self::ANTARCTICAMCMURDO(),
            'antarctica/palmer' => self::ANTARCTICAPALMER(),
            'antarctica/rothera' => self::ANTARCTICAROTHERA(),
            'antarctica/syowa' => self::ANTARCTICASYOWA(),
            'antarctica/troll' => self::ANTARCTICATROLL(),
            'antarctica/vostok' => self::ANTARCTICAVOSTOK(),
            'arctic/longyearbyen' => self::ARCTICLONGYEARBYEN(),
            'asia/aden' => self::ASIAADEN(),
            'asia/almaty' => self::ASIAALMATY(),
            'asia/amman' => self::ASIAAMMAN(),
            'asia/anadyr' => self::ASIAANADYR(),
            'asia/aqtau' => self::ASIAAQTAU(),
            'asia/aqtobe' => self::ASIAAQTOBE(),
            'asia/ashgabat' => self::ASIAASHGABAT(),
            'asia/atyrau' => self::ASIAATYRAU(),
            'asia/baghdad' => self::ASIABAGHDAD(),
            'asia/bahrain' => self::ASIABAHRAIN(),
            'asia/baku' => self::ASIABAKU(),
            'asia/bangkok' => self::ASIABANGKOK(),
            'asia/barnaul' => self::ASIABARNAUL(),
            'asia/beirut' => self::ASIABEIRUT(),
            'asia/bishkek' => self::ASIABISHKEK(),
            'asia/brunei' => self::ASIABRUNEI(),
            'asia/chita' => self::ASIACHITA(),
            'asia/colombo' => self::ASIACOLOMBO(),
            'asia/damascus' => self::ASIADAMASCUS(),
            'asia/dhaka' => self::ASIADHAKA(),
            'asia/dili' => self::ASIADILI(),
            'asia/dubai' => self::ASIADUBAI(),
            'asia/dushanbe' => self::ASIADUSHANBE(),
            'asia/famagusta' => self::ASIAFAMAGUSTA(),
            'asia/gaza' => self::ASIAGAZA(),
            'asia/hebron' => self::ASIAHEBRON(),
            'asia/ho_chi_minh' => self::ASIAHOCHIMINH(),
            'asia/hong_kong' => self::ASIAHONGKONG(),
            'asia/hovd' => self::ASIAHOVD(),
            'asia/irkutsk' => self::ASIAIRKUTSK(),
            'asia/jakarta' => self::ASIAJAKARTA(),
            'asia/jayapura' => self::ASIAJAYAPURA(),
            'asia/jerusalem' => self::ASIAJERUSALEM(),
            'asia/kabul' => self::ASIAKABUL(),
            'asia/kamchatka' => self::ASIAKAMCHATKA(),
            'asia/karachi' => self::ASIAKARACHI(),
            'asia/kathmandu' => self::ASIAKATHMANDU(),
            'asia/khandyga' => self::ASIAKHANDYGA(),
            'asia/kolkata' => self::ASIAKOLKATA(),
            'asia/krasnoyarsk' => self::ASIAKRASNOYARSK(),
            'asia/kuala_lumpur' => self::ASIAKUALALUMPUR(),
            'asia/kuching' => self::ASIAKUCHING(),
            'asia/kuwait' => self::ASIAKUWAIT(),
            'asia/macau' => self::ASIAMACAU(),
            'asia/magadan' => self::ASIAMAGADAN(),
            'asia/makassar' => self::ASIAMAKASSAR(),
            'asia/manila' => self::ASIAMANILA(),
            'asia/muscat' => self::ASIAMUSCAT(),
            'asia/nicosia' => self::ASIANICOSIA(),
            'asia/novokuznetsk' => self::ASIANOVOKUZNETSK(),
            'asia/novosibirsk' => self::ASIANOVOSIBIRSK(),
            'asia/omsk' => self::ASIAOMSK(),
            'asia/oral' => self::ASIAORAL(),
            'asia/phnom_penh' => self::ASIAPHNOMPENH(),
            'asia/pontianak' => self::ASIAPONTIANAK(),
            'asia/pyongyang' => self::ASIAPYONGYANG(),
            'asia/qatar' => self::ASIAQATAR(),
            'asia/qostanay' => self::ASIAQOSTANAY(),
            'asia/qyzylorda' => self::ASIAQYZYLORDA(),
            'asia/riyadh' => self::ASIARIYADH(),
            'asia/sakhalin' => self::ASIASAKHALIN(),
            'asia/samarkand' => self::ASIASAMARKAND(),
            'asia/seoul' => self::ASIASEOUL(),
            'asia/shanghai' => self::ASIASHANGHAI(),
            'asia/singapore' => self::ASIASINGAPORE(),
            'asia/srednekolymsk' => self::ASIASREDNEKOLYMSK(),
            'asia/taipei' => self::ASIATAIPEI(),
            'asia/tashkent' => self::ASIATASHKENT(),
            'asia/tbilisi' => self::ASIATBILISI(),
            'asia/tehran' => self::ASIATEHRAN(),
            'asia/thimphu' => self::ASIATHIMPHU(),
            'asia/tokyo' => self::ASIATOKYO(),
            'asia/tomsk' => self::ASIATOMSK(),
            'asia/ulaanbaatar' => self::ASIAULAANBAATAR(),
            'asia/urumqi' => self::ASIAURUMQI(),
            'asia/ust-nera' => self::ASIAUSTNERA(),
            'asia/vientiane' => self::ASIAVIENTIANE(),
            'asia/vladivostok' => self::ASIAVLADIVOSTOK(),
            'asia/yakutsk' => self::ASIAYAKUTSK(),
            'asia/yangon' => self::ASIAYANGON(),
            'asia/yekaterinburg' => self::ASIAYEKATERINBURG(),
            'asia/yerevan' => self::ASIAYEREVAN(),
            'atlantic/azores' => self::ATLANTICAZORES(),
            'atlantic/bermuda' => self::ATLANTICBERMUDA(),
            'atlantic/canary' => self::ATLANTICCANARY(),
            'atlantic/cape_verde' => self::ATLANTICCAPEVERDE(),
            'atlantic/faroe' => self::ATLANTICFAROE(),
            'atlantic/madeira' => self::ATLANTICMADEIRA(),
            'atlantic/reykjavik' => self::ATLANTICREYKJAVIK(),
            'atlantic/south_georgia' => self::ATLANTICSOUTHGEORGIA(),
            'atlantic/st_helena' => self::ATLANTICSTHELENA(),
            'atlantic/stanley' => self::ATLANTICSTANLEY(),
            'australia/adelaide' => self::AUSTRALIAADELAIDE(),
            'australia/brisbane' => self::AUSTRALIABRISBANE(),
            'australia/broken_hill' => self::AUSTRALIABROKENHILL(),
            'australia/darwin' => self::AUSTRALIADARWIN(),
            'australia/eucla' => self::AUSTRALIAEUCLA(),
            'australia/hobart' => self::AUSTRALIAHOBART(),
            'australia/lindeman' => self::AUSTRALIALINDEMAN(),
            'australia/lord_howe' => self::AUSTRALIALORDHOWE(),
            'australia/melbourne' => self::AUSTRALIAMELBOURNE(),
            'australia/perth' => self::AUSTRALIAPERTH(),
            'australia/sydney' => self::AUSTRALIASYDNEY(),
            'europe/amsterdam' => self::EUROPEAMSTERDAM(),
            'europe/andorra' => self::EUROPEANDORRA(),
            'europe/astrakhan' => self::EUROPEASTRAKHAN(),
            'europe/athens' => self::EUROPEATHENS(),
            'europe/belgrade' => self::EUROPEBELGRADE(),
            'europe/berlin' => self::EUROPEBERLIN(),
            'europe/bratislava' => self::EUROPEBRATISLAVA(),
            'europe/brussels' => self::EUROPEBRUSSELS(),
            'europe/bucharest' => self::EUROPEBUCHAREST(),
            'europe/budapest' => self::EUROPEBUDAPEST(),
            'europe/busingen' => self::EUROPEBUSINGEN(),
            'europe/chisinau' => self::EUROPECHISINAU(),
            'europe/copenhagen' => self::EUROPECOPENHAGEN(),
            'europe/dublin' => self::EUROPEDUBLIN(),
            'europe/gibraltar' => self::EUROPEGIBRALTAR(),
            'europe/guernsey' => self::EUROPEGUERNSEY(),
            'europe/helsinki' => self::EUROPEHELSINKI(),
            'europe/isle_of_man' => self::EUROPEISLEOFMAN(),
            'europe/istanbul' => self::EUROPEISTANBUL(),
            'europe/jersey' => self::EUROPEJERSEY(),
            'europe/kaliningrad' => self::EUROPEKALININGRAD(),
            'europe/kirov' => self::EUROPEKIROV(),
            'europe/kyiv' => self::EUROPEKYIV(),
            'europe/lisbon' => self::EUROPELISBON(),
            'europe/ljubljana' => self::EUROPELJUBLJANA(),
            'europe/london' => self::EUROPELONDON(),
            'europe/luxembourg' => self::EUROPELUXEMBOURG(),
            'europe/madrid' => self::EUROPEMADRID(),
            'europe/malta' => self::EUROPEMALTA(),
            'europe/mariehamn' => self::EUROPEMARIEHAMN(),
            'europe/minsk' => self::EUROPEMINSK(),
            'europe/monaco' => self::EUROPEMONACO(),
            'europe/moscow' => self::EUROPEMOSCOW(),
            'europe/oslo' => self::EUROPEOSLO(),
            'europe/paris' => self::EUROPEPARIS(),
            'europe/podgorica' => self::EUROPEPODGORICA(),
            'europe/prague' => self::EUROPEPRAGUE(),
            'europe/riga' => self::EUROPERIGA(),
            'europe/rome' => self::EUROPEROME(),
            'europe/samara' => self::EUROPESAMARA(),
            'europe/san_marino' => self::EUROPESANMARINO(),
            'europe/sarajevo' => self::EUROPESARAJEVO(),
            'europe/saratov' => self::EUROPESARATOV(),
            'europe/simferopol' => self::EUROPESIMFEROPOL(),
            'europe/skopje' => self::EUROPESKOPJE(),
            'europe/sofia' => self::EUROPESOFIA(),
            'europe/stockholm' => self::EUROPESTOCKHOLM(),
            'europe/tallinn' => self::EUROPETALLINN(),
            'europe/tirane' => self::EUROPETIRANE(),
            'europe/ulyanovsk' => self::EUROPEULYANOVSK(),
            'europe/vaduz' => self::EUROPEVADUZ(),
            'europe/vatican' => self::EUROPEVATICAN(),
            'europe/vienna' => self::EUROPEVIENNA(),
            'europe/vilnius' => self::EUROPEVILNIUS(),
            'europe/volgograd' => self::EUROPEVOLGOGRAD(),
            'europe/warsaw' => self::EUROPEWARSAW(),
            'europe/zagreb' => self::EUROPEZAGREB(),
            'europe/zurich' => self::EUROPEZURICH(),
            'indian/antananarivo' => self::INDIANANTANANARIVO(),
            'indian/chagos' => self::INDIANCHAGOS(),
            'indian/christmas' => self::INDIANCHRISTMAS(),
            'indian/cocos' => self::INDIANCOCOS(),
            'indian/comoro' => self::INDIANCOMORO(),
            'indian/kerguelen' => self::INDIANKERGUELEN(),
            'indian/mahe' => self::INDIANMAHE(),
            'indian/maldives' => self::INDIANMALDIVES(),
            'indian/mauritius' => self::INDIANMAURITIUS(),
            'indian/mayotte' => self::INDIANMAYOTTE(),
            'indian/reunion' => self::INDIANREUNION(),
            'pacific/apia' => self::PACIFICAPIA(),
            'pacific/auckland' => self::PACIFICAUCKLAND(),
            'pacific/bougainville' => self::PACIFICBOUGAINVILLE(),
            'pacific/chatham' => self::PACIFICCHATHAM(),
            'pacific/chuuk' => self::PACIFICCHUUK(),
            'pacific/easter' => self::PACIFICEASTER(),
            'pacific/efate' => self::PACIFICEFATE(),
            'pacific/fakaofo' => self::PACIFICFAKAOFO(),
            'pacific/fiji' => self::PACIFICFIJI(),
            'pacific/funafuti' => self::PACIFICFUNAFUTI(),
            'pacific/galapagos' => self::PACIFICGALAPAGOS(),
            'pacific/gambier' => self::PACIFICGAMBIER(),
            'pacific/guadalcanal' => self::PACIFICGUADALCANAL(),
            'pacific/guam' => self::PACIFICGUAM(),
            'pacific/honolulu' => self::PACIFICHONOLULU(),
            'pacific/kanton' => self::PACIFICKANTON(),
            'pacific/kiritimati' => self::PACIFICKIRITIMATI(),
            'pacific/kosrae' => self::PACIFICKOSRAE(),
            'pacific/kwajalein' => self::PACIFICKWAJALEIN(),
            'pacific/majuro' => self::PACIFICMAJURO(),
            'pacific/marquesas' => self::PACIFICMARQUESAS(),
            'pacific/midway' => self::PACIFICMIDWAY(),
            'pacific/nauru' => self::PACIFICNAURU(),
            'pacific/niue' => self::PACIFICNIUE(),
            'pacific/norfolk' => self::PACIFICNORFOLK(),
            'pacific/noumea' => self::PACIFICNOUMEA(),
            'pacific/pago_pago' => self::PACIFICPAGOPAGO(),
            'pacific/palau' => self::PACIFICPALAU(),
            'pacific/pitcairn' => self::PACIFICPITCAIRN(),
            'pacific/pohnpei' => self::PACIFICPOHNPEI(),
            'pacific/port_moresby' => self::PACIFICPORTMORESBY(),
            'pacific/rarotonga' => self::PACIFICRAROTONGA(),
            'pacific/saipan' => self::PACIFICSAIPAN(),
            'pacific/tahiti' => self::PACIFICTAHITI(),
            'pacific/tarawa' => self::PACIFICTARAWA(),
            'pacific/tongatapu' => self::PACIFICTONGATAPU(),
            'pacific/wake' => self::PACIFICWAKE(),
            'pacific/wallis' => self::PACIFICWALLIS(),
            'utc' => self::UTC(),
            default => throw new \InvalidArgumentException('Unknown Timezone value: ' . $value),
        };
    }
}
