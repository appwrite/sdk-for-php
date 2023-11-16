# Locale Service

## Get user locale

```http request
GET https://HOSTNAME/v1/locale
```

** Get the current user location based on IP. Returns an object with user country code, country name, continent name, continent code, ip address and suggested currency. You can use the locale header to get the data in a supported language.

([IP Geolocation by DB-IP](https://db-ip.com)) **

## List Locale Codes

```http request
GET https://HOSTNAME/v1/locale/codes
```

** List of all locale codes in [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes). **

## List continents

```http request
GET https://HOSTNAME/v1/locale/continents
```

** List of all continents. You can use the locale header to get the data in a supported language. **

## List countries

```http request
GET https://HOSTNAME/v1/locale/countries
```

** List of all countries. You can use the locale header to get the data in a supported language. **

## List EU countries

```http request
GET https://HOSTNAME/v1/locale/countries/eu
```

** List of all countries that are currently members of the EU. You can use the locale header to get the data in a supported language. **

## List countries phone codes

```http request
GET https://HOSTNAME/v1/locale/countries/phones
```

** List of all countries phone codes. You can use the locale header to get the data in a supported language. **

## List currencies

```http request
GET https://HOSTNAME/v1/locale/currencies
```

** List of all currencies, including currency symbol, name, plural, and decimal digits for all major and minor currencies. You can use the locale header to get the data in a supported language. **

## List languages

```http request
GET https://HOSTNAME/v1/locale/languages
```

** List of all languages classified by ISO 639-1 including 2-letter code, name in English, and name in the respective language. **

