<?php

namespace Appwrite\Models;

/**
 * Site
 */
readonly class Site
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt'
    ];

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'vars' => Variable::class
    ];

    /**
     * Site constructor.
     *
     * @param string $id site id.
     * @param string $createdAt site creation date in iso 8601 format.
     * @param string $updatedAt site update date in iso 8601 format.
     * @param string $name site name.
     * @param bool $enabled site enabled.
     * @param bool $live is the site deployed with the latest configuration? this is set to false if you&#039;ve changed an environment variables, entrypoint, commands, or other settings that needs redeploy to be applied. when the value is false, redeploy the site to update it with the latest configuration.
     * @param bool $logging when disabled, request logs will exclude logs and errors, and site responses will be slightly faster.
     * @param string $framework site framework.
     * @param int $deploymentRetention how many days to keep the non-active deployments before they will be automatically deleted.
     * @param string $deploymentId site&#039;s active deployment id.
     * @param string $deploymentCreatedAt active deployment creation date in iso 8601 format.
     * @param string $deploymentScreenshotLight screenshot of active deployment with light theme preference file id.
     * @param string $deploymentScreenshotDark screenshot of active deployment with dark theme preference file id.
     * @param string $latestDeploymentId site&#039;s latest deployment id.
     * @param string $latestDeploymentCreatedAt latest deployment creation date in iso 8601 format.
     * @param string $latestDeploymentStatus status of latest deployment. possible values are &quot;waiting&quot;, &quot;processing&quot;, &quot;building&quot;, &quot;ready&quot;, and &quot;failed&quot;.
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
        public string $buildSpecification,
        public string $runtimeSpecification,
        public string $buildRuntime,
        public string $adapter,
        public string $fallbackFile
    ) {
    }
}
