<?php

namespace Appwrite\Models;

/**
 * Runtime
 */
readonly class Runtime
{
    use ArraySerializable;

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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('key', $data)) {
            throw new \InvalidArgumentException('Missing required field "key" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('version', $data)) {
            throw new \InvalidArgumentException('Missing required field "version" for ' . static::class . '.');
        }
        if (!array_key_exists('base', $data)) {
            throw new \InvalidArgumentException('Missing required field "base" for ' . static::class . '.');
        }
        if (!array_key_exists('image', $data)) {
            throw new \InvalidArgumentException('Missing required field "image" for ' . static::class . '.');
        }
        if (!array_key_exists('logo', $data)) {
            throw new \InvalidArgumentException('Missing required field "logo" for ' . static::class . '.');
        }
        if (!array_key_exists('supports', $data)) {
            throw new \InvalidArgumentException('Missing required field "supports" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            key: $data['key'],
            name: $data['name'],
            version: $data['version'],
            base: $data['base'],
            image: $data['image'],
            logo: $data['logo'],
            supports: $data['supports']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            'key' => static::serializeValue($this->key),
            'name' => static::serializeValue($this->name),
            'version' => static::serializeValue($this->version),
            'base' => static::serializeValue($this->base),
            'image' => static::serializeValue($this->image),
            'logo' => static::serializeValue($this->logo),
            'supports' => static::serializeValue($this->supports)
        ];

        return $result;
    }
}
