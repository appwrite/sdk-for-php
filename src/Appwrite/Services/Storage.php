<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Storage extends Service
{
     public function __construct(Client $client)
     {
          $this->client = $client;
     }

    /**
     * List buckets
     *
     * Get a list of all the storage buckets. You can use the query params to
     * filter your results.
     *
     * @param array $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function listBuckets(array $queries = null, string $search = null): array
    {
        $apiPath = str_replace([], [], '/storage/buckets');

        $apiParams = [];
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create bucket
     *
     * Create a new storage bucket.
     *
     * @param string $bucketId
     * @param string $name
     * @param array $permissions
     * @param bool $fileSecurity
     * @param bool $enabled
     * @param int $maximumFileSize
     * @param array $allowedFileExtensions
     * @param string $compression
     * @param bool $encryption
     * @param bool $antivirus
     * @throws AppwriteException
     * @return array

     */
    public function createBucket(string $bucketId, string $name, array $permissions = null, bool $fileSecurity = null, bool $enabled = null, int $maximumFileSize = null, array $allowedFileExtensions = null, string $compression = null, bool $encryption = null, bool $antivirus = null): array
    {
        $apiPath = str_replace([], [], '/storage/buckets');

        $apiParams = [];
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($bucketId)) {
            $apiParams['bucketId'] = $bucketId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        if (!is_null($fileSecurity)) {
            $apiParams['fileSecurity'] = $fileSecurity;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($maximumFileSize)) {
            $apiParams['maximumFileSize'] = $maximumFileSize;
        }

        if (!is_null($allowedFileExtensions)) {
            $apiParams['allowedFileExtensions'] = $allowedFileExtensions;
        }

        if (!is_null($compression)) {
            $apiParams['compression'] = $compression;
        }

        if (!is_null($encryption)) {
            $apiParams['encryption'] = $encryption;
        }

        if (!is_null($antivirus)) {
            $apiParams['antivirus'] = $antivirus;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get bucket
     *
     * Get a storage bucket by its unique ID. This endpoint response returns a
     * JSON object with the storage bucket metadata.
     *
     * @param string $bucketId
     * @throws AppwriteException
     * @return array

     */
    public function getBucket(string $bucketId): array
    {
        $apiPath = str_replace(['{bucketId}'], [$bucketId], '/storage/buckets/{bucketId}');

        $apiParams = [];
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update bucket
     *
     * Update a storage bucket by its unique ID.
     *
     * @param string $bucketId
     * @param string $name
     * @param array $permissions
     * @param bool $fileSecurity
     * @param bool $enabled
     * @param int $maximumFileSize
     * @param array $allowedFileExtensions
     * @param string $compression
     * @param bool $encryption
     * @param bool $antivirus
     * @throws AppwriteException
     * @return array

     */
    public function updateBucket(string $bucketId, string $name, array $permissions = null, bool $fileSecurity = null, bool $enabled = null, int $maximumFileSize = null, array $allowedFileExtensions = null, string $compression = null, bool $encryption = null, bool $antivirus = null): array
    {
        $apiPath = str_replace(['{bucketId}'], [$bucketId], '/storage/buckets/{bucketId}');

        $apiParams = [];
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        if (!is_null($fileSecurity)) {
            $apiParams['fileSecurity'] = $fileSecurity;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($maximumFileSize)) {
            $apiParams['maximumFileSize'] = $maximumFileSize;
        }

        if (!is_null($allowedFileExtensions)) {
            $apiParams['allowedFileExtensions'] = $allowedFileExtensions;
        }

        if (!is_null($compression)) {
            $apiParams['compression'] = $compression;
        }

        if (!is_null($encryption)) {
            $apiParams['encryption'] = $encryption;
        }

        if (!is_null($antivirus)) {
            $apiParams['antivirus'] = $antivirus;
        }


        return $this->client->call(Client::METHOD_PUT, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete bucket
     *
     * Delete a storage bucket by its unique ID.
     *
     * @param string $bucketId
     * @throws AppwriteException
     * @return string

     */
    public function deleteBucket(string $bucketId): string
    {
        $apiPath = str_replace(['{bucketId}'], [$bucketId], '/storage/buckets/{bucketId}');

        $apiParams = [];
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List files
     *
     * Get a list of all the user files. You can use the query params to filter
     * your results.
     *
     * @param string $bucketId
     * @param array $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function listFiles(string $bucketId, array $queries = null, string $search = null): array
    {
        $apiPath = str_replace(['{bucketId}'], [$bucketId], '/storage/buckets/{bucketId}/files');

        $apiParams = [];
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create file
     *
     * Create a new file. Before using this route, you should create a new bucket
     * resource using either a [server
     * integration](https://appwrite.io/docs/server/storage#storageCreateBucket)
     * API or directly from your Appwrite console.
     * 
     * Larger files should be uploaded using multiple requests with the
     * [content-range](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Range)
     * header to send a partial request with a maximum supported chunk of `5MB`.
     * The `content-range` header values should always be in bytes.
     * 
     * When the first request is sent, the server will return the **File** object,
     * and the subsequent part request must include the file's **id** in
     * `x-appwrite-id` header to allow the server to know that the partial upload
     * is for the existing file and not for a new one.
     * 
     * If you're creating a new file using one of the Appwrite SDKs, all the
     * chunking logic will be managed by the SDK internally.
     * 
     *
     * @param string $bucketId
     * @param string $fileId
     * @param InputFile $file
     * @param array $permissions
     * @throws AppwriteException
     * @return array

     */
    public function createFile(string $bucketId, string $fileId, InputFile $file, array $permissions = null, callable $onProgress = null): array
    {
        $apiPath = str_replace(['{bucketId}'], [$bucketId], '/storage/buckets/{bucketId}/files');

        $apiParams = [];
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }
        if (!isset($fileId)) {
            throw new AppwriteException('Missing required parameter: "fileId"');
        }
        if (!isset($file)) {
            throw new AppwriteException('Missing required parameter: "file"');
        }
        if (!is_null($fileId)) {
            $apiParams['fileId'] = $fileId;
        }

        if (!is_null($file)) {
            $apiParams['file'] = $file;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }


        $size = 0;
        $mimeType = null;
        $postedName = null;
        if(empty($file->getPath() ?? null)) {
            $size = strlen($file->getData());
            $mimeType = $file->getMimeType();
            $postedName = $file->getFilename();
            if ($size <= Client::CHUNK_SIZE) {
                $apiParams['file'] = new \CURLFile('data://' . $mimeType . ';base64,' . base64_encode($file->getData()), $mimeType, $postedName);
                return $this->client->call(Client::METHOD_POST, $apiPath, [
                            'content-type' => 'multipart/form-data',
                        ], $apiParams);
            }
        } else {
            $size = filesize($file->getPath());
            $mimeType = $file->getMimeType() ?? mime_content_type($file->getPath());
            $postedName = $file->getFilename() ?? basename($file->getPath());
            //send single file if size is less than or equal to 5MB
            if ($size <= Client::CHUNK_SIZE) {
                $apiParams['file'] = new \CURLFile($file->getPath(), $mimeType, $postedName);
                return $this->client->call(Client::METHOD_POST, $apiPath, [
                            'content-type' => 'multipart/form-data',
                        ], $apiParams);
            }
        }

        $id = '';
        $counter = 0;

        if($fileId != 'unique()') {
            try {
                $response = $this->client->call(Client::METHOD_GET, $apiPath . '/' . $fileId);
                $counter = $response['chunksUploaded'] ?? 0;
            } catch(\Exception $e) {
            }
        }

        $apiHeaders = ['content-type' => 'multipart/form-data'];
        $handle = null;

        if(!empty($file->getPath())) {
            $handle = @fopen($file->getPath(), "rb");
        }

        $start = $counter * Client::CHUNK_SIZE;
        while ($start < $size) {
            $chunk = '';
            if(!empty($handle)) {
                fseek($handle, $start);
                $chunk = @fread($handle, Client::CHUNK_SIZE);
            } else {
                $chunk = substr($file->getData(), $start, Client::CHUNK_SIZE);
            }
            $apiParams['file'] = new \CURLFile('data://' . $mimeType . ';base64,' . base64_encode($chunk), $mimeType, $postedName);
            $apiHeaders['content-range'] = 'bytes ' . ($counter * Client::CHUNK_SIZE) . '-' . min(((($counter * Client::CHUNK_SIZE) + Client::CHUNK_SIZE) - 1), $size - 1) . '/' . $size;
            if(!empty($id)) {
                $apiHeaders['x-appwrite-id'] = $id;
            }
            $response = $this->client->call(Client::METHOD_POST, $apiPath, $apiHeaders, $apiParams);
            $counter++;
            $start += Client::CHUNK_SIZE;
            if(empty($id)) {
                $id = $response['$id'];
            }
            if($onProgress !== null) {
                $onProgress([
                    '$id' => $response['$id'],
                    'progress' => min(((($counter * Client::CHUNK_SIZE) + Client::CHUNK_SIZE)), $size) / $size * 100,
                    'sizeUploaded' => min($counter * Client::CHUNK_SIZE),
                    'chunksTotal' => $response['chunksTotal'],
                    'chunksUploaded' => $response['chunksUploaded'], 
                ]);
            }
        }
        if(!empty($handle)) {
            @fclose($handle);
        }
        return $response;

    }

    /**
     * Get file
     *
     * Get a file by its unique ID. This endpoint response returns a JSON object
     * with the file metadata.
     *
     * @param string $bucketId
     * @param string $fileId
     * @throws AppwriteException
     * @return array

     */
    public function getFile(string $bucketId, string $fileId): array
    {
        $apiPath = str_replace(['{bucketId}', '{fileId}'], [$bucketId, $fileId], '/storage/buckets/{bucketId}/files/{fileId}');

        $apiParams = [];
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }
        if (!isset($fileId)) {
            throw new AppwriteException('Missing required parameter: "fileId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update file
     *
     * Update a file by its unique ID. Only users with write permissions have
     * access to update this resource.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param string $name
     * @param array $permissions
     * @throws AppwriteException
     * @return array

     */
    public function updateFile(string $bucketId, string $fileId, string $name = null, array $permissions = null): array
    {
        $apiPath = str_replace(['{bucketId}', '{fileId}'], [$bucketId, $fileId], '/storage/buckets/{bucketId}/files/{fileId}');

        $apiParams = [];
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }
        if (!isset($fileId)) {
            throw new AppwriteException('Missing required parameter: "fileId"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }


        return $this->client->call(Client::METHOD_PUT, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete File
     *
     * Delete a file by its unique ID. Only users with write permissions have
     * access to delete this resource.
     *
     * @param string $bucketId
     * @param string $fileId
     * @throws AppwriteException
     * @return string

     */
    public function deleteFile(string $bucketId, string $fileId): string
    {
        $apiPath = str_replace(['{bucketId}', '{fileId}'], [$bucketId, $fileId], '/storage/buckets/{bucketId}/files/{fileId}');

        $apiParams = [];
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }
        if (!isset($fileId)) {
            throw new AppwriteException('Missing required parameter: "fileId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get file for download
     *
     * Get a file content by its unique ID. The endpoint response return with a
     * 'Content-Disposition: attachment' header that tells the browser to start
     * downloading the file to user downloads directory.
     *
     * @param string $bucketId
     * @param string $fileId
     * @throws AppwriteException
     * @return string

     */
    public function getFileDownload(string $bucketId, string $fileId): string
    {
        $apiPath = str_replace(['{bucketId}', '{fileId}'], [$bucketId, $fileId], '/storage/buckets/{bucketId}/files/{fileId}/download');

        $apiParams = [];
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }
        if (!isset($fileId)) {
            throw new AppwriteException('Missing required parameter: "fileId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get file preview
     *
     * Get a file preview image. Currently, this method supports preview for image
     * files (jpg, png, and gif), other supported formats, like pdf, docs, slides,
     * and spreadsheets, will return the file icon image. You can also pass query
     * string arguments for cutting and resizing your preview image. Preview is
     * supported only for image files smaller than 10MB.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param int $width
     * @param int $height
     * @param string $gravity
     * @param int $quality
     * @param int $borderWidth
     * @param string $borderColor
     * @param int $borderRadius
     * @param int $opacity
     * @param int $rotation
     * @param string $background
     * @param string $output
     * @throws AppwriteException
     * @return string

     */
    public function getFilePreview(string $bucketId, string $fileId, int $width = null, int $height = null, string $gravity = null, int $quality = null, int $borderWidth = null, string $borderColor = null, int $borderRadius = null, int $opacity = null, int $rotation = null, string $background = null, string $output = null): string
    {
        $apiPath = str_replace(['{bucketId}', '{fileId}'], [$bucketId, $fileId], '/storage/buckets/{bucketId}/files/{fileId}/preview');

        $apiParams = [];
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }
        if (!isset($fileId)) {
            throw new AppwriteException('Missing required parameter: "fileId"');
        }
        if (!is_null($width)) {
            $apiParams['width'] = $width;
        }

        if (!is_null($height)) {
            $apiParams['height'] = $height;
        }

        if (!is_null($gravity)) {
            $apiParams['gravity'] = $gravity;
        }

        if (!is_null($quality)) {
            $apiParams['quality'] = $quality;
        }

        if (!is_null($borderWidth)) {
            $apiParams['borderWidth'] = $borderWidth;
        }

        if (!is_null($borderColor)) {
            $apiParams['borderColor'] = $borderColor;
        }

        if (!is_null($borderRadius)) {
            $apiParams['borderRadius'] = $borderRadius;
        }

        if (!is_null($opacity)) {
            $apiParams['opacity'] = $opacity;
        }

        if (!is_null($rotation)) {
            $apiParams['rotation'] = $rotation;
        }

        if (!is_null($background)) {
            $apiParams['background'] = $background;
        }

        if (!is_null($output)) {
            $apiParams['output'] = $output;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get file for view
     *
     * Get a file content by its unique ID. This endpoint is similar to the
     * download method but returns with no  'Content-Disposition: attachment'
     * header.
     *
     * @param string $bucketId
     * @param string $fileId
     * @throws AppwriteException
     * @return string

     */
    public function getFileView(string $bucketId, string $fileId): string
    {
        $apiPath = str_replace(['{bucketId}', '{fileId}'], [$bucketId, $fileId], '/storage/buckets/{bucketId}/files/{fileId}/view');

        $apiParams = [];
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }
        if (!isset($fileId)) {
            throw new AppwriteException('Missing required parameter: "fileId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }
}
