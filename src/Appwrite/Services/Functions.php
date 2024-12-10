<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\Runtime;
use Appwrite\Enums\ExecutionMethod;

class Functions extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * List functions
     *
     * Get a list of all the project's functions. You can use the query params to
     * filter your results.
     *
     * @param ?array $queries
     * @param ?string $search
     * @throws AppwriteException
     * @return array
     */
    public function list(?array $queries = null, ?string $search = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/functions'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create function
     *
     * Create a new function. You can pass a list of
     * [permissions](https://appwrite.io/docs/permissions) to allow different
     * project users or team with access to execute the function using the client
     * API.
     *
     * @param string $functionId
     * @param string $name
     * @param Runtime $runtime
     * @param ?array $execute
     * @param ?array $events
     * @param ?string $schedule
     * @param ?int $timeout
     * @param ?bool $enabled
     * @param ?bool $logging
     * @param ?string $entrypoint
     * @param ?string $commands
     * @param ?array $scopes
     * @param ?string $installationId
     * @param ?string $providerRepositoryId
     * @param ?string $providerBranch
     * @param ?bool $providerSilentMode
     * @param ?string $providerRootDirectory
     * @param ?string $templateRepository
     * @param ?string $templateOwner
     * @param ?string $templateRootDirectory
     * @param ?string $templateVersion
     * @param ?string $specification
     * @throws AppwriteException
     * @return array
     */
    public function create(string $functionId, string $name, Runtime $runtime, ?array $execute = null, ?array $events = null, ?string $schedule = null, ?int $timeout = null, ?bool $enabled = null, ?bool $logging = null, ?string $entrypoint = null, ?string $commands = null, ?array $scopes = null, ?string $installationId = null, ?string $providerRepositoryId = null, ?string $providerBranch = null, ?bool $providerSilentMode = null, ?string $providerRootDirectory = null, ?string $templateRepository = null, ?string $templateOwner = null, ?string $templateRootDirectory = null, ?string $templateVersion = null, ?string $specification = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/functions'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['name'] = $name;
        $apiParams['runtime'] = $runtime;

        if (!is_null($execute)) {
            $apiParams['execute'] = $execute;
        }

        if (!is_null($events)) {
            $apiParams['events'] = $events;
        }

        if (!is_null($schedule)) {
            $apiParams['schedule'] = $schedule;
        }

        if (!is_null($timeout)) {
            $apiParams['timeout'] = $timeout;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($logging)) {
            $apiParams['logging'] = $logging;
        }

        if (!is_null($entrypoint)) {
            $apiParams['entrypoint'] = $entrypoint;
        }

        if (!is_null($commands)) {
            $apiParams['commands'] = $commands;
        }

        if (!is_null($scopes)) {
            $apiParams['scopes'] = $scopes;
        }

        if (!is_null($installationId)) {
            $apiParams['installationId'] = $installationId;
        }

        if (!is_null($providerRepositoryId)) {
            $apiParams['providerRepositoryId'] = $providerRepositoryId;
        }

        if (!is_null($providerBranch)) {
            $apiParams['providerBranch'] = $providerBranch;
        }

        if (!is_null($providerSilentMode)) {
            $apiParams['providerSilentMode'] = $providerSilentMode;
        }

        if (!is_null($providerRootDirectory)) {
            $apiParams['providerRootDirectory'] = $providerRootDirectory;
        }

        if (!is_null($templateRepository)) {
            $apiParams['templateRepository'] = $templateRepository;
        }

        if (!is_null($templateOwner)) {
            $apiParams['templateOwner'] = $templateOwner;
        }

        if (!is_null($templateRootDirectory)) {
            $apiParams['templateRootDirectory'] = $templateRootDirectory;
        }

        if (!is_null($templateVersion)) {
            $apiParams['templateVersion'] = $templateVersion;
        }

        if (!is_null($specification)) {
            $apiParams['specification'] = $specification;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
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
        $apiPath = str_replace(
            [],
            [],
            '/functions/runtimes'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List available function runtime specifications
     *
     * List allowed function specifications for this instance.
     * 
     *
     * @throws AppwriteException
     * @return array
     */
    public function listSpecifications(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/functions/specifications'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get function
     *
     * Get a function by its unique ID.
     *
     * @param string $functionId
     * @throws AppwriteException
     * @return array
     */
    public function get(string $functionId): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update function
     *
     * Update function by its unique ID.
     *
     * @param string $functionId
     * @param string $name
     * @param ?Runtime $runtime
     * @param ?array $execute
     * @param ?array $events
     * @param ?string $schedule
     * @param ?int $timeout
     * @param ?bool $enabled
     * @param ?bool $logging
     * @param ?string $entrypoint
     * @param ?string $commands
     * @param ?array $scopes
     * @param ?string $installationId
     * @param ?string $providerRepositoryId
     * @param ?string $providerBranch
     * @param ?bool $providerSilentMode
     * @param ?string $providerRootDirectory
     * @param ?string $specification
     * @throws AppwriteException
     * @return array
     */
    public function update(string $functionId, string $name, ?Runtime $runtime = null, ?array $execute = null, ?array $events = null, ?string $schedule = null, ?int $timeout = null, ?bool $enabled = null, ?bool $logging = null, ?string $entrypoint = null, ?string $commands = null, ?array $scopes = null, ?string $installationId = null, ?string $providerRepositoryId = null, ?string $providerBranch = null, ?bool $providerSilentMode = null, ?string $providerRootDirectory = null, ?string $specification = null): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['name'] = $name;

        if (!is_null($runtime)) {
            $apiParams['runtime'] = $runtime;
        }

        if (!is_null($execute)) {
            $apiParams['execute'] = $execute;
        }

        if (!is_null($events)) {
            $apiParams['events'] = $events;
        }

        if (!is_null($schedule)) {
            $apiParams['schedule'] = $schedule;
        }

        if (!is_null($timeout)) {
            $apiParams['timeout'] = $timeout;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($logging)) {
            $apiParams['logging'] = $logging;
        }

        if (!is_null($entrypoint)) {
            $apiParams['entrypoint'] = $entrypoint;
        }

        if (!is_null($commands)) {
            $apiParams['commands'] = $commands;
        }

        if (!is_null($scopes)) {
            $apiParams['scopes'] = $scopes;
        }

        if (!is_null($installationId)) {
            $apiParams['installationId'] = $installationId;
        }
        $apiParams['providerRepositoryId'] = $providerRepositoryId;

        if (!is_null($providerBranch)) {
            $apiParams['providerBranch'] = $providerBranch;
        }

        if (!is_null($providerSilentMode)) {
            $apiParams['providerSilentMode'] = $providerSilentMode;
        }

        if (!is_null($providerRootDirectory)) {
            $apiParams['providerRootDirectory'] = $providerRootDirectory;
        }

        if (!is_null($specification)) {
            $apiParams['specification'] = $specification;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete function
     *
     * Delete a function by its unique ID.
     *
     * @param string $functionId
     * @throws AppwriteException
     * @return string
     */
    public function delete(string $functionId): string
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List deployments
     *
     * Get a list of all the project's code deployments. You can use the query
     * params to filter your results.
     *
     * @param string $functionId
     * @param ?array $queries
     * @param ?string $search
     * @throws AppwriteException
     * @return array
     */
    public function listDeployments(string $functionId, ?array $queries = null, ?string $search = null): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}/deployments'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create deployment
     *
     * Create a new function code deployment. Use this endpoint to upload a new
     * version of your code function. To execute your newly uploaded code, you'll
     * need to update the function's deployment to use your new deployment UID.
     * 
     * This endpoint accepts a tar.gz file compressed with your code. Make sure to
     * include any dependencies your code has within the compressed file. You can
     * learn more about code packaging in the [Appwrite Cloud Functions
     * tutorial](https://appwrite.io/docs/functions).
     * 
     * Use the "command" param to set the entrypoint used to execute your code.
     *
     * @param string $functionId
     * @param InputFile $code
     * @param bool $activate
     * @param ?string $entrypoint
     * @param ?string $commands
     * @throws AppwriteException
     * @return array
     */
    public function createDeployment(string $functionId, InputFile $code, bool $activate, ?string $entrypoint = null, ?string $commands = null, callable $onProgress = null): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}/deployments'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['code'] = $code;
        $apiParams['activate'] = $activate;

        if (!is_null($entrypoint)) {
            $apiParams['entrypoint'] = $entrypoint;
        }

        if (!is_null($commands)) {
            $apiParams['commands'] = $commands;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'multipart/form-data';
        $size = 0;
        $mimeType = null;
        $postedName = null;
        if(empty($code->getPath() ?? null)) {
            $size = strlen($code->getData());
            $mimeType = $code->getMimeType();
            $postedName = $code->getFilename();
            if ($size <= Client::CHUNK_SIZE) {
                $apiParams['code'] = new \CURLFile('data://' . $mimeType . ';base64,' . base64_encode($code->getData()), $mimeType, $postedName);
                return $this->client->call(Client::METHOD_POST, $apiPath, [
                            'content-type' => 'multipart/form-data',
                        ], $apiParams);
            }
        } else {
            $size = filesize($code->getPath());
            $mimeType = $code->getMimeType() ?? mime_content_type($code->getPath());
            $postedName = $code->getFilename() ?? basename($code->getPath());
            //send single file if size is less than or equal to 5MB
            if ($size <= Client::CHUNK_SIZE) {
                $apiParams['code'] = new \CURLFile($code->getPath(), $mimeType, $postedName);
                return $this->client->call(Client::METHOD_POST, $apiPath, [
                            'content-type' => 'multipart/form-data',
                        ], $apiParams);
            }
        }

        $id = '';
        $counter = 0;


        $apiHeaders = ['content-type' => 'multipart/form-data'];
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
            $apiParams['code'] = new \CURLFile('data://' . $mimeType . ';base64,' . base64_encode($chunk), $mimeType, $postedName);
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
     * Get deployment
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
        $apiPath = str_replace(
            ['{functionId}', '{deploymentId}'],
            [$functionId, $deploymentId],
            '/functions/{functionId}/deployments/{deploymentId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['deploymentId'] = $deploymentId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update deployment
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
        $apiPath = str_replace(
            ['{functionId}', '{deploymentId}'],
            [$functionId, $deploymentId],
            '/functions/{functionId}/deployments/{deploymentId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['deploymentId'] = $deploymentId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete deployment
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
        $apiPath = str_replace(
            ['{functionId}', '{deploymentId}'],
            [$functionId, $deploymentId],
            '/functions/{functionId}/deployments/{deploymentId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['deploymentId'] = $deploymentId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Rebuild deployment
     *
     * @param string $functionId
     * @param string $deploymentId
     * @param ?string $buildId
     * @throws AppwriteException
     * @return string
     */
    public function createBuild(string $functionId, string $deploymentId, ?string $buildId = null): string
    {
        $apiPath = str_replace(
            ['{functionId}', '{deploymentId}'],
            [$functionId, $deploymentId],
            '/functions/{functionId}/deployments/{deploymentId}/build'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['deploymentId'] = $deploymentId;

        if (!is_null($buildId)) {
            $apiParams['buildId'] = $buildId;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Cancel deployment
     *
     * @param string $functionId
     * @param string $deploymentId
     * @throws AppwriteException
     * @return array
     */
    public function updateDeploymentBuild(string $functionId, string $deploymentId): array
    {
        $apiPath = str_replace(
            ['{functionId}', '{deploymentId}'],
            [$functionId, $deploymentId],
            '/functions/{functionId}/deployments/{deploymentId}/build'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['deploymentId'] = $deploymentId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Download deployment
     *
     * Get a Deployment's contents by its unique ID. This endpoint supports range
     * requests for partial or streaming file download.
     *
     * @param string $functionId
     * @param string $deploymentId
     * @throws AppwriteException
     * @return string
     */
    public function getDeploymentDownload(string $functionId, string $deploymentId): string
    {
        $apiPath = str_replace(
            ['{functionId}', '{deploymentId}'],
            [$functionId, $deploymentId],
            '/functions/{functionId}/deployments/{deploymentId}/download'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['deploymentId'] = $deploymentId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List executions
     *
     * Get a list of all the current user function execution logs. You can use the
     * query params to filter your results.
     *
     * @param string $functionId
     * @param ?array $queries
     * @param ?string $search
     * @throws AppwriteException
     * @return array
     */
    public function listExecutions(string $functionId, ?array $queries = null, ?string $search = null): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}/executions'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create execution
     *
     * Trigger a function execution. The returned object will return you the
     * current execution status. You can ping the `Get Execution` endpoint to get
     * updates on the current execution status. Once this endpoint is called, your
     * function execution process will start asynchronously.
     *
     * @param string $functionId
     * @param ?string $body
     * @param ?bool $async
     * @param ?string $xpath
     * @param ?ExecutionMethod $method
     * @param ?array $headers
     * @param ?string $scheduledAt
     * @throws AppwriteException
     * @return array
     */
    public function createExecution(string $functionId, ?string $body = null, ?bool $async = null, ?string $xpath = null, ?ExecutionMethod $method = null, ?array $headers = null, ?string $scheduledAt = null): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}/executions'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        if (!is_null($body)) {
            $apiParams['body'] = $body;
        }

        if (!is_null($async)) {
            $apiParams['async'] = $async;
        }

        if (!is_null($xpath)) {
            $apiParams['path'] = $xpath;
        }

        if (!is_null($method)) {
            $apiParams['method'] = $method;
        }

        if (!is_null($headers)) {
            $apiParams['headers'] = $headers;
        }

        if (!is_null($scheduledAt)) {
            $apiParams['scheduledAt'] = $scheduledAt;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get execution
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
        $apiPath = str_replace(
            ['{functionId}', '{executionId}'],
            [$functionId, $executionId],
            '/functions/{functionId}/executions/{executionId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['executionId'] = $executionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete execution
     *
     * Delete a function execution by its unique ID.
     * 
     *
     * @param string $functionId
     * @param string $executionId
     * @throws AppwriteException
     * @return string
     */
    public function deleteExecution(string $functionId, string $executionId): string
    {
        $apiPath = str_replace(
            ['{functionId}', '{executionId}'],
            [$functionId, $executionId],
            '/functions/{functionId}/executions/{executionId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['executionId'] = $executionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List variables
     *
     * Get a list of all variables of a specific function.
     *
     * @param string $functionId
     * @throws AppwriteException
     * @return array
     */
    public function listVariables(string $functionId): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}/variables'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create variable
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
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}/variables'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['key'] = $key;
        $apiParams['value'] = $value;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get variable
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
        $apiPath = str_replace(
            ['{functionId}', '{variableId}'],
            [$functionId, $variableId],
            '/functions/{functionId}/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['variableId'] = $variableId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update variable
     *
     * Update variable by its unique ID.
     *
     * @param string $functionId
     * @param string $variableId
     * @param string $key
     * @param ?string $value
     * @throws AppwriteException
     * @return array
     */
    public function updateVariable(string $functionId, string $variableId, string $key, ?string $value = null): array
    {
        $apiPath = str_replace(
            ['{functionId}', '{variableId}'],
            [$functionId, $variableId],
            '/functions/{functionId}/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['variableId'] = $variableId;
        $apiParams['key'] = $key;

        if (!is_null($value)) {
            $apiParams['value'] = $value;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete variable
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
        $apiPath = str_replace(
            ['{functionId}', '{variableId}'],
            [$functionId, $variableId],
            '/functions/{functionId}/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['variableId'] = $variableId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}