<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;

class Storage extends Service
{
    /**
     * List buckets
     *
     * Get a list of all the storage buckets. You can use the query params to
     * filter your results.
     *
     * @param string $search
     * @param int $limit
     * @param int $offset
     * @param string $cursor
     * @param string $cursorDirection
     * @param string $orderType
     * @throws AppwriteException
     * @return array
     */
    public function listBuckets(string $search = null, int $limit = null, int $offset = null, string $cursor = null, string $cursorDirection = null, string $orderType = null): array
    {
        $path   = str_replace([], [], '/storage/buckets');
        $params = [];

        if (!is_null($search)) {
            $params['search'] = $search;
        }

        if (!is_null($limit)) {
            $params['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $params['offset'] = $offset;
        }

        if (!is_null($cursor)) {
            $params['cursor'] = $cursor;
        }

        if (!is_null($cursorDirection)) {
            $params['cursorDirection'] = $cursorDirection;
        }

        if (!is_null($orderType)) {
            $params['orderType'] = $orderType;
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create bucket
     *
     * Create a new storage bucket.
     *
     * @param string $bucketId
     * @param string $name
     * @param string $permission
     * @param array $read
     * @param array $write
     * @param bool $enabled
     * @param int $maximumFileSize
     * @param array $allowedFileExtensions
     * @param bool $encryption
     * @param bool $antivirus
     * @throws AppwriteException
     * @return array
     */
    public function createBucket(string $bucketId, string $name, string $permission, array $read = null, array $write = null, bool $enabled = null, int $maximumFileSize = null, array $allowedFileExtensions = null, bool $encryption = null, bool $antivirus = null): array
    {
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }

        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }

        if (!isset($permission)) {
            throw new AppwriteException('Missing required parameter: "permission"');
        }

        $path   = str_replace([], [], '/storage/buckets');
        $params = [];

        if (!is_null($bucketId)) {
            $params['bucketId'] = $bucketId;
        }

        if (!is_null($name)) {
            $params['name'] = $name;
        }

        if (!is_null($permission)) {
            $params['permission'] = $permission;
        }

        if (!is_null($read)) {
            $params['read'] = $read;
        }

        if (!is_null($write)) {
            $params['write'] = $write;
        }

        if (!is_null($enabled)) {
            $params['enabled'] = $enabled;
        }

        if (!is_null($maximumFileSize)) {
            $params['maximumFileSize'] = $maximumFileSize;
        }

        if (!is_null($allowedFileExtensions)) {
            $params['allowedFileExtensions'] = $allowedFileExtensions;
        }

        if (!is_null($encryption)) {
            $params['encryption'] = $encryption;
        }

        if (!is_null($antivirus)) {
            $params['antivirus'] = $antivirus;
        }

        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Bucket
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
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }

        $path   = str_replace(['{bucketId}'], [$bucketId], '/storage/buckets/{bucketId}');
        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Bucket
     *
     * Update a storage bucket by its unique ID.
     *
     * @param string $bucketId
     * @param string $name
     * @param string $permission
     * @param array $read
     * @param array $write
     * @param bool $enabled
     * @param int $maximumFileSize
     * @param array $allowedFileExtensions
     * @param bool $encryption
     * @param bool $antivirus
     * @throws AppwriteException
     * @return array
     */
    public function updateBucket(string $bucketId, string $name, string $permission, array $read = null, array $write = null, bool $enabled = null, int $maximumFileSize = null, array $allowedFileExtensions = null, bool $encryption = null, bool $antivirus = null): array
    {
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }

        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }

        if (!isset($permission)) {
            throw new AppwriteException('Missing required parameter: "permission"');
        }

        $path   = str_replace(['{bucketId}'], [$bucketId], '/storage/buckets/{bucketId}');
        $params = [];

        if (!is_null($name)) {
            $params['name'] = $name;
        }

        if (!is_null($permission)) {
            $params['permission'] = $permission;
        }

        if (!is_null($read)) {
            $params['read'] = $read;
        }

        if (!is_null($write)) {
            $params['write'] = $write;
        }

        if (!is_null($enabled)) {
            $params['enabled'] = $enabled;
        }

        if (!is_null($maximumFileSize)) {
            $params['maximumFileSize'] = $maximumFileSize;
        }

        if (!is_null($allowedFileExtensions)) {
            $params['allowedFileExtensions'] = $allowedFileExtensions;
        }

        if (!is_null($encryption)) {
            $params['encryption'] = $encryption;
        }

        if (!is_null($antivirus)) {
            $params['antivirus'] = $antivirus;
        }

        return $this->client->call(Client::METHOD_PUT, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Bucket
     *
     * Delete a storage bucket by its unique ID.
     *
     * @param string $bucketId
     * @throws AppwriteException
     * @return array
     */
    public function deleteBucket(string $bucketId): array
    {
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }

        $path   = str_replace(['{bucketId}'], [$bucketId], '/storage/buckets/{bucketId}');
        $params = [];

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Files
     *
     * Get a list of all the user files. You can use the query params to filter
     * your results. On admin mode, this endpoint will return a list of all of the
     * project's files. [Learn more about different API modes](/docs/admin).
     *
     * @param string $bucketId
     * @param string $search
     * @param int $limit
     * @param int $offset
     * @param string $cursor
     * @param string $cursorDirection
     * @param string $orderType
     * @throws AppwriteException
     * @return array
     */
    public function listFiles(string $bucketId, string $search = null, int $limit = null, int $offset = null, string $cursor = null, string $cursorDirection = null, string $orderType = null): array
    {
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }

        $path   = str_replace(['{bucketId}'], [$bucketId], '/storage/buckets/{bucketId}/files');
        $params = [];

        if (!is_null($search)) {
            $params['search'] = $search;
        }

        if (!is_null($limit)) {
            $params['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $params['offset'] = $offset;
        }

        if (!is_null($cursor)) {
            $params['cursor'] = $cursor;
        }

        if (!is_null($cursorDirection)) {
            $params['cursorDirection'] = $cursorDirection;
        }

        if (!is_null($orderType)) {
            $params['orderType'] = $orderType;
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create File
     *
     * Create a new file. Before using this route, you should create a new bucket
     * resource using either a [server
     * integration](/docs/server/database#storageCreateBucket) API or directly
     * from your Appwrite console.
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
     * @param string $file
     * @param array $read
     * @param array $write
     * @throws AppwriteException
     * @return array
     */
    public function createFile(string $bucketId, string $fileId, string $file, array $read = null, array $write = null, callable $onProgress = null): array
    {
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }

        if (!isset($fileId)) {
            throw new AppwriteException('Missing required parameter: "fileId"');
        }

        if (!isset($file)) {
            throw new AppwriteException('Missing required parameter: "file"');
        }

        $path   = str_replace(['{bucketId}'], [$bucketId], '/storage/buckets/{bucketId}/files');
        $params = [];

        if (!is_null($fileId)) {
            $params['fileId'] = $fileId;
        }

        if (!is_null($file)) {
            $params['file'] = $file;
        }

        if (!is_null($read)) {
            $params['read'] = $read;
        }

        if (!is_null($write)) {
            $params['write'] = $write;
        }

        $size = filesize($file);
        $mimeType = mime_content_type($file);
        $postedName = basename($file);
        //send single file if size is less than or equal to 5MB
        if ($size <= Client::CHUNK_SIZE) {
            $params['file'] = new \CURLFile($file, $mimeType, $postedName);
            return $this->client->call(Client::METHOD_POST, $path, [
                'content-type' => 'multipart/form-data',
                ], $params);
        }

        $id = '';
        $counter = 0;

            if($fileId != 'unique()') {
                try {
                    $response = $this->client->call(Client::METHOD_GET, new URL($path . '/' . fileId), headers);
                    $counter = $response['chunksUploaded'] ?? 0;
                } catch(\Exception $e) {
                }
            }

        $headers = ['content-type' => 'multipart/form-data'];
        $handle = @fopen($file, "rb");
        $start = $counter * Client::CHUNK_SIZE;
        while ($start < $size) {
            fseek($handle, $start);
            $params['file'] = new \CURLFile('data://' . $mimeType . ';base64,' . base64_encode(@fread($handle, Client::CHUNK_SIZE)), $mimeType, $postedName);
            $headers['content-range'] = 'bytes ' . ($counter * Client::CHUNK_SIZE) . '-' . min(((($counter * Client::CHUNK_SIZE) + Client::CHUNK_SIZE) - 1), $size) . '/' . $size;
            if(!empty($id)) {
                $headers['x-appwrite-id'] = $id;
            }
            $response = $this->client->call(Client::METHOD_POST, $path, $headers, $params);
            $counter++;
            $start += Client::CHUNK_SIZE;
            if(empty($id)) {
                $id = $response['$id'];
            }
            if($onProgress !== null) {
                $onProgress([
                    '$id' => $response['$id'],
                    'progress' => min(((($counter * Client::CHUNK_SIZE) + Client::CHUNK_SIZE) - 1), $size) / $size * 100,
                    'sizeUploaded' => min($counter * Client::CHUNK_SIZE),
                    'chunksTotal' => $response['chunksTotal'],
                    'chunksUploaded' => $response['chunksUploaded'], 
                ]);
            }
        }
        @fclose($handle);
        return $response;
    }

    /**
     * Get File
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
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }

        if (!isset($fileId)) {
            throw new AppwriteException('Missing required parameter: "fileId"');
        }

        $path   = str_replace(['{bucketId}', '{fileId}'], [$bucketId, $fileId], '/storage/buckets/{bucketId}/files/{fileId}');
        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update File
     *
     * Update a file by its unique ID. Only users with write permissions have
     * access to update this resource.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param array $read
     * @param array $write
     * @throws AppwriteException
     * @return array
     */
    public function updateFile(string $bucketId, string $fileId, array $read = null, array $write = null): array
    {
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }

        if (!isset($fileId)) {
            throw new AppwriteException('Missing required parameter: "fileId"');
        }

        $path   = str_replace(['{bucketId}', '{fileId}'], [$bucketId, $fileId], '/storage/buckets/{bucketId}/files/{fileId}');
        $params = [];

        if (!is_null($read)) {
            $params['read'] = $read;
        }

        if (!is_null($write)) {
            $params['write'] = $write;
        }

        return $this->client->call(Client::METHOD_PUT, $path, [
            'content-type' => 'application/json',
        ], $params);
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
     * @return array
     */
    public function deleteFile(string $bucketId, string $fileId): array
    {
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }

        if (!isset($fileId)) {
            throw new AppwriteException('Missing required parameter: "fileId"');
        }

        $path   = str_replace(['{bucketId}', '{fileId}'], [$bucketId, $fileId], '/storage/buckets/{bucketId}/files/{fileId}');
        $params = [];

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get File for Download
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
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }

        if (!isset($fileId)) {
            throw new AppwriteException('Missing required parameter: "fileId"');
        }

        $path   = str_replace(['{bucketId}', '{fileId}'], [$bucketId, $fileId], '/storage/buckets/{bucketId}/files/{fileId}/download');
        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get File Preview
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
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }

        if (!isset($fileId)) {
            throw new AppwriteException('Missing required parameter: "fileId"');
        }

        $path   = str_replace(['{bucketId}', '{fileId}'], [$bucketId, $fileId], '/storage/buckets/{bucketId}/files/{fileId}/preview');
        $params = [];

        if (!is_null($width)) {
            $params['width'] = $width;
        }

        if (!is_null($height)) {
            $params['height'] = $height;
        }

        if (!is_null($gravity)) {
            $params['gravity'] = $gravity;
        }

        if (!is_null($quality)) {
            $params['quality'] = $quality;
        }

        if (!is_null($borderWidth)) {
            $params['borderWidth'] = $borderWidth;
        }

        if (!is_null($borderColor)) {
            $params['borderColor'] = $borderColor;
        }

        if (!is_null($borderRadius)) {
            $params['borderRadius'] = $borderRadius;
        }

        if (!is_null($opacity)) {
            $params['opacity'] = $opacity;
        }

        if (!is_null($rotation)) {
            $params['rotation'] = $rotation;
        }

        if (!is_null($background)) {
            $params['background'] = $background;
        }

        if (!is_null($output)) {
            $params['output'] = $output;
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get File for View
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
        if (!isset($bucketId)) {
            throw new AppwriteException('Missing required parameter: "bucketId"');
        }

        if (!isset($fileId)) {
            throw new AppwriteException('Missing required parameter: "fileId"');
        }

        $path   = str_replace(['{bucketId}', '{fileId}'], [$bucketId, $fileId], '/storage/buckets/{bucketId}/files/{fileId}/view');
        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }
}
