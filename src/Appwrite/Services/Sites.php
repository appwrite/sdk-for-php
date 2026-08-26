<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\Enums\Framework;
use Appwrite\Enums\BuildRuntime;
use Appwrite\Enums\Adapter;
use Appwrite\InputFile;
use Appwrite\Enums\TemplateReferenceType;
use Appwrite\Enums\VCSReferenceType;
use Appwrite\Enums\DeploymentDownloadType;
use Utopia\Psr7\Request\Multipart\Part;

class Sites extends Service
{
    /**
     * Get a list of all the project's sites. You can use the query params to
     * filter your results.
     *
     * @throws AppwriteException
     */
    public function list(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\SiteList
    {
        $apiPath = str_replace(
            [],
            [],
            '/sites'
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

        return \Appwrite\Models\SiteList::from($response);
    }

    /**
     * Create a new site.
     *
     * @throws AppwriteException
     */
    public function create(string $siteId, string $name, Framework $framework, BuildRuntime $buildRuntime, ?bool $enabled = null, ?bool $logging = null, ?int $timeout = null, ?string $installCommand = null, ?string $buildCommand = null, ?string $startCommand = null, ?string $outputDirectory = null, ?Adapter $adapter = null, ?string $installationId = null, ?string $fallbackFile = null, ?string $providerRepositoryId = null, ?string $providerBranch = null, ?bool $providerSilentMode = null, ?string $providerRootDirectory = null, ?array $providerBranches = null, ?array $providerPaths = null, ?string $buildSpecification = null, ?string $runtimeSpecification = null, ?int $deploymentRetention = null, ?array $scopes = null): \Appwrite\Models\Site
    {
        $apiPath = str_replace(
            [],
            [],
            '/sites'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['name'] = $name;
        $apiParams['framework'] = $framework;
        $apiParams['buildRuntime'] = $buildRuntime;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($logging)) {
            $apiParams['logging'] = $logging;
        }

        if (!is_null($timeout)) {
            $apiParams['timeout'] = $timeout;
        }

        if (!is_null($installCommand)) {
            $apiParams['installCommand'] = $installCommand;
        }

        if (!is_null($buildCommand)) {
            $apiParams['buildCommand'] = $buildCommand;
        }

        if (!is_null($startCommand)) {
            $apiParams['startCommand'] = $startCommand;
        }

        if (!is_null($outputDirectory)) {
            $apiParams['outputDirectory'] = $outputDirectory;
        }

        if (!is_null($adapter)) {
            $apiParams['adapter'] = $adapter;
        }

        if (!is_null($installationId)) {
            $apiParams['installationId'] = $installationId;
        }

        if (!is_null($fallbackFile)) {
            $apiParams['fallbackFile'] = $fallbackFile;
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

        if (!is_null($scopes)) {
            $apiParams['scopes'] = $scopes;
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

        return \Appwrite\Models\Site::from($response);
    }

    /**
     * Get a list of all frameworks that are currently available on the server
     * instance.
     *
     * @throws AppwriteException
     */
    public function listFrameworks(): \Appwrite\Models\FrameworkList
    {
        $apiPath = str_replace(
            [],
            [],
            '/sites/frameworks'
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

        return \Appwrite\Models\FrameworkList::from($response);
    }

    /**
     * List allowed site specifications for this instance.
     *
     * @throws AppwriteException
     */
    public function listSpecifications(?string $type = null): \Appwrite\Models\SpecificationList
    {
        $apiPath = str_replace(
            [],
            [],
            '/sites/specifications'
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
     * Get a site by its unique ID.
     *
     * @throws AppwriteException
     */
    public function get(string $siteId): \Appwrite\Models\Site
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/sites/{siteId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;

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

        return \Appwrite\Models\Site::from($response);
    }

    /**
     * Update site by its unique ID.
     *
     * @throws AppwriteException
     */
    public function update(string $siteId, string $name, Framework $framework, ?bool $enabled = null, ?bool $logging = null, ?int $timeout = null, ?string $installCommand = null, ?string $buildCommand = null, ?string $startCommand = null, ?string $outputDirectory = null, ?BuildRuntime $buildRuntime = null, ?Adapter $adapter = null, ?string $fallbackFile = null, ?string $installationId = null, ?string $providerRepositoryId = null, ?string $providerBranch = null, ?bool $providerSilentMode = null, ?string $providerRootDirectory = null, ?array $providerBranches = null, ?array $providerPaths = null, ?string $buildSpecification = null, ?string $runtimeSpecification = null, ?int $deploymentRetention = null, ?array $scopes = null): \Appwrite\Models\Site
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/sites/{siteId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['name'] = $name;
        $apiParams['framework'] = $framework;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($logging)) {
            $apiParams['logging'] = $logging;
        }

        if (!is_null($timeout)) {
            $apiParams['timeout'] = $timeout;
        }

        if (!is_null($installCommand)) {
            $apiParams['installCommand'] = $installCommand;
        }

        if (!is_null($buildCommand)) {
            $apiParams['buildCommand'] = $buildCommand;
        }

        if (!is_null($startCommand)) {
            $apiParams['startCommand'] = $startCommand;
        }

        if (!is_null($outputDirectory)) {
            $apiParams['outputDirectory'] = $outputDirectory;
        }

        if (!is_null($buildRuntime)) {
            $apiParams['buildRuntime'] = $buildRuntime;
        }

        if (!is_null($adapter)) {
            $apiParams['adapter'] = $adapter;
        }

        if (!is_null($fallbackFile)) {
            $apiParams['fallbackFile'] = $fallbackFile;
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
        $apiParams['providerBranches'] = $providerBranches;
        $apiParams['providerPaths'] = $providerPaths;
        $apiParams['buildSpecification'] = $buildSpecification;

        if (!is_null($runtimeSpecification)) {
            $apiParams['runtimeSpecification'] = $runtimeSpecification;
        }

        if (!is_null($deploymentRetention)) {
            $apiParams['deploymentRetention'] = $deploymentRetention;
        }
        $apiParams['scopes'] = $scopes;

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

        return \Appwrite\Models\Site::from($response);
    }

    /**
     * Delete a site by its unique ID.
     *
     * @throws AppwriteException
     */
    public function delete(string $siteId): string
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/sites/{siteId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;

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
     * Update the site active deployment. Use this endpoint to switch the code
     * deployment that should be used when visitor opens your site.
     *
     * @throws AppwriteException
     */
    public function updateSiteDeployment(string $siteId, string $deploymentId): \Appwrite\Models\Site
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/sites/{siteId}/deployment'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
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

        return \Appwrite\Models\Site::from($response);
    }

    /**
     * Get a list of all the site's code deployments. You can use the query params
     * to filter your results.
     *
     * @throws AppwriteException
     */
    public function listDeployments(string $siteId, ?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\DeploymentList
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/sites/{siteId}/deployments'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;

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
     * Create a new site code deployment. Use this endpoint to upload a new
     * version of your site code. To activate your newly uploaded code, you'll
     * need to update the site's deployment to use your new deployment ID.
     *
     * @throws AppwriteException
     */
    public function createDeployment(string $siteId, InputFile $code, ?string $installCommand = null, ?string $buildCommand = null, ?string $outputDirectory = null, ?bool $activate = null, ?callable $onProgress = null): \Appwrite\Models\Deployment
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/sites/{siteId}/deployments'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['code'] = $code;

        if (!is_null($installCommand)) {
            $apiParams['installCommand'] = $installCommand;
        }

        if (!is_null($buildCommand)) {
            $apiParams['buildCommand'] = $buildCommand;
        }

        if (!is_null($outputDirectory)) {
            $apiParams['outputDirectory'] = $outputDirectory;
        }

        if (!is_null($activate)) {
            $apiParams['activate'] = $activate;
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
     * Create a new build for an existing site deployment. This endpoint allows
     * you to rebuild a deployment with the updated site configuration, including
     * its commands and output directory if they have been modified. The build
     * process will be queued and executed asynchronously. The original
     * deployment's code will be preserved and used for the new build.
     *
     * @throws AppwriteException
     */
    public function createDuplicateDeployment(string $siteId, string $deploymentId): \Appwrite\Models\Deployment
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/sites/{siteId}/deployments/duplicate'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['deploymentId'] = $deploymentId;

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
     * [listTemplates](https://appwrite.io/docs/products/sites/templates) to find
     * the template details.
     *
     * @throws AppwriteException
     */
    public function createTemplateDeployment(string $siteId, string $repository, string $owner, string $rootDirectory, TemplateReferenceType $type, string $reference, ?bool $activate = null): \Appwrite\Models\Deployment
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/sites/{siteId}/deployments/template'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
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
     * Create a deployment when a site is connected to VCS.
     *
     * This endpoint lets you create deployment from a branch, commit, or a tag.
     *
     * @throws AppwriteException
     */
    public function createVcsDeployment(string $siteId, VCSReferenceType $type, string $reference, ?bool $activate = null): \Appwrite\Models\Deployment
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/sites/{siteId}/deployments/vcs'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
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
     * Get a site deployment by its unique ID.
     *
     * @throws AppwriteException
     */
    public function getDeployment(string $siteId, string $deploymentId): \Appwrite\Models\Deployment
    {
        $apiPath = str_replace(
            ['{siteId}', '{deploymentId}'],
            [$siteId, $deploymentId],
            '/sites/{siteId}/deployments/{deploymentId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
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
     * Delete a site deployment by its unique ID.
     *
     * @throws AppwriteException
     */
    public function deleteDeployment(string $siteId, string $deploymentId): string
    {
        $apiPath = str_replace(
            ['{siteId}', '{deploymentId}'],
            [$siteId, $deploymentId],
            '/sites/{siteId}/deployments/{deploymentId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
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
     * Get a site deployment content by its unique ID. The endpoint response
     * return with a 'Content-Disposition: attachment' header that tells the
     * browser to start downloading the file to user downloads directory.
     *
     * @throws AppwriteException
     */
    public function getDeploymentDownload(string $siteId, string $deploymentId, ?DeploymentDownloadType $type = null, ?string $token = null): string
    {
        $apiPath = str_replace(
            ['{siteId}', '{deploymentId}'],
            [$siteId, $deploymentId],
            '/sites/{siteId}/deployments/{deploymentId}/download'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
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
     * Cancel an ongoing site deployment build. If the build is already in
     * progress, it will be stopped and marked as canceled. If the build hasn't
     * started yet, it will be marked as canceled without executing. You cannot
     * cancel builds that have already completed (status 'ready') or failed. The
     * response includes the final build status and details.
     *
     * @throws AppwriteException
     */
    public function updateDeploymentStatus(string $siteId, string $deploymentId): \Appwrite\Models\Deployment
    {
        $apiPath = str_replace(
            ['{siteId}', '{deploymentId}'],
            [$siteId, $deploymentId],
            '/sites/{siteId}/deployments/{deploymentId}/status'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
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
     * Get a list of all site logs. You can use the query params to filter your
     * results.
     *
     * @throws AppwriteException
     */
    public function listLogs(string $siteId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\ExecutionList
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/sites/{siteId}/logs'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;

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
     * Get a site request log by its unique ID.
     *
     * @throws AppwriteException
     */
    public function getLog(string $siteId, string $logId): \Appwrite\Models\Execution
    {
        $apiPath = str_replace(
            ['{siteId}', '{logId}'],
            [$siteId, $logId],
            '/sites/{siteId}/logs/{logId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['logId'] = $logId;

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
     * Delete a site log by its unique ID.
     *
     * @throws AppwriteException
     */
    public function deleteLog(string $siteId, string $logId): string
    {
        $apiPath = str_replace(
            ['{siteId}', '{logId}'],
            [$siteId, $logId],
            '/sites/{siteId}/logs/{logId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['logId'] = $logId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all variables of a specific site.
     *
     * @throws AppwriteException
     */
    public function listVariables(string $siteId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\VariableList
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/sites/{siteId}/variables'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;

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
     * Create a new site variable. These variables can be accessed during build
     * and runtime (server-side rendering) as environment variables.
     *
     * @throws AppwriteException
     */
    public function createVariable(string $siteId, string $variableId, string $key, string $value, ?bool $secret = null): \Appwrite\Models\Variable
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/sites/{siteId}/variables'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
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
    public function getVariable(string $siteId, string $variableId): \Appwrite\Models\Variable
    {
        $apiPath = str_replace(
            ['{siteId}', '{variableId}'],
            [$siteId, $variableId],
            '/sites/{siteId}/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
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
    public function updateVariable(string $siteId, string $variableId, ?string $key = null, ?string $value = null, ?bool $secret = null): \Appwrite\Models\Variable
    {
        $apiPath = str_replace(
            ['{siteId}', '{variableId}'],
            [$siteId, $variableId],
            '/sites/{siteId}/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
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
    public function deleteVariable(string $siteId, string $variableId): string
    {
        $apiPath = str_replace(
            ['{siteId}', '{variableId}'],
            [$siteId, $variableId],
            '/sites/{siteId}/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
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
