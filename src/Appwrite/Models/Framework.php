<?php

namespace Appwrite\Models;

/**
 * Framework
 */
readonly class Framework
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'adapters' => FrameworkAdapter::class
    ];

    /**
     * Framework constructor.
     *
     * @param string $key framework key.
     * @param string $name framework name.
     * @param string $buildRuntime default runtime version.
     * @param array $runtimes list of supported runtime versions.
     * @param list<FrameworkAdapter> $adapters list of supported adapters.
     */
    public function __construct(
        public string $key,
        public string $name,
        public string $buildRuntime,
        public array $runtimes,
        public array $adapters
    ) {
    }
}
