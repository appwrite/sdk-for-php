<?php

namespace Appwrite\Services;

use Exception;
use Appwrite\Client;
use Appwrite\Service;

class Storage extends Service
{
    /**
     * List Files
     *
     * Get a list of all the user files. You can use the query params to filter your results. On managed mode, this endpoint will return a list of all of the project files. [Learn more about different API modes](/docs/modes).
     *
     * @param string $search
     * @param integer $limit
     * @param integer $offset
     * @param string $orderType
     * @throws Exception
     * @return array
     */
    public function listFiles($search = '', $limit = 25, $offset = 0, $orderType = 'ASC')
    {
        $path   = str_replace([], [], '/storage/files');
        $params = [];

        $params['search'] = $search;
        $params['limit'] = $limit;
        $params['offset'] = $offset;
        $params['orderType'] = $orderType;

        return $this->client->call(Client::METHOD_GET, $path, [
        ], $params);
    }

    /**
     * Create File
     *
     * Create a new file. The user who creates the file will automatically be assigned to read and write access unless he has passed custom values for read and write arguments.
     *
     * @param \CurlFile $files
     * @param array $read
     * @param array $write
     * @param string $folderId
     * @throws Exception
     * @return array
     */
    public function createFile($files, $read = [], $write = [], $folderId = '')
    {
        $path   = str_replace([], [], '/storage/files');
        $params = [];

        $params['files'] = $files;
        $params['read'] = $read;
        $params['write'] = $write;
        $params['folderId'] = $folderId;

        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'multipart/form-data',
        ], $params);
    }

    /**
     * Get File
     *
     * Get file by its unique ID. This endpoint response returns a JSON object with the file metadata.
     *
     * @param string $id
     * @throws Exception
     * @return array
     */
    public function getFile($id)
    {
        $path   = str_replace(['{id}'], [$id], '/storage/files/{id}');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
        ], $params);
    }

    /**
     * Delete File
     *
     * Delete a file by its unique ID. Only users with write permissions have access for deleting this resource.
     *
     * @param string $id
     * @throws Exception
     * @return array
     */
    public function deleteFile($id)
    {
        $path   = str_replace(['{id}'], [$id], '/storage/files/{id}');
        $params = [];


        return $this->client->call(Client::METHOD_DELETE, $path, [
        ], $params);
    }

    /**
     * Download File
     *
     * Get file content by its unique ID. The endpoint response return with a &#039;Content-Disposition: attachment&#039; header that tells the browser to start downloading the file to user downloads directory.
     *
     * @param string $id
     * @throws Exception
     * @return array
     */
    public function getFileDownload($id)
    {
        $path   = str_replace(['{id}'], [$id], '/storage/files/{id}/download');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
        ], $params);
    }

    /**
     * Preview File
     *
     * Get file preview image. Currently, this method supports preview for image files (jpg, png, and gif), other supported formats, like pdf, docs, slides, and spreadsheets will return file icon image. You can also pass query string arguments for cutting and resizing your preview image.
     *
     * @param string $id
     * @param integer $width
     * @param integer $height
     * @param integer $quality
     * @param string $background
     * @param string $output
     * @throws Exception
     * @return array
     */
    public function getFilePreview($id, $width = 0, $height = 0, $quality = 100, $background = '', $output = '')
    {
        $path   = str_replace(['{id}'], [$id], '/storage/files/{id}/preview');
        $params = [];

        $params['width'] = $width;
        $params['height'] = $height;
        $params['quality'] = $quality;
        $params['background'] = $background;
        $params['output'] = $output;

        return $this->client->call(Client::METHOD_GET, $path, [
        ], $params);
    }

    /**
     * View File
     *
     * Get file content by its unique ID. This endpoint is similar to the download method but returns with no  &#039;Content-Disposition: attachment&#039; header.
     *
     * @param string $id
     * @param string $as
     * @throws Exception
     * @return array
     */
    public function getFileView($id, $as = '')
    {
        $path   = str_replace(['{id}'], [$id], '/storage/files/{id}/view');
        $params = [];

        $params['as'] = $as;

        return $this->client->call(Client::METHOD_GET, $path, [
        ], $params);
    }

}