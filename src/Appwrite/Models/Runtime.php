<?php

namespace Appwrite\Models;

/**
 * Runtime
 */
readonly class Runtime
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id'
    ];

    /**
     * Runtime constructor.
     *
     * @param string $id runtime id.
     * @param string $key parent runtime key.
     * @param string $name runtime name.
     * @param string $version runtime version.
     * @param string $base base docker image used to build the runtime.
     * @param string $image image name of docker hub.
     * @param string $logo name of the logo image.
     * @param array $supports list of supported architectures.
     */
    public function __construct(
        public string $id,
        public string $key,
        public string $name,
        public string $version,
        public string $base,
        public string $image,
        public string $logo,
        public array $supports
    ) {
    }
}
