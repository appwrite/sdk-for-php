<?php
namespace Appwrite;

class Payload {
    private ?string $data;
    private ?string $path;

    public function __construct(
        public int $size = 0, 
        public ?string $filename = null,
        public ?string $mimeType = null
    )
    {
    }

    public static function fromFile(string $path, ?string $filename = null): self
    {
        if (!file_exists($path)) {
            throw new \Exception('File not found at path: ' . $path);
        }
        if ($filename === null) {
            $filename = basename($path);
        }
        $mimeType = mime_content_type($path);
        $instance = new Payload(filesize($path), $filename, $mimeType);
        $instance->path = $path;
        $instance->data = null;
        return $instance;
    }

    public static function fromBinary(string $data, ?string $filename = null, ?string $mimeType = null): self
    {
        $instance = new Payload(strlen($data), $filename, $mimeType);
        $instance->path = null;
        $instance->data = $data;
        return $instance;
    }

    public static function fromJson(array $data): self
    {
        $data = json_encode($data);
        return self::fromString($data);
    }

    public static function fromString(string $data): self
    {
        return self::fromBinary($data);
    }

    public function toBinary(?int $offset = 0, ?int $length = null): string
    {
        $length = $length ?? ($this->size - $offset);
        if ($this->data) {
            return substr($this->data, $offset, $length);
        } else {
            return file_get_contents($this->path, false, null, $offset, $length);
        }
    }

    public function toJson(): mixed
    {
        return json_decode($this->data, true);
    }

    public function toString(): string
    {
        return $this->data;
    }

    public function toFile(string $path): void
    {
        file_put_contents($path, $this->data);
    }
}
