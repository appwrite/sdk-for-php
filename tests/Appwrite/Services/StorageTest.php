<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\Compression;
use Appwrite\InputFile;
use Appwrite\Enums\ImageGravity;
use Appwrite\Enums\ImageFormat;

final class StorageTest extends TestCase
{
    use MockeryPHPUnitIntegration;

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
                    "description" => "Invoices and receipts uploaded by customers.",
                    "enabled" => true,
                    "maximumFileSize" => 100,
                    "allowedFileExtensions" => [],
                    "compression" => "gzip",
                    "encryption" => true,
                    "antivirus" => true,
                    "transformations" => true,
                    "stripMetadata" => true,
                    "totalSize" => 128
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/storage/buckets',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['queries', 'search', 'total'], array_keys($params));
                    $expected = [
                        'queries' => [],
                        'search' => "<SEARCH>",
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->listBuckets(
            queries: [],
            search: "<SEARCH>",
            total: false
        );

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
            "description" => "Invoices and receipts uploaded by customers.",
            "enabled" => true,
            "maximumFileSize" => 100,
            "allowedFileExtensions" => [],
            "compression" => "gzip",
            "encryption" => true,
            "antivirus" => true,
            "transformations" => true,
            "stripMetadata" => true,
            "totalSize" => 128
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/storage/buckets',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId', 'name', 'permissions', 'fileSecurity', 'enabled', 'maximumFileSize', 'allowedFileExtensions', 'compression', 'encryption', 'antivirus', 'transformations', 'description', 'stripMetadata'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                        'name' => "<NAME>",
                        'permissions' => [],
                        'fileSecurity' => false,
                        'enabled' => false,
                        'maximumFileSize' => 1,
                        'allowedFileExtensions' => [],
                        'compression' => Compression::NONE(),
                        'encryption' => false,
                        'antivirus' => false,
                        'transformations' => false,
                        'description' => "<DESCRIPTION>",
                        'stripMetadata' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->createBucket(
            "<BUCKET_ID>",
            "<NAME>",
            permissions: [],
            fileSecurity: false,
            enabled: false,
            maximumFileSize: 1,
            allowedFileExtensions: [],
            compression: Compression::NONE(),
            encryption: false,
            antivirus: false,
            transformations: false,
            description: "<DESCRIPTION>",
            stripMetadata: false
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
            "description" => "Invoices and receipts uploaded by customers.",
            "enabled" => true,
            "maximumFileSize" => 100,
            "allowedFileExtensions" => [],
            "compression" => "gzip",
            "encryption" => true,
            "antivirus" => true,
            "transformations" => true,
            "stripMetadata" => true,
            "totalSize" => 128
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/storage/buckets/%3CBUCKET_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
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
            "description" => "Invoices and receipts uploaded by customers.",
            "enabled" => true,
            "maximumFileSize" => 100,
            "allowedFileExtensions" => [],
            "compression" => "gzip",
            "encryption" => true,
            "antivirus" => true,
            "transformations" => true,
            "stripMetadata" => true,
            "totalSize" => 128
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/storage/buckets/%3CBUCKET_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId', 'name', 'permissions', 'fileSecurity', 'enabled', 'maximumFileSize', 'allowedFileExtensions', 'compression', 'encryption', 'antivirus', 'transformations', 'description', 'stripMetadata'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                        'name' => "<NAME>",
                        'permissions' => [],
                        'fileSecurity' => false,
                        'enabled' => false,
                        'maximumFileSize' => 1,
                        'allowedFileExtensions' => [],
                        'compression' => Compression::NONE(),
                        'encryption' => false,
                        'antivirus' => false,
                        'transformations' => false,
                        'description' => "<DESCRIPTION>",
                        'stripMetadata' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->updateBucket(
            "<BUCKET_ID>",
            "<NAME>",
            permissions: [],
            fileSecurity: false,
            enabled: false,
            maximumFileSize: 1,
            allowedFileExtensions: [],
            compression: Compression::NONE(),
            encryption: false,
            antivirus: false,
            transformations: false,
            description: "<DESCRIPTION>",
            stripMetadata: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Bucket::class, $response);
    }
    public function testMethodDeleteBucket(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/storage/buckets/%3CBUCKET_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
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
            ->expects()->call(
                'GET',
                '/storage/buckets/%3CBUCKET_ID%3E/files',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId', 'queries', 'search', 'total'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                        'queries' => [],
                        'search' => "<SEARCH>",
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->listFiles(
            "<BUCKET_ID>",
            queries: [],
            search: "<SEARCH>",
            total: false
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
            ->expects()->call(
                'POST',
                '/storage/buckets/%3CBUCKET_ID%3E/files',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId', 'fileId', 'file', 'permissions', 'folder'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                        'fileId' => "<FILE_ID>",
                        'permissions' => [],
                        'folder' => "photos/2026",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->createFile(
            "<BUCKET_ID>",
            "<FILE_ID>",
            InputFile::withData('', 'image/png'),
            permissions: [],
            folder: "photos/2026"
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
            ->expects()->call(
                'GET',
                '/storage/buckets/%3CBUCKET_ID%3E/files/%3CFILE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId', 'fileId'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                        'fileId' => "<FILE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
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
            ->expects()->call(
                'PUT',
                '/storage/buckets/%3CBUCKET_ID%3E/files/%3CFILE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId', 'fileId', 'name', 'permissions'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                        'fileId' => "<FILE_ID>",
                        'name' => "name",
                        'permissions' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->updateFile(
            "<BUCKET_ID>",
            "<FILE_ID>",
            name: "name",
            permissions: []
        );

        $this->assertInstanceOf(\Appwrite\Models\File::class, $response);
    }
    public function testMethodDeleteFile(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/storage/buckets/%3CBUCKET_ID%3E/files/%3CFILE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId', 'fileId'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                        'fileId' => "<FILE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
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
            ->expects()->call(
                'GET',
                '/storage/buckets/%3CBUCKET_ID%3E/files/%3CFILE_ID%3E/download',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId', 'fileId', 'token'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                        'fileId' => "<FILE_ID>",
                        'token' => "<TOKEN>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->getFileDownload(
            "<BUCKET_ID>",
            "<FILE_ID>",
            token: "<TOKEN>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetFilePreview(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/storage/buckets/%3CBUCKET_ID%3E/files/%3CFILE_ID%3E/preview',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId', 'fileId', 'width', 'height', 'gravity', 'quality', 'borderWidth', 'borderColor', 'borderRadius', 'opacity', 'rotation', 'background', 'output', 'token'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                        'fileId' => "<FILE_ID>",
                        'width' => 1,
                        'height' => 1,
                        'gravity' => ImageGravity::AUTO(),
                        'quality' => 1,
                        'borderWidth' => 1,
                        'borderColor' => "FFFFFF",
                        'borderRadius' => 1,
                        'opacity' => 1.0,
                        'rotation' => 1,
                        'background' => "FFFFFF",
                        'output' => ImageFormat::JPG(),
                        'token' => "<TOKEN>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->getFilePreview(
            "<BUCKET_ID>",
            "<FILE_ID>",
            width: 1,
            height: 1,
            gravity: ImageGravity::AUTO(),
            quality: 1,
            borderWidth: 1,
            borderColor: "FFFFFF",
            borderRadius: 1,
            opacity: 1.0,
            rotation: 1,
            background: "FFFFFF",
            output: ImageFormat::JPG(),
            token: "<TOKEN>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetFileView(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/storage/buckets/%3CBUCKET_ID%3E/files/%3CFILE_ID%3E/view',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId', 'fileId', 'token'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                        'fileId' => "<FILE_ID>",
                        'token' => "<TOKEN>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->storage->getFileView(
            "<BUCKET_ID>",
            "<FILE_ID>",
            token: "<TOKEN>"
        );

        $this->assertSame($data, $response);
    }
}
