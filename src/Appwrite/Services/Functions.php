<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Functions extends Service
{
     public function __construct(Client $client)
     {
          $this->client = $client;
     }

    /**
     * List Functions
     *
     * Get a list of all the project's functions. You can use the query params to
     * filter your results.
     *
     * @param array $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function list(array $queries = null, string $search = null): array
    {
        $apiPath = str_replace([], [], '/functions');

        $params = [];
        if (!is_null($queries)) {
            $params['queries'] = $queries;
        }

        if (!is_null($search)) {
            $params['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
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
     * @param string $runtime
     * @param array $execute
     * @param array $events
     * @param string $schedule
     * @param int $timeout
     * @param bool $enabled
     * @param bool $logging
     * @param string $entrypoint
     * @param string $commands
     * @param string $installationId
     * @param string $providerRepositoryId
     * @param string $providerBranch
     * @param bool $providerSilentMode
     * @param string $providerRootDirectory
     * @param string $templateRepository
     * @param string $templateOwner
     * @param string $templateRootDirectory
     * @param string $templateBranch
     * @throws AppwriteException
     * @return array

     */
    public function create(string $functionId, string $name, string $runtime, array $execute = null, array $events = null, string $schedule = null, int $timeout = null, bool $enabled = null, bool $logging = null, string $entrypoint = null, string $commands = null, string $installationId = null, string $providerRepositoryId = null, string $providerBranch = null, bool $providerSilentMode = null, string $providerRootDirectory = null, string $templateRepository = null, string $templateOwner = null, string $templateRootDirectory = null, string $templateBranch = null): array
    {
        $apiPath = str_replace([], [], '/functions');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!isset($runtime)) {
            throw new AppwriteException('Missing required parameter: "runtime"');
        }
        if (!is_null($functionId)) {
            $params['functionId'] = $functionId;
        }

        if (!is_null($name)) {
            $params['name'] = $name;
        }

        if (!is_null($runtime)) {
            $params['runtime'] = $runtime;
        }

        if (!is_null($execute)) {
            $params['execute'] = $execute;
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

        if (!is_null($enabled)) {
            $params['enabled'] = $enabled;
        }

        if (!is_null($logging)) {
            $params['logging'] = $logging;
        }

        if (!is_null($entrypoint)) {
            $params['entrypoint'] = $entrypoint;
        }

        if (!is_null($commands)) {
            $params['commands'] = $commands;
        }

        if (!is_null($installationId)) {
            $params['installationId'] = $installationId;
        }

        if (!is_null($providerRepositoryId)) {
            $params['providerRepositoryId'] = $providerRepositoryId;
        }

        if (!is_null($providerBranch)) {
            $params['providerBranch'] = $providerBranch;
        }

        if (!is_null($providerSilentMode)) {
            $params['providerSilentMode'] = $providerSilentMode;
        }

        if (!is_null($providerRootDirectory)) {
            $params['providerRootDirectory'] = $providerRootDirectory;
        }

        if (!is_null($templateRepository)) {
            $params['templateRepository'] = $templateRepository;
        }

        if (!is_null($templateOwner)) {
            $params['templateOwner'] = $templateOwner;
        }

        if (!is_null($templateRootDirectory)) {
            $params['templateRootDirectory'] = $templateRootDirectory;
        }

        if (!is_null($templateBranch)) {
            $params['templateBranch'] = $templateBranch;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List runtimes
     *
     * Get a list of all runtimes that are currently active on your instance.
     *
     * @throws AppwriteException
     * @return array

     */
    public function listRuntimes(): array
    {
        $apiPath = str_replace([], [], '/functions/runtimes');

        $params = [];

        return $this->client->call(Client::METHOD_GET, $apiPath, [
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
        $apiPath = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
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
     * @param string $runtime
     * @param array $execute
     * @param array $events
     * @param string $schedule
     * @param int $timeout
     * @param bool $enabled
     * @param bool $logging
     * @param string $entrypoint
     * @param string $commands
     * @param string $installationId
     * @param string $providerRepositoryId
     * @param string $providerBranch
     * @param bool $providerSilentMode
     * @param string $providerRootDirectory
     * @throws AppwriteException
     * @return array

     */
    public function update(string $functionId, string $name, string $runtime, array $execute = null, array $events = null, string $schedule = null, int $timeout = null, bool $enabled = null, bool $logging = null, string $entrypoint = null, string $commands = null, string $installationId = null, string $providerRepositoryId = null, string $providerBranch = null, bool $providerSilentMode = null, string $providerRootDirectory = null): array
    {
        $apiPath = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!isset($runtime)) {
            throw new AppwriteException('Missing required parameter: "runtime"');
        }
        if (!is_null($name)) {
            $params['name'] = $name;
        }

        if (!is_null($runtime)) {
            $params['runtime'] = $runtime;
        }

        if (!is_null($execute)) {
            $params['execute'] = $execute;
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

        if (!is_null($enabled)) {
            $params['enabled'] = $enabled;
        }

        if (!is_null($logging)) {
            $params['logging'] = $logging;
        }

        if (!is_null($entrypoint)) {
            $params['entrypoint'] = $entrypoint;
        }

        if (!is_null($commands)) {
            $params['commands'] = $commands;
        }

        if (!is_null($installationId)) {
            $params['installationId'] = $installationId;
        }

        if (!is_null($providerRepositoryId)) {
            $params['providerRepositoryId'] = $providerRepositoryId;
        }

        if (!is_null($providerBranch)) {
            $params['providerBranch'] = $providerBranch;
        }

        if (!is_null($providerSilentMode)) {
            $params['providerSilentMode'] = $providerSilentMode;
        }

        if (!is_null($providerRootDirectory)) {
            $params['providerRootDirectory'] = $providerRootDirectory;
        }


        return $this->client->call(Client::METHOD_PUT, $apiPath, [
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
     * @return string

     */
    public function delete(string $functionId): string
    {
        $apiPath = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
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
     * @param array $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function listDeployments(string $functionId, array $queries = null, string $search = null): array
    {
        $apiPath = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/deployments');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!is_null($queries)) {
            $params['queries'] = $queries;
        }

        if (!is_null($search)) {
            $params['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
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
     * Use the "command" param to set the entrypoint used to execute your code.
     *
     * @param string $functionId
     * @param InputFile $code
     * @param bool $activate
     * @param string $entrypoint
     * @param string $commands
     * @throws AppwriteException
     * @return array

     */
    public function createDeployment(string $functionId, InputFile $code, bool $activate, string $entrypoint = null, string $commands = null, callable $onProgress = null): array
    {
        $apiPath = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/deployments');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!isset($code)) {
            throw new AppwriteException('Missing required parameter: "code"');
        }
        if (!isset($activate)) {
            throw new AppwriteException('Missing required parameter: "activate"');
        }
        if (!is_null($entrypoint)) {
            $params['entrypoint'] = $entrypoint;
        }

        if (!is_null($commands)) {
            $params['commands'] = $commands;
        }

        if (!is_null($code)) {
            $params['code'] = $code;
        }

        if (!is_null($activate)) {
            $params['activate'] = $activate;
        }


        $size = 0;
        $mimeType = null;
        $postedName = null;
        if(empty($code->getPath() ?? null)) {
            $size = strlen($code->getData());
            $mimeType = $code->getMimeType();
            $postedName = $code->getFilename();
            if ($size <= Client::CHUNK_SIZE) {
                $params['code'] = new \CURLFile('data://' . $mimeType . ';base64,' . base64_encode($code->getData()), $mimeType, $postedName);
                return $this->client->call(Client::METHOD_POST, $apiPath, [
                            'content-type' => 'multipart/form-data',
                        ], $params);
            }
        } else {
            $size = filesize($code->getPath());
            $mimeType = $code->getMimeType() ?? mime_content_type($code->getPath());
            $postedName = $code->getFilename() ?? basename($code->getPath());
            //send single file if size is less than or equal to 5MB
            if ($size <= Client::CHUNK_SIZE) {
                $params['code'] = new \CURLFile($code->getPath(), $mimeType, $postedName);
                return $this->client->call(Client::METHOD_POST, $apiPath, [
                            'content-type' => 'multipart/form-data',
                        ], $params);
            }
        }

        $id = '';
        $counter = 0;


        $headers = ['content-type' => 'multipart/form-data'];
        $handle = null;

        if(!empty($code->getPath())) {
            $handle = @fopen($code->getPath(), "rb");
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
            $params['code'] = new \CURLFile('data://' . $mimeType . ';base64,' . base64_encode($chunk), $mimeType, $postedName);
            $headers['content-range'] = 'bytes ' . ($counter * Client::CHUNK_SIZE) . '-' . min(((($counter * Client::CHUNK_SIZE) + Client::CHUNK_SIZE) - 1), $size) . '/' . $size;
            if(!empty($id)) {
                $headers['x-appwrite-id'] = $id;
            }
            $response = $this->client->call(Client::METHOD_POST, $apiPath, $headers, $params);
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
        if(!empty($handle)) {
            @fclose($handle);
        }
        return $response;

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
        $apiPath = str_replace(['{functionId}', '{deploymentId}'], [$functionId, $deploymentId], '/functions/{functionId}/deployments/{deploymentId}');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!isset($deploymentId)) {
            throw new AppwriteException('Missing required parameter: "deploymentId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
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
        $apiPath = str_replace(['{functionId}', '{deploymentId}'], [$functionId, $deploymentId], '/functions/{functionId}/deployments/{deploymentId}');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!isset($deploymentId)) {
            throw new AppwriteException('Missing required parameter: "deploymentId"');
        }

        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
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
     * @return string

     */
    public function deleteDeployment(string $functionId, string $deploymentId): string
    {
        $apiPath = str_replace(['{functionId}', '{deploymentId}'], [$functionId, $deploymentId], '/functions/{functionId}/deployments/{deploymentId}');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!isset($deploymentId)) {
            throw new AppwriteException('Missing required parameter: "deploymentId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Build
     *
     * Create a new build for an Appwrite Function deployment. This endpoint can
     * be used to retry a failed build.
     *
     * @param string $functionId
     * @param string $deploymentId
     * @param string $buildId
     * @throws AppwriteException
     * @return string

     */
    public function createBuild(string $functionId, string $deploymentId, string $buildId): string
    {
        $apiPath = str_replace(['{functionId}', '{deploymentId}', '{buildId}'], [$functionId, $deploymentId, $buildId], '/functions/{functionId}/deployments/{deploymentId}/builds/{buildId}');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!isset($deploymentId)) {
            throw new AppwriteException('Missing required parameter: "deploymentId"');
        }
        if (!isset($buildId)) {
            throw new AppwriteException('Missing required parameter: "buildId"');
        }

        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Download Deployment
     *
     * @param string $functionId
     * @param string $deploymentId
     * @throws AppwriteException
     * @return string

     */
    public function downloadDeployment(string $functionId, string $deploymentId): string
    {
        $apiPath = str_replace(['{functionId}', '{deploymentId}'], [$functionId, $deploymentId], '/functions/{functionId}/deployments/{deploymentId}/download');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!isset($deploymentId)) {
            throw new AppwriteException('Missing required parameter: "deploymentId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Executions
     *
     * Get a list of all the current user function execution logs. You can use the
     * query params to filter your results.
     *
     * @param string $functionId
     * @param array $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function listExecutions(string $functionId, array $queries = null, string $search = null): array
    {
        $apiPath = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/executions');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!is_null($queries)) {
            $params['queries'] = $queries;
        }

        if (!is_null($search)) {
            $params['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
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
     * @param string $body
     * @param bool $async
     * @param string $xpath
     * @param string $method
     * @param array $headers
     * @throws AppwriteException
     * @return array

     */
    public function createExecution(string $functionId, string $body = null, bool $async = null, string $xpath = null, string $method = null, array $headers = null): array
    {
        $apiPath = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/executions');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!is_null($body)) {
            $params['body'] = $body;
        }

        if (!is_null($async)) {
            $params['async'] = $async;
        }

        if (!is_null($xpath)) {
            $params['path'] = $xpath;
        }

        if (!is_null($method)) {
            $params['method'] = $method;
        }

        if (!is_null($headers)) {
            $params['headers'] = $headers;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
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
        $apiPath = str_replace(['{functionId}', '{executionId}'], [$functionId, $executionId], '/functions/{functionId}/executions/{executionId}');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!isset($executionId)) {
            throw new AppwriteException('Missing required parameter: "executionId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Variables
     *
     * Get a list of all variables of a specific function.
     *
     * @param string $functionId
     * @throws AppwriteException
     * @return array

     */
    public function listVariables(string $functionId): array
    {
        $apiPath = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/variables');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Variable
     *
     * Create a new function environment variable. These variables can be accessed
     * in the function at runtime as environment variables.
     *
     * @param string $functionId
     * @param string $key
     * @param string $value
     * @throws AppwriteException
     * @return array

     */
    public function createVariable(string $functionId, string $key, string $value): array
    {
        $apiPath = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/variables');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($value)) {
            throw new AppwriteException('Missing required parameter: "value"');
        }
        if (!is_null($key)) {
            $params['key'] = $key;
        }

        if (!is_null($value)) {
            $params['value'] = $value;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Variable
     *
     * Get a variable by its unique ID.
     *
     * @param string $functionId
     * @param string $variableId
     * @throws AppwriteException
     * @return array

     */
    public function getVariable(string $functionId, string $variableId): array
    {
        $apiPath = str_replace(['{functionId}', '{variableId}'], [$functionId, $variableId], '/functions/{functionId}/variables/{variableId}');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!isset($variableId)) {
            throw new AppwriteException('Missing required parameter: "variableId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Variable
     *
     * Update variable by its unique ID.
     *
     * @param string $functionId
     * @param string $variableId
     * @param string $key
     * @param string $value
     * @throws AppwriteException
     * @return array

     */
    public function updateVariable(string $functionId, string $variableId, string $key, string $value = null): array
    {
        $apiPath = str_replace(['{functionId}', '{variableId}'], [$functionId, $variableId], '/functions/{functionId}/variables/{variableId}');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!isset($variableId)) {
            throw new AppwriteException('Missing required parameter: "variableId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!is_null($key)) {
            $params['key'] = $key;
        }

        if (!is_null($value)) {
            $params['value'] = $value;
        }


        return $this->client->call(Client::METHOD_PUT, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Variable
     *
     * Delete a variable by its unique ID.
     *
     * @param string $functionId
     * @param string $variableId
     * @throws AppwriteException
     * @return string

     */
    public function deleteVariable(string $functionId, string $variableId): string
    {
        $apiPath = str_replace(['{functionId}', '{variableId}'], [$functionId, $variableId], '/functions/{functionId}/variables/{variableId}');

        $params = [];
        if (!isset($functionId)) {
            throw new AppwriteException('Missing required parameter: "functionId"');
        }
        if (!isset($variableId)) {
            throw new AppwriteException('Missing required parameter: "variableId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }
}
