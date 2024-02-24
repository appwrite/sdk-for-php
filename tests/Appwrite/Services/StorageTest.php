<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class StorageTest extends TestCase {
    private $client;
    private $storage;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->storage = new Storage($this->client);
    }

    public function testMethodListBuckets(): void {

        $data = array(
            "total" => 5,
            "buckets" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->listBuckets(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateBucket(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "fileSecurity" => true,
            "name" => "Documents",
            "enabled" => true,
            "maximumFileSize" => 100,
            "allowedFileExtensions" => array(),
            "compression" => "gzip",
            "encryption" => true,
            "antivirus" => true,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->createBucket(
            "<BUCKET_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetBucket(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "fileSecurity" => true,
            "name" => "Documents",
            "enabled" => true,
            "maximumFileSize" => 100,
            "allowedFileExtensions" => array(),
            "compression" => "gzip",
            "encryption" => true,
            "antivirus" => true,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->getBucket(
            "<BUCKET_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateBucket(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "fileSecurity" => true,
            "name" => "Documents",
            "enabled" => true,
            "maximumFileSize" => 100,
            "allowedFileExtensions" => array(),
            "compression" => "gzip",
            "encryption" => true,
            "antivirus" => true,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->updateBucket(
            "<BUCKET_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteBucket(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->deleteBucket(
            "<BUCKET_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListFiles(): void {

        $data = array(
            "total" => 5,
            "files" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->listFiles(
            "<BUCKET_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateFile(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "bucketId" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "name" => "Pink.png",
            "signature" => "5d529fd02b544198ae075bd57c1762bb",
            "mimeType" => "image/png",
            "sizeOriginal" => 17890,
            "chunksTotal" => 17890,
            "chunksUploaded" => 17890,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->createFile(
            "<BUCKET_ID>",
            "<FILE_ID>",
            InputFile::withData('', "image/png")
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetFile(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "bucketId" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "name" => "Pink.png",
            "signature" => "5d529fd02b544198ae075bd57c1762bb",
            "mimeType" => "image/png",
            "sizeOriginal" => 17890,
            "chunksTotal" => 17890,
            "chunksUploaded" => 17890,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->getFile(
            "<BUCKET_ID>",
            "<FILE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateFile(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "bucketId" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "name" => "Pink.png",
            "signature" => "5d529fd02b544198ae075bd57c1762bb",
            "mimeType" => "image/png",
            "sizeOriginal" => 17890,
            "chunksTotal" => 17890,
            "chunksUploaded" => 17890,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->updateFile(
            "<BUCKET_ID>",
            "<FILE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteFile(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->deleteFile(
            "<BUCKET_ID>",
            "<FILE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetFileDownload(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->getFileDownload(
            "<BUCKET_ID>",
            "<FILE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetFilePreview(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->getFilePreview(
            "<BUCKET_ID>",
            "<FILE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetFileView(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->getFileView(
            "<BUCKET_ID>",
            "<FILE_ID>"
        );

        $this->assertSame($data, $response);
    }

}
