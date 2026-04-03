<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\Framework;
use Appwrite\Enums\BuildRuntime;
use Appwrite\Enums\Adapter;
use Appwrite\Enums\TemplateReferenceType;
use Appwrite\Enums\VCSReferenceType;
use Appwrite\Enums\DeploymentDownloadType;

class Sites extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Get a list of all the project's sites. You can use the query params to
     * filter your results.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\SiteList
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

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\SiteList::class]
        );

    }

    /**
     * Create a new site.
     *
     * @param string $siteId
     * @param string $name
     * @param Framework $framework
     * @param BuildRuntime $buildRuntime
     * @param ?bool $enabled
     * @param ?bool $logging
     * @param ?int $timeout
     * @param ?string $installCommand
     * @param ?string $buildCommand
     * @param ?string $startCommand
     * @param ?string $outputDirectory
     * @param ?Adapter $adapter
     * @param ?string $installationId
     * @param ?string $fallbackFile
     * @param ?string $providerRepositoryId
     * @param ?string $providerBranch
     * @param ?bool $providerSilentMode
     * @param ?string $providerRootDirectory
     * @param ?string $buildSpecification
     * @param ?string $runtimeSpecification
     * @param ?int $deploymentRetention
     * @throws AppwriteException
     * @return \Appwrite\Models\Site
     */
    public function create(string $siteId, string $name, Framework $framework, BuildRuntime $buildRuntime, ?bool $enabled = null, ?bool $logging = null, ?int $timeout = null, ?string $installCommand = null, ?string $buildCommand = null, ?string $startCommand = null, ?string $outputDirectory = null, ?Adapter $adapter = null, ?string $installationId = null, ?string $fallbackFile = null, ?string $providerRepositoryId = null, ?string $providerBranch = null, ?bool $providerSilentMode = null, ?string $providerRootDirectory = null, ?string $buildSpecification = null, ?string $runtimeSpecification = null, ?int $deploymentRetention = null): \Appwrite\Models\Site
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
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Site::class]
        );

    }

    /**
     * Get a list of all frameworks that are currently available on the server
     * instance.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\FrameworkList
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

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\FrameworkList::class]
        );

    }

    /**
     * List allowed site specifications for this instance.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\SpecificationList
     */
    public function listSpecifications(): \Appwrite\Models\SpecificationList
    {
        $apiPath = str_replace(
            [],
            [],
            '/sites/specifications'
        );

        $apiParams = [];

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\SpecificationList::class]
        );

    }

    /**
     * Get a site by its unique ID.
     *
     * @param string $siteId
     * @throws AppwriteException
     * @return \Appwrite\Models\Site
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

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Site::class]
        );

    }

    /**
     * Update site by its unique ID.
     *
     * @param string $siteId
     * @param string $name
     * @param Framework $framework
     * @param ?bool $enabled
     * @param ?bool $logging
     * @param ?int $timeout
     * @param ?string $installCommand
     * @param ?string $buildCommand
     * @param ?string $startCommand
     * @param ?string $outputDirectory
     * @param ?BuildRuntime $buildRuntime
     * @param ?Adapter $adapter
     * @param ?string $fallbackFile
     * @param ?string $installationId
     * @param ?string $providerRepositoryId
     * @param ?string $providerBranch
     * @param ?bool $providerSilentMode
     * @param ?string $providerRootDirectory
     * @param ?string $buildSpecification
     * @param ?string $runtimeSpecification
     * @param ?int $deploymentRetention
     * @throws AppwriteException
     * @return \Appwrite\Models\Site
     */
    public function update(string $siteId, string $name, Framework $framework, ?bool $enabled = null, ?bool $logging = null, ?int $timeout = null, ?string $installCommand = null, ?string $buildCommand = null, ?string $startCommand = null, ?string $outputDirectory = null, ?BuildRuntime $buildRuntime = null, ?Adapter $adapter = null, ?string $fallbackFile = null, ?string $installationId = null, ?string $providerRepositoryId = null, ?string $providerBranch = null, ?bool $providerSilentMode = null, ?string $providerRootDirectory = null, ?string $buildSpecification = null, ?string $runtimeSpecification = null, ?int $deploymentRetention = null): \Appwrite\Models\Site
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
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Site::class]
        );

    }

    /**
     * Delete a site by its unique ID.
     *
     * @param string $siteId
     * @throws AppwriteException
     * @return string
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
     * Update the site active deployment. Use this endpoint to switch the code
     * deployment that should be used when visitor opens your site.
     *
     * @param string $siteId
     * @param string $deploymentId
     * @throws AppwriteException
     * @return \Appwrite\Models\Site
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
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Site::class]
        );

    }

    /**
     * Get a list of all the site's code deployments. You can use the query params
     * to filter your results.
     *
     * @param string $siteId
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\DeploymentList
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

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\DeploymentList::class]
        );

    }

    /**
     * Create a new site code deployment. Use this endpoint to upload a new
     * version of your site code. To activate your newly uploaded code, you'll
     * need to update the site's deployment to use your new deployment ID.
     *
     * @param string $siteId
     * @param InputFile $code
     * @param ?string $installCommand
     * @param ?string $buildCommand
     * @param ?string $outputDirectory
     * @param ?bool $activate
     * @throws AppwriteException
     * @return \Appwrite\Models\Deployment
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
                $response = $this->client->call(Client::METHOD_POST, $apiPath, [
                            'content-type' => 'multipart/form-data',
                        ], $apiParams);
                return $this->parseResponse(
                    $response,
                    [\Appwrite\Models\Deployment::class]
                );
            }
        } else {
            $size = filesize($code->getPath());
            $mimeType = $code->getMimeType() ?? mime_content_type($code->getPath());
            $postedName = $code->getFilename() ?? basename($code->getPath());
            //send single file if size is less than or equal to 5MB
            if ($size <= Client::CHUNK_SIZE) {
                $apiParams['code'] = new \CURLFile($code->getPath(), $mimeType, $postedName);
                $response = $this->client->call(Client::METHOD_POST, $apiPath, [
                            'content-type' => 'multipart/form-data',
                        ], $apiParams);
                return $this->parseResponse(
                    $response,
                    [\Appwrite\Models\Deployment::class]
                );
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
                $chunk = substr($code->getData(), $start, Client::CHUNK_SIZE);
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
        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Deployment::class]
        );

    }

    /**
     * Create a new build for an existing site deployment. This endpoint allows
     * you to rebuild a deployment with the updated site configuration, including
     * its commands and output directory if they have been modified. The build
     * process will be queued and executed asynchronously. The original
     * deployment's code will be preserved and used for the new build.
     *
     * @param string $siteId
     * @param string $deploymentId
     * @throws AppwriteException
     * @return \Appwrite\Models\Deployment
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
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Deployment::class]
        );

    }

    /**
     * Create a deployment based on a template.
     * 
     * Use this endpoint with combination of
     * [listTemplates](https://appwrite.io/docs/products/sites/templates) to find
     * the template details.
     *
     * @param string $siteId
     * @param string $repository
     * @param string $owner
     * @param string $rootDirectory
     * @param TemplateReferenceType $type
     * @param string $reference
     * @param ?bool $activate
     * @throws AppwriteException
     * @return \Appwrite\Models\Deployment
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
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Deployment::class]
        );

    }

    /**
     * Create a deployment when a site is connected to VCS.
     * 
     * This endpoint lets you create deployment from a branch, commit, or a tag.
     *
     * @param string $siteId
     * @param VCSReferenceType $type
     * @param string $reference
     * @param ?bool $activate
     * @throws AppwriteException
     * @return \Appwrite\Models\Deployment
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
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Deployment::class]
        );

    }

    /**
     * Get a site deployment by its unique ID.
     *
     * @param string $siteId
     * @param string $deploymentId
     * @throws AppwriteException
     * @return \Appwrite\Models\Deployment
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

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Deployment::class]
        );

    }

    /**
     * Delete a site deployment by its unique ID.
     *
     * @param string $siteId
     * @param string $deploymentId
     * @throws AppwriteException
     * @return string
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
     * Get a site deployment content by its unique ID. The endpoint response
     * return with a 'Content-Disposition: attachment' header that tells the
     * browser to start downloading the file to user downloads directory.
     *
     * @param string $siteId
     * @param string $deploymentId
     * @param ?DeploymentDownloadType $type
     * @throws AppwriteException
     * @return string
     */
    public function getDeploymentDownload(string $siteId, string $deploymentId, ?DeploymentDownloadType $type = null): string
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
     * Cancel an ongoing site deployment build. If the build is already in
     * progress, it will be stopped and marked as canceled. If the build hasn't
     * started yet, it will be marked as canceled without executing. You cannot
     * cancel builds that have already completed (status 'ready') or failed. The
     * response includes the final build status and details.
     *
     * @param string $siteId
     * @param string $deploymentId
     * @throws AppwriteException
     * @return \Appwrite\Models\Deployment
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
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Deployment::class]
        );

    }

    /**
     * Get a list of all site logs. You can use the query params to filter your
     * results.
     *
     * @param string $siteId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\ExecutionList
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

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\ExecutionList::class]
        );

    }

    /**
     * Get a site request log by its unique ID.
     *
     * @param string $siteId
     * @param string $logId
     * @throws AppwriteException
     * @return \Appwrite\Models\Execution
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

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Execution::class]
        );

    }

    /**
     * Delete a site log by its unique ID.
     *
     * @param string $siteId
     * @param string $logId
     * @throws AppwriteException
     * @return string
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
     * Get a list of all variables of a specific site.
     *
     * @param string $siteId
     * @throws AppwriteException
     * @return \Appwrite\Models\VariableList
     */
    public function listVariables(string $siteId): \Appwrite\Models\VariableList
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/sites/{siteId}/variables'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\VariableList::class]
        );

    }

    /**
     * Create a new site variable. These variables can be accessed during build
     * and runtime (server-side rendering) as environment variables.
     *
     * @param string $siteId
     * @param string $key
     * @param string $value
     * @param ?bool $secret
     * @throws AppwriteException
     * @return \Appwrite\Models\Variable
     */
    public function createVariable(string $siteId, string $key, string $value, ?bool $secret = null): \Appwrite\Models\Variable
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/sites/{siteId}/variables'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['key'] = $key;
        $apiParams['value'] = $value;

        if (!is_null($secret)) {
            $apiParams['secret'] = $secret;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Variable::class]
        );

    }

    /**
     * Get a variable by its unique ID.
     *
     * @param string $siteId
     * @param string $variableId
     * @throws AppwriteException
     * @return \Appwrite\Models\Variable
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

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Variable::class]
        );

    }

    /**
     * Update variable by its unique ID.
     *
     * @param string $siteId
     * @param string $variableId
     * @param string $key
     * @param ?string $value
     * @param ?bool $secret
     * @throws AppwriteException
     * @return \Appwrite\Models\Variable
     */
    public function updateVariable(string $siteId, string $variableId, string $key, ?string $value = null, ?bool $secret = null): \Appwrite\Models\Variable
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
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Variable::class]
        );

    }

    /**
     * Delete a variable by its unique ID.
     *
     * @param string $siteId
     * @param string $variableId
     * @throws AppwriteException
     * @return string
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
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }
}
