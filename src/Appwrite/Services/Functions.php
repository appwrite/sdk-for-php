<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;

class Functions extends Service
{
    /**
     * List Functions
     *
     * Get a list of all the project's functions. You can use the query params to
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
    public function list(string $search = null, int $limit = null, int $offset = null, string $cursor = null, string $cursorDirection = null, string $orderType = null): array
    {
        $path   = str_replace([], [], '/functions');
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
     * Create Function
     *
     * Create a new function. You can pass a list of
     * [permissions](/docs/permissions) to allow different project users or team
     * with access to execute the function using the client API.
     *
     * @param string $functionId
     * @param string $name
     * @param array $execute
     * @param string $runtime
     * @param array $vars
     * @param array $events
     * @param string $schedule
     * @param int $timeout
     * @throws AppwriteException
     * @return array
     */
    public function create(string $functionId, string $name, array $execute, string $runtime, array $vars = null, array $events = null, string $schedule = null, int $timeout = null): array
    {
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }

        if (!isset($execute)) {
            throw new AppwriteException('Missing required parameter: "execute"');
        }

        if (!isset($runtime)) {
            throw new AppwriteException('Missing required parameter: "runtime"');
        }

        $path   = str_replace([], [], '/functions');
        $params = [];

        if (!is_null($functionId)) {
            $params['functionId'] = $functionId;
        }

        if (!is_null($name)) {
            $params['name'] = $name;
        }

        if (!is_null($execute)) {
            $params['execute'] = $execute;
        }

        if (!is_null($runtime)) {
            $params['runtime'] = $runtime;
        }

        if (!is_null($vars)) {
            $params['vars'] = $vars;
        }

        if (!is_null($events)) {
            $params['events'] = $events;
        }

        if (!is_null($schedule)) {
            $params['schedule'] = $schedule;
        }

        if (!is_null($timeout)) {
            $params['timeout'] = $timeout;
        }

        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List the currently active function runtimes.
     *
     * Get a list of all runtimes that are currently active in your project.
     *
     * @throws AppwriteException
     * @return array
     */
    public function listRuntimes(): array
    {
        $path   = str_replace([], [], '/functions/runtimes');
        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Function
     *
     * Get a function by its unique ID.
     *
     * @param string $functionId
     * @throws AppwriteException
     * @return array
     */
    public function get(string $functionId): array
    {
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}');
        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Function
     *
     * Update function by its unique ID.
     *
     * @param string $functionId
     * @param string $name
     * @param array $execute
     * @param array $vars
     * @param array $events
     * @param string $schedule
     * @param int $timeout
     * @throws AppwriteException
     * @return array
     */
    public function update(string $functionId, string $name, array $execute, array $vars = null, array $events = null, string $schedule = null, int $timeout = null): array
    {
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }

        if (!isset($execute)) {
            throw new AppwriteException('Missing required parameter: "execute"');
        }

        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}');
        $params = [];

        if (!is_null($name)) {
            $params['name'] = $name;
        }

        if (!is_null($execute)) {
            $params['execute'] = $execute;
        }

        if (!is_null($vars)) {
            $params['vars'] = $vars;
        }

        if (!is_null($events)) {
            $params['events'] = $events;
        }

        if (!is_null($schedule)) {
            $params['schedule'] = $schedule;
        }

        if (!is_null($timeout)) {
            $params['timeout'] = $timeout;
        }

        return $this->client->call(Client::METHOD_PUT, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Function
     *
     * Delete a function by its unique ID.
     *
     * @param string $functionId
     * @throws AppwriteException
     * @return array
     */
    public function delete(string $functionId): array
    {
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}');
        $params = [];

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Deployments
     *
     * Get a list of all the project's code deployments. You can use the query
     * params to filter your results.
     *
     * @param string $functionId
     * @param string $search
     * @param int $limit
     * @param int $offset
     * @param string $cursor
     * @param string $cursorDirection
     * @param string $orderType
     * @throws AppwriteException
     * @return array
     */
    public function listDeployments(string $functionId, string $search = null, int $limit = null, int $offset = null, string $cursor = null, string $cursorDirection = null, string $orderType = null): array
    {
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/deployments');
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
     * Create Deployment
     *
     * Create a new function code deployment. Use this endpoint to upload a new
     * version of your code function. To execute your newly uploaded code, you'll
     * need to update the function's deployment to use your new deployment UID.
     * 
     * This endpoint accepts a tar.gz file compressed with your code. Make sure to
     * include any dependencies your code has within the compressed file. You can
     * learn more about code packaging in the [Appwrite Cloud Functions
     * tutorial](/docs/functions).
     * 
     * Use the "command" param to set the entry point used to execute your code.
     *
     * @param string $functionId
     * @param string $entrypoint
     * @param string $code
     * @param bool $activate
     * @throws AppwriteException
     * @return array
     */
    public function createDeployment(string $functionId, string $entrypoint, string $code, bool $activate, callable $onProgress = null): array
    {
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        if (!isset($entrypoint)) {
            throw new AppwriteException('Missing required parameter: "entrypoint"');
        }

        if (!isset($code)) {
            throw new AppwriteException('Missing required parameter: "code"');
        }

        if (!isset($activate)) {
            throw new AppwriteException('Missing required parameter: "activate"');
        }

        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/deployments');
        $params = [];

        if (!is_null($entrypoint)) {
            $params['entrypoint'] = $entrypoint;
        }

        if (!is_null($code)) {
            $params['code'] = $code;
        }

        if (!is_null($activate)) {
            $params['activate'] = $activate;
        }

        $size = filesize($code);
        $mimeType = mime_content_type($code);
        $postedName = basename($code);
        //send single file if size is less than or equal to 5MB
        if ($size <= Client::CHUNK_SIZE) {
            $params['code'] = new \CURLFile($code, $mimeType, $postedName);
            return $this->client->call(Client::METHOD_POST, $path, [
                'content-type' => 'multipart/form-data',
                ], $params);
        } else {
            $id = '';
            $handle = @fopen($code, "rb");
            $counter = 0;
            $headers = ['content-type' => 'multipart/form-data'];
            while (!feof($handle)) {
                $params['code'] = new \CURLFile('data://' . $mimeType . ';base64,' . base64_encode(@fread($handle, Client::CHUNK_SIZE)), $mimeType, $postedName);
                $headers['content-range'] = 'bytes ' . ($counter * Client::CHUNK_SIZE) . '-' . min(((($counter * Client::CHUNK_SIZE) + Client::CHUNK_SIZE) - 1), $size) . '/' . $size;
                if(!empty($id)) {
                    $headers['x-appwrite-id'] = $id;
                }
                $response = $this->client->call(Client::METHOD_POST, $path, $headers, $params);
                $counter++;
                if(empty($id)) {
                    $id = $response['$id'];
                }
                if($onProgress !== null) {
                    $end = min(((($counter * Client::CHUNK_SIZE) + Client::CHUNK_SIZE) - 1), $size);
                    $onProgress([
                        '$id' => $response['$id'],
                        'progress' => min(($counter+1) * Client::CHUNK_SIZE, $size) / $size * 100,
                        'sizeUploaded' => $end + 1,
                        'chunksTotal' => $response['chunksTotal'],
                        'chunksUploaded' => $response['chunksUploaded']
                    ]);
                }
            }
            @fclose($handle);
            return $response;
        }
    }

    /**
     * Get Deployment
     *
     * Get a code deployment by its unique ID.
     *
     * @param string $functionId
     * @param string $deploymentId
     * @throws AppwriteException
     * @return array
     */
    public function getDeployment(string $functionId, string $deploymentId): array
    {
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        if (!isset($deploymentId)) {
            throw new AppwriteException('Missing required parameter: "deploymentId"');
        }

        $path   = str_replace(['{functionId}', '{deploymentId}'], [$functionId, $deploymentId], '/functions/{functionId}/deployments/{deploymentId}');
        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Function Deployment
     *
     * Update the function code deployment ID using the unique function ID. Use
     * this endpoint to switch the code deployment that should be executed by the
     * execution endpoint.
     *
     * @param string $functionId
     * @param string $deploymentId
     * @throws AppwriteException
     * @return array
     */
    public function updateDeployment(string $functionId, string $deploymentId): array
    {
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        if (!isset($deploymentId)) {
            throw new AppwriteException('Missing required parameter: "deploymentId"');
        }

        $path   = str_replace(['{functionId}', '{deploymentId}'], [$functionId, $deploymentId], '/functions/{functionId}/deployments/{deploymentId}');
        $params = [];

        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Deployment
     *
     * Delete a code deployment by its unique ID.
     *
     * @param string $functionId
     * @param string $deploymentId
     * @throws AppwriteException
     * @return array
     */
    public function deleteDeployment(string $functionId, string $deploymentId): array
    {
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        if (!isset($deploymentId)) {
            throw new AppwriteException('Missing required parameter: "deploymentId"');
        }

        $path   = str_replace(['{functionId}', '{deploymentId}'], [$functionId, $deploymentId], '/functions/{functionId}/deployments/{deploymentId}');
        $params = [];

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Retry Build
     *
     * @param string $functionId
     * @param string $deploymentId
     * @param string $buildId
     * @throws AppwriteException
     * @return array
     */
    public function retryBuild(string $functionId, string $deploymentId, string $buildId): array
    {
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        if (!isset($deploymentId)) {
            throw new AppwriteException('Missing required parameter: "deploymentId"');
        }

        if (!isset($buildId)) {
            throw new AppwriteException('Missing required parameter: "buildId"');
        }

        $path   = str_replace(['{functionId}', '{deploymentId}', '{buildId}'], [$functionId, $deploymentId, $buildId], '/functions/{functionId}/deployments/{deploymentId}/builds/{buildId}');
        $params = [];

        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Executions
     *
     * Get a list of all the current user function execution logs. You can use the
     * query params to filter your results. On admin mode, this endpoint will
     * return a list of all of the project's executions. [Learn more about
     * different API modes](/docs/admin).
     *
     * @param string $functionId
     * @param int $limit
     * @param int $offset
     * @param string $search
     * @param string $cursor
     * @param string $cursorDirection
     * @throws AppwriteException
     * @return array
     */
    public function listExecutions(string $functionId, int $limit = null, int $offset = null, string $search = null, string $cursor = null, string $cursorDirection = null): array
    {
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/executions');
        $params = [];

        if (!is_null($limit)) {
            $params['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $params['offset'] = $offset;
        }

        if (!is_null($search)) {
            $params['search'] = $search;
        }

        if (!is_null($cursor)) {
            $params['cursor'] = $cursor;
        }

        if (!is_null($cursorDirection)) {
            $params['cursorDirection'] = $cursorDirection;
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Execution
     *
     * Trigger a function execution. The returned object will return you the
     * current execution status. You can ping the `Get Execution` endpoint to get
     * updates on the current execution status. Once this endpoint is called, your
     * function execution process will start asynchronously.
     *
     * @param string $functionId
     * @param string $data
     * @param bool $async
     * @throws AppwriteException
     * @return array
     */
    public function createExecution(string $functionId, string $data = null, bool $async = null): array
    {
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/executions');
        $params = [];

        if (!is_null($data)) {
            $params['data'] = $data;
        }

        if (!is_null($async)) {
            $params['async'] = $async;
        }

        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Execution
     *
     * Get a function execution log by its unique ID.
     *
     * @param string $functionId
     * @param string $executionId
     * @throws AppwriteException
     * @return array
     */
    public function getExecution(string $functionId, string $executionId): array
    {
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        if (!isset($executionId)) {
            throw new AppwriteException('Missing required parameter: "executionId"');
        }

        $path   = str_replace(['{functionId}', '{executionId}'], [$functionId, $executionId], '/functions/{functionId}/executions/{executionId}');
        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }
}
