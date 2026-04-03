<?php

namespace Appwrite\Models;

/**
 * Framework Adapter
 */
readonly class FrameworkAdapter
{
    use ArraySerializable;

    /**
     * FrameworkAdapter constructor.
     *
     * @param string $key adapter key.
     * @param string $installCommand default command to download dependencies.
     * @param string $buildCommand default command to build site into output directory.
     * @param string $outputDirectory default output directory of build.
     * @param string $fallbackFile name of fallback file to use instead of 404 page. if null, appwrite 404 page will be displayed.
     */
    public function __construct(
        public string $key,
        public string $installCommand,
        public string $buildCommand,
        public string $outputDirectory,
        public string $fallbackFile
    ) {
    }
}
