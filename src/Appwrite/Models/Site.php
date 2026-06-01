<?php

namespace Appwrite\Models;

/**
 * Site
 */
readonly class Site
{
    use ArraySerializable;

    /**
     * Site constructor.
     *
     * @param string $id site id.
     * @param string $createdAt site creation date in iso 8601 format.
     * @param string $updatedAt site update date in iso 8601 format.
     * @param string $name site name.
     * @param bool $enabled site enabled.
     * @param bool $live is the site deployed with the latest configuration? this is set to false if you've changed an environment variables, entrypoint, commands, or other settings that needs redeploy to be applied. when the value is false, redeploy the site to update it with the latest configuration.
     * @param bool $logging when disabled, request logs will exclude logs and errors, and site responses will be slightly faster.
     * @param string $framework site framework.
     * @param int $deploymentRetention how many days to keep the non-active deployments before they will be automatically deleted.
     * @param string $deploymentId site's active deployment id.
     * @param string $deploymentCreatedAt active deployment creation date in iso 8601 format.
     * @param string $deploymentScreenshotLight screenshot of active deployment with light theme preference file id.
     * @param string $deploymentScreenshotDark screenshot of active deployment with dark theme preference file id.
     * @param string $latestDeploymentId site's latest deployment id.
     * @param string $latestDeploymentCreatedAt latest deployment creation date in iso 8601 format.
     * @param string $latestDeploymentStatus status of latest deployment. possible values are "waiting", "processing", "building", "ready", and "failed".
     * @param list<Variable> $vars site variables.
     * @param int $timeout site request timeout in seconds.
     * @param string $installCommand the install command used to install the site dependencies.
     * @param string $buildCommand the build command used to build the site.
     * @param string $startCommand custom command to use when starting site runtime.
     * @param string $outputDirectory the directory where the site build output is located.
     * @param string $installationId site vcs (version control system) installation id.
     * @param string $providerRepositoryId vcs (version control system) repository id
     * @param string $providerBranch vcs (version control system) branch name
     * @param string $providerRootDirectory path to site in vcs (version control system) repository
     * @param bool $providerSilentMode is vcs (version control system) connection is in silent mode? when in silence mode, no comments will be posted on the repository pull or merge requests
     * @param array $providerBranches list of branch name patterns that trigger automatic deployments. supports glob wildcards. empty list deploys on all branches.
     * @param array $providerPaths list of file path patterns that trigger automatic deployments. supports glob wildcards. empty list deploys on all file changes.
     * @param string $buildSpecification machine specification for deployment builds.
     * @param string $runtimeSpecification machine specification for ssr executions.
     * @param string $buildRuntime site build runtime.
     * @param string $adapter site framework adapter.
     * @param string $fallbackFile name of fallback file to use instead of 404 page. if null, appwrite 404 page will be displayed.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public bool $enabled,
        public bool $live,
        public bool $logging,
        public string $framework,
        public int $deploymentRetention,
        public string $deploymentId,
        public string $deploymentCreatedAt,
        public string $deploymentScreenshotLight,
        public string $deploymentScreenshotDark,
        public string $latestDeploymentId,
        public string $latestDeploymentCreatedAt,
        public string $latestDeploymentStatus,
        public array $vars,
        public int $timeout,
        public string $installCommand,
        public string $buildCommand,
        public string $startCommand,
        public string $outputDirectory,
        public string $installationId,
        public string $providerRepositoryId,
        public string $providerBranch,
        public string $providerRootDirectory,
        public bool $providerSilentMode,
        public array $providerBranches,
        public array $providerPaths,
        public string $buildSpecification,
        public string $runtimeSpecification,
        public string $buildRuntime,
        public string $adapter,
        public string $fallbackFile
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }
        if (!array_key_exists('live', $data)) {
            throw new \InvalidArgumentException('Missing required field "live" for ' . static::class . '.');
        }
        if (!array_key_exists('logging', $data)) {
            throw new \InvalidArgumentException('Missing required field "logging" for ' . static::class . '.');
        }
        if (!array_key_exists('framework', $data)) {
            throw new \InvalidArgumentException('Missing required field "framework" for ' . static::class . '.');
        }
        if (!array_key_exists('deploymentRetention', $data)) {
            throw new \InvalidArgumentException('Missing required field "deploymentRetention" for ' . static::class . '.');
        }
        if (!array_key_exists('deploymentId', $data)) {
            throw new \InvalidArgumentException('Missing required field "deploymentId" for ' . static::class . '.');
        }
        if (!array_key_exists('deploymentCreatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "deploymentCreatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('deploymentScreenshotLight', $data)) {
            throw new \InvalidArgumentException('Missing required field "deploymentScreenshotLight" for ' . static::class . '.');
        }
        if (!array_key_exists('deploymentScreenshotDark', $data)) {
            throw new \InvalidArgumentException('Missing required field "deploymentScreenshotDark" for ' . static::class . '.');
        }
        if (!array_key_exists('latestDeploymentId', $data)) {
            throw new \InvalidArgumentException('Missing required field "latestDeploymentId" for ' . static::class . '.');
        }
        if (!array_key_exists('latestDeploymentCreatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "latestDeploymentCreatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('latestDeploymentStatus', $data)) {
            throw new \InvalidArgumentException('Missing required field "latestDeploymentStatus" for ' . static::class . '.');
        }
        if (!array_key_exists('vars', $data)) {
            throw new \InvalidArgumentException('Missing required field "vars" for ' . static::class . '.');
        }
        if (!array_key_exists('timeout', $data)) {
            throw new \InvalidArgumentException('Missing required field "timeout" for ' . static::class . '.');
        }
        if (!array_key_exists('installCommand', $data)) {
            throw new \InvalidArgumentException('Missing required field "installCommand" for ' . static::class . '.');
        }
        if (!array_key_exists('buildCommand', $data)) {
            throw new \InvalidArgumentException('Missing required field "buildCommand" for ' . static::class . '.');
        }
        if (!array_key_exists('startCommand', $data)) {
            throw new \InvalidArgumentException('Missing required field "startCommand" for ' . static::class . '.');
        }
        if (!array_key_exists('outputDirectory', $data)) {
            throw new \InvalidArgumentException('Missing required field "outputDirectory" for ' . static::class . '.');
        }
        if (!array_key_exists('installationId', $data)) {
            throw new \InvalidArgumentException('Missing required field "installationId" for ' . static::class . '.');
        }
        if (!array_key_exists('providerRepositoryId', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerRepositoryId" for ' . static::class . '.');
        }
        if (!array_key_exists('providerBranch', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerBranch" for ' . static::class . '.');
        }
        if (!array_key_exists('providerRootDirectory', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerRootDirectory" for ' . static::class . '.');
        }
        if (!array_key_exists('providerSilentMode', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerSilentMode" for ' . static::class . '.');
        }
        if (!array_key_exists('providerBranches', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerBranches" for ' . static::class . '.');
        }
        if (!array_key_exists('providerPaths', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerPaths" for ' . static::class . '.');
        }
        if (!array_key_exists('buildSpecification', $data)) {
            throw new \InvalidArgumentException('Missing required field "buildSpecification" for ' . static::class . '.');
        }
        if (!array_key_exists('runtimeSpecification', $data)) {
            throw new \InvalidArgumentException('Missing required field "runtimeSpecification" for ' . static::class . '.');
        }
        if (!array_key_exists('buildRuntime', $data)) {
            throw new \InvalidArgumentException('Missing required field "buildRuntime" for ' . static::class . '.');
        }
        if (!array_key_exists('adapter', $data)) {
            throw new \InvalidArgumentException('Missing required field "adapter" for ' . static::class . '.');
        }
        if (!array_key_exists('fallbackFile', $data)) {
            throw new \InvalidArgumentException('Missing required field "fallbackFile" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            enabled: $data['enabled'],
            live: $data['live'],
            logging: $data['logging'],
            framework: $data['framework'],
            deploymentRetention: $data['deploymentRetention'],
            deploymentId: $data['deploymentId'],
            deploymentCreatedAt: $data['deploymentCreatedAt'],
            deploymentScreenshotLight: $data['deploymentScreenshotLight'],
            deploymentScreenshotDark: $data['deploymentScreenshotDark'],
            latestDeploymentId: $data['latestDeploymentId'],
            latestDeploymentCreatedAt: $data['latestDeploymentCreatedAt'],
            latestDeploymentStatus: $data['latestDeploymentStatus'],
            vars: is_array($data['vars'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Variable::class, $item),
                    $data['vars']
                )
                : $data['vars'],
            timeout: $data['timeout'],
            installCommand: $data['installCommand'],
            buildCommand: $data['buildCommand'],
            startCommand: $data['startCommand'],
            outputDirectory: $data['outputDirectory'],
            installationId: $data['installationId'],
            providerRepositoryId: $data['providerRepositoryId'],
            providerBranch: $data['providerBranch'],
            providerRootDirectory: $data['providerRootDirectory'],
            providerSilentMode: $data['providerSilentMode'],
            providerBranches: $data['providerBranches'],
            providerPaths: $data['providerPaths'],
            buildSpecification: $data['buildSpecification'],
            runtimeSpecification: $data['runtimeSpecification'],
            buildRuntime: $data['buildRuntime'],
            adapter: $data['adapter'],
            fallbackFile: $data['fallbackFile']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'name' => static::serializeValue($this->name),
            'enabled' => static::serializeValue($this->enabled),
            'live' => static::serializeValue($this->live),
            'logging' => static::serializeValue($this->logging),
            'framework' => static::serializeValue($this->framework),
            'deploymentRetention' => static::serializeValue($this->deploymentRetention),
            'deploymentId' => static::serializeValue($this->deploymentId),
            'deploymentCreatedAt' => static::serializeValue($this->deploymentCreatedAt),
            'deploymentScreenshotLight' => static::serializeValue($this->deploymentScreenshotLight),
            'deploymentScreenshotDark' => static::serializeValue($this->deploymentScreenshotDark),
            'latestDeploymentId' => static::serializeValue($this->latestDeploymentId),
            'latestDeploymentCreatedAt' => static::serializeValue($this->latestDeploymentCreatedAt),
            'latestDeploymentStatus' => static::serializeValue($this->latestDeploymentStatus),
            'vars' => static::serializeValue($this->vars),
            'timeout' => static::serializeValue($this->timeout),
            'installCommand' => static::serializeValue($this->installCommand),
            'buildCommand' => static::serializeValue($this->buildCommand),
            'startCommand' => static::serializeValue($this->startCommand),
            'outputDirectory' => static::serializeValue($this->outputDirectory),
            'installationId' => static::serializeValue($this->installationId),
            'providerRepositoryId' => static::serializeValue($this->providerRepositoryId),
            'providerBranch' => static::serializeValue($this->providerBranch),
            'providerRootDirectory' => static::serializeValue($this->providerRootDirectory),
            'providerSilentMode' => static::serializeValue($this->providerSilentMode),
            'providerBranches' => static::serializeValue($this->providerBranches),
            'providerPaths' => static::serializeValue($this->providerPaths),
            'buildSpecification' => static::serializeValue($this->buildSpecification),
            'runtimeSpecification' => static::serializeValue($this->runtimeSpecification),
            'buildRuntime' => static::serializeValue($this->buildRuntime),
            'adapter' => static::serializeValue($this->adapter),
            'fallbackFile' => static::serializeValue($this->fallbackFile)
        ];

        return $result;
    }
}
