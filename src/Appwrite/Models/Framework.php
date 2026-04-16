<?php

namespace Appwrite\Models;

/**
 * Framework
 */
readonly class Framework
{
    use ArraySerializable;

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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('key', $data)) {
            throw new \InvalidArgumentException('Missing required field "key" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('buildRuntime', $data)) {
            throw new \InvalidArgumentException('Missing required field "buildRuntime" for ' . static::class . '.');
        }
        if (!array_key_exists('runtimes', $data)) {
            throw new \InvalidArgumentException('Missing required field "runtimes" for ' . static::class . '.');
        }
        if (!array_key_exists('adapters', $data)) {
            throw new \InvalidArgumentException('Missing required field "adapters" for ' . static::class . '.');
        }

        return new static(
            key: $data['key'],
            name: $data['name'],
            buildRuntime: $data['buildRuntime'],
            runtimes: $data['runtimes'],
            adapters: is_array($data['adapters'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(FrameworkAdapter::class, $item),
                    $data['adapters']
                )
                : $data['adapters']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'key' => static::serializeValue($this->key),
            'name' => static::serializeValue($this->name),
            'buildRuntime' => static::serializeValue($this->buildRuntime),
            'runtimes' => static::serializeValue($this->runtimes),
            'adapters' => static::serializeValue($this->adapters)
        ];

        return $result;
    }
}
