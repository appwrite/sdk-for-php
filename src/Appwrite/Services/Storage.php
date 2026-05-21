<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\Compression;
use Appwrite\Enums\ImageGravity;
use Appwrite\Enums\ImageFormat;

class Storage extends Service
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * Get a list of all the storage buckets. You can use the query params to
     * filter your results.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\BucketList
     */
    public function listBuckets(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\BucketList
    {
        $apiPath = str_replace(
            [],
            [],
            '/storage/buckets'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\BucketList::from($response);

    }

    /**
     * Create a new storage bucket.
     *
     * @param string $bucketId
     * @param string $name
     * @param ?array $permissions
     * @param ?bool $fileSecurity
     * @param ?bool $enabled
     * @param ?int $maximumFileSize
     * @param ?array $allowedFileExtensions
     * @param ?Compression $compression
     * @param ?bool $encryption
     * @param ?bool $antivirus
     * @param ?bool $transformations
     * @throws AppwriteException
     * @return \Appwrite\Models\Bucket
     */
    public function createBucket(string $bucketId, string $name, ?array $permissions = null, ?bool $fileSecurity = null, ?bool $enabled = null, ?int $maximumFileSize = null, ?array $allowedFileExtensions = null, ?Compression $compression = null, ?bool $encryption = null, ?bool $antivirus = null, ?bool $transformations = null): \Appwrite\Models\Bucket
    {
        $apiPath = str_replace(
            [],
            [],
            '/storage/buckets'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['name'] = $name;
        $apiParams['permissions'] = $permissions;

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

        if (!is_null($transformations)) {
            $apiParams['transformations'] = $transformations;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Bucket::from($response);

    }

    /**
     * Get a storage bucket by its unique ID. This endpoint response returns a
     * JSON object with the storage bucket metadata.
     *
     * @param string $bucketId
     * @throws AppwriteException
     * @return \Appwrite\Models\Bucket
     */
    public function getBucket(string $bucketId): \Appwrite\Models\Bucket
    {
        $apiPath = str_replace(
            ['{bucketId}'],
            [$bucketId],
            '/storage/buckets/{bucketId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Bucket::from($response);

    }

    /**
     * Update a storage bucket by its unique ID.
     *
     * @param string $bucketId
     * @param string $name
     * @param ?array $permissions
     * @param ?bool $fileSecurity
     * @param ?bool $enabled
     * @param ?int $maximumFileSize
     * @param ?array $allowedFileExtensions
     * @param ?Compression $compression
     * @param ?bool $encryption
     * @param ?bool $antivirus
     * @param ?bool $transformations
     * @throws AppwriteException
     * @return \Appwrite\Models\Bucket
     */
    public function updateBucket(string $bucketId, string $name, ?array $permissions = null, ?bool $fileSecurity = null, ?bool $enabled = null, ?int $maximumFileSize = null, ?array $allowedFileExtensions = null, ?Compression $compression = null, ?bool $encryption = null, ?bool $antivirus = null, ?bool $transformations = null): \Appwrite\Models\Bucket
    {
        $apiPath = str_replace(
            ['{bucketId}'],
            [$bucketId],
            '/storage/buckets/{bucketId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['name'] = $name;
        $apiParams['permissions'] = $permissions;

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

        if (!is_null($transformations)) {
            $apiParams['transformations'] = $transformations;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Bucket::from($response);

    }

    /**
     * Delete a storage bucket by its unique ID.
     *
     * @param string $bucketId
     * @throws AppwriteException
     * @return string
     */
    public function deleteBucket(string $bucketId): string
    {
        $apiPath = str_replace(
            ['{bucketId}'],
            [$bucketId],
            '/storage/buckets/{bucketId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Get a list of all the user files. You can use the query params to filter
     * your results.
     *
     * @param string $bucketId
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\FileList
     */
    public function listFiles(string $bucketId, ?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\FileList
    {
        $apiPath = str_replace(
            ['{bucketId}'],
            [$bucketId],
            '/storage/buckets/{bucketId}/files'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\FileList::from($response);

    }

    /**
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
     * @param ?array $permissions
     * @throws AppwriteException
     * @return \Appwrite\Models\File
     */
    public function createFile(string $bucketId, string $fileId, InputFile $file, ?array $permissions = null, ?callable $onProgress = null): \Appwrite\Models\File
    {
        $apiPath = str_replace(
            ['{bucketId}'],
            [$bucketId],
            '/storage/buckets/{bucketId}/files'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;
        $apiParams['file'] = $file;

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'multipart/form-data';
        $size = 0;
        $mimeType = null;
        $postedName = null;
        if(empty($file->getPath() ?? null)) {
            $size = strlen($file->getData());
            $mimeType = $file->getMimeType();
            $postedName = $file->getFilename();
            if ($size <= Client::CHUNK_SIZE) {
                $apiParams['file'] = new \CURLFile('data://' . $mimeType . ';base64,' . base64_encode($file->getData()), $mimeType, $postedName);
                $response = $this->client->call(Client::METHOD_POST, $apiPath, [
                            'content-type' => 'multipart/form-data',
                        ], $apiParams);
                if (!is_array($response)) {
                    throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
                }

                return \Appwrite\Models\File::from($response);
            }
        } else {
            $size = filesize($file->getPath());
            $mimeType = $file->getMimeType() ?? mime_content_type($file->getPath());
            $postedName = $file->getFilename() ?? basename($file->getPath());
            //send single file if size is less than or equal to 5MB
            if ($size <= Client::CHUNK_SIZE) {
                $apiParams['file'] = new \CURLFile($file->getPath(), $mimeType, $postedName);
                $response = $this->client->call(Client::METHOD_POST, $apiPath, [
                            'content-type' => 'multipart/form-data',
                        ], $apiParams);
                if (!is_array($response)) {
                    throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
                }

                return \Appwrite\Models\File::from($response);
            }
        }

        $id = '';
        $counter = 0;

        try {
            $response = $this->client->call(Client::METHOD_GET, $apiPath . '/' . $fileId);
            $counter = $response['chunksUploaded'] ?? 0;
        } catch(\Exception $e) {
        }

        $apiHeaders = ['content-type' => 'multipart/form-data'];
        $handle = null;

        if(!empty($file->getPath())) {
            $handle = @fopen($file->getPath(), "rb");
        }

        $uploadId = '';
                $uploadId = $fileId ?? '';
                $totalChunks = (int) ceil($size / Client::CHUNK_SIZE);
        $chunks = [];
        $start = $counter * Client::CHUNK_SIZE;
        while ($start < $size) {
            $chunks[] = [
                'index' => $counter,
                'start' => $start,
                'end' => min($start + Client::CHUNK_SIZE, $size),
            ];
            $counter++;
            $start += Client::CHUNK_SIZE;
        }

        $readChunk = function(int $start, int $end) use ($handle, $file) {
            if(!empty($handle)) {
                fseek($handle, $start);
                return @fread($handle, $end - $start);
            }

            return substr($file->getData(), $start, $end - $start);
        };

        $uploadChunk = function(array $chunk, string $currentUploadId = '') use ($readChunk, $apiPath, $apiHeaders, $apiParams, $mimeType, $postedName, $size) {
            $chunkParams = $apiParams;
            $chunkHeaders = $apiHeaders;
            $data = $readChunk($chunk['start'], $chunk['end']);
            $chunkParams['file'] = new \CURLFile('data://' . $mimeType . ';base64,' . base64_encode($data), $mimeType, $postedName);
            $chunkHeaders['content-range'] = 'bytes ' . $chunk['start'] . '-' . ($chunk['end'] - 1) . '/' . $size;
            if(!empty($currentUploadId)) {
                $chunkHeaders['x-appwrite-id'] = $currentUploadId;
            }

            return $this->client->call(Client::METHOD_POST, $apiPath, $chunkHeaders, $chunkParams);
        };

        $isUploadComplete = function($chunkResponse) use ($totalChunks): bool {
            if(!is_array($chunkResponse) || !isset($chunkResponse['chunksUploaded'])) {
                return false;
            }

            return (int) $chunkResponse['chunksUploaded'] >= (int) ($chunkResponse['chunksTotal'] ?? $totalChunks);
        };

        if (!empty($chunks)) {
            $response = $uploadChunk($chunks[0], $uploadId);
            if(empty($uploadId)) {
                $uploadId = $response['$id'];
            }
            $completedCount = $chunks[0]['index'] + 1;
            $uploadedSize = $chunks[0]['end'];
            if($onProgress !== null) {
                $onProgress([
                    '$id' => $response['$id'],
                    'progress' => $uploadedSize / $size * 100,
                    'sizeUploaded' => $uploadedSize,
                    'chunksTotal' => $totalChunks,
                    'chunksUploaded' => $completedCount,
                ]);
            }

            $remainingChunks = array_slice($chunks, 1);
            $clientConfig = \Closure::bind(function() {
                if (property_exists($this, 'key') && $this->key !== null) {
                    $this->headers['authorization'] = $this->getAuthorization();
                }

                return [$this->endpoint, $this->headers, $this->selfSigned, $this->timeout, $this->connectTimeout];
            }, $this->client, Client::class);
            $flattenParams = \Closure::bind(function(array $params): array {
                return $this->flatten($params);
            }, $this->client, Client::class);
            [$endpoint, $globalHeaders, $selfSigned, $timeout, $connectTimeout] = $clientConfig();
            $responseHeaders = [];

            $makeHandle = function(array $chunk) use ($readChunk, $apiPath, $apiHeaders, $apiParams, $mimeType, $postedName, $size, $uploadId, $endpoint, $globalHeaders, $selfSigned, $timeout, $connectTimeout, $flattenParams, &$responseHeaders) {
                $chunkParams = $apiParams;
                $chunkHeaders = array_merge($globalHeaders, $apiHeaders);
                $data = $readChunk($chunk['start'], $chunk['end']);
                $chunkParams['file'] = new \CURLFile('data://' . $mimeType . ';base64,' . base64_encode($data), $mimeType, $postedName);
                $chunkHeaders['content-range'] = 'bytes ' . $chunk['start'] . '-' . ($chunk['end'] - 1) . '/' . $size;
                if(!empty($uploadId)) {
                    $chunkHeaders['x-appwrite-id'] = $uploadId;
                }

                $headers = [];
                foreach ($chunkHeaders as $key => $value) {
                    $headers[] = $key . ':' . $value;
                }

                $ch = curl_init($endpoint . $apiPath);
                $responseHeaders[spl_object_id($ch)] = [];
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, Client::METHOD_POST);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_USERAGENT, php_uname('s') . '-' . php_uname('r') . ':php-' . phpversion());
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $flattenParams($chunkParams));
                curl_setopt($ch, CURLOPT_HEADERFUNCTION, function($curl, $header) use (&$responseHeaders) {
                    $length = strlen($header);
                    $header = explode(':', strtolower($header), 2);
                    if (count($header) >= 2) {
                        $responseHeaders[spl_object_id($curl)][strtolower(trim($header[0]))] = trim($header[1]);
                    }

                    return $length;
                });
                if($selfSigned) {
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                }
                if($timeout !== null) {
                    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
                }
                if($connectTimeout !== null) {
                    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $connectTimeout);
                }

                return $ch;
            };

            $nextChunk = 0;
            while ($nextChunk < count($remainingChunks)) {
                $multiHandle = curl_multi_init();
                $handles = [];
                for ($i = 0; $i < 8 && $nextChunk < count($remainingChunks); $i++, $nextChunk++) {
                    $chunk = $remainingChunks[$nextChunk];
                    $ch = $makeHandle($chunk);
                    $handles[spl_object_id($ch)] = ['handle' => $ch, 'chunk' => $chunk];
                    curl_multi_add_handle($multiHandle, $ch);
                }

                do {
                    $status = curl_multi_exec($multiHandle, $active);
                    if ($active) {
                        curl_multi_select($multiHandle);
                    }
                } while ($active && $status == CURLM_OK);

                foreach ($handles as $handleInfo) {
                    $ch = $handleInfo['handle'];
                    $body = curl_multi_getcontent($ch);
                    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                    $contentType = $responseHeaders[spl_object_id($ch)]['content-type'] ?? '';

                    if (curl_errno($ch)) {
                        throw new AppwriteException(curl_error($ch), $statusCode, '', $body);
                    }

                    $chunkResponse = str_starts_with($contentType, 'application/json') ? json_decode($body, true) : $body;

                    if($statusCode >= 400) {
                        if(is_array($chunkResponse)) {
                            throw new AppwriteException($chunkResponse['message'], $statusCode, $chunkResponse['type'] ?? '', json_encode($chunkResponse));
                        }

                        throw new AppwriteException($chunkResponse, $statusCode, '', $chunkResponse);
                    }

                    $completedCount++;
                    $uploadedSize += $handleInfo['chunk']['end'] - $handleInfo['chunk']['start'];
                    if($isUploadComplete($chunkResponse)) {
                        $response = $chunkResponse;
                    }
                    if($onProgress !== null) {
                        $onProgress([
                            '$id' => $uploadId,
                            'progress' => $uploadedSize / $size * 100,
                            'sizeUploaded' => $uploadedSize,
                            'chunksTotal' => $totalChunks,
                            'chunksUploaded' => $completedCount,
                        ]);
                    }

                    curl_multi_remove_handle($multiHandle, $ch);
                }

                curl_multi_close($multiHandle);
            }

        }
        if(!empty($handle)) {
            @fclose($handle);
        }
        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\File::from($response);

    }

    /**
     * Get a file by its unique ID. This endpoint response returns a JSON object
     * with the file metadata.
     *
     * @param string $bucketId
     * @param string $fileId
     * @throws AppwriteException
     * @return \Appwrite\Models\File
     */
    public function getFile(string $bucketId, string $fileId): \Appwrite\Models\File
    {
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/storage/buckets/{bucketId}/files/{fileId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\File::from($response);

    }

    /**
     * Update a file by its unique ID. Only users with write permissions have
     * access to update this resource.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param ?string $name
     * @param ?array $permissions
     * @throws AppwriteException
     * @return \Appwrite\Models\File
     */
    public function updateFile(string $bucketId, string $fileId, ?string $name = null, ?array $permissions = null): \Appwrite\Models\File
    {
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/storage/buckets/{bucketId}/files/{fileId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['permissions'] = $permissions;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\File::from($response);

    }

    /**
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
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/storage/buckets/{bucketId}/files/{fileId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Get a file content by its unique ID. The endpoint response return with a
     * 'Content-Disposition: attachment' header that tells the browser to start
     * downloading the file to user downloads directory.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param ?string $token
     * @throws AppwriteException
     * @return string
     */
    public function getFileDownload(string $bucketId, string $fileId, ?string $token = null): string
    {
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/storage/buckets/{bucketId}/files/{fileId}/download'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

        if (!is_null($token)) {
            $apiParams['token'] = $token;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Get a file preview image. Currently, this method supports preview for image
     * files (jpg, png, and gif), other supported formats, like pdf, docs, slides,
     * and spreadsheets, will return the file icon image. You can also pass query
     * string arguments for cutting and resizing your preview image. Preview is
     * supported only for image files smaller than 10MB.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param ?int $width
     * @param ?int $height
     * @param ?ImageGravity $gravity
     * @param ?int $quality
     * @param ?int $borderWidth
     * @param ?string $borderColor
     * @param ?int $borderRadius
     * @param ?float $opacity
     * @param ?int $rotation
     * @param ?string $background
     * @param ?ImageFormat $output
     * @param ?string $token
     * @throws AppwriteException
     * @return string
     */
    public function getFilePreview(string $bucketId, string $fileId, ?int $width = null, ?int $height = null, ?ImageGravity $gravity = null, ?int $quality = null, ?int $borderWidth = null, ?string $borderColor = null, ?int $borderRadius = null, ?float $opacity = null, ?int $rotation = null, ?string $background = null, ?ImageFormat $output = null, ?string $token = null): string
    {
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/storage/buckets/{bucketId}/files/{fileId}/preview'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

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

        if (!is_null($token)) {
            $apiParams['token'] = $token;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Get a file content by its unique ID. This endpoint is similar to the
     * download method but returns with no  'Content-Disposition: attachment'
     * header.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param ?string $token
     * @throws AppwriteException
     * @return string
     */
    public function getFileView(string $bucketId, string $fileId, ?string $token = null): string
    {
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/storage/buckets/{bucketId}/files/{fileId}/view'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

        if (!is_null($token)) {
            $apiParams['token'] = $token;
        }

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }
}
