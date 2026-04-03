<?php

namespace Appwrite\Models;

/**
 * Locale
 */
readonly class Locale
{
    use ArraySerializable;

    /**
     * Locale constructor.
     *
     * @param string $ip user ip address.
     * @param string $countryCode country code in [iso 3166-1](http://en.wikipedia.org/wiki/iso_3166-1) two-character format
     * @param string $country country name. this field support localization.
     * @param string $continentCode continent code. a two character continent code "af" for africa, "an" for antarctica, "as" for asia, "eu" for europe, "na" for north america, "oc" for oceania, and "sa" for south america.
     * @param string $continent continent name. this field support localization.
     * @param bool $eu true if country is part of the european union.
     * @param string $currency currency code in [iso 4217-1](http://en.wikipedia.org/wiki/iso_4217) three-character format
     */
    public function __construct(
        public string $ip,
        public string $countryCode,
        public string $country,
        public string $continentCode,
        public string $continent,
        public bool $eu,
        public string $currency
    ) {
    }
}
