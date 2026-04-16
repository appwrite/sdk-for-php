<?php

namespace Appwrite\Models;

/**
 * Files List
 */
readonly class FileList
{
    use ArraySerializable;

    /**
     * FileList constructor.
     *
     * @param int $total total number of files that matched your query.
     * @param list<File> $files list of files.
     */
    public function __construct(
        public int $total,
        public array $files
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('files', $data)) {
            throw new \InvalidArgumentException('Missing required field "files" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            files: is_array($data['files'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(File::class, $item),
                    $data['files']
                )
                : $data['files']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'files' => static::serializeValue($this->files)
        ];

        return $result;
    }
}
