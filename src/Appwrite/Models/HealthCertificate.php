<?php

namespace Appwrite\Models;

/**
 * Health Certificate
 */
readonly class HealthCertificate
{
    use ArraySerializable;

    /**
     * HealthCertificate constructor.
     *
     * @param string $name certificate name
     * @param string $subjectSN subject sn
     * @param string $issuerOrganisation issuer organisation
     * @param string $validFrom valid from
     * @param string $validTo valid to
     * @param string $signatureTypeSN signature type sn
     */
    public function __construct(
        public string $name,
        public string $subjectSN,
        public string $issuerOrganisation,
        public string $validFrom,
        public string $validTo,
        public string $signatureTypeSN
    ) {
    }
}
