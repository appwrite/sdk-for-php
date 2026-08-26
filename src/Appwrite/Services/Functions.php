<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\Enums\Runtime;
use Appwrite\InputFile;
use Appwrite\Enums\TemplateReferenceType;
use Appwrite\Enums\VCSReferenceType;
use Appwrite\Enums\DeploymentDownloadType;
use Appwrite\Enums\ExecutionMethod;
use Utopia\Psr7\Request\Multipart\Part;

class Functions extends Service
{
    /**
     * Get a list of all the project's functions. You can use the query params to
     * filter your results.
     *
     * @throws AppwriteException
     */
    public function list(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\FunctionList
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

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\FunctionList::from($response);
    }

    /**
     * Create a new function. You can pass a list of
     * [permissions](https://appwrite.io/docs/permissions) to allow different
     * project users or team with access to execute the function using the client
     * API.
     *
     * @throws AppwriteException
     */
    public function create(string $functionId, string $name, Runtime $runtime, ?array $execute = null, ?array $events = null, ?string $schedule = null, ?int $timeout = null, ?bool $enabled = null, ?bool $logging = null, ?string $entrypoint = null, ?string $commands = null, ?array $scopes = null, ?string $installationId = null, ?string $providerRepositoryId = null, ?string $providerBranch = null, ?bool $providerSilentMode = null, ?string $providerRootDirectory = null, ?array $providerBranches = null, ?array $providerPaths = null, ?string $buildSpecification = null, ?string $runtimeSpecification = null, ?int $deploymentRetention = null): \Appwrite\Models\FunctionModel
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

        if (!is_null($providerBranches)) {
            $apiParams['providerBranches'] = $providerBranches;
        }

        if (!is_null($providerPaths)) {
            $apiParams['providerPaths'] = $providerPaths;
        }

        if (!is_null($buildSpecification)) {
            $apiParams['buildSpecification'] = $buildSpecification;
        }

        if (!is_null($runtimeSpecification)) {
            $apiParams['runtimeSpecification'] = $runtimeSpecification;
        }

        if (!is_null($deploymentRetention)) {
            $apiParams['deploymentRetention'] = $deploymentRetention;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\FunctionModel::from($response);
    }

    /**
     * Get a list of all runtimes that are currently active on your instance.
     *
     * @throws AppwriteException
     */
    public function listRuntimes(): \Appwrite\Models\RuntimeList
    {
        $apiPath = str_replace(
            [],
            [],
            '/functions/runtimes'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\RuntimeList::from($response);
    }

    /**
     * List allowed function specifications for this instance.
     *
     * @throws AppwriteException
     */
    public function listSpecifications(?string $type = null): \Appwrite\Models\SpecificationList
    {
        $apiPath = str_replace(
            [],
            [],
            '/functions/specifications'
        );

        $apiParams = [];

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\SpecificationList::from($response);
    }

    /**
     * Get a function by its unique ID.
     *
     * @throws AppwriteException
     */
    public function get(string $functionId): \Appwrite\Models\FunctionModel
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\FunctionModel::from($response);
    }

    /**
     * Update function by its unique ID.
     *
     * @throws AppwriteException
     */
    public function update(string $functionId, string $name, ?Runtime $runtime = null, ?array $execute = null, ?array $events = null, ?string $schedule = null, ?int $timeout = null, ?bool $enabled = null, ?bool $logging = null, ?string $entrypoint = null, ?string $commands = null, ?array $scopes = null, ?string $installationId = null, ?string $providerRepositoryId = null, ?string $providerBranch = null, ?bool $providerSilentMode = null, ?string $providerRootDirectory = null, ?array $providerBranches = null, ?array $providerPaths = null, ?string $buildSpecification = null, ?string $runtimeSpecification = null, ?int $deploymentRetention = null): \Appwrite\Models\FunctionModel
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
        $apiParams['providerBranches'] = $providerBranches;
        $apiParams['providerPaths'] = $providerPaths;
        $apiParams['buildSpecification'] = $buildSpecification;
        $apiParams['runtimeSpecification'] = $runtimeSpecification;

        if (!is_null($deploymentRetention)) {
            $apiParams['deploymentRetention'] = $deploymentRetention;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\FunctionModel::from($response);
    }

    /**
     * Delete a function by its unique ID.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update the function active deployment. Use this endpoint to switch the code
     * deployment that should be used when visitor opens your function.
     *
     * @throws AppwriteException
     */
    public function updateFunctionDeployment(string $functionId, string $deploymentId): \Appwrite\Models\FunctionModel
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}/deployment'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['deploymentId'] = $deploymentId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\FunctionModel::from($response);
    }

    /**
     * Get a list of all the function's code deployments. You can use the query
     * params to filter your results.
     *
     * @throws AppwriteException
     */
    public function listDeployments(string $functionId, ?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\DeploymentList
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

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DeploymentList::from($response);
    }

    /**
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
     * @throws AppwriteException
     */
    public function createDeployment(string $functionId, InputFile $code, bool $activate, ?string $entrypoint = null, ?string $commands = null, ?callable $onProgress = null): \Appwrite\Models\Deployment
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'multipart/form-data';
        $apiHeaders['accept'] = 'application/json';
        $size = 0;
        $mimeType = null;
        $postedName = null;
        if (empty($code->getPath() ?? null)) {
            $size = strlen($code->getData());
            $mimeType = $code->getMimeType();
            $postedName = $code->getFilename();
            if ($size <= Client::CHUNK_SIZE) {
                $apiParams['code'] = Part::body('code', $code->getData(), $postedName, $mimeType);
                $response = $this->client->call(Client::METHOD_POST, $apiPath, [
                            'content-type' => 'multipart/form-data',
                        'accept' => 'application/json',
                        ], $apiParams);
                if (!is_array($response)) {
                    throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
                }

                return \Appwrite\Models\Deployment::from($response);
            }
        } else {
            $size = filesize($code->getPath());
            $mimeType = $code->getMimeType() ?? mime_content_type($code->getPath());
            $postedName = $code->getFilename() ?? basename($code->getPath());
            //send single file if size is less than or equal to 5MB
            if ($size <= Client::CHUNK_SIZE) {
                $apiParams['code'] = Part::file('code', $code->getPath(), $postedName, $mimeType);
                $response = $this->client->call(Client::METHOD_POST, $apiPath, [
                            'content-type' => 'multipart/form-data',
                        'accept' => 'application/json',
                        ], $apiParams);
                if (!is_array($response)) {
                    throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
                }

                return \Appwrite\Models\Deployment::from($response);
            }
        }

        $counter = 0;


        $apiHeaders = [
            'X-Appwrite-Project' => $this->client->getConfig('project'),
            'content-type' => 'multipart/form-data',
            'accept' => 'application/json',
        ];
        $handle = null;

        if (!empty($code->getPath())) {
            $handle = @fopen($code->getPath(), "rb");
        }

        $uploadId = '';
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

        $readChunk = function (int $start, int $end) use ($handle, $code): string|false {
            if (!empty($handle)) {
                fseek($handle, $start);
                return @fread($handle, $end - $start);
            }

            return substr($code->getData(), $start, $end - $start);
        };

        $uploadChunk = function (array $chunk, string $currentUploadId = '') use ($readChunk, $apiPath, $apiHeaders, $apiParams, $mimeType, $postedName, $size) {
            $chunkParams = $apiParams;
            $chunkHeaders = $apiHeaders;
            $data = $readChunk($chunk['start'], $chunk['end']);
            if (!is_string($data)) {
                throw new AppwriteException('Failed to read upload chunk');
            }
            $chunkParams['code'] = Part::body('code', $data, $postedName, $mimeType);
            $chunkHeaders['content-range'] = 'bytes ' . $chunk['start'] . '-' . ($chunk['end'] - 1) . '/' . $size;
            if (!empty($currentUploadId)) {
                $chunkHeaders['x-appwrite-id'] = $currentUploadId;
            }

            return $this->client->call(Client::METHOD_POST, $apiPath, $chunkHeaders, $chunkParams);
        };

        $isUploadComplete = function ($chunkResponse) use ($totalChunks): bool {
            if (!is_array($chunkResponse) || !isset($chunkResponse['chunksUploaded'])) {
                return false;
            }

            return (int) $chunkResponse['chunksUploaded'] >= (int) ($chunkResponse['chunksTotal'] ?? $totalChunks);
        };

        $response = $uploadChunk($chunks[0], $uploadId);
        $uploadId = $response['$id'];
        $completedCount = $chunks[0]['index'] + 1;
        $uploadedSize = $chunks[0]['end'];
        if ($onProgress !== null) {
            $onProgress([
                '$id' => $response['$id'],
                'progress' => $uploadedSize / $size * 100,
                'sizeUploaded' => $uploadedSize,
                'chunksTotal' => $totalChunks,
                'chunksUploaded' => $completedCount,
            ]);
        }

        $remainingChunks = array_slice($chunks, 1);
        $completedResponse = $isUploadComplete($response) ? $response : null;

        foreach ($remainingChunks as $chunk) {
            $response = $uploadChunk($chunk, $uploadId);
            $completedCount++;
            $uploadedSize += $chunk['end'] - $chunk['start'];
            if ($isUploadComplete($response)) {
                $completedResponse = $response;
            }
            if ($onProgress !== null) {
                $onProgress([
                    '$id' => $uploadId,
                    'progress' => $uploadedSize / $size * 100,
                    'sizeUploaded' => $uploadedSize,
                    'chunksTotal' => $totalChunks,
                    'chunksUploaded' => $completedCount,
                ]);
            }
        }

        $response = $completedResponse ?? $response;
        if (!empty($handle)) {
            @fclose($handle);
        }
        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Deployment::from($response);
    }

    /**
     * Create a new build for an existing function deployment. This endpoint
     * allows you to rebuild a deployment with the updated function configuration,
     * including its entrypoint and build commands if they have been modified. The
     * build process will be queued and executed asynchronously. The original
     * deployment's code will be preserved and used for the new build.
     *
     * @throws AppwriteException
     */
    public function createDuplicateDeployment(string $functionId, string $deploymentId, ?string $buildId = null): \Appwrite\Models\Deployment
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}/deployments/duplicate'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['deploymentId'] = $deploymentId;

        if (!is_null($buildId)) {
            $apiParams['buildId'] = $buildId;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Deployment::from($response);
    }

    /**
     * Create a deployment based on a template.
     *
     * Use this endpoint with combination of
     * [listTemplates](https://appwrite.io/docs/products/functions/templates) to
     * find the template details.
     *
     * @throws AppwriteException
     */
    public function createTemplateDeployment(string $functionId, string $repository, string $owner, string $rootDirectory, TemplateReferenceType $type, string $reference, ?bool $activate = null): \Appwrite\Models\Deployment
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}/deployments/template'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['repository'] = $repository;
        $apiParams['owner'] = $owner;
        $apiParams['rootDirectory'] = $rootDirectory;
        $apiParams['type'] = $type;
        $apiParams['reference'] = $reference;

        if (!is_null($activate)) {
            $apiParams['activate'] = $activate;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Deployment::from($response);
    }

    /**
     * Create a deployment when a function is connected to VCS.
     *
     * This endpoint lets you create deployment from a branch, commit, or a tag.
     *
     * @throws AppwriteException
     */
    public function createVcsDeployment(string $functionId, VCSReferenceType $type, string $reference, ?bool $activate = null): \Appwrite\Models\Deployment
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}/deployments/vcs'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['type'] = $type;
        $apiParams['reference'] = $reference;

        if (!is_null($activate)) {
            $apiParams['activate'] = $activate;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Deployment::from($response);
    }

    /**
     * Get a function deployment by its unique ID.
     *
     * @throws AppwriteException
     */
    public function getDeployment(string $functionId, string $deploymentId): \Appwrite\Models\Deployment
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Deployment::from($response);
    }

    /**
     * Delete a code deployment by its unique ID.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a function deployment content by its unique ID. The endpoint response
     * return with a 'Content-Disposition: attachment' header that tells the
     * browser to start downloading the file to user downloads directory.
     *
     * @throws AppwriteException
     */
    public function getDeploymentDownload(string $functionId, string $deploymentId, ?DeploymentDownloadType $type = null, ?string $token = null): string
    {
        $apiPath = str_replace(
            ['{functionId}', '{deploymentId}'],
            [$functionId, $deploymentId],
            '/functions/{functionId}/deployments/{deploymentId}/download'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['deploymentId'] = $deploymentId;

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        if (!is_null($token)) {
            $apiParams['token'] = $token;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = '*/*';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Cancel an ongoing function deployment build. If the build is already in
     * progress, it will be stopped and marked as canceled. If the build hasn't
     * started yet, it will be marked as canceled without executing. You cannot
     * cancel builds that have already completed (status 'ready') or failed. The
     * response includes the final build status and details.
     *
     * @throws AppwriteException
     */
    public function updateDeploymentStatus(string $functionId, string $deploymentId): \Appwrite\Models\Deployment
    {
        $apiPath = str_replace(
            ['{functionId}', '{deploymentId}'],
            [$functionId, $deploymentId],
            '/functions/{functionId}/deployments/{deploymentId}/status'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['deploymentId'] = $deploymentId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Deployment::from($response);
    }

    /**
     * Get a list of all the current user function execution logs. You can use the
     * query params to filter your results.
     *
     * @throws AppwriteException
     */
    public function listExecutions(string $functionId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\ExecutionList
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

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\ExecutionList::from($response);
    }

    /**
     * Trigger a function execution. The returned object will return you the
     * current execution status. You can ping the `Get Execution` endpoint to get
     * updates on the current execution status. Once this endpoint is called, your
     * function execution process will start asynchronously.
     *
     * @throws AppwriteException
     */
    public function createExecution(string $functionId, ?string $body = null, ?bool $async = null, ?string $xpath = null, ?ExecutionMethod $method = null, ?array $headers = null, ?string $scheduledAt = null): \Appwrite\Models\Execution
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
        $apiParams['scheduledAt'] = $scheduledAt;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Execution::from($response);
    }

    /**
     * Get a function execution log by its unique ID.
     *
     * @throws AppwriteException
     */
    public function getExecution(string $functionId, string $executionId): \Appwrite\Models\Execution
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Execution::from($response);
    }

    /**
     * Delete a function execution by its unique ID.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all variables of a specific function.
     *
     * @throws AppwriteException
     */
    public function listVariables(string $functionId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\VariableList
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}/variables'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\VariableList::from($response);
    }

    /**
     * Create a new function environment variable. These variables can be accessed
     * in the function at runtime as environment variables.
     *
     * @throws AppwriteException
     */
    public function createVariable(string $functionId, string $variableId, string $key, string $value, ?bool $secret = null): \Appwrite\Models\Variable
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/functions/{functionId}/variables'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['variableId'] = $variableId;
        $apiParams['key'] = $key;
        $apiParams['value'] = $value;

        if (!is_null($secret)) {
            $apiParams['secret'] = $secret;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Variable::from($response);
    }

    /**
     * Get a variable by its unique ID.
     *
     * @throws AppwriteException
     */
    public function getVariable(string $functionId, string $variableId): \Appwrite\Models\Variable
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Variable::from($response);
    }

    /**
     * Update variable by its unique ID.
     *
     * @throws AppwriteException
     */
    public function updateVariable(string $functionId, string $variableId, ?string $key = null, ?string $value = null, ?bool $secret = null): \Appwrite\Models\Variable
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
        $apiParams['value'] = $value;
        $apiParams['secret'] = $secret;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Variable::from($response);
    }

    /**
     * Delete a variable by its unique ID.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}
