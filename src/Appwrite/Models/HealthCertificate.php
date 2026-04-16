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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('subjectSN', $data)) {
            throw new \InvalidArgumentException('Missing required field "subjectSN" for ' . static::class . '.');
        }
        if (!array_key_exists('issuerOrganisation', $data)) {
            throw new \InvalidArgumentException('Missing required field "issuerOrganisation" for ' . static::class . '.');
        }
        if (!array_key_exists('validFrom', $data)) {
            throw new \InvalidArgumentException('Missing required field "validFrom" for ' . static::class . '.');
        }
        if (!array_key_exists('validTo', $data)) {
            throw new \InvalidArgumentException('Missing required field "validTo" for ' . static::class . '.');
        }
        if (!array_key_exists('signatureTypeSN', $data)) {
            throw new \InvalidArgumentException('Missing required field "signatureTypeSN" for ' . static::class . '.');
        }

        return new static(
            name: $data['name'],
            subjectSN: $data['subjectSN'],
            issuerOrganisation: $data['issuerOrganisation'],
            validFrom: $data['validFrom'],
            validTo: $data['validTo'],
            signatureTypeSN: $data['signatureTypeSN']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'name' => static::serializeValue($this->name),
            'subjectSN' => static::serializeValue($this->subjectSN),
            'issuerOrganisation' => static::serializeValue($this->issuerOrganisation),
            'validFrom' => static::serializeValue($this->validFrom),
            'validTo' => static::serializeValue($this->validTo),
            'signatureTypeSN' => static::serializeValue($this->signatureTypeSN)
        ];

        return $result;
    }
}
