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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('key', $data)) {
            throw new \InvalidArgumentException('Missing required field "key" for ' . static::class . '.');
        }
        if (!array_key_exists('installCommand', $data)) {
            throw new \InvalidArgumentException('Missing required field "installCommand" for ' . static::class . '.');
        }
        if (!array_key_exists('buildCommand', $data)) {
            throw new \InvalidArgumentException('Missing required field "buildCommand" for ' . static::class . '.');
        }
        if (!array_key_exists('outputDirectory', $data)) {
            throw new \InvalidArgumentException('Missing required field "outputDirectory" for ' . static::class . '.');
        }
        if (!array_key_exists('fallbackFile', $data)) {
            throw new \InvalidArgumentException('Missing required field "fallbackFile" for ' . static::class . '.');
        }

        return new static(
            key: $data['key'],
            installCommand: $data['installCommand'],
            buildCommand: $data['buildCommand'],
            outputDirectory: $data['outputDirectory'],
            fallbackFile: $data['fallbackFile']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'key' => static::serializeValue($this->key),
            'installCommand' => static::serializeValue($this->installCommand),
            'buildCommand' => static::serializeValue($this->buildCommand),
            'outputDirectory' => static::serializeValue($this->outputDirectory),
            'fallbackFile' => static::serializeValue($this->fallbackFile)
        ];

        return $result;
    }
}
