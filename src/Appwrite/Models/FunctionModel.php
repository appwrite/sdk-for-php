<?php

namespace Appwrite\Models;

/**
 * Function
 */
readonly class FunctionModel
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
     * Function constructor.
     *
     * @param string $id function id.
     * @param string $createdAt function creation date in iso 8601 format.
     * @param string $updatedAt function update date in iso 8601 format.
     * @param array $execute execution permissions.
     * @param string $name function name.
     * @param bool $enabled function enabled.
     * @param bool $live is the function deployed with the latest configuration? this is set to false if you&#039;ve changed an environment variables, entrypoint, commands, or other settings that needs redeploy to be applied. when the value is false, redeploy the function to update it with the latest configuration.
     * @param bool $logging when disabled, executions will exclude logs and errors, and will be slightly faster.
     * @param string $runtime function execution and build runtime.
     * @param int $deploymentRetention how many days to keep the non-active deployments before they will be automatically deleted.
     * @param string $deploymentId function&#039;s active deployment id.
     * @param string $deploymentCreatedAt active deployment creation date in iso 8601 format.
     * @param string $latestDeploymentId function&#039;s latest deployment id.
     * @param string $latestDeploymentCreatedAt latest deployment creation date in iso 8601 format.
     * @param string $latestDeploymentStatus status of latest deployment. possible values are &quot;waiting&quot;, &quot;processing&quot;, &quot;building&quot;, &quot;ready&quot;, and &quot;failed&quot;.
     * @param array $scopes allowed permission scopes.
     * @param list<Variable> $vars function variables.
     * @param array $events function trigger events.
     * @param string $schedule function execution schedule in cron format.
     * @param int $timeout function execution timeout in seconds.
     * @param string $entrypoint the entrypoint file used to execute the deployment.
     * @param string $commands the build command used to build the deployment.
     * @param string $version version of open runtimes used for the function.
     * @param string $installationId function vcs (version control system) installation id.
     * @param string $providerRepositoryId vcs (version control system) repository id
     * @param string $providerBranch vcs (version control system) branch name
     * @param string $providerRootDirectory path to function in vcs (version control system) repository
     * @param bool $providerSilentMode is vcs (version control system) connection is in silent mode? when in silence mode, no comments will be posted on the repository pull or merge requests
     * @param string $buildSpecification machine specification for deployment builds.
     * @param string $runtimeSpecification machine specification for executions.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public array $execute,
        public string $name,
        public bool $enabled,
        public bool $live,
        public bool $logging,
        public string $runtime,
        public int $deploymentRetention,
        public string $deploymentId,
        public string $deploymentCreatedAt,
        public string $latestDeploymentId,
        public string $latestDeploymentCreatedAt,
        public string $latestDeploymentStatus,
        public array $scopes,
        public array $vars,
        public array $events,
        public string $schedule,
        public int $timeout,
        public string $entrypoint,
        public string $commands,
        public string $version,
        public string $installationId,
        public string $providerRepositoryId,
        public string $providerBranch,
        public string $providerRootDirectory,
        public bool $providerSilentMode,
        public string $buildSpecification,
        public string $runtimeSpecification
    ) {
    }
}
