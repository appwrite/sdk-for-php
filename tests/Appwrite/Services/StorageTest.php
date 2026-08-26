<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\InputFile;

final class StorageTest extends TestCase
{
    private Client&MockInterface $client;
    private Storage $storage;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->storage = new Storage($this->client);
    }

    public function testMethodListBuckets(): void
    {
        $data = [
            "total" => 5,
            "buckets" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => [],
                    "fileSecurity" => true,
                    "name" => "Documents",
                    "enabled" => true,
                    "maximumFileSize" => 100,
                    "allowedFileExtensions" => [],
                    "compression" => "gzip",
                    "encryption" => true,
                    "antivirus" => true,
                    "transformations" => true,
                    "totalSize" => 128
                ]
            ]
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->listBuckets();

        $this->assertInstanceOf(\Appwrite\Models\BucketList::class, $response);
    }
    public function testMethodCreateBucket(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "fileSecurity" => true,
            "name" => "Documents",
            "enabled" => true,
            "maximumFileSize" => 100,
            "allowedFileExtensions" => [],
            "compression" => "gzip",
            "encryption" => true,
            "antivirus" => true,
            "transformations" => true,
            "totalSize" => 128
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->createBucket(
            "<BUCKET_ID>",
            "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Bucket::class, $response);
    }
    public function testMethodGetBucket(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "fileSecurity" => true,
            "name" => "Documents",
            "enabled" => true,
            "maximumFileSize" => 100,
            "allowedFileExtensions" => [],
            "compression" => "gzip",
            "encryption" => true,
            "antivirus" => true,
            "transformations" => true,
            "totalSize" => 128
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->getBucket(
            "<BUCKET_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Bucket::class, $response);
    }
    public function testMethodUpdateBucket(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "fileSecurity" => true,
            "name" => "Documents",
            "enabled" => true,
            "maximumFileSize" => 100,
            "allowedFileExtensions" => [],
            "compression" => "gzip",
            "encryption" => true,
            "antivirus" => true,
            "transformations" => true,
            "totalSize" => 128
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->updateBucket(
            "<BUCKET_ID>",
            "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Bucket::class, $response);
    }
    public function testMethodDeleteBucket(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->deleteBucket(
            "<BUCKET_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListFiles(): void
    {
        $data = [
            "total" => 5,
            "files" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "bucketId" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => [],
                    "name" => "Pink.png",
                    "folder" => "photos/2026/",
                    "key" => "photos/2026/Pink.png",
                    "signature" => "5d529fd02b544198ae075bd57c1762bb",
                    "mimeType" => "image/png",
                    "sizeOriginal" => 17890,
                    "sizeActual" => 12345,
                    "chunksTotal" => 17890,
                    "chunksUploaded" => 17890,
                    "encryption" => true,
                    "compression" => "gzip"
                ]
            ]
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->listFiles(
            "<BUCKET_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\FileList::class, $response);
    }
    public function testMethodCreateFile(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "bucketId" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "name" => "Pink.png",
            "folder" => "photos/2026/",
            "key" => "photos/2026/Pink.png",
            "signature" => "5d529fd02b544198ae075bd57c1762bb",
            "mimeType" => "image/png",
            "sizeOriginal" => 17890,
            "sizeActual" => 12345,
            "chunksTotal" => 17890,
            "chunksUploaded" => 17890,
            "encryption" => true,
            "compression" => "gzip"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->createFile(
            "<BUCKET_ID>",
            "<FILE_ID>",
            InputFile::withData('', 'image/png')
        );

        $this->assertInstanceOf(\Appwrite\Models\File::class, $response);
    }
    public function testMethodGetFile(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "bucketId" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "name" => "Pink.png",
            "folder" => "photos/2026/",
            "key" => "photos/2026/Pink.png",
            "signature" => "5d529fd02b544198ae075bd57c1762bb",
            "mimeType" => "image/png",
            "sizeOriginal" => 17890,
            "sizeActual" => 12345,
            "chunksTotal" => 17890,
            "chunksUploaded" => 17890,
            "encryption" => true,
            "compression" => "gzip"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->getFile(
            "<BUCKET_ID>",
            "<FILE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\File::class, $response);
    }
    public function testMethodUpdateFile(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "bucketId" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "name" => "Pink.png",
            "folder" => "photos/2026/",
            "key" => "photos/2026/Pink.png",
            "signature" => "5d529fd02b544198ae075bd57c1762bb",
            "mimeType" => "image/png",
            "sizeOriginal" => 17890,
            "sizeActual" => 12345,
            "chunksTotal" => 17890,
            "chunksUploaded" => 17890,
            "encryption" => true,
            "compression" => "gzip"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->updateFile(
            "<BUCKET_ID>",
            "<FILE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\File::class, $response);
    }
    public function testMethodDeleteFile(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->deleteFile(
            "<BUCKET_ID>",
            "<FILE_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetFileDownload(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->getFileDownload(
            "<BUCKET_ID>",
            "<FILE_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetFilePreview(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->getFilePreview(
            "<BUCKET_ID>",
            "<FILE_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetFileView(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->getFileView(
            "<BUCKET_ID>",
            "<FILE_ID>"
        );

        $this->assertSame($data, $response);
    }
}
