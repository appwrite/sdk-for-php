<?php

namespace Appwrite\Models;

use Appwrite\Enums\HealthAntivirusStatus;

/**
 * Health Antivirus
 */
readonly class HealthAntivirus
{
    use ArraySerializable;

    /**
     * HealthAntivirus constructor.
     *
     * @param string $version antivirus version.
     * @param HealthAntivirusStatus $status antivirus status. possible values are: `disabled`, `offline`, `online`
     */
    public function __construct(
        public string $version,
        public HealthAntivirusStatus $status
    ) {
    }
}
