<?php

namespace Appwrite\Services;

use Exception;
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
     * @param string $orderType
     * @throws Exception
     * @return array
     */
    public function list(string $search = '', int $limit = 25, int $offset = 0, string $orderType = 'ASC'):array
    {
        $path   = str_replace([], [], '/functions');
        $params = [];

        $params['search'] = $search;
        $params['limit'] = $limit;
        $params['offset'] = $offset;
        $params['orderType'] = $orderType;

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
     * @param string $name
     * @param array $execute
     * @param string $env
     * @param array $vars
     * @param array $events
     * @param string $schedule
     * @param int $timeout
     * @throws Exception
     * @return array
     */
    public function create(string $name, array $execute, string $env, array $vars = [], array $events = [], string $schedule = '', int $timeout = 15):array
    {
        $path   = str_replace([], [], '/functions');
        $params = [];

        $params['name'] = $name;
        $params['execute'] = $execute;
        $params['env'] = $env;
        $params['vars'] = $vars;
        $params['events'] = $events;
        $params['schedule'] = $schedule;
        $params['timeout'] = $timeout;

        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Function
     *
     * Get a function by its unique ID.
     *
     * @param string $functionId
     * @throws Exception
     * @return array
     */
    public function get(string $functionId):array
    {
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
     * @throws Exception
     * @return array
     */
    public function update(string $functionId, string $name, array $execute, array $vars = [], array $events = [], string $schedule = '', int $timeout = 15):array
    {
        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}');
        $params = [];

        $params['name'] = $name;
        $params['execute'] = $execute;
        $params['vars'] = $vars;
        $params['events'] = $events;
        $params['schedule'] = $schedule;
        $params['timeout'] = $timeout;

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
     * @throws Exception
     * @return array
     */
    public function delete(string $functionId):array
    {
        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}');
        $params = [];


        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Executions
     *
     * Get a list of all the current user function execution logs. You can use the
     * query params to filter your results. On admin mode, this endpoint will
     * return a list of all of the project's teams. [Learn more about different
     * API modes](/docs/admin).
     *
     * @param string $functionId
     * @param string $search
     * @param int $limit
     * @param int $offset
     * @param string $orderType
     * @throws Exception
     * @return array
     */
    public function listExecutions(string $functionId, string $search = '', int $limit = 25, int $offset = 0, string $orderType = 'ASC'):array
    {
        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/executions');
        $params = [];

        $params['search'] = $search;
        $params['limit'] = $limit;
        $params['offset'] = $offset;
        $params['orderType'] = $orderType;

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
     * @throws Exception
     * @return array
     */
    public function createExecution(string $functionId):array
    {
        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/executions');
        $params = [];


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
     * @throws Exception
     * @return array
     */
    public function getExecution(string $functionId, string $executionId):array
    {
        $path   = str_replace(['{functionId}', '{executionId}'], [$functionId, $executionId], '/functions/{functionId}/executions/{executionId}');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Function Tag
     *
     * Update the function code tag ID using the unique function ID. Use this
     * endpoint to switch the code tag that should be executed by the execution
     * endpoint.
     *
     * @param string $functionId
     * @param string $tag
     * @throws Exception
     * @return array
     */
    public function updateTag(string $functionId, string $tag):array
    {
        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/tag');
        $params = [];

        $params['tag'] = $tag;

        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Tags
     *
     * Get a list of all the project's code tags. You can use the query params to
     * filter your results.
     *
     * @param string $functionId
     * @param string $search
     * @param int $limit
     * @param int $offset
     * @param string $orderType
     * @throws Exception
     * @return array
     */
    public function listTags(string $functionId, string $search = '', int $limit = 25, int $offset = 0, string $orderType = 'ASC'):array
    {
        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/tags');
        $params = [];

        $params['search'] = $search;
        $params['limit'] = $limit;
        $params['offset'] = $offset;
        $params['orderType'] = $orderType;

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Tag
     *
     * Create a new function code tag. Use this endpoint to upload a new version
     * of your code function. To execute your newly uploaded code, you'll need to
     * update the function's tag to use your new tag UID.
     * 
     * This endpoint accepts a tar.gz file compressed with your code. Make sure to
     * include any dependencies your code has within the compressed file. You can
     * learn more about code packaging in the [Appwrite Cloud Functions
     * tutorial](/docs/functions).
     * 
     * Use the "command" param to set the entry point used to execute your code.
     *
     * @param string $functionId
     * @param string $command
     * @param \CurlFile $code
     * @throws Exception
     * @return array
     */
    public function createTag(string $functionId, string $command, \CurlFile $code):array
    {
        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/tags');
        $params = [];

        $params['command'] = $command;
        $params['code'] = $code;

        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'multipart/form-data',
        ], $params);
    }

    /**
     * Get Tag
     *
     * Get a code tag by its unique ID.
     *
     * @param string $functionId
     * @param string $tagId
     * @throws Exception
     * @return array
     */
    public function getTag(string $functionId, string $tagId):array
    {
        $path   = str_replace(['{functionId}', '{tagId}'], [$functionId, $tagId], '/functions/{functionId}/tags/{tagId}');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Tag
     *
     * Delete a code tag by its unique ID.
     *
     * @param string $functionId
     * @param string $tagId
     * @throws Exception
     * @return array
     */
    public function deleteTag(string $functionId, string $tagId):array
    {
        $path   = str_replace(['{functionId}', '{tagId}'], [$functionId, $tagId], '/functions/{functionId}/tags/{tagId}');
        $params = [];


        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }
}